/* To activate modal*/
var showModal = function(option){
	let url = option.url?option.url:'/';
	sendAjax({url:url},function(resp){
		$('#modal #modal_content').empty().append(resp);
	});
	$('#modal').modal();
}