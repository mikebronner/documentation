---
pagination:
    collection: posts
    perPage: 25
---
@extends('_layouts.blog')

@push('meta')
    <meta property="og:title" content="{{ $page->siteName }} Blog" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="The list of blog posts for {{ $page->siteName }}" />
@endpush

@section('content')
    <h1>Blog</h1>

    <hr class="border-b my-6">

    @foreach ($pagination->items as $post)
        @include('_components.post-preview-inline')

        @if ($post != $pagination->items->last())
            <hr class="border-b my-6">
        @endif
    @endforeach

    @if ($pagination->pages->count() > 1)
        <nav class="flex text-base my-8">
            @if ($previous = $pagination->previous)
                <a
                    href="{{ $previous }}"
                    title="Previous Page"
                    class="bg-gray-200 hover:bg-gray-300 rounded mr-3 px-5 py-3"
                >&LeftArrow;</a>
            @endif

            @foreach ($pagination->pages as $pageNumber => $path)
                <a
                    href="{{ $path }}"
                    title="Go to Page {{ $pageNumber }}"
                    class="bg-gray-200 hover:bg-gray-300 text-blue-800 rounded mr-3 px-5 py-3 {{ $pagination->currentPage == $pageNumber ? 'text-blue-700' : '' }}"
                >{{ $pageNumber }}</a>
            @endforeach

            @if ($next = $pagination->next)
                <a
                    href="{{ $next }}"
                    title="Next Page"
                    class="bg-gray-200 hover:bg-gray-300 rounded mr-3 px-5 py-3"
                >&RightArrow;</a>
            @endif
        </nav>
    @endif
@stop
