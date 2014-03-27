suite116
========

Harlem Event Space Site

Pushing to Prod
================
To push changes to prod the following has to be configured into git

[remote "origin"] 
  url = https://github.com/natalieolivo/suite116.git 
  fetch = +refs/heads/:refs/remotes/origin/ 

[remote "prod"] 
  url = "ssh://suite116@suite116.com/var/chroot/home/content/33/7051533/html" 
  fetch = +refs/heads/:refs/remotes/prod/
  
Once this is setup in your .git config file, then you can perform a git push prod to get your changes to the godaddy host server.
