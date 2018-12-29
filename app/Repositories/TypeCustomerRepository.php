<?php

namespace App\Repositories;

use App\Repositories\BaseRepository;
use App\Models\TypeCustomer;

class TypeCustomerRepository extends BaseRepository
{
	public function getModel()
    {
        return TypeCustomer::class;
    }

    public function listTypeCustomer($limit = 20, $page = 1)
    {
    	$offset = ($page - 1) * $limit;
    	$data = $this->model->limit($limit)->orderBy('id','asc')->get();
    	return $data;
    }

    public function createTypeCustomer(array $input)
    {
    	$data = $this->model->firstOrCreate($input);
    	return $data;
    }

    public function editTypeCustomer($id)
    {
    	$data = $this->model->findOrFail($id);
    	return $data;
    }

    public function updateTypeCustomer(array $input)
    {
    	$obj = $this->model->findOrFail($input['id']);
    	$obj->update($input);
    }
}