---
extends: _layouts.post
section: content
title: Filtering BelongsTo Fields In Laravel Nova
date: 2019-06-01
description: How to only show specific records for a belongs-to relationship in Laravel Nova.
categories: [nova]
featured: true
---

When you're building out a feature-complete admin dashboard using Laravel Nova, you will probably come across the situation where you need your BelongsTo relationship fields to only show certain records, and not all records.

A common example would be to allow the user to only select their own records. 

There is no obvious way to do this on the field declaration of the BelongsTo field. Rather, you must implement the following method on the original Nova class that represents the BelongsTo model:

#### Given the following Book model:
```php
class Book extends Resource
{
    public static $model = 'App\Book';
    public static $title = "title";
    public static $search = [
        "id",
        "title"
    ];

    public function fields(Request $request)
    {
        return [
            ID::make()
                ->sortable(),
            Text::make("Title")
                ->sortable(),
            BelongsTo::make("Author"),
        ];
    }

    public function cards(Request $request)
    {
        return [];
    }

    public function filters(Request $request)
    {
        return [];
    }

    public function lenses(Request $request)
    {
        return [];
    }

    public function actions(Request $request)
    {
        return [];
    }
}
```

#### We can filter all relatable queries:
```php
class Author extends Resource
{
    public static $model = 'App\Author';
    public static $title = "name";
    public static $search = [
        "id",
        "name",
    ];

    public function fields(Request $request)
    {
        return [
            ID::make()
                ->sortable(),
            Text::make("Name")
                ->sortable(),
            HasMany::make("Books"),
        ];
    }

    public function cards(Request $request)
    {
        return [];
    }

    public function filters(Request $request)
    {
        return [];
    }

    public function lenses(Request $request)
    {
        return [];
    }

    public function actions(Request $request)
    {
        return [];
    }

    public static function relatableQuery(NovaRequest $request, $query)
    {
        // TODO: customize the restrictions to your specific needs
        return $query
            ->where("user_id", auth()->user()->id);
    }
}
```

#### Or we can filter by specific relationships:
```php
class Author extends Resource
{

    // ...

    public static function relatableBook(NovaRequest $request, $query)
    {
        // TODO: customize the restrictions to your specific needs
        return $query
            ->where("user_id", auth()->user()->id)
            ->where("title", "LIKE", "B%");
    }
}
```

These two options combined allow for some very powerful per-view customization of Nova.

*Did you find this interesting? Let me know if there are other aspects of Nova that you have questions about, and I will try to answer them.*
