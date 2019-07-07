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
    @yield('content')
@endsection
