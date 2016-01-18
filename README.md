#Indexing Last Edited
[![Build Status](https://travis-ci.org/gordonbanderson/weboftalent-index-lastedited.svg?branch=3.1)](https://travis-ci.org/gordonbanderson/weboftalent-index-lastedited)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/gordonbanderson/weboftalent-index-lastedited/badges/quality-score.png?b=3.1)](https://scrutinizer-ci.com/g/gordonbanderson/weboftalent-index-lastedited/?branch=3.1)
[![Code Coverage](https://scrutinizer-ci.com/g/gordonbanderson/weboftalent-index-lastedited/badges/coverage.png?b=3.1)](https://scrutinizer-ci.com/g/gordonbanderson/weboftalent-index-lastedited/?branch=3.1)
[![Build Status](https://scrutinizer-ci.com/g/gordonbanderson/weboftalent-index-lastedited/badges/build.png?b=3.1)](https://scrutinizer-ci.com/g/gordonbanderson/weboftalent-index-lastedited/build-status/3.1)
[![codecov.io](https://codecov.io/github/gordonbanderson/weboftalent-index-lastedited/coverage.svg?branch=3.1)](https://codecov.io/github/gordonbanderson/weboftalent-index-lastedited?branch=3.1)

[![Latest Stable Version](https://poser.pugx.org/weboftalent/indexlastedited/version)](https://packagist.org/packages/weboftalent/indexlastedited)
[![Latest Unstable Version](https://poser.pugx.org/weboftalent/indexlastedited/v/unstable)](//packagist.org/packages/weboftalent/indexlastedited)
[![Total Downloads](https://poser.pugx.org/weboftalent/indexlastedited/downloads)](https://packagist.org/packages/weboftalent/indexlastedited)
[![License](https://poser.pugx.org/weboftalent/indexlastedited/license)](https://packagist.org/packages/weboftalent/indexlastedited)
[![Monthly Downloads](https://poser.pugx.org/weboftalent/indexlastedited/d/monthly)](https://packagist.org/packages/weboftalent/indexlastedited)
[![Daily Downloads](https://poser.pugx.org/weboftalent/indexlastedited/d/daily)](https://packagist.org/packages/weboftalent/indexlastedited)

[![Dependency Status](https://www.versioneye.com/php/weboftalent:indexlastedited/badge.svg)](https://www.versioneye.com/php/weboftalent:indexlastedited)
[![Reference Status](https://www.versioneye.com/php/weboftalent:indexlastedited/reference_badge.svg?style=flat)](https://www.versioneye.com/php/weboftalent:indexlastedited/references)

![codecov.io](https://codecov.io/github/gordonbanderson/weboftalent-index-lastedited/branch.svg?branch=3.1)

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
