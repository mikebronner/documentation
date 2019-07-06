---
extends: _layouts.post
section: content
title: Cron-Job Error Notifications
date: 2019-05-28
description: Configure your con-jobs to email you when something goes wrong.
categories: [devops]
featured: true
---

As part of your job you work with servers, are required to do dev-ops, and end up utilizing cron jobs for various things. **If only there were an easy way to monitor cron jobs for failures?!**

I was in a situation like that, where I didn't want to set up complicated monitoring solutions; I just wanted a quick email when something went wrong.

## /etc/aliases
This file is part of sendmail and specifies which email aliases should be forwarded to which user. By default it looks something like this:
```
# /etc/aliases
mailer-daemon: postmaster
postmaster: root
nobody: root
hostmaster: root
usenet: root
news: root
webmaster: root
www: root
ftp: root
abuse: root
noc: root
security: root
```

Now, what I didn't know was that you can also specify forwarding to external email addresses here. So if you add the following to the end of the file:
```
# forward root to email
root: your@email-server.com
```

You will get any notification that are sent to `root` emailed to you. This is extremely helpful for monitoring a server that is acting strange.

Additionally, you can forward any of the other users set up on the server to the root user, which then gets forwarded on to you as well:
```
user1: root
user2: root
user3: root

# forward root to email
root: your@email-server.com
```

I hope this helps maintain your sanity, as it helped mine. :)
