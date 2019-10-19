@extends('_layouts.app')

@section ("top-menu")
    <div class="flex flex-1 justify-end items-center text-right md:pl-10">
        @if ($page->docsearchApiKey && $page->docsearchIndexName)
            @include('_nav.search-input')
        @endif

        @include('_nav.main-menu', ['items' => $page->sections])
    </div>
@endsection

@section('nav-toggle')
    @include('_nav.menu-toggle')
@endsection

@section ("right-menu")
    @yield ("context-menu")
@endsection

@section('body')
    <section class="container mx-auto px-6 md:px-8 py-4">
        <div class="flex flex-col lg:flex-row">
            <nav id="js-nav-menu" class="nav-menu hidden lg:block">
                @include('_nav.menu', ['items' => $page->navigation])
            </nav>

            <div class="w-full lg:w-3/5 break-words pb-16 lg:px-4" v-pre>
                @yield('content')
            </div>

            <nav class="nav-menu p-0 pl-4">
                <a
                    class="mb-4 block"
                    href="{{ $page->repository_url }}" target="_blank"
                >
                    <i class="fa fa-github"></i>
                    Github
                </a>
                <context-menu :headings="pageHeadings"></context-menu>
            </nav>
        </div>
    </section>
@endsection
