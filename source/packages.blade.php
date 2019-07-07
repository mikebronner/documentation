@extends('_layouts.docs')

@section('body')
<section class="container max-w-2xl mx-auto px-6 py-10 md:py-12">

    <hr class="block my-8 border lg:hidden">

    <div class="md:flex -mx-2 -mx-4">
        <a class="mb-8 mx-3 px-2 md:w-1/3 {{ $page->selected('laravel-governor') }}"
            href="{{ $page->baseUrl }}/docs/laravel-governor"
        >
            <h3 id="intro-laravel" class="text-2xl text-blue-darkest mb-0">Governor for Laravel</h3>
            <p>Providing permissions management for your Laravel projects. (Includes a Nova admin panel.)</p>
        </a>

        <a class="mb-8 mx-3 px-2 md:w-1/3 {{ $page->selected('laravel-model-caching') }}"
            href="{{ $page->baseUrl }}/docs/laravel-model-caching"
        >
            <h3 id="intro-markdown" class="text-2xl text-blue-darkest mb-0">Model Caching for Laravel</h3>
            <p>Providing model-based caching for your Laravel projects. Can provide 10x performance boost for projects that run lots of queries.</p>
        </a>

        <a class="mx-3 px-2 md:w-1/3 {{ $page->selected('laravel-caffeine') }}"
            href="{{ $page->baseUrl }}/docs/laravel-caffeine"
        >
            <h3 id="intro-mix" class="text-2xl text-blue-darkest mb-0">Caffeine for Laravel</h3>
            <p>Automatic session-preservation, preventing timeouts on long forms and the associated headache of having to enter it all over again.</p>
        </a>
    </div>
</section>
@endsection
