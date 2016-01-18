#Indexing Last Edited
[![Build Status](https://travis-ci.org/gordonbanderson/weboftalent-index-lastedited.svg?branch=master)](https://travis-ci.org/gordonbanderson/weboftalent-index-lastedited)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/gordonbanderson/weboftalent-index-lastedited/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/gordonbanderson/weboftalent-index-lastedited/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/gordonbanderson/weboftalent-index-lastedited/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/gordonbanderson/weboftalent-index-lastedited/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/gordonbanderson/weboftalent-index-lastedited/badges/build.png?b=master)](https://scrutinizer-ci.com/g/gordonbanderson/weboftalent-index-lastedited/build-status/master)
[![codecov.io](https://codecov.io/github/gordonbanderson/weboftalent-index-lastedited/coverage.svg?branch=master)](https://codecov.io/github/gordonbanderson/weboftalent-index-lastedited?branch=master)

[![Latest Stable Version](https://poser.pugx.org/weboftalent/indexlastedited/version)](https://packagist.org/packages/weboftalent/indexlastedited)
[![Latest Unstable Version](https://poser.pugx.org/weboftalent/indexlastedited/v/unstable)](//packagist.org/packages/weboftalent/indexlastedited)
[![Total Downloads](https://poser.pugx.org/weboftalent/indexlastedited/downloads)](https://packagist.org/packages/weboftalent/indexlastedited)
[![License](https://poser.pugx.org/weboftalent/indexlastedited/license)](https://packagist.org/packages/weboftalent/indexlastedited)
[![Monthly Downloads](https://poser.pugx.org/weboftalent/indexlastedited/d/monthly)](https://packagist.org/packages/weboftalent/indexlastedited)
[![Daily Downloads](https://poser.pugx.org/weboftalent/indexlastedited/d/daily)](https://packagist.org/packages/weboftalent/indexlastedited)

[![Dependency Status](https://www.versioneye.com/php/weboftalent:indexlastedited/badge.svg)](https://www.versioneye.com/php/weboftalent:indexlastedited)
[![Reference Status](https://www.versioneye.com/php/weboftalent:indexlastedited/reference_badge.svg?style=flat)](https://www.versioneye.com/php/weboftalent:indexlastedited/references)

![codecov.io](https://codecov.io/github/gordonbanderson/weboftalent-index-lastedited/branch.svg?branch=master)

By default SilverStripe does not index the LastEdited field, a field that is used for partial caching.  On large sites this can be a problem with performance.  The module adds the index to SiteTree, Member and Group.

#Adding Last Edited to DataObjects
Create or append to an existing extension.yml file in an appropriate _config directory within your codebase.
```yml
---
Name: your-site-specific-last-edited-extensions
---
SiteTree:
  extensions:
    ['IndexLastEditedExtension']
```
