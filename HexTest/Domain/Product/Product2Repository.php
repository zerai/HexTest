<?php

namespace HexTest\Domain\Product;


use HexTest\Domain\Product\Product2;

interface Repository
{
    /**
     * @param $id
     * @return Product2|null
     */
    public function find($id);

    /**
     * @return Product2[]
     */
    public function findAll();

    /**
     * @param Product2 $customer
     */
    public function save(Product2 $product2);
}