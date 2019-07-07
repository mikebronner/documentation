---
extends: _layouts.post
section: content
title: Running PHPStorm On El Captian
date: 2017-10-05
description: Everything you need to get PHPStorm up and running.
categories: [troubleshooting]
featured: true
---

The following are some tweaks to get PHPStorm working on OS X 10.11 “El Capitan”.

### SCSS File Watcher

1.  Install SASS gem: **sudo gem install sass**
2.  Get the location of the sass command: **which sass** (in my case it was **/usr/local/bin/scss**)
3.  Update the SCSS File Watcher settings to point to your sass command:

![](https://cdn-images-1.medium.com/max/1600/1*KWmZ1kasiiaFPzLPQ1Hkag.png)
