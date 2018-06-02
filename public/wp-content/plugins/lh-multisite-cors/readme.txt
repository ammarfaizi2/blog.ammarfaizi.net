=== LH Multisite CORS ===
Contributors: shawfactor
Donate link: https://lhero.org/plugins/lh-multisite-cors/
Tags: CORS, REST, AJAX
Requires at least: 3.6
Tested up to: 4.8
Stable tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Allows AJAX requests from other sites in your multisite network even if they are on another domain or subdomain

== Description ==

AJAX requests to this site from another (those containing an Origin header) will be allowed for any domain in your multisite setup, no configuration required

== Installation ==

This section describes how to install the plugin and get it working.

1. Upload the entire `lh-multisite-cors` folder to the `/wp-content/plugins/` directory.
2. Activate the plugin through the 'Plugins' menu in WordPress.

== Frequently Asked Questions ==

= Why do I need this plugin? =

If you want to integrate content from your site to JavaScript applications running on other domains then the CORS standard is a way to allow this. Allowing CORS for all sites is a security problem but given you are the super admin for sites on your own network they should be trustworthy, therefore CORS can be safely activated.

= What is the difference between CORS and JSONP? =

CORS is more modern and more secure since it works _with_ the browser's same-origin policy and XmlHttpRequest objects rather than bypassing them. 

= Ok I'm sold, where can I read more about CORS? =

You can find the CORS spec here: http://www.w3.org/TR/cors/ You can learn more about how to use CORS here: http://www.html5rocks.com/en/tutorials/cors/


== Changelog ==
**1.00 April 12, 2016**  
Initial release.

== Changelog ==
**1.01 March 24, 2017**  
Fixed php strict errors

== Changelog ==
**1.02 July 27, 2017**  
Added class check