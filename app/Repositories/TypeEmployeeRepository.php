<?php

namespace App\Repositories;

use App\Repositories\BaseRepository;
use App\Models\TypeEmployee;

class TypeEmployeeRepository extends BaseRepository
{
	public function getModel()
    {
        return TypeEmployee::class;
    }

    public function listTypeEmployee($limit = 20, $page = 1)
    {
    	$offset = ($page - 1) * $limit;
    	$data = $this->model->limit($limit)->orderBy('id','asc')->get();
    	return $data;
    }

    public function createTypeEmployee(array $input)
    {
    	$data = $this->model->firstOrCreate($input);
    	return $data;
    }

    public function editTypeEmployee($id)
    {
    	$data = $this->model->findOrFail($id);
    	return $data;
    }

    public function updateTypeEmployee(array $input)
    {
    	$obj = $this->model->findOrFail($input['id']);
    	$obj->update($input);
    }
}