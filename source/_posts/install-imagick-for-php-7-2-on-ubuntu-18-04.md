---
extends: _layouts.post
section: content
title: Install Imagick for PHP 7.2 on Ubuntu 18.04
date: 2019-05-28
description: How to Install Imagick on fresh Ubuntu server.
categories: [devops]
featured: true
---

I use Imagick for many of my web application projects. It is a robust and powerful image manipulation tool that has some advantages over GD. Unfortunately it doesn't come installed by default in Homestead.

## Installation
1. SSH into your Homestead instance.
2. Run the following command:
    ```sh
    sudo -i
    apt update -y
    apt install php-imagick -y
    echo extension=imagick.so >> /etc/php/7.2/cli/php.ini
    echo extension=imagick.so >> /etc/php/7.2/fpm/php.ini
    service php7.2-fpm reload
    ```

## Optional Configuration
If you would like to enable processing of PDFs in Imagick (it is now disabled by default), perform the following configuration after running the above command, while still in `sudo` mode:
1. Edit the Iaptmagick configuration file:
    ```sh
    nano /etc/ImageMagick-6/policy.xml
    ```
2. Enable PDF editing, change
    ```xml
    <policy domain="coder" rights="none" pattern="PDF" />
    ```

    to
    ```xml
    <policy domain="coder" rights="read|write" pattern="PDF" />
    ```

That should do it!
