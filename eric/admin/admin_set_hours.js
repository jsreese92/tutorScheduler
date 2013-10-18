$(document).ready(function () {
	//First, add a checkbox to each cell
	$("table#admin_table td").not(".na").each(function(i, e) {
		var td = $(e);
		var name = td.attr("id");
		var checkbox = $("<input type='checkbox'>");
		checkbox.attr("name",name+"_val");
		checkbox.prop("checked",true);
		checkbox.hide();
		//now the checkbox is checked and has a name value of [td id]_val, as in mon09_val
		td.append(checkbox);
		
		//now let's check the database to see if it's closed during this shift
		check_closed(td);
	});
	//add a checkbox that will automatically check if we click the submit button, so the php script won't accidentally set the database values if we didn't mean to
	var checkbox = $("<input type='checkbox'>");
	checkbox.attr("name","submit_checkbox");
	checkbox.attr("id","submit_box_id");
	checkbox.hide();
	$('form').append(checkbox);
	
	//Now we'll set up the handler for each cell that isn't marked by a class "na"
	$('table#admin_table td').not('.na').click(clicked);
	
	//If this triggers, it means we just hit submit
	if($('#submit_check_span').html() == 'true') {
//		alert('Successfully submitted hours!');
		$('body').prepend("<div id=success>Successfully Submitted Hours!</div>");
		$('#success').delay(10000).fadeOut(1000);
	}
});

var clicked = function(event) {
	var current_cell = $(this);
	var current_checkbox = current_cell.find("input");
	current_cell.toggleClass("closed");
	current_cell.toggleClass("open");
	current_checkbox.prop("checked", !current_checkbox.prop("checked"));
};

var clear_admin = function() {
	var r = confirm("Are you sure you want to clear the form?");
	
	if(r) {
		$("table#admin_table td").not(".na").each(function(i, td) {
			var e = $(td);
			e.removeClass('closed');
			e.addClass('open');
			e.children('input').prop('checked', true);
		});
	}
};

var submit_admin = function() {
	$('#submit_box_id').prop('checked',true);
};

var reset_admin = function() {
	var r = confirm("Are you sure you want to reset the form to the previous submission?");

	if(r) {
		$("table#admin_table td").not(".na").each(function(i, e) {
			check_closed($(e));
		});
	}
};

//check_closed takes in a jqueryified cell and checks the table to determine if the center is closed
var check_closed = function(td) {
	var name = td.attr("id");
	
	var day = name.substring(0,3);
	var hour = name.substring(3,5);

	td.removeClass();
	td.addClass($("table#hours_database_result tr."+day+" td."+hour+"").html());
	if(td.hasClass('closed')) {
		td.children('input').prop('checked', false);
	}else if(td.hasClass('open')) {
		td.children('input').prop('checked', true);
	}
};