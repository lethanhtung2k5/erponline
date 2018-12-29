<?php

namespace App\Services;

use App\Repositories\DepartmentRepository;

class DepartmentService
{
	public function __construct(DepartmentRepository $repository)
    {
        $this->repository = $repository;        
    }

    public function listDepartment($limit, $page)
    {
    	$data = $this->repository->listDepartment($limit, $page);
    	return $data;
    }

    public function createDepartment(array $input)
    {
    	$data = $this->repository->createDepartment($input);
    	return $data;
    }

    public function editDepartment($id)
    {
    	$data = $this->repository->editDepartment($id);
		return $data;
    }

    public function updateDepartment(array $input)
    {
    	$this->repository->updateDepartment($input);
    }
}