<?php

namespace App\Services;

use App\Repositories\RegencyRepository;

class RegencyService
{
	public function __construct(RegencyRepository $repository)
    {
        $this->repository = $repository;        
    }

    public function listRegency($limit, $page)
    {
    	$data = $this->repository->listRegency($limit, $page);
    	return $data;
    }

    public function createRegency(array $input)
    {
    	$data = $this->repository->createRegency($input);
    	return $data;
    }

    public function editRegency($id)
    {
    	$data = $this->repository->editRegency($id);
		return $data;
    }

    public function updateRegency(array $input)
    {
    	$this->repository->updateRegency($input);
    }
}