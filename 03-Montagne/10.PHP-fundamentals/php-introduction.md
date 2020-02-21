# PHP Fundamentals: Introduction

## Table of Content

1. [Introduction](php-introduction.md)   ←
2. [Variables](php-variables.md)
3. [Conditions](php-conditions.md)
4. Quizz: [PHP / intro + variables](./php-quizz-1.md)
5. Drill: [Exercises on Conditions](php-exercices-conditions.md)
6. [Arrays](php-array.md)
7. [Loops](php-boucles.md)
8. [Functions](php-fonctions.md)

--


## PHP : "Hypertext Preprocessor"

PHP is a  **Backend** software, meaning that it runs on the *web server* (whereas the **Frontend** designates the software acting on the side of the *client* : the *browser*).

PHP enables the web server to **"think before speaking**". In Computer Sciences, "to think" means to calculate, process information. To speak means returning to the client (the browser from where originated the http request).
PHP can create responses in most formats: very often html, but also json, xml, css, javascript... 

## Why use PHP to return something else ?

Because this allows you to create **dynamic** pages, rather than **static** ones.

For instance, imagine you wanted to create a web page that would say "Hello!" to each of the 7 billion inhabitants of our lovely planet.
If you had to create these pages statically, you would need to create 7 billion pages. 

```HTML
<html>
<head>...</head>
<body><h1>Hello John Doe!</h1></body>
</html>
```
... it would take years, isn't it? Moreover, by the time you'd done making a thousand page, you would already have to delete some (for the deceased folks) and add some more (the babies born since you started your work)... That's not a good solution.

But what if you could separate the data from the display markup ? 
You would fetch the data from a database and simply use one php file containing the markup and a variable receiving the person's name (via the url for example). That file would generate html containing a dynamic element.

One way to do it would be to populate the variable via the URL, like this:  

http://citizens.net/humans/index.php?name=John&lastname=Doe


```PHP
<html>
<head>...</head>
<body><h1>Hello <?php echo $_GET['nom']; ?> <?php echo $_GET['lastname']; ?>!</h1></body>
</html>
```

You could then just send to each person its personal URL and done!

http://citizens.net/humans/index.php?name=Barbara&lastname=Streisand
http://citizens.net/humans/index.php?name=Michael&lastname=Jackson 
http://citizens.net/humans/index.php?name=Bart&lastname=Simpson  
...

There ! A softer, warmer lofter Earth!


## Setup

### Local Development Server 

When we work on a project, we don't work directly on the machine that will serve the files of the website or application, because the slightest typo mistake would look bad and hurt the client's brand image (at the very least).

So we develop on our own PC ("development environment"), until the files are ready for production (we then put them on the "production environment").

### How to setup a local development environment ?

To develop in PHP, you need to install the PHP software.  
To develop in MySQL, you need to install the PHP software.
But you actually need a third software to use PHP (and MySQL): a Web server.

The most common stacks are LAMP and LEMP :  Linux + Apache (or nginx, pronounced "Engine X") + MySQL + PHP.

You can also find a Windows alternative: WAMP. I'll let you guess what the Mac OS X version's name is...

Feel free to setup apache, MySQL and PHP directly on your machine. It can create a bit of a mess, though, so an alternative - and a useful technology worth learning - would be to use Docker, a virtualization engine.

- [Configurer un environnement de développement local (LAMP) sur Ubuntu](https://github.com/becodeorg/BeCode/wiki/Installer-LAMP-sur-Ubuntu) - si le lien ne fonctionne pas, [cliquez ici](https://github.com/becodeorg/BeCode/wiki) puis cliquez sur [Pages] puis choisissez le bon post.
- [Installer LAMP sur Linux](https://doc.ubuntu-fr.org/lamp)
- [Et y'a le tuto de Thomas aussi](https://github.com/Rivanos/projet-client-connectbx/tree/master/Le%20site#installer-linux-apache-mysql-php-lamp)
- [Installer PHPMyAdmin](https://doc.ubuntu-fr.org/phpmyadmin)

#### A... what ?

 [Docker](https://docker-curriculum.com/) is a tool that allows developers, sys-admins etc. to easily deploy their applications in a sandbox (called containers) to run on the host operating system i.e. Linux. The key benefit of Docker is that it allows users to package an application with all of its dependencies into a standardized unit for software development. Unlike virtual machines, containers do not have the high overhead and hence enable more efficient usage of the underlying system and resources.

#### 1. Installation

1. Let us use Docker to download and install a ready-made development environement containing the 3 software we need to play around with PHP and MySQL. [We have a good LEMP one](../Tools/README.md) to do this course exercises.

Whichever way you set up your local dev environment, you eventually have a web server accessible at http://localhost:PORTNUMBER  

2. Createa a "test" directory
3. Inside, create an `index.php`file, in which you write:  

```php
<?php
echo "Hello!";
?>
```

#### 2. Check that it works

Done? Then browse to `http://localhost/test/` 

You should see "Hello!". Bravo! You just created your first PHP script.
Give yourself a great loving hug, you deserve it.

![Giphy](./assets/vikings.gif)

### Exercises

- Let's play a bit with this index.php file. Add an image of cats.
- Write a second page in the same "test" folder, call it `cats.php` and add a bit of content and a link to each of the two files, so that you can navigate from one to the other.  
- Done? Well done, you just created a website cat-egorically nice !

![Giphy](./assets/cat2.gif)

## Onward! Next : [Variables and Conditions](./php-variables.md)
