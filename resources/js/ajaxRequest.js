var $ = jQuery;
$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});

// function sendAjax(url,data,method,callback = ''){
// 	$.ajax({
// 		url:url,
// 		data:data,
// 		method:method,
// 		success:function(response){
// 			if(typeof(callback) != "string"){
// 				callback(response);
// 			}
// 		}
// 	});

// }

function sendAjax(option,callback = ''){
	var url = option.url?option.url:'/';
	var data = option.data?option.data:'';
	var method = option.method?option.method:'GET';
	// var callback = option.callback;

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