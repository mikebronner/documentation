@extends('_layouts.app')

@section ("top-menu")
    <div class="flex flex-1 justify-end items-center text-right md:pl-10">
        @include('_nav.main-menu', ['items' => $page->sections])
    </div>
@endsection

@section('nav-toggle')
    @include('_nav.menu-toggle')
@endsection

@section ("body")
    <section class="flex-auto w-full container max-w-xl mx-auto py-16 px-6">
        @yield('content')
    </section>
@endsection
