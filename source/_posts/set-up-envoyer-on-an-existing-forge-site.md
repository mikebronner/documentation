---
extends: _layouts.post
section: content
title: Set Up Envoyer On An Existing Forge Site
date: 2015-03-16
description: Here's what needs to be done if you want to bring an existing Laravel site into Envoyer.
categories: [devops,laravel]
featured: true
---

So up until now you’ve been managing your [**Laravel**](http://laravel.com) project deployment with [**Laravel Forge**](https://forge.laravel.com), but are interested in moving to [**Envoyer**](http://envoyer.io).

> **“What happens to my existing setup?”**

It’s actually very straight-forward to get your existing forge-git-hooked site to deploy out.

1.  Remove any pre-existing Forge deploy hooks that were set up on your git provider.
2.  Follow [Taylor’s setup instructions on Laracasts](https://laracasts.com/series/envoyer). This should include setting up your deploy-on-commit hook, as well as the SSH key on Forge. Be sure to also set up your environment variables. Push your Envoyer project out when you’re ready.
3.  Update your site using Forge site configuration to point to:
    _<site root>/current/public_

![](https://cdn-images-1.medium.com/max/1600/1*oSAXFPfn571yYIsP1IbO6w.png)Example Configuration

4\. SSH into your server and go to your project’s root.

5\. Copy the content of your .env file: **_cat .env_**

6\. Paste the .env content into Envoyer’s environment management interface and push it to production:

![](https://cdn-images-1.medium.com/max/1600/1*uJRQCGqfWZfSzi5GP1W_3w.png)Environment Management in Envoyer

* * *

Envoyer actually just rides on top of your old files and adds what it needs. You might want to do some clean-up to get rid of the left-overs, but be aware that this might cause some down-time if things don’t go as expected. **_Be sure that you can afford some down-time to re-deploy, if anything should happen to go wrong._**

The following command should remove all but the necessary files for you:

> **find . -maxdepth 1 -not -name “.” -not -name “current” -not -name “storage” -not -name “releases” -not -name “.env” -exec rm -rf {} \;**

* * *

> Your setup is preserved — just a bit of optional cleanup was all it took!
