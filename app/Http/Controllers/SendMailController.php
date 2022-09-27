<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Exception;
use App\Events\errorLog;

class SendMailController extends Controller
{

    public function index()
    {

        return view('sendmail');
    
    }

    public function send(Request $details)
    {
             throw new Exception("TES BUAT ERROR KIRIM KE LOG");

            $data = $details->all();
            Mail::to('sulaslansetiawan3@gmail.com')->send(new \App\Mail\SendEmail($details));
            alert()->success('SuccessAlert','Email Berhasil Dikirim  Yaa Aslan.');
            return view('sendmail');
    }
}
