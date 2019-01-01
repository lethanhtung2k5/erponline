<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\TypeEmployeeService;

class TypeEmployeeController extends Controller
{
    public function __construct(TypeEmployeeService $typeEmployeeService)
	{
		$this->service = $typeEmployeeService;
	}

    public function listTypeEmployee(Request $request)
    {
    	$limit = $request->query('limit', 20);
        $page = $request->query('page', 1);

    	$data = $this->service->listTypeEmployee($limit, $page);
    	
    	return view('admin.type.employee.list', compact('data'));
    }

    public function createTypeEmployee(Request $request)
    {
    	$input = $request->except('_token');
    	$data = $this->service->createTypeEmployee($input);

    	return redirect('admincp/typeEmployee');
    }

    public function editTypeEmployee($id)
    {
    	$obj = $this->service->editTypeEmployee($id);

    	$limit = 20;
    	$page = 1;
    	$data = $this->service->listTypeEmployee($limit, $page);

    	return view('admin.type.employee.list', compact(['obj', 'data']));
    }

    public function updateTypeEmployee(Request $request)
    {
    	$input = $request->except('_token');
    	$this->service->updateTypeEmployee($input);

    	return redirect('admincp/typeEmployee');
    }
}
