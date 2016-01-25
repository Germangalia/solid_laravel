<?php

namespace App\Http\Controllers;

use App\Invoices;
use App\Repositories\InvoiceRepository;
use App\Repositories\RepositoryInterface;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class InvoiceController extends Controller
{
    protected $repo;
    //
    /**
     * InvoiceController constructor.
     *
     * DEPENDENCE INJECTION
     */
    public function __construct(RepositoryInterface $repo)
    {
        $this->repo = $repo;
    }

    public function index() {

//        //Comprovar qui pot executar i qui no.
//        if(Auth::check()) {
//            return 'Forbidden!';
//        }

        //Retornar totes les factures de al base de dades.
        $database_invoices = $this->repo->all();

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
