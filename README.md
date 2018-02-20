# Does wp_head and wp_footer functions exist
This plugin is designed to check for the existence of the ```wp_head();``` and ```wp_footer();``` functions in your theme.

## How does it work?
First, you must be logged in to your site with an administrator level account. This plugin specifically checks to see if the current user is an administrator so that the notice it displays won't be shown to your regular site visitors.

Once the plugin has been installed and activated, visit the home page of your site (or any "public" facing page). Note: The plugin does not work in the wp-admin area of your site.

When you visit the page, you should get two notices that pop up on your screen.

* The first will say: 
> Congratulations! wp_head(); exists in your current theme.
Click OK to dismiss this notice.
* The second will say:
> Congratulations! wp_footer(); exists in your current theme.
Click OK to dismiss this notice.

If you only see one (or none) of these notices, your theme does not include the required functions.

## False negatives
If you don't see the notices described above, check to see if you are using a popup blocker. It is possible that it will prevent the notices from being displayed.

Try disabling the popup blocker temporarily, or add your site's URL to the popup blocker's whitelist.

## Deactivate and delete
Once you have confirmed that you have the required ```wp_head();``` and ```wp_footer();``` functions in your theme, you can deactivate and delete this plugin.

Keeping it activated on your site will cause the popup notices to be displayed to anyone who is logged in as an administrator on your site.
