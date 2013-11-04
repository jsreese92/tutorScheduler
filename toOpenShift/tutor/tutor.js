$(document).ready(function() {
	var form = $('#forward');

	form.append("<button type='button' onclick='goToRequests()'>Set Available Hours</button><br>");
	form.append("<button type='button' onclick='goToHours()'>View Assigned Hours</button>");
});

var goToRequests = function() {
	var form = $('#forward');
	var actual_url = $(location).attr('href');
	
	form.attr('action', actual_url.replace('tutor.php', 'tutor_requests.php'));
	form.trigger('submit');
};

var goToHours = function() {
	var form = $('#forward');
	var actual_url = $(location).attr('href');
	
	form.attr('action', actual_url.replace('tutor.php', 'tutor_hours.php'));
	form.trigger('submit');
};

var logout = function() {
	var form = $('#logout_form');
	form.attr('action', './../common/logout.php');
	form.trigger('submit');
};
