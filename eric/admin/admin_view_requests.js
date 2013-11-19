$(document).ready(function() {
	
	//create the tables for viewing current requests
	$("table").not("#hours_database_result").each(function(i, e) {
	});
	
	//set up the nav spans to hide/show the appropriate tutors
	$("span.nav").click(switch_tutor);

});

var switch_tutor = function(event) {
	var tutor_requests_div = $("#tutor_requests");
	tutor_requests_div.empty();
	
	e = $(this);
	new_pid = e.attr('data-pid');
	var requests_table = $("table.database_requests[data-pid='"+new_pid+"']");
	
	var table = $("<table class='requests' data-pid='"+requests_table.attr('data-pid')+"'></table>");
	var body = $("<tbody></tbody>");
	table.append(body);
	
	var new_row = $("<tr></tr>");
	var days = new Array("","sun","mon","tue","wed","thu","fri","sat");
	new_row.append("<td class='na'></td><td class='na'>Sunday</td><td class='na'>Monday</td><td class='na'>Tuesday</td>" +
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
				
				//check if the center is closed
				var day = new_class.substring(0,3);
				var hour = new_class.substring(3,5);
				
				if($("table#hours_database_result tr."+day+" td."+hour+"").html() == 'closed') {
					td.addClass('na');
				}else {
					var class_string = num_to_class(requests_table.find("tr."+day+" td."+hour).html());
					td.addClass(class_string);
				}
				
				new_row.append(td);
			}
		}
		body.append(new_row);
	}
	
	tutor_requests_div.append("<strong>Requests from: "+e.attr('data-fname')+" "+e.attr('data-lname')+"</strong>");
	tutor_requests_div.append(table);

};

var num_to_class = function(num) {
	switch(num) {
	case '0':
		return 'busy';
	case '1':
		return 'prefer_no';
	case '2':
		return 'can';
	case '3':
		return 'perfect';
	}
	
	//else we hit some error
	return 'error';
};

var goBack = function() {
	window.location = './admin.php';
};

var logout = function() {
	window.location = './../common/logout.php';
};
