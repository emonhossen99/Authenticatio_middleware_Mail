<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected function RegisterMail($details, $email,$myDate){
        Mail::to($email)->send(new \App\Mail\RegisterMail($details, $email,$myDate));
    }
    protected function admiteMailSend($useremail){
        $admitMail = 'mdxhamedemon@gmail.com';
        Mail::to($admitMail)->send(new \App\Mail\AdmitMail($useremail));
    }
    

}
