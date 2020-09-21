---
title: Basic of PHP Part 0
path: /basic-of-php-part-0
date: 2020-08-05
summary: PHP is a server side scripting language. That is used to develop Static websites or Dynamic websites or web application. PHP stands for Hypertext Pre-processor, that earlier stood for Personal Home pages.
categories:
  - Backend Developer
  - PHP
tags: ["php", "backend", "basic", "intro", "step 0"]
---

PHP scripts can only be interpreted on a server that has PHP installed.
The client computers accessing the PHP scripts require a web browser only.
A PHP file contains PHP tags and ends with the extension ".php"

## What is a Scripting Language?

| Programming language                                          | Scripting language                                    |
| ------------------------------------------------------------- | ----------------------------------------------------- |
| Has all the features needed to develop complete applications. | Mostly used for routine tasks                         |
| The code has to be compiled before it can be executed         | The code is usually executed without compiling        |
| Does not need to be embedded into other languages             | Is usually embedded into other software environments. |

## Php Syntax

```php
<?php
echo "Hello World";
?>
```

A PHP file can also contain tags such as HTML and client side scripts such as JavaScript.

- **HTML is an added advantage** when learning PHP Language. You can even learn PHP without knowing HTML but it’s recommended you at least know the basics of HTML.
- **Database management systems** DBMS for database powered applications.
- For more advanced topics such as interactive applications and web services, you will need **JavaScript and XML**.
  The flowchart diagram shown below illustrates the basic architecture of a PHP web application and how the server handles the requests.

# Why use PHP?

You have obviously heard of a number of programming languages out there; you may be wondering why we would want to use PHP as our poison for the web programming. Below are some of the compelling reasons.

- PHP is **open source and free**.
- Short learning curve compared to other languages such as JSP, ASP etc.
- Large community document
- Most web hosting servers support PHP by default unlike other languages such as ASP that need IIS. This makes PHP a cost effective choice.
- PHP is regular updated to keep abreast with the latest technology trends.
- Other benefit that you get with PHP is that it’s a **server side scripting language**; this means you only need to install it on the server and client computers requesting for resources from the server do not need to have PHP installed; only a web browser would be enough.
- PHP has **in built support for working hand in hand with MySQL**; this doesn’t mean you can’t use PHP with other database management systems. You can still use PHP with Postgres, Oracle, MS SQL Server, ODBC etc.
- PHP is **cross platform**; this means you can deploy your application on a number of different operating systems such as windows, Linux, Mac OS etc.

## What is PHP used for & Market share

In terms of market share, there are over 20 million websites and application on the internet developed using PHP scripting language.

This may be attributed to the points raised above;

The diagram below shows some of the popular sites that use PHP

## PHP File Extensions

File extension and Tags In order for the server to identify our PHP files and scripts, we must save the file with the “.php” **extension**. Older PHP file extensions include

.phtml
.php3
.php4
.php5
.phps
PHP was designed to work with HTML, and as such, it can be embedded into the HTML code.

```php
<html><php code></html>
```

You can create PHP files without any html tags and that is called Pure PHP file .

The server interprets the PHP code and outputs the results as HTML code to the web browsers.

In order for the server to identify the PHP code from the HTML code, we must always enclose the PHP code in PHP tags.

A PHP tag starts with the less than symbol followed by the question mark and then the words “php”.

PHP is a case sensitive language, “VAR” is not the same as “var”.

The PHP tags themselves are not case-sensitive, but it is strongly recommended that we use lower case letter. The code below illustrates the above point.

```
<?php … ?>
```

We will be referring to the PHP lines of code as statements. PHP statements end with a semi colon (;). If you only have one statement, you can omit the semi colon. If you have more than one statement, then you must end each line with a semi colon. For the sake of consistency, it is recommended that you always end your statement(s) with a semi colon. PHP scripts are executed on the server. The output is returned in form of HTML.

## PHP Hello world

The program shown below is a basic PHP application that outputs the words “Hello World!” When viewed in a web browser.

```php
<?php
echo "Hello world";
?>
```

Output:

```
Hello world
```

## Summary

- PHP stands for Hypertext pre-processor
- PHP is a server side scripting language. This means that it is executed on the server. The client applications do not need to have PHP installed.
- PHP files are saved with the ".php" file extension, and the PHP development code is enclosed in tags.
- PHP is open source and cross platform

Thanks for read. Have peace.
You can follow me on :

- [@step_dev](https://twitter.com/step_dev).
- [fb.com/giangvincent.org](https://www.facebook.com/giangvincent.org/).
- [Github.com/giangvincent](https://github.com/giangvincent).
- [linkedin/giang](https://www.linkedin.com/in/giang-do-linh-88b034131/).
