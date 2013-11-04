$(document).ready(function() {
	var form = $('#forward');

	form.append("<button type='button' onclick='goToSetHours()'>Set Writing Center Hours</button><br>");
	form.append("<button type='button' onclick='goToEditEmployees()'>Add/Edit/Remove Employees</button>");
});

var goToSetHours = function() {
	var form = $('#forward');
	var actual_url = $(location).attr('href');
	
	form.attr('action', actual_url.replace('admin.php', 'admin_set_hours.php'));
	form.trigger('submit');
};

var goToEditEmployees = function() {
	var form = $('#forward');
	var actual_url = $(location).attr('href');
	
	form.attr('action', actual_url.replace('admin.php', 'admin_add_edit_employee.php'));
	form.trigger('submit');
};

var logout = function() {
	var form = $('#logout_form');
	form.attr('action', './../common/logout.php');
	form.trigger('submit');
};
