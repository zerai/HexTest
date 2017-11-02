<?php

namespace HexTest\Domain\Customer;

use HexTest\Domain\Customer;

interface Repository
{
    /**
     * @param $id
     * @return Customer|null
     */
    public function find($id);

    /**
     * @return Customer[]
     */
    public function findAll();

    /**
     * @param Customer $customer
     */
    public function save(Customer $customer);
}
