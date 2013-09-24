REMINDER: The first thing you should ALWAYS do is \<git pull origin master\>!

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
