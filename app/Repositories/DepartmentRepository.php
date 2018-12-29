<?php

namespace App\Repositories;

use App\Repositories\BaseRepository;
use App\Models\Department;

class DepartmentRepository extends BaseRepository
{
	public function getModel()
    {
        return Department::class;
    }

    public function listDepartment($limit = 20, $page = 1)
    {
    	$offset = ($page - 1) * $limit;
    	$data = $this->model->limit($limit)->orderBy('id','asc')->get();
    	return $data;
    }

    public function createDepartment(array $input)
    {
    	$data = $this->model->firstOrCreate($input);
    	return $data;
    }

    public function editDepartment($id)
    {
    	$data = $this->model->findOrFail($id);
    	return $data;
    }

    public function updateDepartment(array $input)
    {
    	$obj = $this->model->findOrFail($input['id']);
    	$obj->update($input);
    }
}