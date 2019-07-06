---
extends: _layouts.post
section: content
title: Agnoster Terminal Theme on OS X
date: 2015-02-27
description: Guide to installing Agnoster in macOS's Terminal.
categories: [homestead]
featured: true
---

**Installing Oh-My-ZSH with Agnoster on Yosemite**

* * *

The Agnoster ZSH theme is getting a lot of wind in its sails these days, and Mirza Pasic’s recent [blog post](https://bosnadev.com/2015/02/26/awesome-looking-terminal-with-oh-my-zsh/) in this topic sparked my interest. I’m always eager to try new things to aid my development workflow.

While his article outlines the how-to for Ubuntu, I’ll constrain myself to OS X, in my case Yosemite. We’ll end up with something similar to this:

![](https://cdn-images-1.medium.com/max/1600/1*a56Zo8tlEaleWieobAtY9g.png)Preview

* * *

### Prerequisites

*   **Mac Terminal** (preinstalled)
*   **ZSH** (preinstalled)
*   **Oh-My-Zsh** Refer to the [full installation guide](https://github.com/robbyrussell/oh-my-zsh) for more details.

<iframe width="700" height="250" src="/media/a7e4cfa0a4c9d468b39c67eca36a631a?postId=391d60effaf6" data-media-id="a7e4cfa0a4c9d468b39c67eca36a631a" allowfullscreen="" frameborder="0"></iframe>Install Oh-My-ZSH

*   **Ubuntu Mono Derivative Powerline Font** [Download Fonts](https://github.com/powerline/fonts/archive/master.zip)

* * *

### Installation

Now that we have identified our pre-requisites, let’s get started:

1.  Download the font archive, and unzip it. Go to _fonts-master/UbuntuMono/_ and install each of the four TTFs: simply double-click and let Font Book install them for you.
2.  Open Terminal, then navigate to _Terminal Preferences > Profiles > Font_ and click the Change button.
3.  Select _Ubuntu Mono derivative Powerline_ and set the font size to your liking.
4.  Close preferences, and quit Terminal.
5.  If you haven’t already done so, install Oh-My-ZSH.
6.  Now let’s configure your ZSH theme settings:

<iframe width="700" height="250" src="/media/39f2610b56c46a5414d390a09d64241f?postId=391d60effaf6" data-media-id="39f2610b56c46a5414d390a09d64241f" allowfullscreen="" frameborder="0"></iframe>Edit the ZSH Configuration

8\. There we will update our theme. You can find “ZSH_THEME=” toward the top of the file:

<iframe width="700" height="250" src="/media/3364c8937df411694a97f32ec8695a04?postId=391d60effaf6" data-media-id="3364c8937df411694a97f32ec8695a04" allowfullscreen="" frameborder="0"></iframe>Set the ZSH Theme

9\. Save you changes (CTRL-X if you’re using Nano, continue editing forever if you’re using Vi or Vim).

10\. Quit and restart Terminal.

11\. You should now see your new theme in place.

* * *

### Bonus

#### Custom Colors

You can customize your color preferences as desired in _Terminal Preferences > Profiles > ANSI Colors_.

#### Agnoster in PHPStorm Terminal

So now that we have the OS/X Terminal configured, you’re thinking that’s all well and good, but doesn’t really help if you’re using PHPStorm’s integrated Terminal window. Actually, now that you look at it, it only seems to have made things worse.

Never fear, the fix for that is here!

1.  Open the Terminal window and position it in the IDE to you liking.
2.  Open PHPStorm Preferences (CDM-, or PHPStorm > Preferences … menu item).
3.  Go to Editor > Colors & Fonts > Console Colors. Change Console standard output > Foreground to White. Change Console background > Background to Black.
4.  Go to Editor > Colors & Fonts > Console Font. Change Primary Font to Ubuntu Mono Derivative Powerline, Size 16, Line spacing 1.4.
5.  Click OK to close the preferences window.
6.  Click the red X in the Terminal frame to kill the current terminal, then click on the Terminal tab again to open a fresh terminal window with the new settings.
7.  If you have similar settings to mine, it should look something like the screenshot below.

![](https://cdn-images-1.medium.com/max/1600/1*0qmBJfm1SA0-g7yZonQLlA.jpeg)Agnoster Theme inside PHPStorm Terminal

* * *

### Feedback

Would love to hear your feedback — share your thoughts, problems, or improvements in the comments.
