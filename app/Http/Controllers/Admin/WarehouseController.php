<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\WarehouseService;

class WarehouseController extends Controller
{
    public function __construct(WarehouseService $warehouseService)
	{
		$this->service = $warehouseService;
	}

    public function listWarehouse(Request $request)
    {
    	$limit = $request->query('limit', 20);
        $page = $request->query('page', 1);

    	$data = $this->service->listWarehouse($limit, $page);
    	
    	return view('admin.warehouse.list', compact('data'));
    }

    public function createWarehouse(Request $request)
    {
    	$input = $request->except('_token');
    	$data = $this->service->createWarehouse($input);

    	return redirect('admincp/warehouse');
    }

    public function editWarehouse($id)
    {
    	$obj = $this->service->editWarehouse($id);

    	$limit = 20;
    	$page = 1;
    	$data = $this->service->listWarehouse($limit, $page);

    	return view('admin.warehouse.list', compact(['obj', 'data']));
    }

    public function updateWarehouse(Request $request)
    {
    	$input = $request->except('_token');
    	$this->service->updateWarehouse($input);

    	return redirect('admincp/warehouse');
    }
}
