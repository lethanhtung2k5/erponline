@extends('admin.master')
@section('content')
	<div class="page-content">
		<div class="content">
			<div class="row">
				<div class="col-md-6">
					@include("admin.type.customer.create")
				</div>

				<div class="col-md-6">
					<div class="grid simple">
						<div class="grid-title no-border">
		                  	<h3>Danh sách loại khách hàng</h3>
		                </div>

		                <div class="grid-body no-border">
		                	<table class="table table-bordered no-more-tables">
		                		<thead>
			                      	<tr>
				                        <th style="width:80%">Tên loại khách hàng</th>
				                        <th style="width:20%">Chức năng</th>
				                    </tr>
			                    </thead>

			                    <tbody>
			                    	@foreach ($data as $item)
									    <tr>
									    	<td class="v-align-middle">
									    		{{ $item->name }}
									    	</td>

					                        <td class="v-align-middle edit">
					                        	<a href="/admincp/editTypeCustomer/{{ $item->id }}" title="Sửa loại khách hàng">
					                        		<i class="material-icons">edit</i>
					                        	</a>
					                        </td>
					                    </tr>
									@endforeach
                      			</tbody>
		                	</table>
		                </div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection