---
extends: _layouts.post
section: content
title: Upgrading Homestead to VirtualBox 5
date: 2017-10-05
description: How to upgrade Homestead to work with Virtualbox 5.
categories: [homestead]
featured: true
---

* * *

_Note on conventions used in this article:
- console commands are bold and italic:_ **_which php5-fpm_**

* * *

### Reasoning

As with everything, we need to make a consious decision when we do things. In this case a VirtualBox Guest Additions mismatch has severe performance implications and in my case has halted the synchronizing between Vagrant and OS/X.

* * *

### Requirements

*   Homestead 2
*   VirtualBox 5 (5.0.0 or greater)
*   Vagrant 1.7.4 (or greater)

* * *

### Implementation

1.  Let’s start off by halting Homestead:
    **_homestead halt_**
2.  And next Vagrant: make sure you download the [latest version](http://www.vagrantup.com/downloads.html) (1.7.4 as of this writing) and install as usual.
3.  Download and install the [latest version of VirtualBox](https://www.virtualbox.org/wiki/Downloads) (5.0.0 as of this writing).
4.  Now for the tricky bit: upgrading VirtualBox Guest Additions. Let’s bring Homestead back up:
    **_homestead up_** Notice now how it says the Guest Addition version does not match the VirtualBox version?
5.  SSH into Homestead:
    **_homestead ssh_**
6.  Remove any existing packages that we need to build the Guest Additions. (We will install the new versions next.)
    **_sudo apt-get remove dkms build-essential linux-headers-*_**
7.  Remove any remnants of the old Guest Additions:
    **_sudo rm -rf VBoxGuestAdditions-*_**
8.  Now lets install the new replacements for them:
    **_sudo apt-get install dkms build-essential linux-headers-$(uname -r)_**
9.  Great! We have the system prepped, and ready to install the new Guest Additions. In my example I am using the 5.0.0 version, but make sure you use the version that matches your VirtualBox (one command, please excuse the inappropriate line breaks — wish Medium had propper code snippet support, the code blocks they do have break the lists):
    **_wget_** [**_http://download.virtualbox.org/virtualbox/5.0.0/VBoxGuestAdditions_5.0.0.iso_**](http://download.virtualbox.org/virtualbox/5.0.0/VBoxGuestAdditions_5.0.0.iso)
10.  Create a mount point for the ISO:
    **_sudo mkdir /media/VBoxGuestAdditions_**
11.  And mount the ISO (again, this is a single command on one line):
    **_sudo mount -o loop,ro VBoxGuestAdditions_5.0.0.iso /media/VBoxGuestAdditions_**
12.  Now we can finally install the Guest Additions:
    **_sudo sh /media/VBoxGuestAdditions/VBoxLinuxAdditions.run_**
13.  Once this completes successfully, we can clean up:
    **_sudo umount /media/VBoxGuestAdditions
    sudo rm -rf /media/VBoxGuestAdditions
    rm VBoxGuestAdditions_*.iso
    sudo rm -rf /opt/VBoxGuestAdditions-4*_**
14.  Exit out of Homestead, and restart it:
    **_exit
    homestead halt_**
15.  Let’s bring it back up:
    **_homestead up_**

* * *

And we can rejoice not seeing a Guest Addition version warning! Mission accomplished. Now pat yourself on the back, and get back to work already! 😄

* * *

### Update

This process also fixes instances of the following error that may be encountered while running **_homestead up_**:


```
==> default: Mounting shared folders…
default: /vagrant => /Users/mike/.composer/vendor/laravel/homestead
Failed to mount folders in Linux guest. This is usually because
the “vboxsf” file system is not available. Please verify that
the guest additions are properly installed in the guest and
can work properly. The command attempted was:
```



```
mount -t vboxsf -o uid=`id -u vagrant`,gid=`getent group vagrant | cut -d: -f3` vagrant /vagrant
mount -t vboxsf -o uid=`id -u vagrant`,gid=`id -g vagrant` vagrant /vagrant
```



```
The error output from the last command was:
```



```
mount: wrong fs type, bad option, bad superblock on vagrant,
missing codepage or helper program, or other error
```



```
In some cases useful info is found in syslog — try
dmesg | tail or so.
```
