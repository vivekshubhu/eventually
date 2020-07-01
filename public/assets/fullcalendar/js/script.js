

$(function(){

	$('.date-time').mask('00/00/0000 00:00:00');

	$.ajaxSetup({
    	headers: {
      	   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    	}
	});

	$(".deleteEvent").click(function(){

		let id = $("#modalCalendar input[name='id']").val();

		let Event = {
			id : id,
			_method: 'DELETE'
		};

		let route = routeEvents('routeEventDelete');

		sendEvent(route,Event);
	});

	$(".saveEvent").click(function(){
		// alert();
		  let id = $("#modalCalendar input[name='id']").val();
		  // console.log('test', id);
		  let allDay = $("#modalCalendar input[name='allDay']").val();
	          
	          console.log(typeof(allDay));
	      let title = $("#modalCalendar input[name='title']").val();
	      
	      let start = moment($("#modalCalendar input[name='start']").val(),"DD/MM/YYYY HH:mm:ss").format("YYYY-MM-DD HH:mm:ss");
	      
	      let end = moment($("#modalCalendar input[name='end']").val(),"DD/MM/YYYY HH:mm:ss").format("YYYY-MM-DD HH:mm:ss");

	      let color = $("#modalCalendar input[name='color']").val();

	      let description = $("#modalCalendar textarea[name='description']").val();

	      let Event = {
	      	title: title,
	      	start: start,
	      	end: end,
	      	color: color,
	      	description: description,
            user_id:1,
	      };

	      let route;

	      if (allDay==='true'){
	      		// console.log('ifftesT');
	      		route = routeEvents('routeEventStore');
	      }
	      else{
	      		console.log('elsetesT');
	      		route = routeEvents('routeEventUpdate');
	      		Event.id = id;
	      	console.log(id);

	      		Event._method = 'PUT'; 
	      }

	      sendEvent(route,Event);

 	});
});


function sendEvent(route, data_){
	$.ajax({
		url:route,
		data:data_,
		method: 'POST',
		dataType: 'json',
		success:function (json){

			if(json){
				location.reload();
				$('#modalCalendar').modal('hide');
				console.log("Hello world");
			}
		},
		error:function (json){
			console.log(json);
			let responseJSON = json.responseJSON.errors;

			// console.log(typeof(responseJSON));
			let errors = Object.keys(responseJSON).map(k => responseJSON[k]);
			// $.each(responseJSON, function() {
			//   var key = Object.keys(this)[0];
			//   //do something with value;
			// }); 


			$("#message").html(errors)
			
		}

	});
}

function loadErrors(response){

	let boxAlert ='<div class="alert alert-danger">';

	for(let fields in response){ 
		boxAlert += "<span>${response[fields]}</span><br/>";
		// boxAlert += "<span>".${response[fields]}."</span><br/>";
	}

	boxAlert += "</div>";
	return boxAlert;

	// return boxAlert.replace( \, "<br/>");
	// DD(response);
}

function routeEvents(route){
	return document.getElementById('calendar').dataset[route];
}

// function clearMessages(element){
// 	$(element).text('');
// } 

function resetForm(form){
	$(form)[0].reset();
}