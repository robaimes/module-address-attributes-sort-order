# Aimes_AddressAttributesSortOrder

!["Supported Magento Version"][magento-badge] !["Latest Release"][release-badge]

Compatible with _Adobe Commerce_ `2.3.x` & `2.4.x`

> Note: Due to the requirement of the '[Customer Custom Attributes][customer-attributes]' module, this module does not currently work on Magento Open Source.

## Features

This _very_ small module is nothing fancy, more a quality of life enhancement for adobe commerce users.
Allows reordering of the customer address attributes via the backend form using the 'Sort Order' input.

By default, this field is disabled preventing the admin from modifying the sort order (which is _really_ annoying).

## Planned Features
- Support Magento Open Source

> This won't be a replacement for the adobe commerce module, and will _only_ allow reordering the fields.

## Installation
Please install this module via Composer. This module is hosted on [Packagist][packagist].

```
composer require aimes/module-address-attributes-sort-order
bin/magento module:enable Aimes_AddressAttributesSortOrder
bin/magento setup:upgrade
```

## Licence
[GPLv3][gpl] © [Rob Aimes][author]

[magento-badge]:https://img.shields.io/badge/adobe%20commerce-2.3.x%20%7C%202.4.x-red.svg?logo=adobe&style=for-the-badge
[release-badge]:https://img.shields.io/github/v/release/robaimes/module-address-attributes-sort-order?sort=semver&style=for-the-badge&color=blue
[customer-attributes]:https://docs.magento.com/user-guide/stores/attributes-customer.html
[packagist]:https://packagist.org/packages/aimes/module-address-attributes-sort-order
[gpl]:https://www.gnu.org/licenses/gpl-3.0.en.html
[author]:https://aimes.dev/
