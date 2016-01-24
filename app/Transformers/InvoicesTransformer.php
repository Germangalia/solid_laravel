<?php
/**
 * Created by PhpStorm.
 * User: ggalia84
 * Date: 24/01/16
 * Time: 13:37
 */

namespace App\Transformers;
class InvoicesTransformer extends Transformer
{
    public function transform($database_invoices)
    {
        return $database_invoices;
    }
}