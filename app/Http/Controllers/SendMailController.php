<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Exception;
use App\Events\errorLog;
use Illuminate\Support\Facades\Log;

class SendMailController extends Controller
{

    public function index()
    {

        return view('sendmail');

    }



    // TES pke try catch
        public function send(Request $details)
    {

                try{

                alert()->success('SuccessAlert','Email Berhasil Dikirim  Yaa Aslan.');
                Log::info("Email Berhasil Dikirim  Yaa Aslan.");

            }catch(\Throwable $th){
                // event(new errorLog($th->getMessage()));
                $data = $details->all();
                Mail::to('sulaslansetiawan3@gmail.com')->send(new \App\Mail\SendEmail($details));

            }
            return view('sendmail');
    }



    // public function send(Request $details)
    // {
    //         //  throw new Exception("TES BUAT ERROR KIRIM KE LOG");

    //         $data = $details->all();
    //         Mail::to('sulaslansetiawan3@gmail.com')->send(new \App\Mail\SendEmail($details));
    //         alert()->success('SuccessAlert','Email Berhasil Dikirim  Yaa Aslan.');
    //         return view('sendmail');
    // }
}
