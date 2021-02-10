<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\testMail;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        $mail = Auth::user() -> email;

        Mail::to($mail)
        -> send(new testMail('Questo è un testo di prova'));
        return view('home');
    }
}
