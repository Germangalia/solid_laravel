<?php
/**
 * Created by PhpStorm.
 * User: ggalia84
 * Date: 24/01/16
 * Time: 13:35
 */

namespace App\Transformers;

abstract class Transformer
{
    public function transformCollection(array $items)
    {
        return array_map([$this, 'transform'], $items);
    }

    public abstract function transform($item);
}