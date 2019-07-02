@php $level = $level ?? 0 @endphp

<nav class="hidden lg:flex items-center justify-end text-lg">
    @foreach ($items as $label => $item)
        @include('_nav.main-menu-item')
    @endforeach
</nav>
