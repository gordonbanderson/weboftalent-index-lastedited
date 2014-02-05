#Indexing Last Edited
By default SilverStripe does not index the LastEdited field, a field that is used for partial caching.  On large sites this can be a problem with performance.  The module adds the index to SiteTree, Member and Group.

#Adding Last Edited to DataObjects
Create or append to an existing extension.yml file in an appropriate _config directory within your codebase.

		---
		Name: your-site-specific-last-edited-extensions
		---
		SiteTree:
		  extensions:
		    ['YourCustomDataObject']
