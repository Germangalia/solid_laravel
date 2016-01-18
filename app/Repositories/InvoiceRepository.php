<?php

namespace App\Repositories;
use App\Invoices;

/**
 * Created by PhpStorm.
 * User: ggalia84
 * Date: 18/01/16
 * Time: 18:01
 */
class InvoiceRepository
{

    public function all(){

        return Invoices::all();
    }

}