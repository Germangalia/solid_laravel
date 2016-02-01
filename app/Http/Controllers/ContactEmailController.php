<?php
/**
 * Created by PhpStorm.
 * User: ggalia84
 * Date: 25/01/16
 * Time: 18:22
 */

namespace App\Http\Controllers;


use App\Http\Flash;
use App\Jobs\SendSubscriptionEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ContactEmailController extends Controller

{

    public function send(Request $request){

//        dd(Input::all());

        //TODO send email


        //FLASH NOTIFICATION
        $request->session()->flash(
          'flash_message',
            'Email sent!'
        );
//        Flash::message('Ok!');

//        $flash = app('\App\Http\Flash');
//        $flash->message("send message!");



        //REDIRECT WELLCOME

        return redirect()->route('welcome');
    }

    public function sendEmail()
    {
        $this->dispatch(new SendSubscriptionEmail());
    }

}