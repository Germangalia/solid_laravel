<?php

namespace App\Http\Controllers;

use App\Invoices;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class InvoiceController extends Controller
{
    //
    public function index() {

        //Comprovar qui pot executar i qui no.
        if(Auth::check()) {
            return 'Forbidden!';
        }

        $invoiceRepo = new InvoiceRepository();

        //Retornar totes les factures de al base de dades.
        $database_invoices = $this->getAllInvoicesFromDatabase();

        //Donar format a les factures.
        $invoices = $this->transform($database_invoices);

        //Retorna la vista.
        return view('invoices', compact('invoices'));

//        $data['invoices']=$formatted_invoices;
//        return view('invoices', $data);
    }



    private function transform($database_invoice){

        return $database_invoice;
    }
}
