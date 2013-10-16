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

You'll also need to change the database connection at the top of ALL php files: admin.php AND requests.php because right now it's connecting to 'localhost', 'jonesep', '', 'tutorScheduler'

NOTE: YOU SHOULD NEVER ACCESS requests.php UNLESS it is through the submit button.  I'm using pickStudent.php to mock up the login page, where the current active student is selected. First go there and pick a PID, THEN you can mess with the request form.