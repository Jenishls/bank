$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});

function sendAjax(url,data,method,callback = ''){
	$.ajax({
		url:url,
		data:data,
		method:method,
		success:function(response){
			if(typeof(callback) != "string"){
				callback(response);
			}
		}
	});

}