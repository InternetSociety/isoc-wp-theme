Internet Society WordPress Theme
================================

This theme is designed to be used by Internet Society (ISOC) chapters and
other ISOC-related entities to create WordPress sites using the same general
design as the 2012 www.internetsociety.org site.

More information - and the theme files themselves - can be found at:

> <https://github.com/InternetSociety/isoc-wp/>

**IMPORTANT**: If you encounter any issues with using this theme - or have
suggestions for changes, please check the issue tracker and raise a new 
issue if necessary:

> <https://github.com/InternetSociety/isoc-wp/issues>

The issue tracker is public and *viewing* the issues is open to all. *Raising* 
an issue requires a [Github](http://www.github.com) account, but those
are available for free.

If you would like to see the theme in action, the following sites use it:

* http://www.internetsociety.org/deploy360/  (ISOC Deploy360 Programme)
* http://danyork.me/isoc-chapter/  (Sample site used in theme development)
* http://www.isoc.org.bd/dhaka/    (ISOC Chapter in Dhaka, Bangladesh)
* http://isocindiachennai.org/     (ISOC Chapter in Chennai, India)

If you use the theme and would like to have your site listed as an example,
please email york@isoc.org.

------------------------------------------------------------------------

This Readme document covers the following:

1. Required plugins
2. Installation
3. Automatic Updates
4. Initial Configuration
5. Configuration
6. Using the Events Manager Plugin
7. Using a Child Theme For Customization
8. Support / Questions
9. Contributors and Contributing Changes

------------------------------------------------------------------------

Required plugins
====================

The instructions for this theme assume that the following plugin is installed and activated:

* [Category Posts Widget](http://wordpress.org/extend/plugins/category-posts/)

It is not a hard requirement for use of the theme, but allows for the creation of various 
widgets relating to categories.

Additionally, if you are not already using a plugin for managing events, the
theme has been tested with this plugin:

* [Events Manager](http://wordpress.org/extend/plugins/events-manager/)

Similarly, if you would like to have "breadcrumbs" at the top of your pages that 
allow for navigation within your site, this theme has been tested with:

* [Breadcrumbs NavXT](http://wordpress.org/extend/plugins/breadcrumb-navxt/)

More information about using the Events Manager and Breadcrumbs NavXT is provided later in this file.

------------------------------------------------------------------------

Installation
================

The initial installation of the theme involves the following steps:

> **IMPORTANT** - The theme unzips into a directory called 'isoc-wp'. If you
already have a theme using that same directory name, bad things will happen.
The safest plan would be to remove the previous theme using that directory name.

To begin, you need to download a ZIP (or tar.gz) file for the latest version of the theme 
from this URL from the "Releases" page:

> <https://github.com/InternetSociety/isoc-wp/releases>


> **IMPORTANT** - In order for some of the sample code to work in this documentation, 
you should click on "Theme download (zip)" in order to download a version of the theme that 
unzips into a folder called simply "isoc-wp".  If you choose the other buttons marked 
"Source code" it will unzip into a folder called "isoc-wp-_version_". This will work 
with WordPress, but some of the examples here will need to be modified. It's easier if
you just have the folder/directory named "isoc-wp". 

Next, in your WordPress admin area (or Network Admin if you are using WordPress
MultiSite) do the following:

1. Go into the "Themes" panel, choose "Add New" and then choose the 
"Upload" link.  

2. Upload the ZIP file you downloaded.

3. Activate the theme for your site.

Next you will want to go through the steps in the next sections on configuration
to make any changes, update the home page slides, etc.

------------------------------------------------------------------------

Initial Configuration
=========================

Before you start using the theme, you need to perform these steps.

All of the steps assume you are logged into WordPress and have access to the 
administration panels of your site.

Set the Site Title and Tagline
------------------------------

1. Go to Settings -> General
2. Set the Site Title and Tagline
3. Save the settings.

Add Three Menus
---------------

1.  Go to Appearance -> Menus
2.  If you do not already have the following menus, you need to click the "+" 
    tab to create menus with these exact names:
   * Footer Menu
   * Navigation
   * Utility Menu
3. You will want to add at least one item to each of the menus. If you have not
   yet created many pages, the simplest option may be to add the Home page to
   each menu.  To do that, for each menu:
   * In the *Pages* box on the left check the box next to Home. Note that you
     may need to click "View All" to see the Home page.
   * Click "Add to Menu".  "Home" will now appear on the menu.
   * Press the "Save Menu" button.
   
   Alternatively you can add Categories to the menu using the Categories box
   farther down the page.
   
Associate Menus with Theme Locations
------------------------------------

1. On the Appearance -> Menus page, there is a box in the upper left labeled
   "Theme Locations". You are going to assign your three new menus to these locations.
2. Under "Primary Navigation", choose "Navigation".
3. Under "Utility Navigation", choose "Utility Menu".
4. Under "Footer Menu", choose "Footer Menu".
5. Press Save.

   
Adding Images To The Home Page Slideshow
----------------------------------------

1. From the left-hand column, find the Homepage Slides section and
   click Homepage Slides or Add New
2. Add title
3. Enter short body content
4. Upload a Featured Image (976px x 338px) using the box on the right
   side. You need to:
   * Click "Set Featured Image"
   * Drag an image to the window or choose from the dialog box.
   * Click the "Set featured image" link at the bottom of the dialog box.
5. Enter "Additional Information", Sub-title (if applicable), Read More 
   Link (URL), Read More text
6. Save or Publish Changes

Create Necessary Widgets
------------------------

The theme is designed to use a number of widgets.  To create these widgets, go to 
the *Appearance* section and choose *Widgets*.

**NOTE**: There are now three main areas where you can add content to the front page:

* Home Left Widget Area
* Home Center Widget Area
* Home Right Widget Area

This will give you a three-column layout with smaller columns on the left and right. 
*IF YOU WANT A 2-COLUMN LAYOUT*, simply do _not_ add anything into the "Home Left Widget
Area".  If there is nothing there the "Home Center Widget Area" will expand to fill both
columns.

You can add whatever widgets you want to any of the three widget areas.

### "Follow Us" Social Media Icons On Home Page

1. Open the *Home Slideshow Widget Area*.
2. Drag and drop the *Text Widget*.
3. Enter "Follow Us" as the title.
4. Enter `<div class="content">` at the beginning of the text box.
5. Using HTML, enter the appropriate links and icons. An example from the
   Deploy360 site is shown below.
6. Enter `</div>` at the end of the box.
7. Save the widget.

Example of social media code using the blue monochrome set:

```
<a href="http://www.facebook.com/Deploy360" target="_blank">
<img src="/wp-content/themes/isoc-wp/images/icon_facebook_blue.png" width="28" height="29" alt="facebook"></a> 
<a href="http://twitter.com/deploy360"  target="_blank">
<img src="/wp-content/themes/isoc-wp/images/icon_twitter_blue.png" width="30" height="29" alt="twitter"></a> 
<a href="http://www.youtube.com/user/Deploy360"  target="_blank">
<img src="/wp-content/themes/isoc-wp/images/icon_youtube_blue.png" width="29" height="29" alt="youtube"></a>
<a href="https://plus.google.com/b/100600212961472655878/"  target="_blank">
<img src="/wp-content/themes/isoc-wp/images/icon_googleplus_blue.png" width="29" height="29" alt="Google+"></a>
<a href="http://www.internetsociety.org/deploy360/feed/">
<img src="/wp-content/themes/isoc-wp/images/icon_rss_blue.png" width="28" height="28" alt="RSS icon"></a>
```
The theme has enough space for **five** social media icons.  All the icons are located in
the ```images``` folder inside the theme. The available icons are listed below.  Note that 
when referencing an icon in a widget or page you may need to use the _full_ URL of:

    /wp-content/themes/isoc-wp/images/_imagename_

Blue monochrome set:
* ![Facebook](https://raw.github.com/InternetSociety/isoc-wp/master/images/icon_facebook_blue.png)```images/icon_facebook_blue.png```
* ![Flickr v1](https://raw.github.com/InternetSociety/isoc-wp/master/images/icon_flickr_v1_blue.png)```images/icon_flickr_v1_blue.png```
* ![Flickr v2](https://raw.github.com/InternetSociety/isoc-wp/master/images/icon_flickr_v2_blue.png)```images/icon_flickr_v2_blue.png```
* ![Google+](https://raw.github.com/InternetSociety/isoc-wp/master/images/icon_googleplus_blue.png)```images/icon_googleplus_blue.png```
* ![LinkedIn](https://raw.github.com/InternetSociety/isoc-wp/master/images/icon_linkedin_blue.png)```images/icon_linkedin_blue.png```
* ![RSS](https://raw.github.com/InternetSociety/isoc-wp/master/images/icon_rss_blue.png)```images/icon_rss_blue.png```
* ![ScoopIt](https://raw.github.com/InternetSociety/isoc-wp/master/images/icon_scoopit_blue.png)```images/icon_scoopit_blue.png```
* ![StumbleUpon](https://raw.github.com/InternetSociety/isoc-wp/master/images/icon_stumbleupon_blue.png)```images/icon_stumbleupon_blue.png```
* ![Twitter](https://raw.github.com/InternetSociety/isoc-wp/master/images/icon_twitter_blue.png)```images/icon_twitter_blue.png```
* ![YouTube](https://raw.github.com/InternetSociety/isoc-wp/master/images/icon_youtube_blue.png)```images/icon_youtube_blue.png```

Multi-color set set:
* ![Delicious](https://raw.github.com/InternetSociety/isoc-wp/master/images/icon_delicious_lg.png)```images/icon_delicious_lg.png```
* ![Facebook](https://raw.github.com/InternetSociety/isoc-wp/master/images/icon_facebook_lg.png)```images/icon_facebook_lg.png```
* ![Flickr](https://raw.github.com/InternetSociety/isoc-wp/master/images/icon_flickr_lg.png)```images/icon_flickr_lg.png```
* ![Google+](https://raw.github.com/InternetSociety/isoc-wp/master/images/icon_googleplus.png)```images/icon_googleplus.png```
* ![LinkedIn](https://raw.github.com/InternetSociety/isoc-wp/master/images/icon_linkedin_lg.png)```images/icon_linkedin_lg.png```
* ![Reddit](https://raw.github.com/InternetSociety/isoc-wp/master/images/icon_reddit_lg.png)```images/icon_reddit_lg.png```
* ![RSS](https://raw.github.com/InternetSociety/isoc-wp/master/images/icon_rss_lg.png)```images/icon_rss_lg.png```
* ![SlideShare](https://raw.github.com/InternetSociety/isoc-wp/master/images/icon_slideshare_lg.png)```images/icon_slideshare_lg.png```
* ![StumbleUpon](https://raw.github.com/InternetSociety/isoc-wp/master/images/icon_stumbleupon_lg.png)```images/icon_stumbleupon_lg.png```
* ![Twitter](https://raw.github.com/InternetSociety/isoc-wp/master/images/icon_twitter_lg.png)```images/icon_twitter_lg.png```
* ![YouTube](https://raw.github.com/InternetSociety/isoc-wp/master/images/icon_youtube_lg.png)```images/icon_youtube_lg.png```

### "Follow Us" Social Media Icons On Secondary Pages

1. Open the Secondary Widget Area.
2. Drag and drop the *Text Widget*.
3. Enter "Follow Us" as the title.
4. Using HTML, enter the appropriate links and icons. See the example above for
   the appropriate HTML code.
   
   Do *not* include `<div class="content">` at the beginning or `</div>` at the end.

5. Save the widget.

### Adding Additional Widgets to the Home Page

Two additional boxes are available to display content on top of the images on the home
page.  They are widget areas:

* Home Slideshow Widget Area2
* Home Slideshow Widget Area3

You may add one widget (such as the *Text Widget*) to each of these areas to 
display additional content.

### Adding Items to Left Sidebar on Internal Pages

1. Find the Primary Widget Area.
2. Drag and drop Text or other widget types and make appropriate changes.

### Adding Items To Right Sidebar On Internal Pages

1.	Find the Secondary Widget Area2
2.	Drag and drop Text or other widget types and make appropriate changes.

### Footer Widget

1. Open the *Footer Widget Area*
2. Drag and drop the *Text Widget*
3. Enter appropriate text (copyright, email link, address, etc.). HTML is allowed.
4. Save the widget.

Adding a "Blog" Section
-----------------------

If you would like to add a "blog" section to your site that lists all your posts, you
can follow these steps.  Note that this is _not_ required and can also be done at
any later time.  As noted in the steps, it does not have to be called "Blog" but could
use another name instead.

1. Create a new Page ( Pages -> Add New ) that will be used for displaying all your
posts.  It only has to have a name and URL as WordPress will supply the content:

![Blog Page Name](https://raw.github.com/InternetSociety/isoc-wp/master/images/readme-blogpagename.png)

It is common to use "Blog" here with a URL of "blog", but you could use another name
if you want to.  Publish this page so that it is available.

2. Go to Settings -> Reading.
3. For "_Front page displays_" choose "A static page".
4. Change "_Posts page_" to be the name of the page you just created.  
5. Change "_Front page_" to be the name of one of your other pages - or a specific
blank page you create for this purpose.  The content doesn't matter as it will be 
overridden by the theme - but you do need to have a page set here.

![Blog Page Configuration](https://raw.github.com/InternetSociety/isoc-wp/master/images/readme-blogpage.png)

After you save the changes, all of your posts will be visible at "< yoursite >/blog", 
assuming you used "Blog" as your page name.

Now you can go into Appearance -> Menus and add the Blog page to, for instance, your
Navigation menu so that it will appear on that main menu.

------------------------------------------------------------------------

Configuration
=============

This section includes changes that you may want to make on an ongoing basis during
the regular usage of your theme.

All of these steps assume you are logged into WordPress and have access to the 
administration panels of your site.

Changing the Logo
-----------------
1.	From the left-hand column, find the Appearance section and click Theme Logo
2.	Enter URL of logo, or browse to upload new image.
3.	Save Changes

NOTE: Logo should be 197px x 82px.

Official ISOC chapter logos can be found at: http://www.internetsociety.org/chapter-logos
If you are seeking a logo that is not listed please contact chapter-support@isoc.org

Modifying Menus
---------------

1.      From the left-hand column, find the Appearance section and click
        Menus
2.      Select the appropriate menu tab to edit the menu.
3.      On the left hand column, you will see a list of pages. Select
        the page you wish to add to the menu.
4.      Drag and drop a menu to be in the correct order.
5.      Save.


Adding A Featured Image To A Post
---------------------------------

If you add a "featured image" to a post, a thumbnail of that image will then appear next
to the text when the post is included in a list of posts, such as an archives, category
or author view.

1. Edit the post to which you want to add a featured image.
2. Near the bottom of the right sidebar find the "Featured Image" box and click the 
   "*Set featured image*" link.  If you do not see the "Featured Image" box, see the 
   note below.
3. Choose the image you want to use, either by uploading a new image, choosing an existing
   image from the Media Gallery or by supplying the URL to an image.
4. Select the "*Set featured image*" button to set the image and close the window.
4. Click the "*Update*" button to update the post with the added featured image.

**NOTE**: If you do not see a "Featured Image" box in the right sidebar it is most likely 
because WordPress is not set to show that box.  Go to the top right corner of the WordPress
window and click on "Screen Options" near your name:

![Screen Options](https://raw.github.com/InternetSociety/isoc-wp/master/images/readme-screenoptions.png)

In the panel that opens up, check the box next to "Featured Image" to display that box
in the sidebar. When you are done you can click "Screen Options" again to hide this panel.

------------------------------------------------------------------------

Example: Creating Additional Categories and Widgets
===================================================

You are free to create whatever widgets and categories you wish, but if you would like an
example, here is how you can create a "News" widget and an "Issues Spotlight" widget and
update those widgets accordingly.

Add News and Resources Categories
---------------------------------

1. Go to Posts -> Categories
2. Add two new categories:
   * News
   * Resources
3. Add a new post (Posts -> Add New) with the category "News".  The text and title can 
be whatever you want - this is just a sample post so that you can see the template
working when you add a "News" widget. This post can be deleted later.  
4. Add a new Post (Posts -> Add New) with the category "Resources". The text and title
can again be whatever you want - and can be deleted later. You need this post so that
you can configure the Issues Spotlight widget later in the process.
   
   
Adding "News" To Home Page
--------------------------

1.  Go to *Appearance -> Widgets*
2.	Find the *Home Left Widget Area* or *Home Center Widget Area*
3.  Drag and drop *Category Posts Widget*
4.	Enter:
   * "Issues Spotlight" as title
   * Category = "News"
   * Number of posts
   * Sort by "Date" 
   * Show Post Excerpt
   * Show post thumbnail. 
5. Save the widget.

Adding "Issues Spotlight" To Home Page
--------------------------------------

1.  Go to *Appearance -> Widgets*
2.	Find the *Home Right Widget Area* or *Home Center Widget Area*
3.  Drag and drop *Category Posts Widget*
4.	Enter:
   * "Issues Spotlight" as title
   * Category = "Resources"
   * Number of posts
   * Sort by "Date" 
   * Show Post Excerpt
   * Show post thumbnail. 
   * If using the Home Right Widget Area, set the Thumbnail width = 128  (leave height blank)
5. Save the widget.
   
Adding News
-----------

1.	From the left-hand column, find the Posts section and click Edit or Add New
2.	Create or edit a post
3.	Assign it to the "News" category.
4.	Save or Publish

Adding Issues Spotlight
-----------------------

1.	From the left-hand column, find the Posts section and click Edit or Add New
2.	Create or edit a post
3.	Add an Excerpt, which is visible on the home page.
4.	Assign it to the "Resources" category.
5.	Add a Featured Image, if applicable.  Image should be sized to 128px x 80px
6.	Save or Publish

------------------------------------------------------------------------

Using Breadcrumbs NavXT
========================

There is a special widget area where you can install a "breadcrumbs" widget that will 
provide additional navigation options to your visitors.  This theme has been tested with:

* [Breadcrumbs NavXT](http://wordpress.org/extend/plugins/breadcrumb-navxt/)

Here are the steps you need to follow:

1. Open the *Highlighted Widget Area*
2. Drag and drop the *Breadcrumbs NavXT Widget*
3. In the widget configuration, set:
   * Output trail as "Plain"
   * Check "Link the breadcrumbs"
   * Check "Hide the trail on the front page"
4. Save the widget

**NOTE**: If you are using this theme on an installation of WordPress Multisite, 
you may need to go into the Breadcrumbs NavXT panel under "Settings" in your 
WordPress Dashboard and *un-check* the box next to *"Main Site Breadcrumb"*:

![Screen Options](https://raw.github.com/InternetSociety/isoc-wp/master/images/readme-breadcrumb-navxt-settings.jpg)

If you do not do this, you may wind up with multiple instances of "Home" in the
breadcrumb trail on your site.

------------------------------------------------------------------------

Using The Events Manager
========================

If you are not already using an events management plugin, this theme has been
tested with the Events Manager plugin available here:

* [Events Manager WordPress.org page](http://wordpress.org/extend/plugins/events-manager/)

* [Events Manager main site](http://wp-events-plugin.com/)

The second link for the main site includes documentation and tutorials that 
go into the many capabilities offered by this plugin.

Adding Events
-------------

Within the theme, adding an event involves this process:

1.      From the left-hand column, find the Events section and click
        Edit or Add New
2.      Add Name
3.      Add Event date
4.      Add Event time
5.      Enter Location information
6.      Enter Details
7.      Upload Event image
8.      Submit Event
9.      Events will need to be approved before going live. To approve an
        event, click on Events, click on highlighted event and select
        "approve" or "disapprove".
        
Adding an Event Widget To Sidebar
---------------------------------

1. Find the Appearance section and click Widgets.
2. Open the *Home Left Widget Area*
3. Drag and Drop the *Events Widget*
4. Set the title, number of events to show, order, etc.
5. Save the widget.

------------------------------------------------------------------------

Using A Child Theme For Customization
=====================================

If you want to make deeper changes to the ISOC WordPress theme than what you can
do using the widgets, menus and theme admin panels, the *safest* option is to 
create what is called a "child theme."  Essentially, this is a separate theme that
you apply to your site that references the ISOC theme and only includes whatever
files from the original theme you want to modify.

For instance, if you wanted to make further changes to the header of the site, 
you might create a child theme that included only two files:

* style.css
* header.php

All the other files and settings would be pulled from the main ISOC theme.

The beauty of this setup is that the main ISOC theme can be upgraded without 
affecting any deep customizations you have made.  This is the setup that the
[Deploy360 Programme](http://www.internetsociety.org/deploy360/) uses to have 
a separate customization layer on top of the basic ISOC theme.

More information about using child themes can be found here:

* <http://codex.wordpress.org/Child_Themes>

(**ACTION**: An example of a child theme should be provided for chapters
to be able to simply take and use.)

------------------------------------------------------------------------

Updating The Theme
==================

From time to time there will be new versions of this theme released as 
various issues and enhancements are addressed.

Ideally, one of the various Github-connected plugins would allow you to 
"automatically update" the theme and make this a simple process.

However, without those plugins, the update process is a bit more involved:

1. Download the latest ZIP file of the theme from the Releases page:

https://github.com/InternetSociety/isoc-wp/releases

**IMPORTANT**: Under the text for the most recent release, use the button marked
"Theme download (zip)" in order to download a version of the theme that  unzips into
 a folder called simply "isoc-wp".  

2. In the WordPress Themes panel, _delete_ the current ISOC theme.  (Note: If you are
using WordPress Multisite, you will need to go into Network Admin -> Themes and then
"Network Disable" the theme before deleting it.)

3. Use "Themes -> Add New" and then upload the latest ZIP file.  (Note: If you are using
WordPress Multisite you will then need to do "Network Enable".)

------------------------------------------------------------------------

Support
=======

This WordPress theme is provided "as-is" for ISOC chapters and others to develop
WordPress sites.  While there are WordPress-savvy ISOC staff and volunteers able
to assist, please understand that this assistance is not guaranteed to always be
available.  The best way to raise issues is to use the issue tracker found at:

> <https://github.com/InternetSociety/isoc-wp/issues>

The issues will be posted publicly and can be responded to be others working
with the theme.

------------------------------------------------------------------------

Contributors and Contributing Changes
=====================================

If you are familiar with modifying WordPress themes and want to make a direct
contribution of code changes, we certainly welcome such contributions.  You can
either:

1. [Raise an issue in the issue tracker](https://github.com/InternetSociety/isoc-wp/issues) 
   and include your code in that issue.
   
2. If you are familiar with how Github works, you can fork the repository, 
   commit your changes and issue a pull request.

To date, the following people or organizations have contributed to this theme:

* Dan York (ISOC staff)
* Marcin Cieślak (ISOC Poland chapter)

The original implementation of the theme was performed for the Internet Society by 
Balance Interactive.

------------------------------------------------------------------------

Thank you for using this WordPress theme - please do offer suggestions and feedback
through the issue tracker.  Thank you.

This theme is licensed for usage under the terms of the GPL v2.0. See the file
"license.txt" for more information.

Copyright 2012-2014 Internet Society
