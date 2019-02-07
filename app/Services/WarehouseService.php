<?php

namespace App\Services;

use App\Repositories\WarehouseRepository;

class WarehouseService
{
	public function __construct(WarehouseRepository $repository)
    {
        $this->repository = $repository;        
    }

    public function listWarehouse($limit, $page)
    {
    	$data = $this->repository->listWarehouse($limit, $page);
    	return $data;
    }

    public function createWarehouse(array $input)
    {
    	$data = $this->repository->createWarehouse($input);
    	return $data;
    }

    public function editWarehouse($id)
    {
    	$data = $this->repository->editWarehouse($id);
		return $data;
    }

    public function updateWarehouse(array $input)
    {
    	$this->repository->updateWarehouse($input);
    }
}