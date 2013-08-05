Thank you for downloading the Streamline WordPress Theme.
Copyright (C) 2009  9th sphere (a division of Etalco Limited)
************************************************************************************

This Read Me file contains:
1. Copyright Disclaimer
2. Installation Instructions
3. Tips
4. Contact Information

************************************************************************************
This program is free software; you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation; either version 2 of the License, or any later version.

This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more details.

You should have received a copy of the GNU General Public License along with this program; if not, write to the Free Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
************************************************************************************

1. COPYRIGHT DISCLAIMER
All templates and skins should retain a copyright, link to www.9thsphere.com and our logo at the footer of every page and be clearly visible.


2. INSTALLATION INSTRUCTIONS:

Note: This theme has been built for WordPress 2.7, and has been tested on version 2.5.

a. Unzip streamline.zip to a local folder on your hard drive. All the files necessary for the theme will be inside a folder called "streamline", which you will see after you unzip the orginal file.

b. Upload the folder and all its contents to the following folder of your WordPress installation:
	
	(your-website-url)/wp-content/themes

(your-website-url) would be replaced with the actual location of your WordPress installation.

The result should be a folder as follows:

	(your-website-url)/wp-content/themes/streamline

which will have all the necessary files for the theme inside it.

Be sure to include the root folder called "streamline", otherwise you will have to create a folder with your own custom name, and upload everything inside the folder to your newly created folder.

c. Alternatively, you may upload everything inside the "streamline" folder into one of the already existing theme folders (e.g. "default") and this will overwrite the theme contained in that folder. (Use this option with caution as this will overwrite the theme inside that folder.)

d. When all the files are completely uploaded to your server, log in to your WordPress dashboard and click on "Design". The "Streamline" theme should now appear in your theme list. Simply select it, and it will instantly take effect as the current theme of your blog.

(See also http://codex.wordpress.org/Using_Themes#Adding_New_Themes)

************************************************************************************

3. TIPS

Points to keep in mind when implementing this theme on your site:

OUR CSS STYLES
**********************
- The 9th sphere Streamline WordPress theme was created with our own custom CSS style sheet. We have disabled many of the default WordPress styles that originally appear in the style.css and rtl.css files.

- The orignal CSS files have essentially been replaced by our own CSS file, which includes a "CSS reset", to assist cross-browser compatibility. We have left the rtl.css file in the root folder of the theme, so any of those styles can be applied by simply cutting and pasting them into our style sheet (style.css), preferably at the bottom of the style.css file.

THE PHP LOOP AND "FIRST" CLASS
*********************************************
- We've included classes in the CSS file, along with a PHP Loop in the HTML, to identify the first post on any given page, and applies a different background image to it. This is necessary to preserve the look of the theme. This class is created dynamically using the PHP Loop. The loop appears in index.php, archive.php, and single.php. The loop is commented wherever it appears.

- The PHP loop mentioned above can also be used to add other content (such as ads) to the area below or above the first post, or even to add content above or below another specific post in the list, depending on how you modify the PHP.

************************************************************************************

4. CONTACT INFORMATION

If you have any questions or comments, or require assistance in debugging a problem with this theme, please use the contact information below to get in touch with us and we'll do our best to assist you:

9th sphere (a division of Etalco Limited)
http://www.9thsphere.com

100 York Blvd., Suite 228
Richmond Hill, Ontario
L4B 1J8 Canada

local > 905.709.2991
email > info@9thsphere.com