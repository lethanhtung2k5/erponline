<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\DepartmentService;

class DepartmentController extends Controller
{
    public function __construct(DepartmentService $departmentService)
	{
		$this->service = $departmentService;
	}

    public function listDepartment(Request $request)
    {
    	$limit = $request->query('limit', 20);
        $page = $request->query('page', 1);

    	$data = $this->service->listDepartment($limit, $page);
    	
    	return view('admin.department.list', compact('data'));
    }

    public function createDepartment(Request $request)
    {
    	$input = $request->except('_token');;
    	$data = $this->service->createDepartment($input);

    	return redirect('admincp/department');
    }

    public function editDepartment($id)
    {
    	$obj = $this->service->editDepartment($id);

    	$limit = 20;
    	$page = 1;
    	$data = $this->service->listDepartment($limit, $page);

    	return view('admin.department.list', compact(['obj', 'data']));
    }

    public function updateDepartment(Request $request)
    {
    	$input = $request->except('_token');;
    	$this->service->updateDepartment($input);

    	return redirect('admincp/department');
    }
}
