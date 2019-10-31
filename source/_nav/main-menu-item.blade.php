    @if ($url = is_string($item) ? $item : $item->url)
        {{-- Menu item with URL--}}
        <a href="{{ $page->url($url) }}"
            class="text-green-600 hover:text-green-900 {{ 'lvl' . $level }} {{ $page->isActiveParent($item) ? 'lvl' . $level . '-active underline' : '' }} {{ $page->isActive($url) ? 'active underline font-semibold ' : '' }} ml-6 "
        >
            {{ $label }}
        </a>
    @else
        {{-- Menu item without URL--}}
        <p class="nav-menu__item text-mono-600">{{ $label }}</p>
    @endif

    @if (! is_string($item) && $item->children)
        {{-- Recursively handle children --}}
        @include('_nav.menu', ['items' => $item->children, 'level' => ++$level])
    @endif
