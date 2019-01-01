@extends('admin.master')
@section('content')
	<div class="page-content">
		<div class="content">
			<div class="row">
				<div class="col-md-12">
					<div class="grid simple">
						<div class="grid-title no-border">
		                  	<h3>Danh sách khách hàng</h3>

		                  	<button class="btn btn-success btn-cons" type="button" onclick="window.location = '/admincp/addCustomer';">
								<i class="icon-plus"></i> Thêm mới
							</button>
		                </div>

		                <div class="grid-body no-border">
		                	<table class="table table-bordered no-more-tables">
		                		<thead>
			                      	<tr>
				                        <th style="width:20%">Họ tên</th>
				                        <th style="width:25%">Địa chỉ</th>
				                        <th style="width:10%">Điện thoại</th>
				                        <th style="width:25%">Khu vực</th>
				                        <th style="width:10%">Loại KH</th>
				                        <th style="width:10%">Chức năng</th>
				                    </tr>
			                    </thead>

			                    <tbody>
			                    	@foreach ($data as $item)
									    <tr>
									    	<td class="v-align-middle">
									    		<a href="/admincp/editCustomer/{{ $item->id }}" title="Sửa khách hàng">
									    			{{ $item->fullname }}
									    		</a>
									    	</td>

					                        <td class="v-align-middle">
					                        	{{ $item->address }}
					                        </td>

					                        <td class="v-align-middle">
					                        	{{ $item->phone }}
					                        </td>

					                        <td class="v-align-middle">
					                        	{{ $item->district_name }} - {{ $item->city_name }}
					                        </td>

					                        <td class="v-align-middle">
					                        	{{ $item->type }}
					                        </td>

					                        <td class="v-align-middle edit">
					                        	<a href="/admincp/editCustomer/{{ $item->id }}" title="Sửa khách hàng">
					                        		<i class="material-icons">edit</i>
					                        	</a>

					                        	<a href="/admincp/deleteCustomer/{{ $item->id }}" title="Xóa khách hàng">
					                        		<i class="material-icons">delete</i>
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