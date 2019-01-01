// $('#frmAddCustomer').submit(function() {
// 	if($('#department_id').val() == 0) {
// 		showErrorMessage('Vui lòng chọn phòng ban!');
// 	}

// 	return false;
// });

$('#city_id').change(function() {
	var id = $(this).val();
	
	if(id != 0) {
		var _token = $('input[name="_token"]').val();
		var city_name = $("option:selected", this).attr("rel");
		$('#city_name').val(city_name);
		
		$.ajax({
      		url:"/ajax/loadDistrict", 
      		method:"POST", 
      		data:{	id:id, _token:_token},
      		success:function(data){ 
       			$('#district_id').html(data); 
				$("#district_name").val($("#district_id option:first").attr("rel"));
     		}
		});
	} else {
		$('#district_id').html('<option value="0" rel="">--- Chọn quận/huyện ---</option>'); 
	}
});

$('#district_id').change(function() {
	$("#district_name").val($("option:selected", this).attr("rel"));
});