#Flatler - e107 v2.x Bootstrap Theme

##What is Flatler

This theme is loosely based on the Flatly Twitter Bootstrap theme ([http://bootswatch.com/flatly](http://bootswatch.com/flatly)). I say loosely based because I am using the Flatly Bootstrap css, but I am implementing a lot of features I've seen while browsing the web to see what's new out there, plus I'm adding css overrides where needed.

##Current Features

* Uses Twitter's Bootstrap theming system
* Two column layout: Left side menus and main section for content
* A menu to the left of the site logo and name, maybe for small announcements (new releases, download now, etc...)
* 3 menus in the footer (maybe for different sections of the site, twitter feeds, rss feeds, etc...)
* Dynamically creates social network icon buttons in top navigation bar if you have made any entries in e107's 'Preferences->Social Options' page. Currently supports Facebook, Google+, Twitter, Youtube, Flickr, Instagram. LinkedIn and Github. The social icons will appear in that order.

##Known Issues

* Having trouble with template overriding. It works fine if you are not logged into the system, but once you log in it uses e107's core templates. Not sure if this is just a setup issue on my localhost and live site. Feedback is welcome. I submitted a bug report on e107's Github regarding this: Issue #387

##Planned Features

* Create multiple layouts
    - Two column layout: Side menus on the right hand side, main content on the left
    - Three column layout: Left and right side menus, content in the middle
* Possibly change forum icons (New post/Locked/Sticky/etc...)
* Possibly alter/replace Bootstrap badges (css/colors/fonts)
