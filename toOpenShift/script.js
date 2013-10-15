$(document).ready(function () {
	//First, we'll set every <select> EXCEPT for the availability one to null, and before they submit we'll make sure
	//	EVERY cell is filled.  We're also going to go ahead and hide every one.
	$('select').not('#avail').each(function(i, e) {
		var element = $(e);
		element.val(null);
		element.hide();
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