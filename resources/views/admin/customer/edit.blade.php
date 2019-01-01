@extends('admin.master')
@section('content')
	<div class="page-content">
		<div class="content">
			<div class="row">
				<div class="col-md-12">
					<div class="grid simple">
						<div class="grid-title no-border">
							<h3>Sửa khách hàng</h3>
					    </div>

					    <div class="grid-body no-border">
							<form id="frmAddCustomer" class="validate" action="/admincp/updateCustomer" method="post">
								{{ csrf_field() }}
								<input type="hidden" class="form-control" name="id" value="{{ $obj->id }}" readonly />
								<div class="row form-group">
									<div class="col-md-3">
										<label class="form-label">Tên khách hàng</label>
										<div class="controls">
											<input type="text" class="form-control" name="fullname" value="{{ $obj->fullname }}" required />
										</div> 
									</div>

									<div class="col-md-3">
										<label class="form-label">Địa chỉ</label>
										<div class="controls">
											<input type="text" class="form-control" name="address" value="{{ $obj->address }}" required />
										</div> 
									</div> 

									<div class="col-md-3">
										<label class="form-label">Điện thoại</label>
										<div class="controls">
											<input type="number" class="form-control" name="phone" value="{{ $obj->phone }}" required />
										</div> 
									</div>  

									<div class="col-md-3">
										<label class="form-label">Email</label>
										<div class="controls">
											<input type="email" class="form-control" name="email" value="{{ $obj->email }}" />
										</div> 
									</div>      
								</div>

								<div class="row form-group">
									<div class="col-md-3">
										<label class="form-label">Tỉnh/Thành phố</label>
										<div class="controls">
											<select class="form-control" name="city_id" id="city_id">
												@foreach ($listCity as $id=>$item)
													<option value="{{ $id }}" rel="{{ $item }}" @if($id == $obj->city_id) selected @endif>{{ $item }}</option>
												@endforeach
											</select>
										</div> 
									</div> 

									<div class="col-md-3">
										<label class="form-label">Quận/Huyện</label>
										<div class="controls">
											<select class="form-control" name="district_id" id="district_id">
												@forelse ($listDistrict as $id=>$item)
													<option value="{{ $id }}" rel="{{ $item }}" @if($id == $obj->district_id) selected @endif>{{ $item }}</option>
												@empty
													<option value="0" rel="">--- Chọn quận/huyện ---</option>
												@endforelse
											</select>
										</div> 
									</div> 

									<div class="col-md-3">
										<label class="form-label">Loại khách hàng</label>
										<div class="controls">
											<select class="form-control" name="type_customer_id" id="type_customer_id">
												<option value="0">--- Chọn loại khách hàng ---</option>
												@foreach ($listTypeCustomer as $item)
													<option value="{{ $item->id }}" @if($item->id == $obj->type_customer_id) selected @endif>{{ $item->name }}</option>
												@endforeach
											</select>
										</div> 
									</div> 
								</div>

								<div class="form-actions">
									<input type="hidden" name="city_name" id="city_name" value="{{ $obj->city_name }}" />
									<input type="hidden" name="district_name" id="district_name" value="{{ $obj->district_name }}" />

									<button class="btn btn-success btn-cons" type="submit">
										<i class="icon-ok"></i> Cập nhật
									</button>

									<button class="btn btn-cons" type="button" onclick="window.history.go(-1); return false;">
										<i class="icon-ok"></i> Quay lại
									</button>
								</div>
							</form>
					    </div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection