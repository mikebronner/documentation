---
extends: _layouts.post
section: content
title: Testing Against Multiple Laravel Versions
date: 2018-05-28
description: How to set up package testing against multiple versions of Laravel.
categories: [laravel,package-development,testing]
featured: true
---

One thing that has been tedious over the last few years was maintaining Laravel packages over multiple Laravel releases. [Michael Dyrynda](https://medium.com/@michaeldyrynda) wrote an excellent [blog post on Travis-CI build matrixes](https://dyrynda.com.au/blog/testing-multiple-dependency-versions-with-travis-ci) that covers setting up Travis to install different composer dependencies.

We can leverage this approach to set up different test environments to cover different versions of Laravel.

Additionally, we can put together a few scripts to make this all work in our local environment as well!

### Use Case

So when would this process come in handy? There are other means of maintaining Laravel packages:

*   Only maintain support for the most recent version of Laravel, and throw up a new branch each time a new version of Laravel is released. In this model all previous branches grow stale and do not get support or improvements.
*   Only support the most recent version of Laravel, and keep everything on the same branch, using semver to keep the requirements in-line. This way composer will install the version of your package that meets the users’ requirements. Here, too, only the most recent version of Laravel is supported.

The common draw-back with these scenarios is that so many users who would like to use your package might not be able to, because their project is not (maybe is never) on the latest Laravel version. Also, users who don’t immediately upgrade their Laravel version when you update your package to the next Laravel version will be left in the cold and won’t receive patches or updates until they do update.

**There really is no good scenario that covers all bases, but the following method aims to provide as wide range of support as possible, with as little overhead as possible.**

### Requirements

Ideally, your Laravel package is already set up to use these, as we won’t cover their implementation here:

*   [Orchestra Testbench](https://github.com/orchestral/testbench) (and the other variants as necessary: testbench-browser-kit, testbench-dusk, testbench-db, etc.)
*   [Travis-CI](https://travis-ci.org) (this is free for open-source packages)

### Configuring Travis-CI

Take a read through Michael’s blog post (and follow his instructions if you like). Once you have an idea of what needs to be done, we will implement those changes, with a slightly different approach, to your project’s `.travis.yml` file:

<iframe width="700" height="250" src="/media/40165969ea5ddd72dafbd4203fdeb8e6?postId=3485cb5762e2" data-media-id="40165969ea5ddd72dafbd4203fdeb8e6" data-thumbnail="https://i.embed.ly/1/image?url=https%3A%2F%2Favatars2.githubusercontent.com%2Fu%2F1791050%3Fs%3D400%26v%3D4&amp;key=a19fcc184b9711e1b4764040d3dc5c07" allowfullscreen="" frameborder="0"></iframe>

Let’s go over what changed:

*   Removed the `php` and `env` sections.
*   Created a comprehensive `matrix` section that covers all our build permutations. We’re not specifying different package versions here, but instead are creating an environment variable for each version of laravel under each version of PHP.
*   Added a line under `before_script` to give our scripts the necessary permissions to be executed.
*   Changed the `script` section to only call our custom script, which we will cover next.

Everything else in your `.travis.yml` file can remain as you had it, it will likely differ from my example above.

### Creating The Test Script

We now need to achieve the following in our test scripts (one for each version of Laravel we will be testing):

*   Install the correct dependencies for that version of Laravel.
*   Run PHPUnit.

<iframe width="700" height="250" src="/media/2ce0287f316cbebd07e4549fd9b7b14e?postId=3485cb5762e2" data-media-id="2ce0287f316cbebd07e4549fd9b7b14e" data-thumbnail="https://i.embed.ly/1/image?url=https%3A%2F%2Favatars2.githubusercontent.com%2Fu%2F1791050%3Fs%3D400%26v%3D4&amp;key=a19fcc184b9711e1b4764040d3dc5c07" allowfullscreen="" frameborder="0"></iframe>

Let’s take a closer look:

*   Make a backup of `composer.json` so it doesn’t get messed up when we run these scripts locally.
*   Use `sed` to create a Laravel-version-specific `phpunit.xml` file.
*   Remove or require any dependencies based on the version of Laravel.
*   Run `composer update`.
*   Revert `composer.json` back to its original state.
*   Create a build log directory for code-coverage purposes (optional).
*   Run phpunit without loading any `php.ini` files to speed things up (optional). This can be risky, please read [Dustin Fraker](https://medium.com/@drfraker)’s blog post on this topic, and make adjustments as needed.
    We are also loading the custom `phpunit-xx.xml` file. The remaining options shown in the example are for code coverage purposes.
*   And lastly, we remove the version-specific `phpunit-xx.xml` file.

Encapsulating the testing process into scripts like this allow us to run these tests locally as well, and not have to wait for Travis to show us any failures. You would create a copy of this file for each version of Laravel, replacing `phpunit-55.xml` with `phpunit-54.xml`, and so on. Each file corresponds to each `PU_FILE=xx` entry in `.travis.yml`.

### Optional Cleanup

*   If you added the line to create the `build` directory, I would recommend adding that to your `.git-ignore` file: `/build`.
*   [It is recommend](https://hannesvdvreken.com/2015/01/14/gitattributes/) to maintain a `[.gitattributes](https://www.git-scm.com/docs/gitattributes)` file in your package repos. It can do so much, but I have started using it to exclude non-distribution files from my packages, so that when people install them with composer, they only pull down what’s needed to run the package. This makes for leaner downloads, and less cruft in projects.

### Summary

*   We configured Travis to test all permutations of PHP and Laravel.
*   We wrote some scripts to assist with that, and more importantly, allow us to run these tests locally.

To run your tests locally, all you need to do is call `./tests/pu-55.sh` or whatever your equivalent script name is, and you’re all set. Then if you want to test Laravel 5.4, simply run `./tests/pu-54.sh`, or `./tests/pu-56.sh` for Laravel 5.6, and so on.

**I would love to hear your feedback on this process.** Have you done something similar? Do you have suggestions for improvements? Has this opened new doors for you?

### Source Citations & Credits

[Sebastian Bronner](https://github.com/sjbronner), who helped me brainstorm some initial ideas and found Michael’s blog post.

[**orchestral/testbench**
_testbench - [Package] Laravel Testing Helper for Packages Development_github.com](https://github.com/orchestral/testbench "https://github.com/orchestral/testbench")[](https://github.com/orchestral/testbench)[**Michael Dyrynda | Testing multiple dependency versions with Travis CI**
_The next step was to write the necessary tests describing my desired inputs and outputs. Locally, I was testing using…_dyrynda.com.au](https://dyrynda.com.au/blog/testing-multiple-dependency-versions-with-travis-ci "https://dyrynda.com.au/blog/testing-multiple-dependency-versions-with-travis-ci")[](https://dyrynda.com.au/blog/testing-multiple-dependency-versions-with-travis-ci)[**Speed Up Your PHPUnit Tests - Disable Xdebug - Dustin Fraker**
_I recently noticed that my PHPUnit tests were running kind of slow which prompted me to start looking into how to speed…_dustinfraker.com](https://dustinfraker.com/speed-up-your-phpunit-tests-disable-xdebug/ "https://dustinfraker.com/speed-up-your-phpunit-tests-disable-xdebug/")[](https://dustinfraker.com/speed-up-your-phpunit-tests-disable-xdebug/)[**.gitattributes**
_Working as a web developer. On his blog he writes about things he learned while experimenting with tools he might use…_hannesvdvreken.com](https://hannesvdvreken.com/2015/01/14/gitattributes/ "https://hannesvdvreken.com/2015/01/14/gitattributes/")[](https://hannesvdvreken.com/2015/01/14/gitattributes/)
