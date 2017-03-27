=== Exopite ===

Contributors: Joe Szalai, automattic, Theme Hook Alliance, Bootstrap core team
Tags: translation-ready, custom-background, theme-options, custom-menu, post-formats, threaded-comments, bootstrap, themehookalliance

Requires at least: 4.0
Tested up to: 4.5.3
Stable tag: 1.0.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

A starter theme called Exopite, or underscores.

== Description ==

This is a starter theme, based on _s, with some extra features like Bootstrap 4 alfa 3, jQuery 2.2.4, Theme Hook Alliance, Font Awesome 4.6.3.

I like underscores, Bootstrap and Theme Hook Alliance. it is existing underscores and Bootstrap [UnderStrap](https://github.com/holger1411/understrap) or underscores and Theme Hook Alliance [hook_s](https://github.com/bradp/hook_s) but not together, and because I do not want to start always from scratch, I build it for myself and for anybody who want it.

== Installation ==

1. In your admin panel, go to Appearance > Themes and click the Add New button.
2. Click Upload and Choose File, then select the theme's .zip file. Click Install Now.
3. Click Activate to use your new theme right away.

underscores/_s only

If you want to keep it simple, head over to http://underscores.me and generate your `_s` based theme from there. You just input the name of the theme you want to create, click the "Generate" button, and you get your ready-to-awesomize starter theme.

underscores/_s and Exopite

If you want to set things up manually, download `exopite` from GitHub. The first thing you want to do is copy the `exopite` directory and change the name to something else (like, say, `megatherium`), and then you'll need to do a five-step find and replace on the name in all the templates.

1. Search for `'exopite'` (inside single quotations) to capture the text domain.
2. Search for `exopite_` to capture all the function names.
3. Search for `Text Domain: exopite` in style.css.
4. Search for <code>&nbsp;exopite</code> (with a space before it) to capture DocBlocks.
5. Search for `exopite-` to capture prefixed handles.

OR

* Search for: `'exopite'` and replace with: `'megatherium'`
* Search for: `exopite_` and replace with: `megatherium_`
* Search for: `Text Domain: exopite` and replace with: `Text Domain: megatherium` in style.css.
* Search for: <code>&nbsp;exopite</code> and replace with: <code>&nbsp;Megatherium</code>
* Search for: `exopite-` and replace with: `megatherium-`

Then, update the stylesheet header in `style.css` and the links in `footer.php` with your own information. Next, update or delete this readme.

Now you're ready to go! The next step is easy to say, but harder to do: make an awesome WordPress theme. :)

== Changelog ==

= 1.1 - 2017-03-23 =
* Add: Check ABSPATH for security
* Add: Basic schema.org itemscope and itemtype for better SEO
* Add: Header rel="canonical" for better SEO
* Add: Enqueue scripts and styles with automatic versioning
* Add: Lightweight JavaScript event/hook manager for WordPress
https://github.com/carldanley/WP-JS-Hooks
* Fix: Code refactor and add some comments for better readability

= 1.0.1 =
* Fix: Fix sidebar position
* Fix: Remove tha_content_before() and tha_content_top() because it belong to content.php
* Fix: Add btn Bootstrap class to submit button
* Fix: Combine post meta to one function
* Fix: JS: Add try catch for hooks

= 1.0 =
* Initial release.

== Credits ==

* Based on Underscores http://underscores.me/, (C) 2012-2016 Automattic, Inc., [GPLv2 or later](https://www.gnu.org/licenses/gpl-2.0.html)

