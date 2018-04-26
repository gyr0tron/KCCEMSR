<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class GrievanceMail extends Mailable
{
  use Queueable, SerializesModels;

  public $subject = "Grievance Redressal";
  public $name;
  public $email;
  public $phone;
  public $topic;
  public $data;

  /**
  * Create a new message instance.
  *
  * @return void
  */
  public function __construct($name, $email, $phone, $topic, $data)
  {
    $this->name = $name;
    $this->email = $email;
    $this->phone = $phone;
    $this->topic = $topic;
    $this->data = $data;
  }

  /**
  * Build the message.
  *
  * @return $this
  */
  public function build()
  {
    return $this->view('mails.grievance');
  }
}
