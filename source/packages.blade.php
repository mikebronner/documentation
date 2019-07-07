@extends('_layouts.docs')

@section('body')
<section class="container max-w-2xl mx-auto px-6 py-10 md:py-12">

    <hr class="block my-8 border lg:hidden">

    <div class="md:flex -mx-2 -mx-4">
        <a class="max-w-sm rounded overflow-hidden shadow-lg mx-2 block"
            href="{{ $page->baseUrl }}/docs/laravel-governor"
        >
            <img class="w-full" src="/assets/images/governor.jpg" alt="Governor for Laravel header image.">
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">Governor for Laravel</div>
                <p class="text-gray-700 text-base">
                    Providing permissions management for your Laravel projects. Including Laravel Nova integration.
                </p>
            </div>
        </a>
        <a class="max-w-sm rounded overflow-hidden shadow-lg mx-2 block"
            href="{{ $page->baseUrl }}/docs/laravel-model-caching"
        >
            <img class="w-full" src="/assets/images/model-caching.jpg" alt="Governor for Laravel header image.">
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">Model Caching for Laravel</div>
                <p class="text-gray-700 text-base">
                    Providing model-based caching for your Laravel projects. Can provide 10x performance boost for projects that run lots of queries.
                </p>
            </div>
        </a>
        <a class="max-w-sm rounded overflow-hidden shadow-lg mx-2 block"
            href="{{ $page->baseUrl }}/docs/laravel-caffeine"
        >
            <img class="w-full" src="/assets/images/caffeine.jpg" alt="Governor for Laravel header image.">
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">Caffeine for Laravel</div>
                <p class="text-gray-700 text-base">
                    Automatic session-preservation, preventing timeouts on long forms and the associated headache of having to enter it all over again.
                </p>
            </div>
        </a>
    </div>
</section>
@endsection
