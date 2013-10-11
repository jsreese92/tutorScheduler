UNC Writing Center Tutor Scheduler
==================================

Openshift
---------

Our homepage on Openshift is here: http://wctestapp-wcscheduletest.rhcloud.com/

* The way we're going to manage the two repositories is we will commit and
add to this repository. Then, either Nic or Jordan (or Eric if he can get
openshift set up) will make the specific changes needed to work on 
openshift (changing database name/password) in our respective openshift git
repositories, leaving the files here as-is to be able to run on our local
machines and push to openshift.  

* Openshift has our files sitting in a php/ directory. Files ready to be put
up on openshift that have been tested locally go in the php/ directory in 
this repository. Files in other directories here can be assumed to be only
for personal use and not necessarily ready to go up on openshift. 

* When openshift is updated, the files from the php/ directory here will be 
pushed to openshift and the necessary changes will be made once they are on
openshift so as not to give away important server and databse information
since this is a public repository.

Project Homepage for COMP 523
-----------------------------
http://www.unc.edu/~jonesep/

Github Set-up Instructions
--------------------------

Alright so here I'm going to attempt to put a tutorial oh how to set all this
  up as I go.

### To link up to this repository execute the following commands:
1. git init 
2. git remote add origin https://github.com/jsreese92/tutorScheduler.git

    Here's a great graphic that illustrates what I'm about to explain:
    http://osteele.com/images/2008/git-transport.png

    To get the most recent versions of a repository, which you should ALWAYS do 
    before doing anything else, execute the following command:

3. git pull origin master

    To upload (commit) a file to our repository execute the following commands:

4. git add \<file to be commited\>

5. git commit -m "\<message explaining what you did\>"

6. git push -u origin master (this pushes everything to github that you've 
    committed to your local repository, check the graphic above if this seems 
    weird.)

    Also, when in doubt, the following command may give you an idea on what you
    need to do next:
  
7. git status
