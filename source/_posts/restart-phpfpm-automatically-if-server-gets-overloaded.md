---
extends: _layouts.post
section: content
title: Restart PHP-FPM Automatically If Server Gets Overloaded
date: 2019-05-28
description: How to prevent an overloaded web server from locking up completely.
categories: [devops]
featured: true
---

From time to time your server may get overloaded because PHP is spawning too many workers, or its workers get hung up, and does not make more available. I had a case where this was happening daily on a server, and it was impacting my clients so much that their sites were becoming non-responsive.

To help alleviate the issue while I was troubleshooting, we wrote a script that would automatically restart PHP-FPM if the server load was deemed too high:
```sh
#!/bin/bash

LOAD=`uptime | sed -r 's/^.*average: [0-9.]+, ([0-9.]+),.*$/\1/'`
ISLOADED=`bc <<< "$LOAD > 3"`

if [ $ISLOADED -eq 1 ]
then
        echo "restarting php-fpm at a load of $LOAD"
        systemctl restart php7.2-fpm 
fi
```

We then added this script to run in cron every minute. With the server stabilizing, I was able to focus on troubleshooting the actual problem, without impacting live websites TOO severely.
