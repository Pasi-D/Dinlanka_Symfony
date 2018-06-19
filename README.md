Symfony Project
========================

[![Build Status](https://travis-ci.org/xXZang3tsuXx/Dinlanka_Symfony.svg?branch=master)](https://travis-ci.org/xXZang3tsuXx/Dinlanka_Symfony)
[![Documentation Status](https://readthedocs.org/projects/dinlanka/badge/?version=latest)](http://dinlanka.readthedocs.io/en/latest/?badge=latest)

Pre-requisites
-------------- 

  * [Composer][16].
  * PHP version 7.0 or above.
 

How to setup
----------------

Clone the repository

```sh
$ git clone https://github.com/xXZang3tsuXx/Dinlanka_Symfony.git
```

Move inside the clone repository and run composer install to install all the modules required

```sh
$ composer install
```
Make sure MYSQL is running in the background and execute 

( If you have custom setup running on MYSQL please configure parameters.yml file in app/config )

```sh
$ php bin/console doctrine:create:database
```

Create the designated schema

```sh
$ php bin/console doctrine:schema:create
```

Thats all !!

Run the server using 

```sh
$ php bin/console server:run
```

Open browser and change url to [http://localhost:8000](http://localhost:8000) access the server.

How to access Admin Page
------------------------

Browse to [http://localhost:8000/register](http://localhost:8000/register)

create a user with a valid email and a password

Suppose that you use USERNAME for Username field,

To promote USERNAME to ADMIN_ROLE

```sh
$ php bin/console fos:user:promote USERNAME ROLE_ADMIN 
```

Then browse to [http://localhost:8000/admin](http://localhost:8000/admin) or [http://localhost:8000/login](http://localhost:8000/login) & access using the created username and password.





[1]:  https://symfony.com/doc/3.4/setup.html
[6]:  https://symfony.com/doc/current/bundles/SensioFrameworkExtraBundle/index.html
[7]:  https://symfony.com/doc/3.4/doctrine.html
[8]:  https://symfony.com/doc/3.4/templating.html
[9]:  https://symfony.com/doc/3.4/security.html
[10]: https://symfony.com/doc/3.4/email.html
[11]: https://symfony.com/doc/3.4/logging.html
[13]: https://symfony.com/doc/current/bundles/SensioGeneratorBundle/index.html
[14]: https://symfony.com/doc/current/setup/built_in_web_server.html
[15]: https://symfony.com/doc/3.4/setup.html
[16]: https://getcomposer.org/
