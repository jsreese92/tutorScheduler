$(document).ready(function () {
	//fade the banner if we placed one in php
	$('#success').delay(5000).fadeOut(1000);
	$('#failure').delay(5000).fadeOut(1000);

	//handler for when they submit an edit
	$('#edit_employee_form').submit(function(event) {
		if(!validateForm('edit_'))
			event.preventDefault();
	});
	
	//handler for if they try to delete an employee
	$('#delete_employee_form').submit(function(event) {
		var r = confirm('Are you sure you want to delete '+$("input[name='edit_Fname']").val()+" "
				+$("input[name='edit_Lname']").val()+" from the system?");
		if(!r)
			event.preventDefault();
	});
	
	//handler for when they hit add
	$('#new_employee_form').submit(function(event) {
		if(!validateForm('new_')) {
			event.preventDefault();
		}
	});
	
	//make the edit div appear if they're editing an employee
	if($('#edit_employee').html().trim() != "<h2>Edit Employee:</h2>") {
		$('#edit_employee').show();
	}
	
	
	//create the editing table for adjusting current hours
	var table = $("<table></table>");
	var body = $("<tbody></tbody>");
	table.append(body);
	
	var new_row = $("<tr></tr>");
	var days = new Array("","sun","mon","tue","wed","thu","fri","sat");
	new_row.append("<td class='na'>" + "<select id='location_dropdown'>" +
										"<option value='0'>Unschedule</option>" +
										"<option value='1'>SASB</option>" +
										"<option value='2'>Greenlaw</option>" +
										"</select>" +
			"</td><td class='na'>Sunday</td><td class='na'>Monday</td><td class='na'>Tuesday</td>" +
			"<td class='na'>Wednesday</td><td class='na'>Thursday</td><td class='na'>Friday</td><td class='na'>Saturday</td>");
	body.append(new_row);
	
	for(var row = 7; row < 24; row++) {
		var new_row = $("<tr></tr>");
		for(var column = 0; column <= 7; column++) {
			if(column == 0) {
				var time = row;
				if(time > 12) {
					time -= 12;
					time += ":00PM";
				}else time+= ":00AM";
				new_row.append("<td class = 'na'><strong>"+time+"</strong></td>");
			}else {
				var td = $("<td></td>");
				var new_class = days[column];
				if(row < 10) {
					new_class += "0"+row;
				}else new_class += ""+row;
				
				//now add the dropdown and set it
				var dropdown = $("<select name="+new_class+"></select>");
				dropdown.append("<option>"+0+"</option><option>"+1+"</option><option>"+2+"</option>");
				var val = $("table#tutor_schedule_result td."+new_class).html();
				dropdown.val(val);
				td.append(dropdown);
				dropdown.hide();
				td.addClass("class_"+val);
				//check if the center is closed
				var day = new_class.substring(0,3);
				var hour = new_class.substring(3,5);

				if($("table#hours_database_result tr."+day+" td."+hour+"").html() == 'closed') {
					td.addClass('na');
					dropdown.val(0);
				}

				new_row.append(td);
			}
		}
		body.append(new_row);
	}
	
	$('#tutor_schedule_adjust').append(table);
	
	//add a submit button the the schedule editing form
	$('#tutor_schedule_adjust').append("<br><button type='submit'>Submit</button>");
	//now make each one clickable to adjust the schedule...
	$("#tutor_schedule_adjust tbody td").not('.na').each(function(i, e) {
		$(e).click(clicked);
	});
});

var clicked = function() {
	var cell = $(this);
	var location = $('select#location_dropdown').val();
	
	cell.removeClass();
	cell.addClass("class_"+location);
	//set the dropdown
	cell.find('select').val(location);
};

//location will be either "new_" or "edit_"
var validateForm = function(location) {
	//first, remove any invalid markings from the last attempt
	$("#"+location+"employee_form").children().each(function(i,e) {
		e = $(e);
		e.removeClass("invalid");
		if(e.hasClass("error_span"))
			this.remove();
	});
	
	//check all the values for validity
	var complete = true;
	
	if($("input[name='"+location+"Fname']").val().trim() == '') {
		complete = false;
		box = $("input[name='"+location+"Fname']");
		box.addClass("invalid");
		box.after("<span class='error_span'>Invalid Name</span>");
	}
	if($("input[name='"+location+"Lname']").val().trim() == '') {
		complete = false;
		box = $("input[name='"+location+"Lname']");
		box.addClass("invalid");
		box.after("<span class='error_span'>Invalid Name</span>");
	}
	
	//Check that PID is a positive number length 9
	new_pid = +$("input[name='"+location+"pid']").val()+0;

	if(isNaN(new_pid) || new_pid < 100000000) {
		complete = false;
		box = $("input[name='"+location+"pid']");
		box.addClass("invalid");
		box.after("<span class='error_span'>Invalid PID</span>");
	}
	
	//if they selected administrator, warn them and make sure they're positive
	if(complete && $("select[name='"+location+"type']").val() == 'admin') {
		var r = confirm('Are you sure you want to add '+$("input[name='"+location+"Fname']").val()+" "
				+$("input[name='"+location+"Lname']").val()+" as an administrator?");
		if(!r)
			complete = false;
	}
	return complete;
};

var goBack = function() {
	var form = $('#logout_form');
	form.attr('action', './admin.php');
	form.trigger('submit');
};

var logout = function() {
	var form = $('#logout_form');
	form.attr('action', './../common/logout.php');
	form.trigger('submit');
};

