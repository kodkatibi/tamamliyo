<?php

namespace App\Interfaces;

use App\Models\Customer;

interface CustomerRepositoryInterface
{
    public function getAllCustomers();

    public function getCustomerByTckn(int $tckn);

    public function createCustomer(array $customer);

    public function updateCustomer(int $id, array $customer);

    public function updateCustomerByTckn(int $tckn, array $customer);

    public function deleteCustomer(int $id);

    public function deleteCustomerByTckn(int $tckn);

}
