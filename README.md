cfeed
=====

Open Source Live Website Traffic Feed

=====

cfeed is an open source web application similar to Feedjit that tracks a website’s internet traffic in real time. 

You can see it live here: 
http://www.chakeda.com/cfeed/live.php?website=chakedacom

Feel free to use it as well. It is deployed here:
http://www.chakeda.com/cfeed/

There are three main ways to analyze web traffic: Feedjit, Statcounter, and Google Analytics. cfeed aims a middle ground between those three applications. 

cfeed aims simplicity like Feedjit, but functionality like statcounter. cfeed’s current outlook resembles that of feedjit: however, it has a little bit more functionality, such as listing IP. It doesn't have browser/OS data like Feedjit does, because it seems unnecessary. Currently cfeed has a function that gets visitor data from http://freegeoip.net, so a lot more information can be listed, so long as the front end is developed. 

cfeed produces a script that the webmaster puts on the website header or sidebar. The script sends visitor data to the chakeda.com database. The visitor data is posted on live.php?website=thewebsitecom. 

So, it is very similar to Feedjit; but simple, open source, and (in the future) more functionality. 



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
