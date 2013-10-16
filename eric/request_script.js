$(document).ready(function () {
	//First, we'll select every <td> EXCEPT for those with the 'na' class. We'll add a dropdown to each.
	
	$("table#requests_table td").not(".na").each(function(i, e) {
		td = $(e);
		var name = td.attr("id");
		var dropdown = $("<select>");
		dropdown.attr("name",name);
		dropdown.append("<option value='0'>Busy</option>" +
				"<option value='1'>Prefer Not</option>" +
				"<option value='2'>Can Work</option>" +
				"<option value='3'>Perfect</option>");
		dropdown.hide();
		
		//now the dropdown is in place and has a name value of [td name], as in mon09
		td.append(dropdown);
		dropdown.val(null);
		
		//now let's check the database to see if it's closed during this shift
		var day = name.substring(0,3);
		var hour = name.substring(3,5);
		
		if($("tr#"+day+" td."+hour+"").html() == 'closed') {
			td.append('Closed');
			td.addClass('na');
			dropdown.val(0);
		}
	});

	//Next we'll set up a handler for when the submit button is clicked, to check that every cell has been filled
	$('#request_form').submit(function(event) {
		//check that every select has been picked and set to a value:
		var complete = true;
		$('select').each(function(i, e) {
			if($(e).val() == null) {
				complete = false;
			}
		});
		if(!complete) {
			alert('You need to completely fill out the form!');
			event.preventDefault();
		}
	});
	
	//Now, we'll set up an event handler for a click on every cell in the table EXCEPT for headers, times down the left,
	//	and N/A blocks where the center is not open
	$('td').not('.na').click(clicked);
});

var clicked = function(event) {
	var cell = $(this);
	var availability = $('select#avail').val();
	var avail_num = null;
	
	//Change the class(and hence the color) of the cell based on the availability the user has selected. We'll also
	//	translate the availability value into its equivalent number to facilitate setting the cell value later.  We'll
	//	have to remove all the other class tags (in case we're changing a cell from one class to another) and then toggle
	//	the appropriate availability so it'll turn on if it's currently off and turn off if it's currently on.
	if(availability=='busy') {
		cell.removeClass('prefer_no can perfect');
		avail_num = 0;
	}else if(availability=='prefer_no') {
		cell.removeClass('busy can perfect');
		avail_num = 1;
	}else if(availability=='can') {
		cell.removeClass('busy prefer_no perfect');
		avail_num = 2;
	}else if(availability=='perfect') {
		cell.removeClass('busy can prefer_no');
		avail_num = 3;
	}
	
	cell.toggleClass(availability);
	
	//now it's time to change the actual value contained by the cell
	if(cell.hasClass(availability))				//meaning we just turned ON the selection
		cell.find('select').val(avail_num);
	else cell.find('select').val(null);			//meaning we just deselected it
};

var clear_requests = function() {
	var r = confirm("Are you sure you want to clear the form?");
	
	if(r) {
		$("table#requests_table td").not(".na").each(function(i, td) {
			var e = $(td);
			e.removeClass('busy prefer_no can perfect');
			e.children('select').val(null);
		});
	}
};