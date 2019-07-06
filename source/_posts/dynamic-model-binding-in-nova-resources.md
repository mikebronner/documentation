---
extends: _layouts.post
section: content
title: Dynamic Model Binding In Laravel Resources
date: 2019-06-06
description: How to overcome the static-model-binding concept documented in Laravel Nova.
categories: [nova]
featured: true
---

## Problem
If you are developing Nova packages, you have probably been faced with the situation where you wanted to create Nova resources based on configurable model classes (which would allow the developer using your package to extend your package models and add logic required for their app).

Unfortunately the model binding is limited to a static variable on the Resource model:

```php
public static $model = "App\User";
```

## Solution
Remove the initialization of your `$model` variable. This will throw errors if things don't load as expected, instead of causing unexpected behaviors if `$model` is initialized with dummy data.
```php
public static $model;
```

Instead we will initialize the values in the Nova Service provider:
```php
    // ...

    public function boot()
    {
        // ...

        if (class_exists("Laravel\Nova\Resource")) {
            \Your\Package\Nova\User::$model = config("package.auth-model-fqcn");
            \Laravel\Nova\Nova::serving(function (ServingNova $event) {
                \Laravel\Nova\Nova::resources([
                    \Your\Package\Nova\User::class,
                ]);
            });
        }

        // ...
    }
```

This allows you to initialize the class names dynamically, which comes in very handy for package development.

#### Previous Approach
I had previously written this tutorial using method overloading of the `Resource` class. However, this proved to be problematic, as the `$model` variable ended up being referenced outside of the Resource class throughout Nova. I subsequently pivoted to this service-provider-based solution, which while not as elegant, is much simpler.

--------------------------------

*I hope this was helpful for you. I know customizing Nova can seem daunting and complex. If you have questions pertaining to Nova, please don't hesitate to ask, and I will try to write up the solution in a blog post.*
