<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\CustomerService;
use App\Services\TypeCustomerService;
use Auth;

class CustomerController extends Controller
{
    public function __construct(CustomerService $customerService, TypeCustomerService $typeCustomerService)
	{
		$this->service = $customerService;
		$this->typeCustomerService = $typeCustomerService;
	}

	public function listCustomer(Request $request)
    {
    	$limit = $request->query('limit', 20);
        $page = $request->query('page', 1);

    	$data = $this->service->listCustomer($limit, $page);
    	
    	return view('admin.customer.list', compact('data'));
    }

    public function addCustomer()
    {
    	$limit = 100;
    	$page = 1;
    	$listTypeCustomer = $this->typeCustomerService->listTypeCustomer($limit, $page);
    	$listCity = $this->getDataHanhChanh();

    	return view('admin.customer.add', compact(['listCity', 'listTypeCustomer']));
    }

    public function createCustomer(Request $request)
    {
    	$input = $request->except('_token');
    	$input['user_id'] = Auth::user()->id;
    	$data = $this->service->createCustomer($input);

    	return redirect('admincp/customer');
    }

    public function editCustomer($id)
    {
    	$obj = $this->service->editCustomer($id);
    	$limit = 100;
    	$page = 1;
    	$listTypeCustomer = $this->typeCustomerService->listTypeCustomer($limit, $page);
    	$listCity = $this->getDataHanhChanh();
    	if($obj->city_id)
    		$listDistrict = $this->getDataHanhChanh('HUYEN', $obj->city_id);
    	else
    		$listDistrict = [];

    	return view('admin.customer.edit', compact(['obj', 'listCity', 'listDistrict', 'listTypeCustomer']));
    }

    public function updateCustomer(Request $request)
    {
    	$input = $request->except('_token');
    	$this->service->updateCustomer($input);

    	return redirect('admincp/customer');
    }

    public function deleteCustomer($id)
    {
    	$this->service->deleteCustomer($id);

    	return redirect('admincp/customer');
    }

    private function getDataHanhChanh($type = 'TINH', $idParent = 0)
    {
    	$xml = simpleXML_load_file(storage_path('app/public/DVHC_data.xml'));
		$data = [];
		
		foreach($xml->DVHC as $item){
			if($type == 'TINH') {
				if($item->Cap == $type){
					$data[current($item->MaDVHC)] = current($item->Ten);
				}
			} else {
				if($item->Cap == $type && $item->CapTren == $idParent){
					$data[current($item->MaDVHC)] = current($item->Ten);
				}
			}
		}

		return $data;
    }
}
