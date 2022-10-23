<?php

namespace App\Interfaces;

use App\Models\Customer;

interface CustomerRepositoryInterface
{
    public function getAllCustomers();

    public function getCustomerByTckn(int $tckn);

    public function createCustomer(Customer $customer);

    public function updateCustomer(int $id, Customer $customer);

    public function updateCustomerByTckn(int $tckn, Customer $customer);

    public function deleteCustomer(int $id);

    public function deleteCustomerByTckn(int $tckn);

}
