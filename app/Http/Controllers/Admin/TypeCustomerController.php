<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\TypeCustomerService;

class TypeCustomerController extends Controller
{
    public function __construct(TypeCustomerService $typeCustomerService)
	{
		$this->service = $typeCustomerService;
	}

    public function listTypeCustomer(Request $request)
    {
    	$limit = $request->query('limit', 20);
        $page = $request->query('page', 1);

    	$data = $this->service->listTypeCustomer($limit, $page);
    	
    	return view('admin.type.customer.list', compact('data'));
    }

    public function createTypeCustomer(Request $request)
    {
    	$input = $request->except('_token');;
    	$data = $this->service->createTypeCustomer($input);

    	return redirect('admincp/typeCustomer');
    }

    public function editTypeCustomer($id)
    {
    	$obj = $this->service->editTypeCustomer($id);

    	$limit = 20;
    	$page = 1;
    	$data = $this->service->listTypeCustomer($limit, $page);

    	return view('admin.type.customer.list', compact(['obj', 'data']));
    }

    public function updateTypeCustomer(Request $request)
    {
    	$input = $request->except('_token');;
    	$this->service->updateTypeCustomer($input);

    	return redirect('admincp/typeCustomer');
    }
}
