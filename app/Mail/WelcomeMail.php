<?php

namespace App\Mail;

use App\Models\User;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;


class WelcomeMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * User instance.
     *
     * @var \App\Models\User
     */
    protected $user;

    /**
     * Name variable
     *
     * @var String
     */
    public $name;

    /**
     * Email variable
     *
     * @var String
     */
    public $email;


    /**
     * Create a new message instance.
     * 
     * @param  \App\Models\User  $user
     * @return void
     */
    public function __construct(User $user)
    {
        $this->name = $user->name;
        $this->email = $user->email;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from("rs12732@gmail.com", "Rohit")
            ->attach(public_path('Documents/sample_2022.pdf'))
            // ->cc()
            ->markdown('emails.welcome');
    }
}
