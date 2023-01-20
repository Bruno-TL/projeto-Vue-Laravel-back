<?php

use App\Mail\RegistrationEmail;
use App\Mail\SendMail;
use App\Mail\TestEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('/teste', function(){
    return "teste com sucesso";
});

Route::post('/email',function( Request $request){
    Mail::to($request->email)->send(new RegistrationEmail);
    return response()->json('Você receberá um email');
} );
