<?php

namespace App\Repositories;

use App\Interfaces\CustomerRepositoryInterface;
use App\Models\Customer;

class CustomerRepository implements CustomerRepositoryInterface
{
    protected Customer $customer;

    public function getAllCustomers(): \Illuminate\Database\Eloquent\Collection
    {
        return $this->customer->all();
    }

    public function getCustomerByTckn(int $tckn)
    {
        return $this->customer->byTckn($tckn);
    }

    public function createCustomer(Customer|array $customer)
    {
        return $this->customer->create($customer);
    }

    public function updateCustomer(int $id, Customer|array $customer)
    {
        return $this->customer->find($id)->update($customer);
    }

    public function updateCustomerByTckn(int $tckn, Customer|array $customer)
    {
        return $this->customer->where('tckn')->update($customer);
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
