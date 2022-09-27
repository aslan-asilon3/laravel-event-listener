<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;
use App\Events\errorLog;

class sample extends Controller
{
    //

    public function error()
    {
        try{
            throw new Exception("error ini yaaah", 1);
            throw new Exception("Ini adalah pesan kesalahan");
        }catch(\Throwable $th){
            event(new errorLog($th->getMessage()));
        }
    }

    public function register()
    {
        
    }
}
