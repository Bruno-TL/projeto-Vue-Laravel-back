<?php

use App\Mail\SendMail;
use App\Mail\TestEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('/teste', function(){
    return "teste com sucesso";
});

Route::post('/email',function(){
    $data = array(
        'msg' => 'Hello wolrd'
    );

    Mail::to('tbgt35@hotmail.com')->send(new SendMail($data));
    return back()->with('sucess', 'Obrigado deu certo');
} );
