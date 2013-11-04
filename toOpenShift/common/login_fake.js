$(document).ready(function() {
	var target = $('#form_target').html();
	var forward = $('#forward');
	var actual_url = $(location).attr('href');
	
	
	switch(target) {
	case 'admin':
		forward.attr('action', actual_url.replace('common/login_fake_validator.php', 'admin/admin.php'));
		break;
	case 'grad':
	case 'ugrad':
		forward.attr('action', actual_url.replace('common/login_fake_validator.php', 'tutor/tutor.php'));
		break;
	}
	
	forward.trigger('submit');
});
