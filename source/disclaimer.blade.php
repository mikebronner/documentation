@extends('_layouts.master')

@push ('scripts')
    <script src="https://app.termageddon.com/js/termageddon.js"></script>
@endpush

@push ('styles')

@endpush

@section('content')
    <section class="intro py-10 md:py-12">
        <div
            class=" container mx-auto px-6"
        >
            <div
                id="policy"
                data-policy-key="VjNCYVZtdFJObFowU0U5b1pYYzlQUT09"
            ></div>
        </div>
    </section>
@endsection
