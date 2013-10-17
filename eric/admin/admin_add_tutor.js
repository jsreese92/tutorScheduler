$(document).ready(function () {
	//add a checkbox that will automatically check if we click the add button, so the php script won't accidentally set the database values if we didn't mean to
	var submit_checkbox = $("<input type='checkbox'>");
	submit_checkbox.attr("name","add_attempt_checkbox");
	submit_checkbox.attr("id","add_attempt_checkbox");
	submit_checkbox.hide();
	$('#add_tutor_form').append(submit_checkbox);
	
	var remove_checkbox = $("<input type='checkbox'>");
	remove_checkbox.attr("name","remove_attempt_checkbox");
	remove_checkbox.attr("id","remove_attempt_checkbox");
	remove_checkbox.hide();
	$('#remove_tutor_form').append(remove_checkbox);
	
	//handler for when they hit remove
	$('#remove_tutor_form').submit(function(event) {
		$('#remove_attempt_checkbox').prop('checked',true);
	});
	
	//handler for when they hit submit
	$('#add_tutor_form').submit(function(event) {
		$('#add_attempt_checkbox').prop('checked',true);

		//check that every select has been picked and set to a value:
		var complete = true;
		
		$('input').each(function(i, e) {
			var val=$(e).val();
			
			//is it filled out?
			if(val == '') {
				complete = false;
			}			
		});
		//Fname and Lname will have problem characters escaped in the PHP, so no need to check here
		
		//Check that PID is a positive number length 9
		val = $('#pid_field').val();

		if(isNaN(val) || val <= 0) {
			complete = false;
		}
		if(+val + 0 < 100000000) {
			complete = false;
		}

		if(!complete) {
			alert('You must completely fill the form, and PID must be a 9 character number!');
			event.preventDefault();
			$('#add_attempt_checkbox').prop('checked',false);
		}
		
	});
	
	//fade the banner if we placed one in php
	$('#success').delay(5000).fadeOut(1000);
	$('#failure').delay(5000).fadeOut(1000);
	
});

