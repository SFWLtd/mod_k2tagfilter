Simple K2 Tag Filtering
=======================

A small Joomla!/K2 module to add a tag filter field.

Written by Simon Champion, SFW Ltd, January 2016.


Introduction
------------

This is a simple module that loads a list of tags from K2 and offers them to the user in a drop-box. 

Place the module on your site to give your users a quick way to get a list of K2 items filtered by a specific tag.

The filter can be applied site-wide or to a specific K2 category.


Dependencies
------------

* Joomla!
* K2

Note that this extension has been tested against the current versions of Joomla! (3.4.8) and K2 (2.6.9) at the time of writing.


Installation
------------

This module should be installed via the Extensions manager in Joomla!'s admin panel. You should also ensure that you have K2 installed in your Joomla! instance, as this module relies on it.


Setup
-----

Once installed, go the configuration panel for the module by navigating Joomla!'s admin menu to Components / Modules. Then find the k2tagfilter in the list of modules and click on it.

You will now get the config screen for the module, which contains the following fields:

* Field Label: Populate this with the label you want for your filter field. The default value is "Tag Filter".

* Unselected option text: This is the text for the 'default' option in the select box.

* K2 Category: Populate this with zero if you want the tag filter to search across all K2 categories. Or enter a category ID to have it search only a single specific category. Note that if you specify a category, the list of tags offered in the drop-box will only include those used in that specific category. If you specify all categories, then the tag list will be a complete list of all tags currently in use.

* Button text: This is the text to show in the button to submit the filter form. Default is "FILTER".

Set the status to 'Published' and the position and other fields as required to place the module where you want it in the site, as per the normal Joomla! process.


Multiple Instances
------------------

As with all Joomla! modules, you can create duplicates of the module with different config parameters and different publishing positions, etc. For example, you might want separate ones for various K2 categories.

Use the "Duplicate" button on the list of modules to achieve this. This is standard Joomla! functionality, so please see the Joomla! documentation for more details.


Who wrote this?
---------------

This code was written by Simon Champion, at SFW Ltd (http://sfwltd.co.uk) as part of a client project.

All code in this repository is released under the GPLv2 licence. The GPLv2 licence document should be included with the code.


Support
-------

Please note that we can only offer formal support for this software for paying clients. Open source users may feel free to report issues and submit pull requests via the Github repository, but note that we cannot guarantee a response. If you require formal support, please contact us via our website (http://sfwltd.co.uk) for more information.


Known bugs and Limitations
--------------------------

* This module uses K2's own tag filtering code; the results you see are the same as those you'd see if you clicked on a tag in the "tagged under" heading of an item. However, K2 does not currently support tag filtering by category: the results you get back are for items in **all** categories with the selected tag, even when you've specified a single category in the module config. The config setting only affects the list of tags shown in the drop-list, not the filtered results. If you use the same tags across multiple categories, this might mean you get results you weren't expecting.


Todo
----

* Write a version that isn't specific to K2 (ie using Joomla!'s built-in tagging system instead).


Trademarks and Licenses
-----------------------

* Joomla!® is a registered trademark of Open Source Matters, Inc.
* Joomla! is distributed under the GPLv2 licence.
* This package is distributed under the GPLv2 licence. The GPLv2 licence document should be included with the code.
