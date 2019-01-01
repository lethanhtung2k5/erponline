<?php

namespace App\Services;

use App\Repositories\CustomerRepository;

class CustomerService
{
	public function __construct(CustomerRepository $repository)
    {
        $this->repository = $repository;        
    }

    public function listCustomer($limit, $page)
    {
    	$data = $this->repository->listCustomer($limit, $page);
    	return $data;
    }

    public function createCustomer(array $input)
    {
    	$data = $this->repository->createCustomer($input);
    	return $data;
    }

    public function editCustomer($id)
    {
    	$data = $this->repository->editCustomer($id);
		return $data;
    }

    public function updateCustomer(array $input)
    {
    	$this->repository->updateCustomer($input);
    }

    public function deleteCustomer($id)
    {
        $this->repository->deleteCustomer($id);
    }
}