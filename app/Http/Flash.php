<?php
/**
 * Created by PhpStorm.
 * User: ggalia84
 * Date: 25/01/16
 * Time: 20:15
 */

namespace App\Http;


class Flash
{

    public function message($message)
    {
        echo 'MISSATGE';
        //session->flash('flash_message', $message);
    }
}