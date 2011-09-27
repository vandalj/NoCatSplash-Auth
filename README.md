# About NoCatSplash Auth
I wrote these PHP scripts to provide a clean base for NoCatSplash users to build off of.

# Note
NoCatSplash doesn't support authentication out-of-box on DD-WRT implementations, NoCatSplash Auth
allows you to add a layer of authentication. However NoCatSplash isn't designed to provide authentication
and can be circumvented.

An intelligent user/hacker could easily mimic the action caused by pressing the button with a webpage of their own. Although
they would have to repeat this every time NoCatSplash times them out. Besides you can always tweak the settings in your router
to make up for the backdoor like setting time-based access restrictions, lowering NoCatSplash's login timeout, and blocking ports to
make your Hotspot less attractive to hackers.

If you need something with more control I would recommend looking into Chillispot, there's a bit more setup and hardware involved though.
Sputnik and HotspotSystem.com also come into mind if you don't mind paying for a managed service.

# Requirements
* Webserver with PHP
* Device Setup to use NoCatSplash (I.e: DD-WRT Router)

# Installation
1. Upload the files to your webserver.
2. Modify the values in config.php for your environment using a text editor.
3. Add usernames and passwords to auth.php file.
4. Configure NoCatSplash Device to use NoCatSplash Auth. See config.php script comments for suggested configuration settings.
5. Log into your NoCatSplash Hotspot using the username 'user' and using the password 'test' (without single quotes).

# Helpful Links
* Gengar's DevBlog DD-WRT NoCatSplash Setup http://dev.gengar.org/2011/02/nocatsplash/
* DD-WRT NoCatSplash Wiki http://www.dd-wrt.com/wiki/index.php?title=NoCatSplash