<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

use App\User;
use App\EmailVerification;

class AdmissionRegisterMail extends Mailable
{
    use Queueable, SerializesModels;

    public $subject = "Email Verification";
    public $user;
    public $ev;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user, EmailVerification $ev)
    {
      $this->user = $user;
      $this->ev = $ev;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mails.admission_register');
    }
}
