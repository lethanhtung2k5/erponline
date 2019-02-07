<?php

namespace App\Repositories;

use App\Repositories\BaseRepository;
use App\Models\Warehouse;

class WarehouseRepository extends BaseRepository
{
	public function getModel()
    {
        return Warehouse::class;
    }

    public function listWarehouse($limit = 20, $page = 1)
    {
    	$offset = ($page - 1) * $limit;
    	$data = $this->model->limit($limit)->orderBy('id','asc')->get();
    	return $data;
    }

    public function createWarehouse(array $input)
    {
    	$data = $this->model->firstOrCreate($input);
    	return $data;
    }

    public function editWarehouse($id)
    {
    	$data = $this->model->findOrFail($id);
    	return $data;
    }

    public function updateWarehouse(array $input)
    {
    	$obj = $this->model->findOrFail($input['id']);
    	$obj->update($input);
    }
}