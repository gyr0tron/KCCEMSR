<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Auth;
use Mail;
use App\ResponseBuilder;
use App\User;
use App\Admission;
use App\EmailVerification;
use App\Mail\AdmissionRegisterMail;
use App\Mail\AdmissionWelcomeMail;
use App\Mail\AdmissionSubmit;


use App\Http\Requests\AdmissionRegisterRequest;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\StudentApplicationRequest;

class AdmissionsController extends Controller
{
  use AuthenticatesUsers;
  protected $redirectTo = '/';
  public function __construct()
  {
    $this->middleware('guest')->except(['postApplication', 'printApplication']);
    $this->middleware('admission')->only(['postApplication', 'printApplication']);
  }

  public function register(AdmissionRegisterRequest $request)
  {
    $user = new User();
    $user->email = $request->input('reg_email');
    $user->fullname = $request->input('reg_name');
    $user->username = $request->input('reg_email');
    $user->password = bcrypt($request->input('reg_password'));
    $user->type = '1';
    $user->save();
    $ev = EmailVerification::newEmail($user, $request->input('reg_email'));
    Mail::to($request->input('reg_email'))->send(new AdmissionRegisterMail($user, $ev));
    return ResponseBuilder::send(true, "We have send a email containing the steps to verify your email address.", "/");
  }
  public function verify(Request $request) {
    $token = $request->input('token');
    $user = EmailVerification::verify($token);
    if($user) {
      Mail::to($user->email)->send(new AdmissionWelcomeMail($user));
      return redirect()->route('admissions-apply');
    }
    return redirect('/');
  }
  /*
  Login Functions
  */
  public function username()
  {
    return 'email';
  }
  protected function credentials(Request $request)
  {
    return [
      'email'    => $request->input('email'),
      'password' => $request->input('password'),
      'verified' => '1',
      'type' => '1',
    ];
  }
  public function postApplication(Request $request)
  {
    $data = $request->all();
    unset($data['_token']);
    $admission = Admission::where('userid', Auth::user()->id)->first();
    if(!$admission) {
      $admission = new Admission();
    }
    $admission->userid = Auth::user()->id;
    $admission->data = json_encode($data);
    if($request->image) {
      $admission->deleteImage();
      $admission->uploadImage($request->file('image'));
    }
    $admission->completed = '1';
    $admission->save();

    $to_email = "admisions@kccemsr.edu.in";
    if(strlen($to_email)) {
      Mail::send('mails.admission_submit2', compact('admission'), function($message) use($to_email)  {
        $message->subject("[kccemsr.edu.in] New application received.");
        // if(strpos(env('MAIL_USERNAME'), "@"))$message->from(env('MAIL_USERNAME'), 'kccemsr.edu.in');
        $message->to($to_email);
      });
    }

    Mail::to(Auth::user()->email)->send(new AdmissionSubmit(Auth::user()));

    return view('pages.admissions.student-application');
  }
  public function printApplication()
  {
    $admission = Admission::where('userid', Auth::user()->id)->first();
    if($admission->completed != 1) abort("404");
    return view('pages.admissions.student-application-print', compact('admission'));
  }
}
