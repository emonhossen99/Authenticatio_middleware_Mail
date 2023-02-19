<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RegisterMail extends Mailable
{
    use Queueable, SerializesModels;

    public $email,$details,$date;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email,$details,$date)
    {
        $this->email = $email;
        $this->details = $details;
        $this->date = $date;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $this->subject('Welcome Mail Form AAE it Institute')
              ->view('Mail.Mail');
    }
}
