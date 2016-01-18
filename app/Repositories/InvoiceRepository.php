<?php

namespace App\Repositories;
use App\Invoices;

/**
 * Created by PhpStorm.
 * User: ggalia84
 * Date: 18/01/16
 * Time: 18:01
 */
class InvoiceRepository implements RepositoryInterface
{

    public function all(){

        return Invoices::all();
    }

    public function paginate($perPage = 15, $columns = array('*'))
    {
        // TODO: Implement paginate() method.
    }

    public function create(array $data)
    {
        // TODO: Implement create() method.
    }

    public function update(array $data, $id)
    {
        // TODO: Implement update() method.
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
    }

    public function find($id, $columns = array('*'))
    {
        // TODO: Implement find() method.
    }

    public function findBy($field, $value, $columns = array('*'))
    {
        // TODO: Implement findBy() method.
    }
}