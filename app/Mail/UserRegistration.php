<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class UserRegistration extends Mailable
{
    use Queueable, SerializesModels;
     Public $user;
    /**
     * Create a new message instance.
     *
     * @return void
     */
     public function __construct($user)
    {
       $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $address = 'no_reply@9jamade.ng';
        $name = 'Activation code';
        $subject = 'New User Credentials';
        return $this->view('email.UserRegistration')
                ->from($address, $name)
                ->cc($address, $name)
                ->bcc($address, $name)
                ->replyTo($address, $name)
                ->subject($subject);
    }
}
