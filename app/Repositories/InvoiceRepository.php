<?php

namespace App\Repositories;


/**
 * Created by PhpStorm.
 * User: ggalia84
 * Date: 18/01/16
 * Time: 18:01
 */
class InvoiceRepository extends Repository
{


    function model()
    {
        return \App\Invoices::class;
    }
}