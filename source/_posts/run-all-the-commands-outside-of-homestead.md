---
extends: _layouts.post
section: content
title: Run _#AllTheCommands_ Outside of Homestead
date: 2015-03-16
description: Wouldn't it be nice if you didn't have to SSH into Homestead whenever you want to run Artisan commands?
categories: [homestead]
featured: true
---

**Install latested PHP5+MCrypt on Yosemite to enable Laravel Artisan**

* * *

[Laravel Homestead](http://laravel.com/docs/5.0/homestead) has brought virtual machines for web development to the mainstream PHP developer: it makes setting up a development stack similar to XAMP extremely simple. You no longer need to be a pseudo sys-admin to set up Vagrant and Puppet to manage your environments.

However, one of the drawbacks so far has been that you always needed to run Laravel Artisan commands from within homestead, as they depending on MCrypt being installed (which OS X has not yet included by default). The main drawbacks are slow execution (running commands inside homestead is not near as fast as running them natively — I suspect this mostly has to do with the Vagrant Shared Folders feature) and the annoyance of always having to SSH into homestead.

The accepted solution thus far has been to install newer versions of PHP alongside Apple’s version using Homebrew or MacPorts. This would likely require you to compile the MCrypt extension manually. I also found that Homebrew could leave your system in disarray if things went wrong (more than once I had to do a complete restore because of this).

However, there’s another method I came across while research some non-related issues: install the latest version of PHP from a binary that includes the MCrypt extension. It will not bork up your system if you want to remove it, either. ☺Let’s get cooking!

* * *

### Ingredients

*   OS X Yosemite (already installed)
*   Laravel Homestead 2.x (already installed with shared folders set up)
*   [PHP for OS/X](http://php-osx.liip.ch)

* * *

### Recipe

1.  Open Terminal.
2.  Let’s head to your home directory and install PHP 5.6 (the latest version as of now):

<iframe width="700" height="250" src="/media/b4ddfd87a71a24e4477a792b9701ce34?postId=e2fc8d05251f" data-media-id="b4ddfd87a71a24e4477a792b9701ce34" allowfullscreen="" frameborder="0"></iframe>

3\. If you are using Oh-My-ZSH:

<iframe width="700" height="250" src="/media/39f2610b56c46a5414d390a09d64241f?postId=e2fc8d05251f" data-media-id="39f2610b56c46a5414d390a09d64241f" allowfullscreen="" frameborder="0"></iframe>

And prepend “/usr/local/php5/bin:” to the “export PATH” string, like so:

<iframe width="700" height="250" src="/media/85b3252a288771b936be53e4452daffc?postId=e2fc8d05251f" data-media-id="85b3252a288771b936be53e4452daffc" allowfullscreen="" frameborder="0"></iframe>

4\. If you are using Bash (default):

<iframe width="700" height="250" src="/media/de66c4484e4c75027aee39ac5c4c6534?postId=e2fc8d05251f" data-media-id="de66c4484e4c75027aee39ac5c4c6534" allowfullscreen="" frameborder="0"></iframe>

And add the following line at the end (if you already have entries there):

<iframe width="700" height="250" src="/media/fde537d04e9fee3a2ead07128e8e4e7c?postId=e2fc8d05251f" data-media-id="fde537d04e9fee3a2ead07128e8e4e7c" allowfullscreen="" frameborder="0"></iframe>

5\. Quit and restart Terminal.

6\. Go to one of your Laravel projects in your Homestead-shared folder (don’t SSH into Homestead though), and run:

<iframe width="700" height="250" src="/media/3b58e17ab0bc15ce71751e6407712d85?postId=e2fc8d05251f" data-media-id="3b58e17ab0bc15ce71751e6407712d85" allowfullscreen="" frameborder="0"></iframe>

* * *

### The Cake

If all went well, you should be greeted by the following output (you will most likely have a newer version of Laravel installed):

![](https://cdn-images-1.medium.com/max/1600/1*bJ8vFt8_cChMLRcQz4xZpw.png)Artisan Commands Available Outside Homestead

* * *

### And The Icing

We still have the one command that won’t play nice, though: “**php artisan migrate**”. There’s a fix for that too:

In your project, edit config/database.php, changing

<iframe width="700" height="250" src="/media/a7640fb44de2c2f3628226dd3dc399b9?postId=e2fc8d05251f" data-media-id="a7640fb44de2c2f3628226dd3dc399b9" allowfullscreen="" frameborder="0"></iframe>Original Database Settings

To:

<iframe width="700" height="250" src="/media/9e717d7ceda176fc15e8f21376af7829?postId=e2fc8d05251f" data-media-id="9e717d7ceda176fc15e8f21376af7829" allowfullscreen="" frameborder="0"></iframe>New and improved database settings!

* * *

### Sources

*   [http://php-osx.liip.ch](http://php-osx.liip.ch/)
*   [http://jacurtis.com/easily-install-mcrypt-php-mavericks-yosemite/](http://jacurtis.com/easily-install-mcrypt-php-mavericks-yosemite/)
*   [https://laracasts.com/discuss/channels/general-discussion/homestead-db-connection-problem](https://laracasts.com/discuss/channels/general-discussion/homestead-db-connection-problem)
