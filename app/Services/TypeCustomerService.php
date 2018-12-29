<?php

namespace App\Services;

use App\Repositories\TypeCustomerRepository;

class TypeCustomerService
{
	public function __construct(TypeCustomerRepository $repository)
    {
        $this->repository = $repository;        
    }

    public function listTypeCustomer($limit, $page)
    {
    	$data = $this->repository->listTypeCustomer($limit, $page);
    	return $data;
    }

    public function createTypeCustomer(array $input)
    {
    	$data = $this->repository->createTypeCustomer($input);
    	return $data;
    }

    public function editTypeCustomer($id)
    {
    	$data = $this->repository->editTypeCustomer($id);
		return $data;
    }

    public function updateTypeCustomer(array $input)
    {
    	$this->repository->updateTypeCustomer($input);
    }
}