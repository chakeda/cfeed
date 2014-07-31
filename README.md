cfeed
=====

Open Source Live Website Traffic Feed

=====

http://imgur.com/JwA0LkC

=====

DESCRIPTION

=====

cfeed is an open source web application similar to Feedjit that tracks a website’s internet traffic in real time. 

There are three main ways to analyze web traffic: Feedjit, Statcounter, and Google Analytics. cfeed aims a middle ground between those three applications. 

cfeed aims simplicity like Feedjit, but functionality like statcounter. cfeed’s current outlook resembles that of feedjit: however, it has a little bit more functionality, such as listing IP. It doesn't have browser/OS data like Feedjit does, because it seems unnecessary. Currently cfeed has a function that gets visitor data from http://freegeoip.net, so a lot more information can be listed, so long as the front end is developed. 

cfeed produces a script that the webmaster puts on the website header or sidebar. The script sends visitor data to the chakeda.com database. The visitor data is posted on live.php?website=thewebsitecom. 

So, it is very similar to Feedjit; but simple, open source, and (in the future) more functionality. 

=====

HOW TO USE:

=====

The website's been offline since June 24th. cFeed is still on Github, and is deployable locally or on your website if you want open source web traffic monitoring. You will need a website/server, PHP 5.3, and MySQL 5.x

However, 3 things in the code must be changed before it can be deployed. Last three are optional.

 - cfeed_members.sql (optional)
Run this file in your MySQL to create a member database. The database is useless to the functioning of cfeed but can be used for organizing which websites you are tracking, and can be extended to password protect traffic feeds.

- cfeed_chakedacom.sql (optional)
Run this file in your MySQL to get an example of web traffic data which can be viewed at (/cfeed/live.php?=chakedacom)

- header.php: (optional)
Images and direct links are still pointing to chakeda.com. Simply ctrl-f "chakeda" in this file, ignore them or delete them all. 

- functions.php:
In generateCode(), Change $script_code content to point to your server/website instead. All three variants.

- datauc.php; data.php; datablogger.php:
In the AJAX code, (url: http://www.chakeda.com/cfeed/senddata.php), point it to your website instead

- database.php
Put your database details here

Simply make a directory /cfeed/ in your web root folder, and drop all the cfeed files in it. Then go to /cfeed/index.php and simply follow the prompts. Now you are tracking your (and maybe others) web traffic for free open source style.

Feel free to fork. I will improve cFeed when I feel like it


=====

TODO

=====

Conceptual
 - Coloring of IPs for individual visitor tracking
 - Daily/Weekly/Monthly amount of website impressions count
 - Ability to host cFeed on the user’s website, so they can see the feed on their own website instead of chakeda.com
 - Visitor’s time spent on the website until next imp
 - Further traffic analysis, like Statcounter’s graphs

Simple
 - Limit on display length of URL 
 - SQL different ORDER BY commands through click on table header
 - SQL table speed/data optimization
 - Remove debug display for AJAX
 - cFeed logo, stylesheet optimization
