<?php

namespace App\Services;

use App\Repositories\EmployeeRepository;

class EmployeeService
{
	public function __construct(EmployeeRepository $repository)
    {
        $this->repository = $repository;        
    }

    public function listEmployee($limit, $page)
    {
    	$data = $this->repository->listEmployee($limit, $page);
    	return $data;
    }

    public function createEmployee(array $input)
    {
    	$data = $this->repository->createEmployee($input);
    	return $data;
    }

    public function editEmployee($id)
    {
    	$data = $this->repository->editEmployee($id);
		return $data;
    }

    public function updateEmployee(array $input)
    {
    	$this->repository->updateEmployee($input);
    }

    public function deleteEmployee($id)
    {
        $this->repository->deleteEmployee($id);
    }
}