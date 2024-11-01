=== WP-ZFF Zend Framework Full ===
Contributors: gottaloveit
Donate link: http://passavanti.name/donate
Tags: Zend Framework, Zend, ZendX, Google Data APIs, Windows Cardspace
Requires at least: 2.6
Tested up to: 3.3
Stable tag: 1.11.12-1

WP-ZFF Zend Framework Full will make the latest Zend and ZendX libraries available for any plugin to use simply by calling the class name. 

== Description ==

WP-ZFF will put the Zend and ZendX libraries in the include path and will autoload the classes when they are needed.  Plugin developers will not have to worry about including any files.  The libraries will use the Zend autoloader so no additional including will be required for plugin developers. 

Zend Framework is an open source, object-oriented web application framework implemented in PHP 5 and licensed under the New BSD License.

Note:  Requires PHP 5.2.4 or later

See changelog for update.  Changed the way autoloader is loaded, should be more compatible.

== Installation ==

<i>Note: As is the case when installing any new plugin, it's always a good idea to backup your blog data before installing.</i>

1. If you are upgrading, then delete this plugin first before downloading latest version.
2. Download plugin, extract and upload to your plugins directory, or use the plugin installer.
3. Go to the Plugins tab and find WP-ZFF in the list and click <strong>Activate</strong>.
4. Note: Requires PHP 5.2.4 or later
5. Once you have activated, see below how to best use in a plugin.

example:
// plugin file
function use_zend_framework() {
        if (did_action('load_wp_zff') > 0) {
                echo Zend_Version::getLatest();
        }
}
add_action('wp_head','use_zend_framework');

== Frequently Asked Questions ==

= Where can I find documentation on how to use all the libraries in Zend Framework? =

You can read the online manual at [Zend Framework Programmer's Reference Guide](http://framework.zend.com/manual/manual)

= How do I use this in a Wordpress plugin? =

See the installation notes

= Does this plugin include the ZendX libraries as well? =

Yes

= Does this plugin include the Dojo Javascript libraries as well? =

No, but please give me feedback if you think you would like it for next update.

== Changelog ==

= 1.10.3-1 =
* Original Release
* Includes Zend Framework Zend and ZendX libraries version 1.10.3
* [Zend Framework Changelog 1.10.3](http://framework.zend.com/changelog/1.10.3)

= 1.10.4-1 =
* Removed autoloader from typical init loading action hooks to be more compatible with existing and new plugins,
* this should hopefully prevent any "cannot find XXX file errors"
* Includes Zend Framework Zend and ZendX libraries version 1.10.4
* [Zend Framework Changelog 1.10.4](http://framework.zend.com/changelog/1.10.4)

= 1.10.5-1 =
* Includes Zend Framework Zend and ZendX libraries version 1.10.5
* [Zend Framework Changelog 1.10.5](http://framework.zend.com/changelog/1.10.5)

= 1.11.2-1 =
* Includes Zend Framework Zend and ZendX libraries version 1.11.2
* [Zend Framework Changelog 1.11.2](http://framework.zend.com/changelog/1.11.2)

= 1.11.2-2 =
* Minor update as to when plugin gets loaded in Hooks

= 1.11.11-1 =
* Includes Zend Framework Zend and ZendX libraries version 1.11.11
* [Zend Framework Changelog 1.11.11](http://framework.zend.com/changelog/1.11.11)

= 1.11.12-1 =
* Includes Zend Framework Zend and ZendX libraries version 1.11.12
* Patching to clear vulnerability from Zend Framework(http://framework.zend.com/security/advisory/ZF2012-01)
* [Zend Framework Changelog 1.11.12](http://framework.zend.com/changelog/1.11.12)

== Upgrade Notice ==

= 1.10.3-1 =
No upgrade, original release.

= 1.10.4-1 =
Unpack files.

= 1.10.5-1 =
Unpack files.

= 1.11.2-1 =
Delete existing version if already installed before installing this version.

= 1.11.2-2 =
Unpack files.

= 1.11.11-1 =
Unpack files.

= 1.11.12-1 =
Unpack files.

== Screenshots ==
screenshots not applicable
