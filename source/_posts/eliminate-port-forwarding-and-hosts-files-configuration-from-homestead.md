---
extends: _layouts.post
section: content
title: Eliminate Port Forwarding and Hosts File Configuration From Laravel Homestead!
date: 2017-12-07
description: Best configuration of Homestead I have found so far.
categories: [homestead]
featured: true
---

You know the drill with Homestead: maintain a huge list of domains in `/etc/hosts`, make sure all the ports are forwarding correctly, have complex config files to handle running artisan commands outside of homestead, and so on. This has always been annoying me, so when the `.dev` TLD switched to forced HTTPS a few weeks back in macOS 10.13.2-beta, (which has since released), as well as in Chrome now, it was time to find a better workflow.

At first I started experimenting with complicated Bonjour configurations and `.local` domains, but that had more drawbacks than benefits. I ran the problem by my [brother](https://github.com/sjbronner). He had a few suggestions that could drastically simplify the issue:

*   remove port forwarding
*   point all sites to the IP address configured in `Homestead.yaml`.

That was a good first step, as we no longer needed to worry about possible port conflicts on our computers, and could still use the default ports for services running in Homestead. The `hosts` file was still a problem, though.

The solution for that was to register a public subdomain that points to Homestead’s IP address. Now that we have that in place, we cleared out all the entries from `/etc/hosts` that were specific to Homestead sites, and lo-and-behold, we have streamlined the Homestead workflow process quite a bit.

> The only place you need to make configuration changes is now in `Homestead.yaml` when adding new sites.

#### Assumptions

*   Your Homestead’s IP address is `192.168.10.10`. If yours is different, use that IP address in the instructions below.
*   Your development computer has internet access. If not, you may still have to maintain a `/etc/hosts` file.
*   You have a registered domain you can use for development purposes, referenced in the steps below as `example.com`.
*   The instructions are geared toward Mac users. If you are on Linus, you may need to adjust some things. Eliminating port forwarding on Windows might not work.
*   I keep all my Homestead sites in a `Sites` folder. You may call this something else on your system. By default `Homestead.yaml` defines this folder as `~/Code`.

#### Implementation

*   Go to your registrar and create an `A` record with host `*.dev` that points to `192.168.10.10`.
*   Open your `Homestead.yaml` file in an editor of your choice.
*   Remove Homestead’s default port forwarding rules by adding the following line:`default_ports: false`
*   Remove or comment out your custom port forward rules.
*   Rename the TLDs of the site entries from whatever they were at (`.dev` or `.test`, etc) to `<site>.dev.example.com`. Replace `<site>` with whatever you want to access that site as in Homestead:

<iframe width="700" height="250" src="/media/db76b110e0e6c3d7a31f9f8eb58827e2?postId=1d3ab956bd5b" data-media-id="db76b110e0e6c3d7a31f9f8eb58827e2" data-thumbnail="https://i.embed.ly/1/image?url=https%3A%2F%2Favatars2.githubusercontent.com%2Fu%2F1791050%3Fs%3D400%26v%3D4&amp;key=a19fcc184b9711e1b4764040d3dc5c07" allowfullscreen="" frameborder="0"></iframe>

*   Go ahead and save your `Homestead.yaml` file and open `/etc/hosts` for editing.
*   Clear out (or comment, for now) all the Homestead domain and IP entries.

If you now fire up and provision homestead `vagrant up --provision`, you should be able to access your dev site in your browser using the following URL: `purpleturles.dev.example.com`, **without using the **`**:8000**` **port**!

We’re not quite out of the woods just yet, as you will quickly find out that the Redis and Postgres services are refusing connections. This is because they are not bound to the `192.168.10.10` address. Let’s get that wrapped up.

*   SSH into Homestead: `vagrant ssh`.
*   Edit the Postgres configuration file:

<iframe width="700" height="250" src="/media/a36064122aef7a86c6143c292279bfde?postId=1d3ab956bd5b" data-media-id="a36064122aef7a86c6143c292279bfde" data-thumbnail="https://i.embed.ly/1/image?url=https%3A%2F%2Favatars2.githubusercontent.com%2Fu%2F1791050%3Fs%3D400%26v%3D4&amp;key=a19fcc184b9711e1b4764040d3dc5c07" allowfullscreen="" frameborder="0"></iframe>

*   Add the following line at the end:

<iframe width="700" height="250" src="/media/af47cd1ca310ac491d4088b935713e1a?postId=1d3ab956bd5b" data-media-id="af47cd1ca310ac491d4088b935713e1a" data-thumbnail="https://i.embed.ly/1/image?url=https%3A%2F%2Favatars2.githubusercontent.com%2Fu%2F1791050%3Fs%3D400%26v%3D4&amp;key=a19fcc184b9711e1b4764040d3dc5c07" allowfullscreen="" frameborder="0"></iframe>

*   Go ahead and save the Postgres config file, and open the Redis config file for editing:

<iframe width="700" height="250" src="/media/33a8a42313f72a60b80858ff1a7df1f8?postId=1d3ab956bd5b" data-media-id="33a8a42313f72a60b80858ff1a7df1f8" data-thumbnail="https://i.embed.ly/1/image?url=https%3A%2F%2Favatars2.githubusercontent.com%2Fu%2F1791050%3Fs%3D400%26v%3D4&amp;key=a19fcc184b9711e1b4764040d3dc5c07" allowfullscreen="" frameborder="0"></iframe>

*   Add the following entry after the existing bind entry:

<iframe width="700" height="250" src="/media/2aa4336aef39786fd68cabfca7efc91a?postId=1d3ab956bd5b" data-media-id="2aa4336aef39786fd68cabfca7efc91a" data-thumbnail="https://i.embed.ly/1/image?url=https%3A%2F%2Favatars2.githubusercontent.com%2Fu%2F1791050%3Fs%3D400%26v%3D4&amp;key=a19fcc184b9711e1b4764040d3dc5c07" allowfullscreen="" frameborder="0"></iframe>

Now we’re cooking! Go ahead and save, exit Homestead, and restart it once more: `vagrant reload`.

> You should now have access to all your dev sites without the need to do port forwarding or maintaining a tedious `/etc/hosts` file!

_Please let me know if you have any questions or comments. I would love to hear about your experiences with this!_

_I would like to thank my brother, Sebastian, for his help in this and sparking some interesting discussions and thoughts on how to achieve this!_
