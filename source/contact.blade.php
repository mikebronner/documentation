@extends('_layouts.master')

@push('meta')
    <meta property="og:title" content="Contact {{ $page->siteName }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="Get in touch with {{ $page->siteName }}" />
@endpush

@section('content')
    <section class="container mx-auto py-6 px-4">
        <h1>Contact</h1>

        <p class="mb-8">
            Please feel free to reach out to us using the form below.
        </p>

        <form
            action="https://formmailer.online/api/send"
            method="POST"
            class="mb-12"
        >
            <input type="email" name="__work__" style="display: none;">
            <input type="hidden" name="token" value="72bb23f9-85b6-45b0-ba01-8cda5f3a361a">
            <div class="flex flex-wrap mb-6 -mx-3">
                <div class="w-full md:w-1/2 mb-6 md:mb-0 px-3">
                    <label class="block mb-2 text-gray-900 text-sm font-semibold" for="contact-name">
                        Name
                    </label>

                    <input
                        type="text"
                        id="contact-name"
                        placeholder="Jane Doe"
                        name="name"
                        class="block w-full border shadow rounded-lg outline-none mb-2 p-4"
                        required
                    >
                </div>

                <div class="w-full px-3 md:w-1/2">
                    <label class="block text-gray-900 text-sm font-semibold mb-2" for="contact-email">
                        Email Address
                    </label>

                    <input
                        type="email"
                        id="contact-email"
                        placeholder="email@domain.com"
                        name="email"
                        class="block w-full border shadow rounded-lg outline-none mb-2 p-4"
                        required
                    >
                </div>
            </div>

            <div class="w-full mb-12">
                <label class="block text-gray-900 text-sm font-semibold mb-2" for="contact-message">
                    Message
                </label>

                <textarea
                    id="contact-message"
                    rows="4"
                    name="message"
                    class="block w-full border shadow rounded-lg outline-none appearance-none mb-2 px-4 py-6"
                    placeholder="A lovely message here."
                    required
                ></textarea>
            </div>

            <div class="flex justify-end w-full">
                <input
                    type="submit"
                    value="Submit"
                    class="block bg-blue-500 hover:bg-blue-700 text-white text-sm font-semibold tracking-wide uppercase shadow rounded-lg cursor-pointer px-6 py-3"
                >
            </div>
        </form>
    </section>
@stop
