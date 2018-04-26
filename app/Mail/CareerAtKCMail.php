<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class CareerAtKCMail extends Mailable
{
  use Queueable, SerializesModels;

  public $subject = "Career At KC";
  public $name;
  public $email;
  public $phone;
  public $resume;
  public $title;

  /**
  * Create a new message instance.
  *
  * @return void
  */
  public function __construct($name, $email, $phone, $resume, $title)
  {
    $this->name = $name;
    $this->email = $email;
    $this->phone = $phone;
    $this->resume = $resume;
    $this->title = $title;
  }

  /**
  * Build the message.
  *
  * @return $this
  */
  public function build()
  {
    return $this->view('mails.career_at_kc')->attach($this->resume, [
      'as' => $this->name.'.pdf',
      'mime' => 'application/pdf',
    ]);
  }
}
