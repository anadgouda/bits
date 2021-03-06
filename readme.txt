=== Bits ===
Contributors: anadgouda
Tags: content
Requires at least: 3.0
Tested up to: 3.3.1

Bits lets you manage brief content pieces using WordPress custom post types.

=== Description ===

The idea behind Bits is to be able to manage individual content pieces (bits), just like we manage posts and pages. We can then retrieve and display them in different places, as required.

You always have loose content pieces, like the copyright notice we put in the footer, or the invitation to subscribe to feeds after every post. Or if you are using WordPress to develop a non-blog Web site, you will have a homepage which displays different content pieces together. Currently, this has two problems:

* The end user does not get a suitable environment to edit/manage these content pieces. 
* We duplicate content pieces which appear on two different pages, e.g. address.

This plugin solves both these problems by giving a WYSIWYG admin interface to manage these bits, and shortcode and function to display them in pages, posts or templates.

=== Installation ===

1. Download and extract the zip file. Upload the bits folder to your plugins folder (usually, /wp-content/plugins/).
2. Activate the plugin through Plugins menu in WordPress administration interface.
3. Use [shortcode title='Title of your bit'] or <?php show_bit( 'Title of your bit' ); ?> where you want to display the bit.
4. In case you want to process it before you display it, the plugin also provides the function get_bit( 'Title of your bit' ).

=== TODO ===
1. I want to try and replace the Publish meta box in the admin interface with something more suitable for this. Maybe, only a Save button since the date and publish state is not relevant here.
