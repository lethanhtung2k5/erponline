<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\EmployeeService;
use App\Services\DepartmentService;
use App\Services\RegencyService;
use App\Services\TypeEmployeeService;

class EmployeeController extends Controller
{
    public function __construct(EmployeeService $employeeService, DepartmentService $departmentService, RegencyService $regencyService, TypeEmployeeService $typeEmployeeService)
	{
		$this->service = $employeeService;
		$this->departmentService = $departmentService;
		$this->regencyService = $regencyService;
		$this->typeEmployeeService = $typeEmployeeService;
	}

    public function listEmployee(Request $request)
    {
    	$limit = $request->query('limit', 20);
        $page = $request->query('page', 1);

    	$data = $this->service->listEmployee($limit, $page);
    	
    	return view('admin.employees.list', compact('data'));
    }

    public function addEmployee()
    {
    	$limit = 100;
    	$page = 1;
    	$listDepartment = $this->departmentService->listDepartment($limit, $page);
    	$listRegency = $this->regencyService->listRegency($limit, $page);
    	$listTypeEmployee = $this->typeEmployeeService->listTypeEmployee($limit, $page);

    	return view('admin.employees.add', compact(['listDepartment', 'listRegency', 'listTypeEmployee']));
    }

    public function createEmployee(Request $request)
    {
    	$input = $request->except('_token');
    	$input['password'] = bcrypt($input['password']);
    	$data = $this->service->createEmployee($input);

    	return redirect('admincp/employee');
    }

    public function editEmployee($id)
    {
    	$obj = $this->service->editEmployee($id);
    	$limit = 100;
    	$page = 1;
    	$listDepartment = $this->departmentService->listDepartment($limit, $page);
    	$listRegency = $this->regencyService->listRegency($limit, $page);
    	$listTypeEmployee = $this->typeEmployeeService->listTypeEmployee($limit, $page);

    	return view('admin.employees.edit', compact(['obj', 'listDepartment', 'listRegency', 'listTypeEmployee']));
    }

    public function updateEmployee(Request $request)
    {
    	$input = $request->except('_token');
    	if($input['password'] == null)
    		$input = $request->except('password');
    	else
    		$input['password'] = bcrypt($input['password']);
    	$this->service->updateEmployee($input);

    	return redirect('admincp/employee');
    }

    public function deleteEmployee($id)
    {
    	$this->service->deleteEmployee($id);

    	return redirect('admincp/employee');
    }
}
