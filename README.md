[![Build Status](https://scrutinizer-ci.com/g/johe14/rss-feed/badges/build.png?b=master)](https://scrutinizer-ci.com/g/johe14/rss-feed/build-status/master) [![Code Coverage](https://scrutinizer-ci.com/g/johe14/rss-feed/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/johe14/rss-feed/?branch=master) [![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/johe14/rss-feed/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/johe14/rss-feed/?branch=master)
# CRssfeed a PHP class for displaying a RSS feed
A simple RSS-reader module for the micro framework Anax MVC. 
## License
This module is licensed according to MIT-license.
## Installation (for Anax MVC)
Use git clone or download a copy.   
Add the folder `src/Rssfeed` to `app/src`  
Place the file `test-rss.php` in the `webroot` folder  
Point the browser to the file `test-rss.php`, you should then see a test feed.  
## Configuration
Parameters:
* `url` = the RSS feed
* `heading` = a heading for the RSS feed
* `items` = number of items to show in the RSS list
