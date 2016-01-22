## Laravel PHP Framework

[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/d/total.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)
Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, queueing, and caching.

Let me decrypt that up for you.

Fork and clone my repository.

Go to the root directory in terminal and run-

php artisan serve

You can simply go to localhost:8000 to see it work

For creating new entry to need to first create a table in my sql.The flow would be-
database name- product
table name- products
fields would be - id  name price updated_at created_at

Now the magic starts-

run -  

http://localhost:8000/product/create

and create as many entries as you want which you can check into phpmyadmin with new entries.

now to delete entry.

run-

http://localhost:8000/product/1

where 1 is the id for products table and click on delete to delete that entry

now to edit the entry.

run-

http://localhost:8000/product/6/edit

and edit the entry.


