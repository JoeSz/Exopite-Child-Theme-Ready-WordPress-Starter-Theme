=== exopite-starter ===

Contributors: Joe Szalai, automattic, Theme Hook Alliance, Bootstrap core team
Tags: translation-ready, custom-background, theme-options, custom-menu, post-formats, threaded-comments, bootstrap, themehookalliance

Requires at least: 4.0
Tested up to: 4.9.5
Stable tag: 1.0.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

A starter theme called exopite-starter, or underscores.

== Description ==

This is a starter theme, based on _s
with some extra features like Bootstrap 4 alfa 6, Theme Hook Alliance, Font Awesome 4.7

I like underscores, Bootstrap and Theme Hook Alliance. it is existing underscores and Bootstrap [UnderStrap](https://github.com/holger1411/understrap) or underscores and Theme Hook Alliance [hook_s](https://github.com/bradp/hook_s) but not together, and because I do not want to start always from scratch, I build it for myself and for anybody who want it.

== Installation ==

1. In your admin panel, go to Appearance > Themes and click the Add New button.
2. Click Upload and Choose File, then select the theme's .zip file. Click Install Now.
3. Click Activate to use your new theme right away.

underscores/_s only

If you want to keep it simple, head over to http://underscores.me and generate your `_s` based theme from there. You just input the name of the theme you want to create, click the "Generate" button, and you get your ready-to-awesomize starter theme.

underscores/_s and exopite-starter

If you want to set things up manually, download `exopite-starter` from GitHub. The first thing you want to do is copy the `exopite-starter` directory and change the name to something else (like, say, `megatherium`), and then you'll need to do a five-step find and replace on the name in all the templates.

1. Search for `'exopite-starter'` (inside single quotations) to capture the text domain.
2. Search for `exopite-starter_` to capture all the function names.
3. Search for `Text Domain: exopite-starter` in style.css.
4. Search for <code>&nbsp;exopite-starter</code> (with a space before it) to capture DocBlocks.
5. Search for `exopite-starter-` to capture prefixed handles.

OR

* Search for: `'exopite-starter'` and replace with: `'megatherium'`
* Search for: `exopite_` and replace with: `megatherium_`
* Search for: `Text Domain: exopite-starter` and replace with: `Text Domain: megatherium` in style.css.
* Search for: <code>&nbsp;exopite-starter</code> and replace with: <code>&nbsp;Megatherium</code>
* Search for: `exopite-starter-` and replace with: `megatherium-`

Then, update the stylesheet header in `style.css` and the links in `footer.php` with your own information. Next, update or delete this readme.

Now you're ready to go! The next step is easy to say, but harder to do: make an awesome WordPress theme. :)

== Changelog ==

= 20180415 - Apr 15 2018 =
* Update: Update to Bootstrap 4.1.0

= 20180123 - Jan 23 2018 =
* Update: Update to Bootstrap 4.0.0 (beta 3)

= 20171202 - Dec 02 2017 =
* **UPDATE**: Update to Bootstrap 4.0.0 beta 2

= 20170921 - Sep 21 2017 =
* **UPDATE**: Update to Bootstrap 4.0.0 beta

= 1.3 - 2017-06-12 =
* Rename exopite to exopite-starter to avoid conflict with Exopite theme
* Add child theme
* Some refacator: move to exopite-starter folder, rename inc folder to include

= 1.2 - 2017-03-27 =
* Update to newest _s
* Fix: some minor code refactroing

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

== SUPPORT/UPDATES ==

If you use my program(s), I would **greatly appreciate it if you kindly give me some suggestions/feedback**. If you solve some issue or fix some bugs or add a new feature, please share with me or mke a pull request. (But I don't have to agree with you or necessarily follow your advice.)<br/>
**Before open an issue** please read the readme (if any :) ), use google and your brain to try to solve the issue by yourself. After all, Github is for developers.<br/>
My **updates will be irregular**, because if the current stage of the program fulfills all of my needs or I do not encounter any bugs, then I have nothing to do.<br/>
**I provide no support.** I wrote these programs for myself. For fun. For free. In my free time. It does not have to work for everyone. However, that does not mean that I do not want to help.<br/>
I've always tested my codes very hard, but it's impossible to test all possible scenarios. Most of the problem could be solved by a simple google search in a matter of minutes. I do the same thing if I download and use a plugin and I run into some errors/bugs.

== Disclaimer ==

All softwares and informations are provided "as is", without warranty of any kind, express or implied, including but not limited to the warranties of merchant-ability, fitness for a particular purpose and non-infringement.

Please read: https://www.joeszalai.org/disclaimer/
