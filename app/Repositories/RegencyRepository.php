<?php

namespace App\Repositories;

use App\Repositories\BaseRepository;
use App\Models\Regency;

class RegencyRepository extends BaseRepository
{
	public function getModel()
    {
        return Regency::class;
    }

    public function listRegency($limit = 20, $page = 1)
    {
    	$offset = ($page - 1) * $limit;
    	$data = $this->model->limit($limit)->orderBy('id','asc')->get();
    	return $data;
    }

    public function createRegency(array $input)
    {
    	$data = $this->model->firstOrCreate($input);
    	return $data;
    }

    public function editRegency($id)
    {
    	$data = $this->model->findOrFail($id);
    	return $data;
    }

    public function updateRegency(array $input)
    {
    	$obj = $this->model->findOrFail($input['id']);
    	$obj->update($input);
    }
}