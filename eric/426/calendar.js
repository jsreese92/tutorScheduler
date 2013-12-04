$(document).ready(function() {
	//listener on logout span
	$("span.logout").click(logout);
	
	//build the view with the current month
	buildMonthView(new Date());
	//Select the active day (today)
	buildDateView(new Date());

});

var logout = function() {
	var temp = confirm('Are you sure you wish to logout?');
	if(temp) {
		location.href='logout.php';
	}
};

var months_long = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
var months_short = ['jan', 'feb', 'mar', 'apr', 'may', 'jun', 'jul', 'aug', 'sep', 'oct', 'nov', 'dec'];
var days_long = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
var days_short = ['sun', 'mon', 'tue', 'wed', 'thu', 'fri', 'sat'];

var next_month = function(year, month) {
	buildMonthView(new Date(year, month+1));
};
var previous_month = function(year, month) {
	buildMonthView(new Date(year, month-1));
};
var set_month = function() {
	var current = new Date();
	while(isNaN(year))
		var year = prompt("What year?", current.getFullYear());
	while(isNaN(month))
		var month = prompt("What month?", current.getMonth()+1);
	if(year == null || month == null) return;
	
	month -= 1;
	buildMonthView(new Date(year, month));
};

//Calling this with a date object will build the month view for that month.
var buildMonthView = function(date) {
	var selected_date = date.getDate();
	var selected_month = date.getMonth();
	var selected_year = date.getFullYear();
	var month_div = $("#month_div");
	month_div.empty();
	month_div.append("<img onclick='next_month(" + date.getFullYear() + "," + date.getMonth() + ")' class='arrow_right' src='pics/arrow_right.gif' alt='right arrow' width='30'>");
	month_div.append("<img onclick='previous_month(" + date.getFullYear() + "," + date.getMonth() + ")' class='arrow_left' src='pics/arrow_left.gif' alt='left arrow' width='30'>");
	//add month header
	month_div.append("<h1 onclick='set_month()' id='month_text'>" + months_long[date.getMonth()] + " " + date.getFullYear() + "</h1>");
	
	var month_table = $("<table id='month_table' data-year='" + selected_year + "' data-month='" + selected_month + "'></table>");
	var month_tbody = $("<tbody></tbody>");
	month_table.append(month_tbody);
	
	var next_row = $("<tr id='calendar_header'></tr>");
	for(var i = 0; i < 7; i++) {
		next_row.append("<td>" + days_long[i] + "</td>");
	}
	month_tbody.append(next_row);
	
	//figure out which day we start on this month
	date.setDate(1);
	var next_date_num = 1;
	for(var week = 0; week < 5; week++) {
		var done_first_day = false;
		next_row = $("<tr></tr>");
		var next_day;
		
		for(var day = 0; day < 7; day++) {
			if(week == 0) {
				//if the day we're on is the first day of the month
				if(!done_first_day) {
					if(date.getDay() == day) {
						next_day = $("<td data-date='" + next_date_num + "'><span class='date_num'>" + next_date_num + "</span></td>");
						next_date_num ++;
						done_first_day = true;
					}else next_day = $("<td class='na'><span class='date_num'></span></td>");
				}else {
					next_day = $("<td data-date='" + next_date_num + "'><span class='date_num'>" + next_date_num + "</span></td>");
					next_date_num ++;
				}
			}else {
				//else set the date to the current next_date_num and see if we're still in this month. If not, stop printing days.
				date.setDate(next_date_num);
				
				if(date.getMonth() == selected_month) {
					next_day = $("<td data-date='" + next_date_num + "'><span class='date_num'>" + next_date_num + "</span></td>");
					next_date_num ++;
				}else next_day = $("<td class='na'><span class='date_num'></span></td>");
			}
			if(!next_day.hasClass('na'))
				next_day.click(getDateAndBuildDateView);
			
			next_row.append(next_day);
		}
		month_tbody.append(next_row);
	}
	
	month_div.append(month_table);
	
	//select the current day
	var today = new Date();
	if(today.getMonth() == selected_month && today.getFullYear() == selected_year)
		$("#month_table td[data-date='" + today.getDate() + "']").addClass('today');
	
	
	var data = {};
	data['year'] = selected_year;
	data['month'] = selected_month + 1;
	
	$.ajax("event.php",
			{type: 'GET',
			 cache: false,
			 data: data,
			 success: addMonthEvents,
			 error: function(jqxhr, status, error) {alert(jqxhr.responseText);}
			});
	
	//rebuild date view with whatever is currently there, just in case we need to
	var temp = $("#day_div_inner");
	if(temp.attr('data-year') != null)
		buildDateView(new Date(temp.attr('data-year'), temp.attr('data-month'), temp.attr('data-date')));
	
};
var addMonthEvents = function(data, status, jqxhr) {
	$.each(data, getJSONAndPutOnMonth);
};
var getJSONAndPutOnMonth = function(i, e) {
	var url = 'event.php/' + e;
	$.ajax(url,
		   {type: 'GET',
		    cache: false,
			success: putOnMonthView,
			error: function(jqxhr, status, error) {alert(jqxhr.responseText);}
		   });
};
//assumes that the objects are in the current month
var putOnMonthView = function(event_json) {
	var date = event_json['datetimeStart'].substring(8, 10);
	if(date.substring(0,1) == '0')
		date = date.substring(1,2);
	
	var cell = $("td[data-date='" + date + "']");
	var time = event_json['datetimeStart'].substring(10, 19);

	cell.append("<div data-time='" + time + "'>" + event_json['title'] + "</div>");
	
	//sort the list to make sure it's in order
	var items = cell.children('div').sort(function(a,b) {
		var tempA = $(a).attr('data-time');
		var tempB = $(b).attr('data-time');
		return (tempA < tempB) ? -1 : (tempA > tempB) ? 1 : 0;
	});
	cell.append(items);
	
	//if we have more than 4 items, hide all but the first 3 and put a ... in
	if(cell.children('div').length > 4) {
		cell.children('div').each(function(i, e) {
			if(i >= 4 && $(e).html() != '...')
				$(e).attr('hidden', true);
		});
		var ellipses = false;
		cell.children('div').each(function(i, e) {
			if ($(e).html() == '...')
				ellipses = true;
		});
		if(!ellipses)
			cell.append("<div data-time='23:59:59'>...</div>");
	}
};

//is only called when a day is clicked, generates a date object, and calls buildDateView.
var getDateAndBuildDateView = function() {
	var table = $('#month_table');
	var cell = $(this);
	var date = cell.attr('data-date');
	var month = table.attr('data-month');
	var year = table.attr('data-year');
	
	buildDateView(new Date(year, month, date));
};

var next_date = function(year, month, date) {
	buildDateView(new Date(year, month, date+1));
};
var previous_date = function(year, month, date) {
	buildDateView(new Date(year, month, date-1));
};
var set_day = function() {
	var current = new Date();
	while(isNaN(year))
		var year = prompt("What year?", current.getFullYear());
	while(isNaN(month))
		var month = prompt("What month?", current.getMonth()+1);
	while(isNaN(date))
		var date = prompt("What Date?", current.getDate());
	if(year == null || month == null || date == null) return;
	
	month -= 1;
	buildDateView(new Date(year, month, date));
};

//buildDateView builds the day view for whatever the date object provided
var buildDateView = function(date) {
	//remove all previous active cells
	$("#month_table").find('td').each(function(i, e) {$(e).removeClass('active'); });
	
	var selected_day = date.getDay();
	var selected_date = date.getDate();
	var selected_month = date.getMonth();
	var selected_year = date.getFullYear();
	var day_div = $("#day_div");
	
	//highlight active day
	var table = $('#month_table');
	if(table.attr('data-month') == selected_month && table.attr('data-year') == selected_year) {
		$("#month_table td[data-date='" + selected_date + "']").addClass('active');
	}
	
	day_div.empty();
	day_div.append("<img onclick='next_date(" + date.getFullYear() + "," + date.getMonth() + "," + date.getDate() + ")' class='arrow_right' src='pics/arrow_right.gif' alt='right arrow' width='30'>");
	day_div.append("<img onclick='previous_date(" + date.getFullYear() + "," + date.getMonth() + "," + date.getDate() + ")' class='arrow_left' src='pics/arrow_left.gif' alt='left arrow' width='30'>");
	//add day header
	var suffix;
	switch(date.getDate()) {
		case 1:
		case 21:
		case 31:
			suffix = 'st';
			break;
		case 2:
		case 22:
			suffix = 'nd';
			break;
		case 3:
		case 23:
			suffix = 'rd';
			break;
		default:
			suffix = 'th';
	}
	day_div.append("<h2 onclick='set_day()' id='day_text'>" + days_long[selected_day] + ", " + months_long[selected_month] + " " + selected_date + suffix + " - " + selected_year + "</h2>");
	var day_div_inner = $("<div id='day_div_inner' data-year='"+selected_year+"' data-month='"+selected_month+"' data-date='"+selected_date+"'></div>");
	var day_time_container = $("<div id='day_time_container'></div>");
	day_div_inner.append(day_time_container);
	var day_event_container = $("<div id='day_event_container'></div>");	
	day_div_inner.append(day_event_container);
	
	day_div.append(day_div_inner);
	
	//go ahead and populate the time div with the various times down the side
	var next_hour = 11;
	var next_minute = ':00';
	var next_period = 'am'
	for(var i = 0; i < 48; i++) {
		if(i%2 == 0) {
			next_hour++;
			next_minute = ':00';
		}else next_minute = ':30';
		
		if(next_hour > 12) {
			next_hour = 1;
		}else if (i == 24) {
			next_period = 'pm';
		}
		var next_div = $("<div data-time='"+Math.floor(i/2)+next_minute+"' style='height:28px; border:thin solid black;'>"+next_hour+next_minute+next_period+"</div>");
		next_div.dblclick(buildCreateEventView);
		day_time_container.append(next_div);
	}
	//get all the events and add em
	var data = {};
	data['year'] = selected_year;
	data['month'] = selected_month + 1;
	data['date'] = selected_date;
	
	$.ajax("event.php",
			{type: 'GET',
			 cache: false,
			 data: data,
			 success: addDateEvents,
			 error: function(jqxhr, status, error) {alert(jqxhr.responseText);}
			});
};
var addDateEvents = function(data, status, jqxhr) {
	$.each(data, getJSONAndPutOnDate);
}
var getJSONAndPutOnDate = function(i, e) {
	var url = 'event.php/' + e;
	$.ajax(url,
		   {type: 'GET',
		    cache: false,
			success: putOnDateView,
			error: function(jqxhr, status, error) {alert(jqxhr.responseText);}
		   });
};
//assumes the events belong in this date.  Each json object will be made into a div, the height of which will be determined by the length of the event
var putOnDateView = function(event_json) {
	var container = $("#day_event_container");
	
	var time_start = event_json['datetimeStart'].substring(11,16);
	var time_end = event_json['datetimeEnd'].substring(11,16);
	
	var length_minutes = (time_end.substring(0,2) - time_start.substring(0,2))*60;
	length_minutes += (time_end.substring(3,5) - time_start.substring(3,5));
	
	var new_div = $("<div class='date_event' data-id='"+event_json['id']+"' data-timeStart='"+time_start+"' data-timeEnd='"+time_end+"' style='height:"+length_minutes+"px;'></div>");
	new_div.append("<strong>"+event_json['title']+":</strong> " + time_start + " - " + time_end);
	new_div.append("<br>Location: " + event_json['location']);
	new_div.append("<br>" + event_json['description']);
	new_div.click(getJSONAndBuildEventView);
	
	container.append(new_div);
	
	//remove all the white spacer divs
	container.children('div.white_event').remove();
	
	//sort the list to make sure it's in order
	var items = container.children('div').sort(function(a,b) {
		var tempA = $(a).attr('data-timeStart');
		var tempB = $(b).attr('data-timeStart');
		return (tempA < tempB) ? -1 : (tempA > tempB) ? 1 : 0;
	});
	container.append(items);
	
	//add in white items to fill the empty spots
	//before the first
	var first = $(items[0]);
	if(first.attr('data-timeStart').substring(0,2) > 0 || first.attr('data-timeStart').substring(3,5) > 0) {
		//meaning the first event isn't at midnight, so we'll need blank space before it
		var length = first.attr('data-timeStart').substring(0,2)*60 + +first.attr('data-timeStart').substring(3,5);
		first.before("<div class='white_event' style='height:"+length+"px;'></div>");
	}
	//for the middle events
	for(var i = 0; i < items.length-1; i++) {
		var first = $(items[i]);
		var second = $(items[i+1]);
		var length = (second.attr('data-timeStart').substring(0,2) - first.attr('data-timeEnd').substring(0,2))*60;
		length += (second.attr('data-timeStart').substring(3,5) - first.attr('data-timeEnd').substring(3,5));
		first.after("<div class='white_event' style='height:"+length+"px;'></div>");
	}
	//after the last event
	var last = $(items[items.length-1]);
	if(last.attr('data-timeEnd').substring(0,2) < 23 || last.attr('data-timeEnd').substring(3,5) < 59) {
		//meaning the last event doesn't end at midnight, so we'll need blank space after it
		var length = (23 - last.attr('data-timeEnd').substring(0,2))*60 + (60 - last.attr('data-timeEnd').substring(3,5));
		last.after("<div class='white_event' style='height:"+length+"px;'></div>");
	}
	
};

var getJSONAndBuildEventView = function() {
	var url = 'event.php/' + $(this).attr('data-id');
	$.ajax(url,
		  {type: 'GET',
		   cache: false,
		   success: buildEventView,
		   error: function(jqxhr, status, error) {alert(jqxhr.responseText);}
		  });
};

var buildEventView = function(data, status, jqxhr) {
	var event_div = $("#event_div");
	event_div.empty();
	
	var date_string = data['datetimeStart'].substring(0, 10);
	var year = date_string.substring(0,4);
	var month = date_string.substring(5,7) - 1;
	var date = date_string.substring(8,10);
	var time_start = data['datetimeStart'].substring(11, 16);
	var time_end = data['datetimeEnd'].substring(11, 16);
	
	var date_obj = new Date(year, month, date);
	var month = date_obj.getMonth();
	var date = date_obj.getDate();
	
	day = days_long[date_obj.getDay()];
	var suffix;
	switch(date_obj.getDate()) {
		case 1:
		case 21:
		case 31:
			suffix = 'st';
			break;
		case 2:
		case 22:
			suffix = 'nd';
			break;
		case 3:
		case 23:
			suffix = 'rd';
			break;
		default:
			suffix = 'th';
	}
	
	var title = $("<h1 id='event_title_text'>"+data['title']+"</h1>");
	var datetime = $("<h3 id='event_datetime' class='center' data-datetimeStart='"+data['datetimeStart']+"' data-datetimeEnd='"+data['datetimeEnd']+"'></h3>");
	datetime.append(day+", "+months_long[month]+" "+date+suffix+", "+year+" - "+time_start+" to "+time_end);
	var location = $("<h4 id='event_location' class='center' data-location='"+data['location']+"'>Location: "+data['location']+"</h4>");
	var description = $("<span id='event_description'>"+data['description']+"</span>");
	
	var event_info_div = $("<div data-id='"+data['id']+"'></div>");
	event_info_div.append(title);
	event_info_div.append(datetime);
	event_info_div.append(location);
	event_info_div.append(description);
	event_div.append(event_info_div);
	
	//setup doubleclick handlers to edit the event
	event_info_div.on('dblclick', buildEventEditDiv);
};
var buildEventEditDiv = function() {
	var event_info_div = $(this);
	event_info_div.remove();
	
	var event_edit_div = $("<div id='event_edit_div'></div>");
	var event_div = $("#event_div");
	
	var form = $("<form id='event_edit_form' data-id='"+event_info_div.attr('data-id')+"'></form>");
	var title = $("<input name='update_title' type='text' value='"+event_info_div.find("#event_title_text").html()+"' maxlength=100>");
	var default_date = event_info_div.find("#event_datetime").attr('data-datetimeStart').substring(0,10);
	var date = $("<input name='update_date' type='date' value='"+default_date+"'>");
	var time_start = $("<input name='update_time_start' type='time' value='"+event_info_div.find("#event_datetime").attr('data-datetimeStart').substring(11,16)+"'>");
	var time_end = $("<input name='update_time_end' type='time' value='"+event_info_div.find("#event_datetime").attr('data-datetimeEnd').substring(11,16)+"'>");
	var location = $("<input name='update_location' type='text' value='"+event_info_div.find("#event_location").attr('data-location')+"' maxlength=100>");
	var description = $("<textarea name='update_description' rows='5' cols='50'>"+event_info_div.find("#event_description").html()+"</textarea>");
	var submit = $("<button type='submit'>Submit</button>");
	var delete_button = $("<button type='button' id='event_delete_button'>Delete</button>");
	
	form.append("<h1>Edit Event: "+event_info_div.find("#event_title_text").html()+"</h1>");
	form.append("Title:");
	form.append(title);
	form.append("<br>Date:");
	form.append(date);
	form.append("<br>Start Time:");
	form.append(time_start);
	form.append("<br>End Time:");
	form.append(time_end);
	form.append("<br>Location:");
	form.append(location);
	form.append("<br>Description:");
	form.append(description);
	form.append("<br>");
	form.append(submit);
	form.append(delete_button);
	event_edit_div.append(form);
	event_div.append(event_edit_div);
	
	$("#event_delete_button").click(deleteEvent);
	form.submit(sendEventUpdate);
};
var deleteEvent = function() {
	var id = $("#event_edit_form").attr('data-id');
	var url = "event.php/" + id;
	var data = {};
	data['delete'] = true;
	
	if(isNaN(id)) {
		alert("Couldn't find Event ID! Try reloading the page.");
		return;
	}
	
	var temp = confirm("Are you sure you wish to delete this event?");
	if(temp)
		$.ajax(url,
			   {type: 'GET',
			    cache: false,
				data: data,
				success: refreshDeletedEventView,
				error: function(jqxhr, status, error) {alert(jqxhr.responseText);}
			   });
};
var refreshDeletedEventView = function(data, status, jqxhr) {
	//rebuild the month/day views so they reflect the update
	var month_table = $("#month_table");
	var selected_month = month_table.attr('data-month');
	var selected_year = month_table.attr('data-year');
	buildMonthView(new Date(selected_year, selected_month));
	
	//clear the event div
	$("#event_edit_div").remove();
};
var sendEventUpdate = function(event) {
	event.preventDefault();
	
	var form = $("#event_edit_form");

	//validate the form before we fire off an ajax request
	form.children().each(function(i,e) {
		e = $(e);
		e.removeClass("invalid");
		if(e.hasClass("error_span"))
			e.remove();
	});	
	var valid = true;
	
	//validate the id
	var id = form.attr('data-id');
	if(isNaN(id)) {
		alert("Couldn't find event ID. Try reloading the page.")
		valid = false;
	}
	
	//validate the title
	var title = form.find("input[name='update_title']");
	if(title.val().trim() == '') {
		title.addClass('invalid');
		title.after("<span class='error_span'>Title cannot be empty.</span>");
		valid = false;
	}
	
	//validate date
	var date = form.find("input[name='update_date']");
	if(date.val() == '') {
		date.addClass('invalid');
		date.after("<span class='error_span'>Date cannot be empty.</span>");
		valid = false;
	}
	
	//validate time_start
	var time_start = form.find("input[name='update_time_start']");
	if(time_start.val() == '') {
		time_start.addClass('invalid');
		time_start.after("<span class='error_span'>Start time cannot be empty.</span>");
		valid = false;
	}
	
	//validate time_end
	var time_end = form.find("input[name='update_time_end']");
	if(time_end.val() == '') {
		time_end.addClass('invalid');
		time_end.after("<span class='error_span'>End time cannot be empty.</span>");
		valid = false;
	}
	
	//Check end comes after start
	if(time_start.val() >= time_end.val()) {
		time_start.addClass('invalid');
		time_start.after("<span class='error_span'>Start time must occur before end time.</span>");
		valid = false;
	}
	
	//the rest is always valid: it'll either have something or be empty, but we don't care either way.
	var location = form.find("input[name='update_location']");
	var description = form.find("textarea[name='update_description']");
	
	if(!valid)
		return;
		
	//put together the object to send to the server and call the update
	var data = {};
	data.id = id;
	data.title = title.val();
	data.location = location.val();
	data.description = description.val();
	data.datetimeStart = date.val() + " " + time_start.val() + ":00";
	data.datetimeEnd = date.val() + " " + time_end.val() + ":00";
	
	var url = 'event.php/' + id;
	$.ajax(url,
		   {type: 'POST',
		    cache: false,
			data: data,
			success: updateEventViews,
			error: function(jqxhr, status, error) {alert(jqxhr.responseText);}
		   });
};
var updateEventViews = function(data, status, jqxhr) {
	//rebuild the month/day views so they reflect the update
	var month_table = $("#month_table");
	var selected_month = month_table.attr('data-month');
	var selected_year = month_table.attr('data-year');
	buildMonthView(new Date(selected_year, selected_month));
	
	//rebuild the event view
	buildEventView(data, status, jqxhr);
};

var buildCreateEventView = function() {
	var time = $(this).attr('data-time');
	if(time.substring(1,2) == ':') {
		time = '0' + time;
	}
	time = time + ':00';
	var day_div_inner = $("#day_div_inner");
	var year = day_div_inner.attr("data-year");
	var month = +day_div_inner.attr("data-month") + 1;
	if(month < 10)
		month = '0' + month;
	var date = day_div_inner.attr("data-date");
	if(date < 10)
		date = '0' + date;
	
	var event_div = $('#event_div');
	event_div.empty();
	
	var form = $("<form id='event_create_form'></form>");
	var title = $("<input name='title' type='text' maxlength=100>");
	var default_date = year + "-" + month + "-" + date;
	var date = $("<input name='date' type='date' value='"+default_date+"'>");
	var time_start = $("<input name='time_start' type='time' value='"+time+"'>");
	var time_end = $("<input name='time_end' type='time'>");
	var location = $("<input name='location' type='text' maxlength=100>");
	var description = $("<textarea name='description' rows='5' cols='50' maxlength=1000></textarea>");
	var submit = $("<button type='submit'>Submit</button>");
	
	form.append("<h1>Create Event:</h1>");
	form.append("Title:");
	form.append(title);
	form.append("<br>Date:");
	form.append(date);
	form.append("<br>Start Time:");
	form.append(time_start);
	form.append("<br>End Time:");
	form.append(time_end);
	form.append("<br>Location:");
	form.append(location);
	form.append("<br>Description:");
	form.append(description);
	form.append("<br>");
	form.append(submit);
	event_div.append(form);
	
	form.submit(createEvent);
};
var createEvent = function() {
	event.preventDefault();
	
	var form = $("#event_create_form");

	//validate the form before we fire off an ajax request
	form.children().each(function(i,e) {
		e = $(e);
		e.removeClass("invalid");
		if(e.hasClass("error_span"))
			e.remove();
	});	
	var valid = true;
	
	//validate the title
	var title = form.find("input[name='title']");
	if(title.val().trim() == '') {
		title.addClass('invalid');
		title.after("<span class='error_span'>Title cannot be empty.</span>");
		valid = false;
	}
	
	//validate date
	var date = form.find("input[name='date']");
	if(date.val() == '') {
		date.addClass('invalid');
		date.after("<span class='error_span'>Date cannot be empty.</span>");
		valid = false;
	}
	
	//validate time_start
	var time_start = form.find("input[name='time_start']");
	if(time_start.val() == '') {
		time_start.addClass('invalid');
		time_start.after("<span class='error_span'>Start time cannot be empty.</span>");
		valid = false;
	}
	
	//validate time_end
	var time_end = form.find("input[name='time_end']");
	if(time_end.val() == '') {
		time_end.addClass('invalid');
		time_end.after("<span class='error_span'>End time cannot be empty.</span>");
		valid = false;
	}
	
	//Check end comes after start
	if(time_start.val() >= time_end.val()) {
		time_start.addClass('invalid');
		time_start.after("<span class='error_span'>Start time must occur before end time.</span>");
		valid = false;
	}
	
	//the rest is always valid: it'll either have something or be empty, but we don't care either way.
	var location = form.find("input[name='location']");
	var description = form.find("textarea[name='description']");
	
	if(!valid)
		return;
		
	//put together the object to send to the server and call the update
	var data = {};
	data.title = title.val();
	data.location = location.val();
	data.description = description.val();
	data.datetimeStart = date.val() + " " + time_start.val();
	if(data.datetimeStart.length == 16)
		data.datetimeStart = data.datetimeStart + ":00";
	data.datetimeEnd = date.val() + " " + time_end.val() + ":00";
	
	var url = 'event.php';
	$.ajax(url,
		   {type: 'POST',
		    cache: false,
			data: data,
			success: updateEventViews,
			error: function(jqxhr, status, error) {alert(jqxhr.responseText);}
		   });
	
};

var updateViews = function(data, status, jqxhr) {
	var month_view = $("#month_table");
	var year = month_view.attr('data-year');
	var month = month_view.attr('data-month');
	
	buildMonthView(new Date(year, month));
};
