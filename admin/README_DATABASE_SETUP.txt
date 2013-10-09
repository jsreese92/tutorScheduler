In order for this script to work, you'll need a table named openHours with 18 columns and 7 rows:

day | h07 | h08 | h09 | ... | h22 | h23
----------------------------------------
sun |  0  |  0  |  0  | ... |  0  |  0  
mon |  0  |  0  |  0  | ... |  0  |  0  
.	.	.	.	.
.	.	.	.	.	
.	.	.	.	.
sat |  0  |  0  |  0  | ... |  0  |  0  

the 'day' column is the primary key,type VARCHAR with length 3.  each h07...h23 column is an INT.

You'll also need to change the database connection at the top of both admin.php and admin_set_script.php because right now it's connecting to 'localhost', 'jonesep', '', 'tutorScheduler'

NOTE: YOU SHOULD NEVER ACCESS admin_set_script.php UNLESS it is through the submit button on admin.php.  IF YOU DO, IT WILL AUTOMATICALLY SET EVERY SHIFT TO 'closed' AND YOU'LL HAVE TO REDO THE HOURS LATER.  We should probably fix this...somehow. But fuck if I know how.  I'm sure it's pretty straightforward to check if the page was reached from the submit button and only run the script if it was, but I'm not sure.  I'll look into it.