<?php

namespace App\Repositories;

use App\Interfaces\CustomerRepositoryInterface;
use App\Models\Customer;

class CustomerRepository implements  CustomerRepositoryInterface
{

    public function getAllCustomers()
    {
        // TODO: Implement getAllCustomers() method.
    }

    public function getCustomerByTckn(int $tckn)
    {
        // TODO: Implement getCustomerByTckn() method.
    }

    public function createCustomer(Customer $customer)
    {
        // TODO: Implement createCustomer() method.
    }

    public function updateCustomer(int $id, Customer $customer)
    {
        // TODO: Implement updateCustomer() method.
    }

    public function updateCustomerByTckn(int $tckn, Customer $customer)
    {
        // TODO: Implement updateCustomerByTckn() method.
    }

    public function deleteCustomer(int $id)
    {
        // TODO: Implement deleteCustomer() method.
    }

    public function deleteCustomerByTckn(int $tckn)
    {
        // TODO: Implement deleteCustomerByTckn() method.
    }
}
