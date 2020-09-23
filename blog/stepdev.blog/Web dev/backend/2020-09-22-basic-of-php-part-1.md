---
title: Basic of PHP Part 1
path: /basic-of-php-part-1
date: 2020-08-05
summary: In this blog we will get through how to setup a local enviroment in your local machine such as a desktop computer or a latop. After that you much choose a Code Editor to start to programming your first project.
categories: ["Backend Developer", "PHP"]
tags: ["php", "backend", "basic", "step 1"]
---

## Setup local enviroment

There are multi ways to setup a **local host** for your machine to run PHP. To run a php web server we have to need to install:

- **Apache** or **NGINX**.
- PHP engine, should use **PHP 7**, still there are many web server still run old version of PHP like PHP 5.
- **Database**, you may use **MySQL** (MariaDB) or **NoSQL** (MongoDB). PHP was built with MySQL intergrated inside its engine so I would recommend to use MySQL. If you are interested in **MongoDB** then you may consider to learn **NodeJS**. Which in the future I will add some tutorial for that.

If your local machine is running on **MAC OS**, then you probably don't need to install Apache or PHP. To install MySQL you can follow this tutorial [https://flaviocopes.com/mysql-how-to-install/](https://flaviocopes.com/mysql-how-to-install/). Or if you want to install MongoDB then you can follow this tutorial [https://docs.mongodb.com/manual/tutorial/install-mongodb-on-os-x/](https://docs.mongodb.com/manual/tutorial/install-mongodb-on-os-x/).

On **Linux** you can setup **LAMP** stack or **LEMP** stack. **LAMP** stack is stand for Linux, Apache, MySQL and PHP. **LEMP** is stand for Linux , Nginx, MySQL and PHP. I will have a post to compare Apache and Nginx in the future. For now with LAMP you can follow this tutorial [https://www.digitalocean.com/community/tutorials/how-to-install-linux-apache-mysql-php-lamp-stack-ubuntu-18-04](https://www.digitalocean.com/community/tutorials/how-to-install-linux-apache-mysql-php-lamp-stack-ubuntu-18-04), with LEMP you can follow [https://www.digitalocean.com/community/tutorials/how-to-install-linux-nginx-mysql-php-lemp-stack-ubuntu-18-04](https://www.digitalocean.com/community/tutorials/how-to-install-linux-nginx-mysql-php-lemp-stack-ubuntu-18-04).

OR you only need to download and install XAMPP for cross-platform localhost [https://www.apachefriends.org/index.html](https://www.apachefriends.org/index.html) . With XAMPP you do not need to install anything else, just put code to folder and you good to go.

## Code editor for PHP

There are a lot of Code Editor on the internet right now, for example : **Top IDE for PHP Projects** like PHPStorm, Netbeans, Aptana Studio, Eclipse, Visual Studio (with Xamarin), ZendStudio ; **Top Code Editors for PHP Projects** like Sublime Text, Visual Studio Code, Atom, Notepad++, etc.

But in my **experience** I would recommend to use **Visual Studio Code**, like for a lot of coding stuff not just PHP only.

**Visual Studio Code** is a lightweight but powerful source code editor which runs on your desktop and is available for Windows, macOS and Linux. It comes with built-in support for JavaScript, TypeScript and Node.js and has a rich ecosystem of extensions for other languages (such as C++, C#, Java, Python, PHP, Go) and runtimes (such as .NET and Unity).

You can follow this tutorial to setup [https://code.visualstudio.com/docs](https://code.visualstudio.com/docs).
After install VS Code I would recommend you to install **GIT Bash** with this tutorial [https://git-scm.com/downloads](https://git-scm.com/downloads).
And **Composer** for future [https://getcomposer.org/download/](https://getcomposer.org/download/).

## Top Extensions for PHP

Before you dig in to actual coding there are some **extensions** for you coding **productivity**. There is no easier than this, just go to extensions tab and find the extension you want , click the install button. That's all for install extensions. Here the list of the **Extensions** you may concern to install:

- PHP IntelliSense.
- Prettier Formatter, or phpfmt - PHP formatter, maybe both.
- Bracket Pair Colorizer
- GitLens — Git supercharged
- Indent-Rainbow and Indenticator
- PHP Debug
- Path Intellisense

## Summary

- XAMPP is the acronym for X-cross platform, Apache, MySQL, PHP and Perl
- A PHP editor is a program that allows you to write PHP code within the shortest possible time and allows you to debug your syntax errors at design time.
- Visual Studio Code is a cross platform open source editor that enhances the productivity of PHP developers.

Thanks for read. Have peace.
You can follow me on :

- [@step_dev](https://twitter.com/step_dev).
- [fb.com/giangvincent.org](https://www.facebook.com/giangvincent.org/).
- [Github.com/giangvincent](https://github.com/giangvincent).
- [linkedin/giang](https://www.linkedin.com/in/giang-do-linh-88b034131/).
