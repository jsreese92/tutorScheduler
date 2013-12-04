$(document).ready(function() {
	$("form[name='new_user']").submit(new_user);
	$("form[name='existing_user']").submit(existing_user);
});

var new_user = function(event) {
	event.preventDefault();
	var new_username = $("input[name='new_username']");
	var new_password_first = $("input[name='new_password_first']");
	var new_password_second = $("input[name='new_password_second']");
	var valid = true;
	
	$("form[name='new_user']").children().each(function(i,e) {
		e = $(e);
		e.removeClass("invalid");
		if(e.hasClass("error_span"))
			e.remove();
	});	
	
	if(new_username.val() == '') {
		new_username.addClass('invalid');
		valid = false;
		new_username.after("<span class='error_span'>Username cannot be empty!</span>");
	}
	if(new_password_first.val() == '') {
		new_password_first.addClass('invalid');
		valid = false;
		new_password_first.after("<span class='error_span'>Password cannot be empty!</span>");
	}
	if(new_password_second.val() == '') {
		new_password_second.addClass('invalid');
		valid = false;
		new_password_second.after("<span class='error_span'>Password cannot be empty!</span>");
	}
	if(new_password_first.val() != new_password_second.val()) {
		new_password_first.addClass('invalid');
		valid = false;
		new_password_first.after("<span class='error_span'>Passwords must match!</span>");
	}
	if(!valid) return;
	
	//AJAX TO ADD NEW USER
	var user_info = {};
	user_info.new_username = new_username.val();
	user_info.new_password = new_password_first.val();
	
	$.ajax('users.php',
			{type: 'POST',
			 data: user_info,
			 cache: false,
			 success: createUserSuccess,
			 error: createUserError
			});

};
var createUserSuccess = function(data, status, jqxhr) {
	alert('Account successfully created');
	$("input[name='new_username']").val('');
	$("input[name='new_password_first']").val('');
	$("input[name='new_password_second']").val('');
};
var createUserError = function(jqxhr, status, error) {
	alert(error);
};

var existing_user = function(event) {
	event.preventDefault();
	var username = $("input[name='username']");
	var password = $("input[name='password']");

	var user_info = {};
	user_info.username = username.val();
	user_info.password = password.val();
	
	//AJAX TO LOGIN
	$.ajax('users.php',
			{type: 'GET',
			 data: user_info,
			 cache: false,
			 success: loginSuccess,
			 error: loginError
			});
			
};
var loginSuccess = function(data, status, jqxhr) {
	location.href='calendar.php';
}
var loginError = function(jqxhr, status, error) {
	alert(error);
}
