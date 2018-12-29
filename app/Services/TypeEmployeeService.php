<?php

namespace App\Services;

use App\Repositories\TypeEmployeeRepository;

class TypeEmployeeService
{
	public function __construct(TypeEmployeeRepository $repository)
    {
        $this->repository = $repository;        
    }

    public function listTypeEmployee($limit, $page)
    {
    	$data = $this->repository->listTypeEmployee($limit, $page);
    	return $data;
    }

    public function createTypeEmployee(array $input)
    {
    	$data = $this->repository->createTypeEmployee($input);
    	return $data;
    }

    public function editTypeEmployee($id)
    {
    	$data = $this->repository->editTypeEmployee($id);
		return $data;
    }

    public function updateTypeEmployee(array $input)
    {
    	$this->repository->updateTypeEmployee($input);
    }
}