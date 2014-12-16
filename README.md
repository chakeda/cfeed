cfeed
=====

Open Source Live Website Traffic Feed

=====

cFeed in action

![alt tag](http://i.imgur.com/JwA0LkC.png)

=====

DESCRIPTION

=====

cfeed is an open source web application similar to Feedjit that tracks a website’s internet traffic in real time.

It can be installed locally on your own web server or your website, something unprecedented in web traffic analyzers. This allows privacy of your web traffic, and the facilitation of checking it. No longer do you have to login or see advertisements when you want to monitor your website's traffic. Being open source, you can also edit it to your needs. 

There are three main ways to analyze web traffic: Feedjit, Statcounter, and Google Analytics. cfeed functionality aims a middle ground between those three applications. 

cfeed aims visual simplicity like Feedjit, but rich in data like statcounter. cfeed’s current outlook resembles that of Feedjit. Currently cfeed has a function that gets visitor data from http://freegeoip.net, so a lot more information can be listed, so long as the front end is developed. 

cfeed produces a script to put on a website's header or sidebar. The script sends visitor data to the cfeed database. The visitor data is posted on live.php?website=thewebsitebeingtrackedcom. 

So cFeed is an open source web traffic retrieval web application that can be installed locally or on a website. All you need to do is paste javascript on the website and the web traffic data is sent to you. 

=====

HOW TO USE: Written July 31st

=====

chakeda.com (where cFeed was formerly hosted) has been offline since June 24th. cFeed is still here on Github, and is deployable locally or on your website if you want open source web traffic monitoring. You will need a website/server, PHP 5.3, and MySQL 5.x

EDIT 12/14/14: cFeed is now hosted at: http://www.kitechristianson.com/cfeed/

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

Simply make a directory /cfeed/ in your web root folder, and drop all the cfeed files in it. Then go to /cfeed/index.php and simply follow the prompts. Now you are tracking your (or others) web traffic locally, free, open source-ly.

Feel free to fork. I will improve cFeed when I feel like it :P


=====

TODO

=====

 - EDIT 12/14/14: Deployability can be enhanced considerably. 
 - Coloring of IPs for easier individual visitor tracking
 - Count the Daily/Weekly/Monthly amount of website impressions and display neatly
 - Installment interface instead of editing the three files
 - Visitor’s time spent on the website until next impression
 - Further traffic analysis, such as graphs
 - Limit on display length of URL 
 - SQL different ORDER BY commands through click on table header
 - SQL table speed/data optimization
 - Remove debug display for AJAX
 - cFeed logo, stylesheet optimization
