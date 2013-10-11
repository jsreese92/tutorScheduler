REMINDER: The first thing you should ALWAYS do is \<git pull origin master\>!

Our homepage on Openshift is here: http://wctestapp-wcscheduletest.rhcloud.com/
--  The way we're going to manage the two repositories is we will commit and
    add to this repository. Then, either Nic or Jordan (or Eric if he can get
    openshift set up) will make the specific changes needed to work on 
    openshift (changing database name/password) in our respective openshift git
    repositories, leaving the files here as-is to be able to run on our local
    machines and push to openshift.  

Instructions on how to set up this repository and commit is below.

Alright so here I'm going to attempt to put a tutorial oh how to set all this
  up as I go.

To link up to this repository execute the following commands:

  -- git init 

  -- git remote add origin https://github.com/jsreese92/tutorScheduler.git

Here's a great graphic that illustrates what I'm about to explain:

  -- http://osteele.com/images/2008/git-transport.png

To get the most recent versions of a repository, which you should ALWAYS do 
  before doing anything else, execute the following command:

  -- git pull origin master

To upload (commit) a file to our repository execute the following commands:

  -- git add \<file to be commited\>

  -- git commit -m "\<message explaining what you did\>"

  -- git push -u origin master
    (this pushes everything to github that you've committed to your local
      repository, check the graphic above if this seems weird.)

Also, when in doubt, the following command may give you an idea on what you
  need to do next:
  
  -- git status
