---
extends: _layouts.post
section: content
title: The 2019 macOS Beta/Preview PSA Watch For Web Developers
date: 2019-07-02
description: Things to consider before upgrading to macOS Catalina beta.
categories: [misc]
featured: true
---

It's time once again to begin the rollercoaster ride that is the annual macOS beta program! As a developer, I am intrigued by the new functionality provided in the OS, as well as new features in Xcode. This year holds huge promises that I am really looking forward to!

I will be installing and updating macOS Catalina as new versions come out, and testing them from a web development stand-point (mainly Laravel, but possibly also Server-Side Swift, if I get the time). Any issues I encounter with the following software will be reported here, and I will keep this entry up-to-date as best possible.


- Visual Studio Code
- Vagrant
- Virtual Box
- Table Plus
- (possibly) Atom Editor
- Safari (dev tools)
- Discord
- CleanMyMac X
- Transmit
- Jumpshare
- TG Pro
- Affinity Designer
- Affinity Photo
- Paw
- Tower
- Permute
- Screenflow 8

These are most of the apps I use on a day-to-day basis from a full-stack web-dev point-of view.

Today I am installing macOS 10.15.0 on my test machine, a 2016 MacBook Pro with TouchBar. Following that I will attempt to install the apps listed above and see if there are any compatibility issues and report back.

*Keep an eye on this post, and let me know if there is an app that I missed. If I have it, I will try to add it.*

## Beta 1 - Build 19A471t from 2019-06-03
- ✅ VirtualBox 5.2.14
- ✅ Vagrant 2.0.1
- ✅ Homestead
- ✅ VSCode 1.35.0-insider
- ✅ Tower 2.6.6 and 3.4.1
- ✅ Paw 3.1.8
- ✅ TablePlus 2.4
- ✅ Safari Dev Tools
- ✅ Screenflow 8.2.3
- ⛔️ CleanMyMac X 4.4.2 - Smart Scan feature hangs, app updates don't work.
- ✅ Permute 3.2.5
- ✅ Jumpshare 2.4.4
- ✅ Affinity Photo 1.6.7, 1.7
- ✅ Affinity Designer 1.6.1, 1.7
- ✅ Discord 0.0.255
- ✅ Base 2.4.12

## Beta 2 - Build 19A487l from 2019-06-17
- ✅ VirtualBox 5.2.14
- ✅ Vagrant 2.0.1
- ⚠️ Homestead: if using NFS, you will need to update your Sites folder directive as follows:
  ```yml
    - map: /System/Volumes/Data/Users/yourname/sitesfolder
      to: /home/vagrant/Sites
      type: "nfs"
  ```
- ✅ VSCode 1.35.0-insider
- ✅ Tower 3.4.1
- ✅ Paw 3.1.8
- ✅ TablePlus 2.4
- ✅ Safari Dev Tools
- ✅ Screenflow 8.2.3
- ⛔️ CleanMyMac X 4.4.3 - Various issues, Smart Scan feature hangs, malware scan hangs, software update problems, and more...
- ✅ Permute 3.2.5
- ✅ Jumpshare 2.4.4
- ✅ Affinity Photo 1.6.7, 1.7
- ✅ Affinity Designer 1.6.1, 1.7
- ✅ Discord 0.0.255
- ✅ Base 2.4.12

## Beta 3 - Build 19A501i from 2019-07-02
- ✅ VirtualBox 5.2.14
- ✅ Vagrant 2.0.1
- ⚠️ Homestead: **if using NFS, you will need to update your Sites folder directive as follows:**
  ```yml
    - map: /System/Volumes/Data/Users/yourname/sitesfolder
      to: /home/vagrant/Sites
      type: "nfs"
  ```
- ✅ VSCode 1.35.0-insider
- ✅ Tower 3.4.2
- ✅ Paw 3.1.8
- ✅ TablePlus 2.4
- ✅ Safari Dev Tools
- ✅ Screenflow 8.2.3
- ✅ CleanMyMac X 4.4.3
- ✅ Permute 3.2.5
- ✅ Jumpshare 2.4.4
- ✅ Affinity Photo 1.6.7, 1.7
- ✅ Affinity Designer 1.6.1, 1.7
- ✅ Discord 0.0.255
- ✅ Base 2.4.12

## Beta 4 - Build 19A512f from 2019-07-16
- ⛔️ VirtualBox 6
- ✅ Parallels 14
- ✅ Vagrant 2.0.1
- ⚠️ Homestead: **if using NFS, you will need to update your Sites folder directive as follows:**
  ```yml
    - map: /System/Volumes/Data/Users/yourname/sitesfolder
      to: /home/vagrant/Sites
      type: "nfs"
  ```
- ✅ VSCode 1.35.0-insider
- ✅ Tower 3.4.2
- ✅ Paw 3.1.8
- ✅ TablePlus 2.4
- ✅ Safari Dev Tools
- ✅ Screenflow 8.2.3
- ✅ CleanMyMac X 4.4.3
- ✅ Permute 3.2.5
- ✅ Jumpshare 2.4.4
- ✅ Affinity Photo 1.6.7, 1.7
- ✅ Affinity Designer 1.6.1, 1.7
- ✅ Discord 0.0.255

## Summary
- So far I'm loving Catalina, especially the new Sidecar functionality that lets me use my iPad Pro as a display.
- The CleanMyMac issues aren't a primary concern, as I can still run my Mac great without it in all other regards.
