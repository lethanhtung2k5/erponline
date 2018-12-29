<div class="grid simple">
	<div class="grid-title no-border">
		@if(isset($obj))
			<h3>Sửa loại nhân viên</h3>
		@else
      		<h3>Thêm loại nhân viên</h3>
      	@endif
    </div>

    <div class="grid-body no-border">
    	@if(isset($obj))
    		<form class="validate" action="/admincp/updateTypeEmployee" method="post">
				{{ csrf_field() }}
				<div class="form-group">
					<label class="form-label">Tên loại nhân viên</label>
					<div class="controls">
						<input type="hidden" class="form-control" name="id" value="{{ $obj->id }}" readonly />
						<input type="text" class="form-control" name="name" value="{{ $obj->name }}" required />
					</div>       
				</div>

				<div class="form-actions">
					<button class="btn btn-success btn-cons" type="submit">
						<i class="icon-ok"></i> Cập nhật
					</button>

					<button class="btn btn-cons" type="button" onclick="window.history.go(-1); return false;">
						<i class="icon-ok"></i> Quay lại
					</button>
				</div>
			</form>
    	@else
			<form class="validate" action="/admincp/createTypeEmployee" method="post">
				{{ csrf_field() }}
				<div class="form-group">
					<label class="form-label">Tên loại nhân viên</label>
					<div class="controls">
						<input type="text" class="form-control" name="name" required />
					</div>       
				</div>

				<div class="form-actions">
					<button class="btn btn-success btn-cons" type="submit">
						<i class="icon-ok"></i> Thêm mới
					</button>
				</div>
			</form>
    	@endif
    </div>
</div>