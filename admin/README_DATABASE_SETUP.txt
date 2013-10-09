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