<?php

namespace App\Repositories;

use App\Repositories\BaseRepository;
use App\User;

class EmployeeRepository extends BaseRepository
{
	public function getModel()
    {
        return User::class;
    }

    public function listEmployee($limit = 20, $page = 1)
    {
    	$offset = ($page - 1) * $limit;

        $column = [
            'users.id',
            'employee_code',
            'fullname',
            'address',
            'phone',
            'departments.name as department',
            'regencies.name as regency',
            'status'
        ];

    	$data = $this->model->leftJoin('departments', 'departments.id', '=', 'users.department_id')
                            ->leftJoin('regencies', 'regencies.id', '=', 'users.regency_id')
                            ->where('users.id', '>', 1)
                            ->whereNull('users.deleted_at')
                            ->limit($limit)
                            ->orderBy('users.id','asc')
                            ->get($column);
        return $data;
    }

    public function createEmployee(array $input)
    {
    	$data = $this->model->firstOrCreate($input);
    	return $data;
    }

    public function editEmployee($id)
    {
    	$data = $this->model->findOrFail($id);
    	return $data;
    }

    public function updateEmployee(array $input)
    {
        $obj = $this->model->findOrFail($input['id']);
    	$obj->update($input);
    }

    public function deleteEmployee($id)
    {
        $obj = $this->model->findOrFail($id);
        $obj->delete();
    }
}