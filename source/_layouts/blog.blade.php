@extends('_layouts.app')

@section('nav-toggle')
    @include('_nav.menu-toggle')
@endsection

@section ("top-menu")
    <div id="vue-search" class="flex flex-1 justify-end items-center">
        <search></search>

        @include('_nav.main-menu', ['items' => $page->sections])

        @include('_nav.menu-toggle')
    </div>
@endsection

@section('body')
    <section class="flex-auto w-full container mx-auto py-16 px-6">
        @yield('content')
    </section>
@endsection
