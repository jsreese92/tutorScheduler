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
	
	
	/*
	//Checking the default hours where the center is closed, and adding the closed attribute
	
	//to knock out an entire row (all 8am shifts for every day, for instance)..
	$("#07").children().not(".na").each(function(i, e) {
		td = $(e);
		//for each child (td) of #07 (row 07)
		td.addClass("closed");
		td.find("input").prop("checked",false);
	});
	//8am hours..
	$("#08").children().not(".na").each(function(i, e) {
		td = $(e);
		
		td.addClass("closed");
		td.find("input").prop("checked",false);
	});
	//8pm hours..
	$("#20").children().not(".na").each(function(i, e) {
		td = $(e);
		
		td.addClass("closed");
		td.find("input").prop("checked",false);
	});
	//9pm hours..
	$("#21").children().not(".na").each(function(i, e) {
		td = $(e);
		
		td.addClass("closed");
		td.find("input").prop("checked",false);
	});
	
	//to take off a block of hours in one day, ie sunday from 9am to 4pm shift..
	for(var i=9; i<=16;i++) {
		var td;
		if(i<10) {
			td = $("#sun0"+i);
		}else td = $("#sun"+i);
		td.addClass("closed");
		td.find("input").prop("checked",false);
	}
	//friday from 5 to closing
	for(var i=17; i<=19;i++) {
		var td;
		if(i<10) {
			td = $("#fri0"+i);
		}else td = $("#fri"+i);
		td.addClass("closed");
		td.find("input").prop("checked",false);
	}
	//saturday hours
	for(var i=9; i<=19;i++) {
		var td;
		if(i<10) {
			td = $("#sat0"+i);
		}else td = $("#sat"+i);
		td.addClass("closed");
		td.find("input").prop("checked",false);
	}
*/
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
