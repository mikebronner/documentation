---
extends: _layouts.post
section: content
title: Clean Install of macOS 10.11 El Capitan
date: 2019-10-27
description: Installing El Captian is no longer straight-forward.
categories: [devops]
featured: false
published: false
---

- download the official installer from here: https://support.apple.com/en-us/HT206886
- create a bootable installation USB drive
- make sure the date is current and correct
- start the installer, this will create the recovery partition
- during reboot, remove the USB drive
- the installation might fail. make sure to set the date back to 2016
- reboot and continue installer
- after subsequent reboot, finish creation of user account
- log in, install udates, done
