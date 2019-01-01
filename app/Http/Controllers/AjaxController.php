<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AjaxController extends Controller
{
	public function loadDistrict(Request $request)
	{
		if($request->id) {
			$xml = simpleXML_load_file(storage_path('app/public/DVHC_data.xml'));
			$data = [];
			$output = '';
			
			foreach($xml->DVHC as $item){
				if($item->Cap == 'HUYEN' && $item->CapTren == $request->id){
					$data[current($item->MaDVHC)] = current($item->Ten);
				}
			}

			if($data) {
				foreach($data as $id=>$item) {
					$output .= '<option value="' . $id . '" rel="' . $item . '">' . $item . '</option>';
				}

				return $output;
			}
		}
	}
}