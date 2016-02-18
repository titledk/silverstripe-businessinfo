# SilverStripe Business Info

Manage your business information under "Settings", and access it sitewide.

## Intended Use

The `BusinessInfoExtension` is supposed to be added to `SiteConfig`, but could potentially also be used on other `DataObject`s, e.g. a "Business Directory".


## Basic Setup

By default this module changes nothing on your installation.
You'll need to add the following lines to your `mysite/_config/config.yml` file:

	SiteConfig:
	  extensions:
	    - BusinessInfoExtension


## Future Ideas

* Integrate with [Display Logic](http://addons.silverstripe.org/add-ons/silverstripe/display-logic) for adding more data, but keep things clean


