/*
	WRITTEN BY: Eric Jones
	LAST EDITED: 12/8/2013
	this script simply forwards the user when buttons are clicked
*/


var goToSetHours = function() {
	window.location = './admin_set_hours.php';
};

var goToEditEmployees = function() {
	window.location = './admin_add_edit_employees.php';
};

var goToRequests = function() {
	window.location = './admin_view_requests.php';
};

var logout = function() {
	window.location = './../common/logout.php';
};
