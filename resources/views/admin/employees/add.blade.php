@extends('admin.master')
@section('content')
	<div class="page-content">
		<div class="content">
			<div class="row">
				<div class="col-md-12">
					<div class="grid simple">
						<div class="grid-title no-border">
							<h3>Thêm nhân viên</h3>
					    </div>

					    <div class="grid-body no-border">
							<form id="frmAddCustomer" class="validate" action="/admincp/createEmployee" method="post">
								{{ csrf_field() }}
								<div class="row form-group">
									<div class="col-md-3">
										<label class="form-label">Tên nhân viên</label>
										<div class="controls">
											<input type="text" class="form-control" name="fullname" required />
										</div> 
									</div>

									<div class="col-md-3">
										<label class="form-label">Mật khẩu</label>
										<div class="controls">
											<input type="password" class="form-control" name="password" required />
										</div> 
									</div> 

									<div class="col-md-3">
										<label class="form-label">Mã số hồ sơ</label>
										<div class="controls">
											<input type="text" class="form-control" name="profile_code" />
										</div> 
									</div>  

									<div class="col-md-3">
										<label class="form-label">Mã số nhân viên</label>
										<div class="controls">
											<input type="text" class="form-control" name="employee_code" />
										</div> 
									</div>      
								</div>

								<div class="row form-group">
									<div class="col-md-3">
										<label class="form-label">Ngày sinh</label>
										<div class="controls">
											<input type="text" class="form-control" name="birthday" />
										</div> 
									</div> 

									<div class="col-md-3">
										<label class="form-label">CMND</label>
										<div class="controls">
											<input type="number" class="form-control" name="cmnd" />
										</div> 
									</div> 

									<div class="col-md-3">
										<label class="form-label">Điện thoại</label>
										<div class="controls">
											<input type="number" class="form-control" name="phone" required />
										</div> 
									</div> 

									<div class="col-md-3">
										<label class="form-label">Email</label>
										<div class="controls">
											<input type="email" class="form-control" name="email" required />
										</div> 
									</div> 
								</div>

								<div class="row form-group">
									<div class="col-md-6">
										<label class="form-label">Địa chỉ thường trú</label>
										<div class="controls">
											<input type="text" class="form-control" name="permanent_address" />
										</div> 
									</div> 

									<div class="col-md-6">
										<label class="form-label">Địa chỉ liên hệ</label>
										<div class="controls">
											<input type="text" class="form-control" name="address" />
										</div> 
									</div>
								</div>

								<div class="row form-group">
									<div class="col-md-3">
										<label class="form-label">Phòng ban</label>
										<div class="controls">
											<select class="form-control" name="department_id" id="department_id">
												<option value="0">--- Chọn phòng ban ---</option>
												@foreach ($listDepartment as $item)
													<option value="{{ $item->id }}">{{ $item->name }}</option>
												@endforeach
											</select>
										</div> 
									</div> 

									<div class="col-md-3">
										<label class="form-label">Chức vụ</label>
										<div class="controls">
											<select class="form-control" name="regency_id" id="regency_id">
												<option value="0">--- Chọn chức vụ ---</option>
												@foreach ($listRegency as $item)
													<option value="{{ $item->id }}">{{ $item->name }}</option>
												@endforeach
											</select>
										</div> 
									</div>

									<div class="col-md-3">
										<label class="form-label">Loại nhân viên</label>
										<div class="controls">
											<select class="form-control" name="type_employee_id" id="type_employee_id">
												<option value="0">--- Chọn loại nhân viên ---</option>
												@foreach ($listTypeEmployee as $item)
													<option value="{{ $item->id }}">{{ $item->name }}</option>
												@endforeach
											</select>
										</div> 
									</div>

									<div class="col-md-3">
										<label class="form-label">Mức lương</label>
										<div class="controls">
											<input type="text" class="form-control" name="salary" />
										</div> 
									</div>
								</div>

								<div class="row form-group">
									<div class="col-md-3">
										<label class="form-label">Mức lương khai thuế</label>
										<div class="controls">
											<input type="text" class="form-control" name="salary_tax" />
										</div> 
									</div> 

									<div class="col-md-3">
										<label class="form-label">BH xã hội</label>
										<div class="controls">
											<input type="text" class="form-control" name="bhxh" />
										</div> 
									</div>

									<div class="col-md-3">
										<label class="form-label">BH y tế</label>
										<div class="controls">
											<input type="text" class="form-control" name="bhyt" />
										</div> 
									</div>

									<div class="col-md-3">
										<label class="form-label">BH thất nghiệp</label>
										<div class="controls">
											<input type="text" class="form-control" name="bhtn" />
										</div> 
									</div>
								</div>

								<div class="form-actions">
									<button class="btn btn-success btn-cons" type="submit">
										<i class="icon-ok"></i> Thêm mới
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