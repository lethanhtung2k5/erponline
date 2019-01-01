<?php

namespace App\Repositories;

use App\Repositories\BaseRepository;
use App\Models\Customer;

class CustomerRepository extends BaseRepository
{
	public function getModel()
    {
        return Customer::class;
    }

    public function listCustomer($limit = 20, $page = 1)
    {
    	$offset = ($page - 1) * $limit;

        $column = [
            'customers.id',
            'fullname',
            'address',
            'phone',
            'city_name',
            'district_name',
            'type_customers.name as type',
            'status'
        ];

    	$data = $this->model->leftJoin('type_customers', 'type_customers.id', '=', 'customers.type_customer_id')
                            ->whereNull('customers.deleted_at')
                            ->limit($limit)
                            ->get($column);
        return $data;
    }

    public function createCustomer(array $input)
    {
    	$data = $this->model->firstOrCreate($input);
    	return $data;
    }

    public function editCustomer($id)
    {
    	$data = $this->model->findOrFail($id);
    	return $data;
    }

    public function updateCustomer(array $input)
    {
        $obj = $this->model->findOrFail($input['id']);
    	$obj->update($input);
    }

    public function deleteCustomer($id)
    {
        $obj = $this->model->findOrFail($id);
        $obj->delete();
    }
}