---
extends: _layouts.post
section: content
title: Creating Packages with Laravel 5 & Studio
date: 2015-05-30
description: Using Studio to help create packages for Laravel 5.
categories: [laravel,package-development]
featured: true
---

Workbench has sadly been discontinued in Laravel 5\. Yes, there are ways to integrate it back into L5, but it seems to be on its way out. So, other than manually wiring up our packages that are in development, what can we do?

Enter [@franzliedke](https://twitter.com/franzliedke)’s [**studio**](https://github.com/franzliedke/studio) package. It aims to be a widely usable composer package scaffolding tool, but there may be certain instances where it won’t work well for you. So your mileage may vary.

### Requirements

*   Parent Laravel project
*   Studio package

### Installation

We want to start the new package in the project you are envisioning it to be used in initially — that’s our “Parent Laravel Project”.

1.  Go to your project’s base path. Let’s assume our project is called “purple-turtles” for the sake of demonstration.


```
cd ~/Developer/Sites/purple-turtles
```


2\. Studio documentation recommends installing studio globally with composer, however, this won’t work if you are developing in a VM like Homestead. Instead, let’s install it at the project level:


```
composer require --dev franzl/studio
```


3\. Now lets get a new package started:


```
vendor/bin/studio create packages/purple-turles/icecreammachine
```


4\. This will now step through a series of questions to get the package set up:

*   Please name this package: enter the _vendor/package_ name you want to use.
*   Please provide a default namespace (PSR-4): hit enter if the suggested default is to your liking. If not, like in our case, enter something like “PurpleTurtles\IcecreamMachine”.
*   … PhpUnit …: enter “y” if you will be using PHPUnit for testing, otherwise you can just hit enter.
*   … PhpSpec …: enter “y” if you will be using PHPSpec for testing, otherwise you can just hit enter.
*   … TravisCI …: enter “y” if you will be using TravisCI for builds (this is free for open-source projects).

It will now finish up creating the scaffold in the packages directory in your project’s base path.

5\. Set up git:

cd packages/purples-turtles/icecreammachine
git init

Now you can use your favorite GIT tool (in my case Git Tower 2) or commandline to publish your package to GitHub or BitBucket, or something similar.

All that’s left now is to publish your package in Packagist and include it in other projects!

Also note that your package will be available in your parent project, as if it was included in the vendor folder.

There is a small drawback in that you need to run **composer update** anytime you make class-level changes (or run **composer dump-autoload -o** if the changes weren’t that drastic) in the package directory, and then run **composer update** or **composer dump-autoload -o** or **php artisan optimize** in the parent project. Would love to see studio hook into the composer process and automatically run composer update on the package whenever the parent project is updated.
