<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class testMail extends Mailable
{
    use Queueable, SerializesModels;


    public function __construct()
    {

    }


    public function build()
    {
        return $this
        -> from('no-reply@laravel.com')
        -> view('mail.testMail');
    }
}
