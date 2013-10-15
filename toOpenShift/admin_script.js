$(document).ready(function () {
	//First, add a checkbox to each cell
	$("table#admin_table td").not(".na").each(function(i, e) {
		td = $(e);
		var name = td.attr("id");
		var checkbox = $("<input type='checkbox'>");
		checkbox.attr("name",name+"_val");
		checkbox.prop("checked",true);
		checkbox.hide();
		//now the checkbox is unchecked and has a name value of [td id]_val, as in mon09_val
		td.append(checkbox);
		
		//now let's check the database to see if it's closed during this shift
		var day = name.substring(0,3);
		var hour = name.substring(3,5);

		td.addClass($("tr#"+day+" td."+hour+"").html());
		if(td.hasClass('closed')) {
			checkbox.prop('checked', false);
		}
	});
	
	//Now we'll set up the handler for each cell that isn't marked by a class "na"
	$('table#admin_table td').not('.na').click(clicked);
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