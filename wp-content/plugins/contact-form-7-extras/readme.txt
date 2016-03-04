=== Contact Form 7 Controls ===

Contributors: kasparsd, buzztone
Tags: Contact Form 7, cf7, admin, backend, redirect, tracking, google analytics, ga, simple, interface, dashboard, recaptcha
Requires at least: 3.0
Tested up to: 4.3.1
Stable tag: trunk

Adds simple controls for some of the advanced functionality of the Contact Form 7 plugin.


== Description ==

This plugin adds simple admin controlls for the following customization of the [Contact Form 7](http://wordpress.org/plugins/contact-form-7/) form output:

- Disable AJAX form submission
- Disable default form CSS
- Disable automatic paragraph formatting
- Disable HTML5 input field types or enable the HTML5 input type fallback
- Track form submissions and completions with Google Analytics
- Redirect to URL on form submission
- Specify Google Recaptcha language.

Note that some settings work on per-page level and will inherit for all forms on the same page. For example, disabling AJAX form submissions for one form will disable AJAX submissions on all forms on _that page_.

= Saving Form Submissions in WordPress =

The "[Storage for Contact Form 7](http://codecanyon.net/item/storage-for-contact-form-7-/7806229)" plugin automatically stores all the contact form submissions (including attachments) in your WordPress database. It also provides the CSV export of the form entries.


== Installation ==

Search for "Contact Form 7 Controls" using the standard plugin installer.


== Frequently Asked Questions ==

None, yet.


== Screenshots ==

1. Contact Form 7 Advanced Controls


== Changelog ==

= 0.3 (October 8, 2015) =

- Add the Google Recaptcha language setting.
- Update the translation source file.

= 0.2 (September 6, 2015) =

- Make compatible with Contact Form 7 version 4.3 and later.
- Rename the plugin to "Contact Form 7 Controls" in the repository.

= 0.1.5 =

- Bugfix: display the correct number of entries submitted for each contact form.
- Update translation POT file.

= 0.1.4 =

- Check if `_gaq` Google Analytics global exists before adding an event.

= 0.1.3 =

- Fix Google Analytics tracking for sent event too.

= 0.1.2 =

- Fix Google Analytics tracking with automatic GA version detection.

= 0.1.1 =

- Update readme.
- Use stable tags instead of trunk for releases.

= 0.1 =

- Initial release.
