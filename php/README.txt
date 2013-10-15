In order for these scripts to work, you'll need a table named openHours with 18 columns and 7 rows:

day | h07 | h08 | h09 | ... | h22 | h23
----------------------------------------
sun |  0  |  0  |  0  | ... |  0  |  0  
mon |  0  |  0  |  0  | ... |  0  |  0  
.	.	.	.	.
.	.	.	.	.	
.	.	.	.	.
sat |  0  |  0  |  0  | ... |  0  |  0  

the 'day' column is the primary key,type VARCHAR with length 3.  each h07...h23 column is an INT.

You'll also need to change the database connection at the top of ALL php files: admin.php, admin_submit_hours.php, requests.php, AND requests_submit.php because right now it's connecting to 'localhost', 'jonesep', '', 'tutorScheduler'

NOTE: YOU SHOULD NEVER ACCESS admin_set_script.php or requests_submit UNLESS it is through the submit button.  IF YOU DO, IT WILL SCREW THINGS UP.  We should probably fix this...somehow. But hell if I know how.  I'm sure it's pretty straightforward to check if the page was reached from the submit button and only run the script if it was, but I'm not sure.  I'll look into it.
