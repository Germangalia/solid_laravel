<?php

namespace App\Http\Controllers;

use App\Http\Flash;
use App\Jobs\SendSubscriptionEmail;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class ContactEmailController extends Controller
{
    protected $user;

    /**
     * ContactEmailController constructor.
     * @param $user
     */
    public function __construct($user)
    {
        $this->user = $user;
    }


    public function send(Request $request)
    {
        //dd(Input::all());

        //TODO: SEND EMAIL
        //this->email->send();
        $this->sendEmail();

        //FLASH NOTIFICATION
        $request->session()->flash(
            'flash_message',
            'Sent email correctly!'
        );

//        $flash = app('\App\Http\Flash');
//
//        $flash->message("Ok!");

        //REDIRECT WELCOME
        return redirect()->route('welcome');
    }

    public function sendEmail()
    {
        $this->user->email = "adamalvarado@iesebre.com";
        $this->dispatch(new SendSubscriptionEmail($this->user));
        echo 'Done!';
    }
}
