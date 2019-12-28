# PHP Real Email Verification and Validation

![PHP](https://img.shields.io/badge/php-%3E%3D5.3-8892bf.svg)
![CURL](https://img.shields.io/badge/cURL-required-green.svg)
![License](https://poser.pugx.org/eleirbag89/telegrambotphp/license)

Example Usage
---------

```php
require('email.class.php');
$email = 'email@example.com';
$api = new Email($email);
echo $api->verify(); // return json output
```
License
------------

This open-source software is distributed under the MIT License. See LICENSE.md

Contributing
------------

All kinds of contributions are welcome - code, tests, documentation, bug reports, new features, etc...

* Send feedbacks.
* Submit bug reports.
* Write/Edit the documents.
* Fix bugs or add new features.
