<?php
/**
 * Created by PhpStorm.
 * User: ggalia84
 * Date: 25/01/16
 * Time: 16:19
 */

namespace App\Repositories;

class UserRepository extends Repository
{


    function model()
    {
        return \App\User::class;
    }
}