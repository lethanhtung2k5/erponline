<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\RegencyService;

class RegencyController extends Controller
{
	public function __construct(RegencyService $regencyService)
	{
		$this->service = $regencyService;
	}

    public function listRegency(Request $request)
    {
    	$limit = $request->query('limit', 20);
        $page = $request->query('page', 1);

    	$data = $this->service->listRegency($limit, $page);
    	
    	return view('admin.regency.list', compact('data'));
    }

    public function createRegency(Request $request)
    {
    	$input = $request->except('_token');;
    	$data = $this->service->createRegency($input);

    	return redirect('admincp/regency');
    }

    public function editRegency($id)
    {
    	$obj = $this->service->editRegency($id);

    	$limit = 20;
    	$page = 1;
    	$data = $this->service->listRegency($limit, $page);

    	return view('admin.regency.list', compact(['obj', 'data']));
    }

    public function updateRegency(Request $request)
    {
    	$input = $request->except('_token');;
    	$this->service->updateRegency($input);

    	return redirect('admincp/regency');
    }
}
