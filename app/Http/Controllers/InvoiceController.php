<?php

namespace App\Http\Controllers;

use App\Invoices;
use App\Repositories\InvoicesRepository;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class InvoiceController extends Controller
{
    //
    /**
     * InvoiceController constructor.
     */
    public function __construct(InvoicesRepository $invoicesRepo)
    {
        $this->invoiceRepo = $invoicesRepo;
    }

    public function index() {

        //Comprovar qui pot executar i qui no.
        if(Auth::check()) {
            return 'Forbidden!';
        }

        //Retornar totes les factures de al base de dades.
        $database_invoices = $this->invoiceRepo->getAllInvoicesFromDatabase();

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
