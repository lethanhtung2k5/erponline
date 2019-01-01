@extends('admin.master')
@section('content')
	<div class="page-content">
		<div class="content">
			<div class="row">
				<div class="col-md-12">
					<div class="grid simple">
						<div class="grid-title no-border">
		                  	<h3>Danh sách nhân viên</h3>

		                  	<button class="btn btn-success btn-cons" type="button" onclick="window.location = '/admincp/addEmployee';">
								<i class="icon-plus"></i> Thêm mới
							</button>
		                </div>

		                <div class="grid-body no-border">
		                	<table class="table table-bordered no-more-tables">
		                		<thead>
			                      	<tr>
				                        <th style="width:20%">Họ tên</th>
				                        <th style="width:10%">Mã NV</th>
				                        <th style="width:30%">Địa chỉ</th>
				                        <th style="width:10%">Điện thoại</th>
				                        <th style="width:10%">Chức vụ</th>
				                        <th style="width:10%">Phòng ban</th>
				                        <th style="width:10%">Chức năng</th>
				                    </tr>
			                    </thead>

			                    <tbody>
			                    	@foreach ($data as $item)
									    <tr>
									    	<td class="v-align-middle">
									    		<a href="/admincp/editEmployee/{{ $item->id }}" title="Sửa nhân viên">
									    			{{ $item->fullname }}
									    		</a>
									    	</td>

					                        <td class="v-align-middle">
					                        	{{ $item->employee_code }}
					                        </td>

					                        <td class="v-align-middle">
					                        	{{ $item->address }}
					                        </td>

					                        <td class="v-align-middle">
					                        	{{ $item->phone }}
					                        </td>

					                        <td class="v-align-middle">
					                        	{{ $item->regency }}
					                        </td>

					                        <td class="v-align-middle">
					                        	{{ $item->department }}
					                        </td>

					                        <td class="v-align-middle edit">
					                        	<a href="/admincp/editEmployee/{{ $item->id }}" title="Sửa nhân viên">
					                        		<i class="material-icons">edit</i>
					                        	</a>

					                        	<a href="/admincp/deleteEmployee/{{ $item->id }}" title="Xóa nhân viên">
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