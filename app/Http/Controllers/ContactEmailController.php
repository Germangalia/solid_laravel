<?php
/**
 * Created by PhpStorm.
 * User: ggalia84
 * Date: 25/01/16
 * Time: 18:22
 */

namespace App\Http\Controllers;


use App\Http\Flash;
use Illuminate\Support\Facades\Input;

class ContactEmailController extends Controller

{

    public function send(Request $request){

//        dd(Input::all());

        //TODO send email

        //FLASH NOTIFICATION
//        $request->session()->flash(
//          'notification',
//            'All ok!'
//        );
//        Flash::message('Ok!');

        $flash = app('\App\Http\Flash');
        $flash->message("ok");

        //REDIRECT WELLCOME

        return redirect()->route('welcome');
    }

}