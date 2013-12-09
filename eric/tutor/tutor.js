/*
	WRITTEN BY: Eric Jones
	LAST EDITED: 12/8/2013
	This script simply forwards users to the appropriate page when buttons are clicked
*/


var goToRequests = function() {
	window.location = './tutor_requests.php';
};

var goToHours = function() {
	window.location = './tutor_hours.php';
};

var logout = function() {
	window.location = './../common/logout.php';
};
