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