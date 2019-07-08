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
    <section class="container max-w-4xl mx-auto px-6 md:px-8 py-4">
        <div class="flex flex-col lg:flex-row">
            <nav id="js-nav-menu" class="nav-menu hidden lg:block">
                @include('_nav.menu', ['items' => $page->navigation])
            </nav>

            <div class="w-full lg:w-3/5 break-words pb-16 lg:pl-4" v-pre>
                @yield('content')
            </div>

            <nav class="nav-menu">
                    <ul class="list-reset">
                        <li class="list-reset">
                            <a class="nav-link" href="#governor-for-laravel">Governor For Laravel</a>
                            <ul class="list-reset pl-4">
                                <li class="list-reset">
                                    <a class="nav-link" href="#goal">Goal</a> </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#requirements">Requirements</a></li>
                                <li class="nav-item"><a class="nav-link" href="#installation">Installation</a></li>
                                <li class="nav-item"><a class="nav-link" href="#implementation">Implementation</a></li>
                                <li class="nav-item"><a class="nav-link" href="#upgrading">Upgrading</a>
                                    <ul class="list-reset pl-8">
                                        <li class="nav-item"><a class="nav-link" href="#from-0115-to-012-breaking">From 0.11.5+ to 0.12
                                                [Breaking]</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#from-011-to-0115-breaking">From 0.11 to 0.11.5
                                                [Breaking]</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#from-010-to-011-breaking">From 0.10 to 0.11
                                                [Breaking]</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#from-06-to-version-010-breaking">From 0.6 to
                                                Version 0.10 [Breaking]</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#to-06-breaking">to 0.6 [Breaking]</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="#configuration">Configuration</a>
                                    <ul class="list-reset pl-8">
                                        <li class="nav-item"><a class="nav-link" href="#views">Views</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#policies">Policies</a>
                                            <ul class="list-reset pl-10">
                                                <li class="nav-item"><a class="nav-link" href="#checking-authorization">Checking
                                                        Authorization</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="#filter-queries-to-show-ownly-allowed-items">Filter Queries To Show Ownly Allowed
                                                Items</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#tables">Tables</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#admin-views">Admin Views</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#403-unauthorized">403 Unauthorized</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#authorization-api">Authorization API</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#role-check-api">Role-Check API</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="#examples">Examples</a>
                                    <ul class="list-reset pl-8">
                                        <li class="nav-item"><a class="nav-link" href="#config-file">Config File</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#policy">Policy</a>
                                            <ul class="list-reset pl-10">
                                                <li class="nav-item"><a class="nav-link"
                                                        href="#no-methods-required-for-default-policies">No Methods Required For Default
                                                        Policies</a></li>
                                                <li class="nav-item"><a class="nav-link"
                                                        href="#default-methods-in-a-policy-class">Default Methods In A Policy Class</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
        </div>
    </section>
@endsection
