<?php
/**
 * Created by PhpStorm.
 * User: ggalia84
 * Date: 25/01/16
 * Time: 19:12
 */

namespace App\Http\Controllers;


class WelcomeController extends Controller
{
    public function index(){
        return view('welcome');
    }
}