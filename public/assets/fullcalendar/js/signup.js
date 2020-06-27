$(function(){
	
	$('#form-data').submit(function(e){
		e.preventDefault()
		var route = $('#form-data').data('route');
		var form_data = $(this).serialize();
		console.log(form_data);
		$('alert').remove();
		$.ajax({
			type:'POST',
			url: route,
			data: form_data,
			success: function(Response){
				// console.log(Response.message);

				if(Response.message) {
					alert(Response.message);
				}
				window.location.href = '/';
				// alert(Response.message);
				// if (Response.person_name) {
				// 	$('#messages').append('<p class="alert">'+Response.person_name+'</p>')
				// }
				// if (Response.success) {
				// 	$('#messages').append('<p class="alert">'+Response.success+'</p>')
				// }
			},
			error: function(err) {
					alert('please fill the highlighted fields');

					for(key in err.responseJSON.errors) {
						console.log(key)
		                $('#form-data').find(`input[name=${key}]`).css('border-color','red');
					}
			}

		}) 
		// alert('yes it is loadeed');	
	});
});

$(function(){
	
	$('#loginUser').submit(function(e){
		e.preventDefault()

		// alert();
		var route = $('#loginUser').data('route');
		var form_data = $(this).serialize();
		console.log(form_data);
		$.ajax({
			type:'POST',
			url: route,
			data: form_data,
			success: function(Response){
				console.log(Response);
				if(Response.message) {
					// alert(Response.message);
				}
				window.location.href = '/';
				// alert(Response.message);
				// if (Response.person_name) {
				// 	$('#messages').append('<p class="alert">'+Response.person_name+'</p>')
				// }
				// if (Response.success) {
				// 	$('#messages').append('<p class="alert">'+Response.success+'</p>')
				// }
			},
			error: function(err) {
				console.log(err);
					if(err.responseJSON.errors){
						alert('please fill the highlighted fields');
						for(key in err.responseJSON.errors) {
							console.log(key)
			                $('#loginUser').find(`input[name=${key}]`).css('border-color','red');
						}
					}else if(err.responseJSON.message){
						alert(err.responseJSON.message);
					}
					
			}

		}) 
		// alert('yes it is loadeed');	
	});
});