@extends('_layouts.docs')

@section('body')
<section class="container mx-auto px-6 py-10 md:py-12">

    <h1>Our Open-Source Packages</h1>
    <hr class="block my-8 border-t-0 border-b border-gray-300">
    <p class="md:text-xl lg:text-2xl">
        Our packages are MIT-licensed open-source projects. Their development
        and maintenance requires a considerable amount of resources, especially
        responding to issues and implementing feature requests.
    </p>
    <p class="md:text-xl lg:text-2xl">
        Please consider
        <a
            class="inline-block rounded border border-mono-300 text-mono-700 px-3 font-normal lg:text-lg"
            href="https://github.com/sponsors/mikebronner"
            target="_blank"
        >
            <svg
                aria-hidden="true"
                focusable="false"
                class="icon inline-block fill-current text-pink-500"
                role="img"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 512 512"
            >
                <path d="M462.3 62.6C407.5 15.9 326 24.3 275.7 76.2L256 96.5l-19.7-20.3C186.1 24.3 104.5 15.9 49.7 62.6c-62.8 53.6-66.1 149.8-9.9 207.9l193.5 199.8c12.5 12.9 32.8 12.9 45.3 0l193.5-199.8c56.3-58.1 53-154.3-9.8-207.9z"></path>
            </svg>
            supporting
        </a>
        their continued development, especially if you use our packages for work
        or deploy them in production. Your continued support means a lot, and
        will to ensure that we can keep on developing open-source software.
        Thank you!
    </p>

    <div class="mt-8 flex -mx-2 -mx-4 flex-wrap">
        <div class="p-2 w-full sm:w-1/2 md:w-1/3 lg:w-1/4">
            <a
                class="rounded overflow-hidden shadow-lg block"
                href="https://github.com/GeneaLabs/laravel-sign-in-with-apple"
                target="_blank"
            >
                <img
                    class="w-full"
                    src="https://repository-images.githubusercontent.com/214492398/0a8d1a80-eceb-11e9-97b9-9513968c6057"
                    alt="Sign in with Apple for Laravel header image."
                >
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">Sign in with Apple for Laravel</div>
                    <p class="text-gray-700 text-base">
                        Provide "Sign In With Apple" functionality to your Laravel app.
                    </p>
                </div>
            </a>
        </div>

        <div class="p-2 w-full sm:w-1/2 md:w-1/3 lg:w-1/4">
            <a
                class="rounded overflow-hidden shadow-lg block"
                href="https://github.com/GeneaLabs/laravel-socialiter"
                target="_blank"
            >
                <img
                    class="w-full"
                    src="https://repository-images.githubusercontent.com/214933023/94f38c80-ee59-11e9-992c-41ebc7eed234"
                    alt="Socialiter for Laravel header image."
                >
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">Socialiter for Laravel</div>
                    <p class="text-gray-700 text-base">
                        Automatically manage user persistence and resolution for any Laravel Socialite provider.
                    </p>
                </div>
            </a>
        </div>

        <div class="p-2 w-full sm:w-1/2 md:w-1/3 lg:w-1/4">
            <a
                class="rounded overflow-hidden shadow-lg block"
                href="https://github.com/GeneaLabs/laravel-governor"
                target="_blank"
            >
                <img
                    class="w-full"
                    src="https://repository-images.githubusercontent.com/41706753/37d93d00-f1b1-11e9-9f67-067c80849466"
                    alt="Governor for Laravel header image."
                >
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">Governor for Laravel</div>
                    <p class="text-gray-700 text-base">
                        Providing permissions management for your Laravel projects. Including Laravel Nova integration.
                    </p>
                </div>
            </a>
        </div>

        <div class="p-2 w-full sm:w-1/2 md:w-1/3 lg:w-1/4">
            <a
                class="rounded overflow-hidden shadow-lg block"
                href="https://github.com/GeneaLabs/laravel-model-caching"
                target="_blank"
            >
                <img class="w-full"
                src="https://repository-images.githubusercontent.com/103836049/b0d89480-f1b1-11e9-8e13-a7055f008fe6"
                alt="Model Caching for Laravel header image."
            >
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">Model Caching for Laravel</div>
                    <p class="text-gray-700 text-base">
                        Providing model-based caching for your Laravel projects. Can provide 10x performance boost for projects that run lots of queries.
                    </p>
                </div>
            </a>
        </div>

        <div class="p-2 w-full sm:w-1/2 md:w-1/3 lg:w-1/4">
            <a
                class="rounded overflow-hidden shadow-lg block"
                href="https://github.com/GeneaLabs/laravel-caffeine"
                target="_blank"
            >
                <img
                    class="w-full"
                    src="https://repository-images.githubusercontent.com/40729869/26446500-f1b2-11e9-9611-6a2e65688de2"
                    alt="Governor for Laravel header image."
                >
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">Caffeine for Laravel</div>
                    <p class="text-gray-700 text-base">
                        Automatic session-preservation, preventing timeouts on long forms and the associated headache of having to enter it all over again.
                    </p>
                </div>
            </a>
        </div>

        <div class="p-2 w-full sm:w-1/2 md:w-1/3 lg:w-1/4">
            <a
                class="rounded overflow-hidden shadow-lg block"
                href="https://github.com/GeneaLabs/laravel-casts"
                target="_blank"
            >
                <img
                    class="w-full"
                    src="https://repository-images.githubusercontent.com/54227416/9eab2600-f1b2-11e9-9aa3-2da687ef463c"
                    alt="Casts for Laravel header image."
                >
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">Casts for Laravel</div>
                    <p class="text-gray-700 text-base">
                        Form builder for Laravel 5.
                    </p>
                </div>
            </a>
        </div>

        <div class="p-2 w-full sm:w-1/2 md:w-1/3 lg:w-1/4">
            <a
                class="rounded overflow-hidden shadow-lg block"
                href="https://github.com/GeneaLabs/laravel-messenger"
                target="_blank"
            >
                <img
                    class="w-full"
                    src="https://repository-images.githubusercontent.com/22565797/33158880-f1b3-11e9-9950-303089f954dc"
                    alt="Messenger for Laravel header image."
                >
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">Messenger for Laravel</div>
                    <p class="text-gray-700 text-base">
                        Notifying your users doesn't have to be a lot of work.
                    </p>
                </div>
            </a>
        </div>

        <div class="p-2 w-full sm:w-1/2 md:w-1/3 lg:w-1/4">
            <img
                class="w-full"
                src="https://repository-images.githubusercontent.com/42419266/0f534200-f1b5-11e9-9ca7-57b0e1fe7764"
                alt="Mixpanel for Laravel header image."
            >
            <a
                class="rounded overflow-hidden shadow-lg block"
                href="https://github.com/GeneaLabs/laravel-mixpanel"
                target="_blank"
            >
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">Mixpanel for Laravel</div>
                    <p class="text-gray-700 text-base">
                        Intuitive drop-in analytics.
                    </p>
                </div>
            </a>
        </div>

        <div class="p-2 w-full sm:w-1/2 md:w-1/3 lg:w-1/4">
            <a
                class="rounded overflow-hidden shadow-lg block"
                href="https://github.com/GeneaLabs/nova-multi-tenant-manager"
                target="_blank"
            >
                <img
                    class="w-full"
                    src="https://repository-images.githubusercontent.com/186168087/0a8f8d80-f1b7-11e9-93ee-6399860d51f4"
                    alt="Multi-Tenant Manager for Laravel Nova header image."
                >
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">Multi-Tenant Manager for Laravel Nova</div>
                    <p class="text-gray-700 text-base">
                        Manage tenants and their settings in Laravel Nova.
                    </p>
                </div>
            </a>
        </div>

        <div class="p-2 w-full sm:w-1/2 md:w-1/3 lg:w-1/4">
            <a
                class="rounded overflow-hidden shadow-lg block"
                href="https://github.com/GeneaLabs/nova-gutenberg"
                target="_blank"
            >
                <img
                    class="w-full"
                    src="https://repository-images.githubusercontent.com/188099261/91913580-f1b8-11e9-8e2e-9a3f6e6da8c2"
                    alt="Gutenberg for Laravel Nova header image."
                >
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">Gutenberg for Laravel Nova</div>
                    <p class="text-gray-700 text-base">
                        Implementation of the Gutenberg editor as a Laravel Nova Field based on Laraberg.
                    </p>
                </div>
            </a>
        </div>

        <div class="p-2 w-full sm:w-1/2 md:w-1/3 lg:w-1/4">
            <a
                class="rounded overflow-hidden shadow-lg block"
                href="https://github.com/GeneaLabs/nova-telescope"
                target="_blank"
            >
                <img
                    class="w-full"
                    src="https://repository-images.githubusercontent.com/186876699/bfc34500-f1b9-11e9-8ff3-4b4180303dec"
                    alt="Telescope for Laravel Nova header image."
                >
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">Telescope for Laravel Nova</div>
                    <p class="text-gray-700 text-base">
                        Integrate Laravel Telescope into Laravel Nova.
                    </p>
                </div>
            </a>
        </div>

        <div class="p-2 w-full sm:w-1/2 md:w-1/3 lg:w-1/4">
            <a
                class="rounded overflow-hidden shadow-lg block"
                href="https://github.com/GeneaLabs/nova-horizon"
                target="_blank"
            >
                <img
                    class="w-full"
                    src="https://repository-images.githubusercontent.com/186876625/7293a300-f1ba-11e9-924f-7785237b1e67"
                    alt="Horizon for Laravel Nova header image."
                >
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">Horizon for Laravel Nova</div>
                    <p class="text-gray-700 text-base">
                        Integrate Laravel Horizon into Laravel Nova.
                    </p>
                </div>
            </a>
        </div>

        <div class="p-2 w-full sm:w-1/2 md:w-1/3 lg:w-1/4">
            <a
                class="rounded overflow-hidden shadow-lg block"
                href="https://github.com/GeneaLabs/nova-map-marker-field"
                target="_blank"
            >
                <img
                    class="w-full"
                    src="https://repository-images.githubusercontent.com/193125151/642cd600-9590-11e9-99d0-d77a638bf308"
                    alt="Map Marker Field for Laravel Nova header image."
                >
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">Map Marker Field for Laravel Nova</div>
                    <p class="text-gray-700 text-base">
                        Provides an visual interface for editing latitude and longitude coordinates.
                    </p>
                </div>
            </a>
        </div>

        <div class="p-2 w-full sm:w-1/2 md:w-1/3 lg:w-1/4">
            <a
                class="rounded overflow-hidden shadow-lg block"
                href="https://github.com/GeneaLabs/nova-file-upload-field"
                target="_blank"
            >
                <img
                    class="w-full"
                    src="https://repository-images.githubusercontent.com/192123976/6392e900-91f8-11e9-88b5-74365e97af5a"
                    alt="File Upload Field for Laravel Nova header image."
                >
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">File Upload Field for Laravel Nova</div>
                    <p class="text-gray-700 text-base">
                        The easiest drag-and-drop file uploading field for Laravel Nova.
                    </p>
                </div>
            </a>
        </div>

        <div class="p-2 w-full sm:w-1/2 md:w-1/3 lg:w-1/4">
            <a
                class="rounded overflow-hidden shadow-lg block"
                href="https://github.com/GeneaLabs/nova-passport-manager"
                target="_blank"
            >
                <img
                    class="w-full"
                    src="https://repository-images.githubusercontent.com/203880869/b804a000-f1bb-11e9-8a5b-0772a8937d34"
                    alt="Passport Manager for Laravel Nova header image."
                >
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">Passport Manager for Laravel Nova</div>
                    <p class="text-gray-700 text-base">
                        Manage Passport clients and tokens from within Nova.
                    </p>
                </div>
            </a>
        </div>

        <div class="p-2 w-full sm:w-1/2 md:w-1/3 lg:w-1/4">
            <a
                class="rounded overflow-hidden shadow-lg block"
                href="https://github.com/GeneaLabs/laravel-appleseed"
                target="_blank"
            >
                <img
                    class="w-full"
                    src="https://repository-images.githubusercontent.com/203880869/b804a000-f1bb-11e9-8a5b-0772a8937d34"
                    alt="Passport Manager for Laravel Nova header image."
                >
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">Appleseed for Laravel</div>
                    <p class="text-gray-700 text-base">
                        Prevent the pesky missing-favicon error log entries, and return 404 if they don't exist.
                    </p>
                </div>
            </a>
        </div>

        <div class="p-2 w-full sm:w-1/2 md:w-1/3 lg:w-1/4">
            <a
                class="rounded overflow-hidden shadow-lg block"
                href="https://github.com/GeneaLabs/laravel-authorization-addons"
                target="_blank"
            >
                <img
                    class="w-full"
                    src="https://repository-images.githubusercontent.com/203880869/b804a000-f1bb-11e9-8a5b-0772a8937d34"
                    alt="Passport Manager for Laravel Nova header image."
                >
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">Authorization Addons for Laravel</div>
                    <p class="text-gray-700 text-base">
                        Additional helper methods and blade directives to help with more complex authorization queries.
                    </p>
                </div>
            </a>
        </div>

        <div class="p-2 w-full sm:w-1/2 md:w-1/3 lg:w-1/4">
            <a
                class="rounded overflow-hidden shadow-lg block"
                href="https://github.com/GeneaLabs/laravel-changelog"
                target="_blank"
            >
                <img
                    class="w-full"
                    src="https://repository-images.githubusercontent.com/203880869/b804a000-f1bb-11e9-8a5b-0772a8937d34"
                    alt="Passport Manager for Laravel Nova header image."
                >
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">Changelog for Laravel</div>
                    <p class="text-gray-700 text-base">
                        Additional helper methods and blade directives to help with more complex authorization queries.
                    </p>
                </div>
            </a>
        </div>

        <div class="p-2 w-full sm:w-1/2 md:w-1/3 lg:w-1/4">
            <a
                class="rounded overflow-hidden shadow-lg block"
                href="https://github.com/GeneaLabs/laravel-collection-macros"
                target="_blank"
            >
                <img
                    class="w-full"
                    src="https://repository-images.githubusercontent.com/203880869/b804a000-f1bb-11e9-8a5b-0772a8937d34"
                    alt="Passport Manager for Laravel Nova header image."
                >
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">Collection Macros for Laravel</div>
                    <p class="text-gray-700 text-base">
                        Extending Laravel Collections with useful functionality.
                    </p>
                </div>
            </a>
        </div>

        <div class="p-2 w-full sm:w-1/2 md:w-1/3 lg:w-1/4">
            <a
                class="rounded overflow-hidden shadow-lg block"
                href="https://github.com/GeneaLabs/laravel-impersonator"
                target="_blank"
            >
                <img
                    class="w-full"
                    src="https://repository-images.githubusercontent.com/203880869/b804a000-f1bb-11e9-8a5b-0772a8937d34"
                    alt="Passport Manager for Laravel Nova header image."
                >
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">Impersonator for Laravel</div>
                    <p class="text-gray-700 text-base">
                        Impersonate users in your Laravel app.
                    </p>
                </div>
            </a>
        </div>

        <div class="p-2 w-full sm:w-1/2 md:w-1/3 lg:w-1/4">
            <a
                class="rounded overflow-hidden shadow-lg block"
                href="https://github.com/GeneaLabs/laravel-null-carbon"
                target="_blank"
            >
                <img
                    class="w-full"
                    src="https://repository-images.githubusercontent.com/203880869/b804a000-f1bb-11e9-8a5b-0772a8937d34"
                    alt="Passport Manager for Laravel Nova header image."
                >
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">Null-Carbon for Laravel</div>
                    <p class="text-gray-700 text-base">
                        A Laravel Carbon null-class.
                    </p>
                </div>
            </a>
        </div>

        <div class="p-2 w-full sm:w-1/2 md:w-1/3 lg:w-1/4">
            <a
                class="rounded overflow-hidden shadow-lg block"
                href="https://github.com/GeneaLabs/laravel-optimized-postgres"
                target="_blank"
            >
                <img
                    class="w-full"
                    src="https://repository-images.githubusercontent.com/203880869/b804a000-f1bb-11e9-8a5b-0772a8937d34"
                    alt="Passport Manager for Laravel Nova header image."
                >
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">Optimized Postgres for Laravel</div>
                    <p class="text-gray-700 text-base">
                        Optimizes field types for Postgres.
                    </p>
                </div>
            </a>
        </div>

        <div class="p-2 w-full sm:w-1/2 md:w-1/3 lg:w-1/4">
            <a
                class="rounded overflow-hidden shadow-lg block"
                href="https://github.com/GeneaLabs/laravel-tawk"
                target="_blank"
            >
                <img
                    class="w-full"
                    src="https://repository-images.githubusercontent.com/203880869/b804a000-f1bb-11e9-8a5b-0772a8937d34"
                    alt="Passport Manager for Laravel Nova header image."
                >
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">Tawk for Laravel</div>
                    <p class="text-gray-700 text-base">
                        Integrate Tawk.to customer chat into your Laravel and Nova apps.
                    </p>
                </div>
            </a>
        </div>

        <div class="p-2 w-full sm:w-1/2 md:w-1/3 lg:w-1/4">
            <a
                class="rounded overflow-hidden shadow-lg block"
                href="https://github.com/GeneaLabs/laravel-whoops-atom"
                target="_blank"
            >
                <img
                    class="w-full"
                    src="https://repository-images.githubusercontent.com/203880869/b804a000-f1bb-11e9-8a5b-0772a8937d34"
                    alt="Passport Manager for Laravel Nova header image."
                >
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">Whoops Atom Launcher for Laravel</div>
                    <p class="text-gray-700 text-base">
                        Open Whoops Stack Trace in Atom Editor.
                    </p>
                </div>
            </a>
        </div>

        <div class="p-2 w-full sm:w-1/2 md:w-1/3 lg:w-1/4">
            <a
                class="rounded overflow-hidden shadow-lg block"
                href="https://github.com/GeneaLabs/laravel-two-way-attribute-casting"
                target="_blank"
            >
                <img
                    class="w-full"
                    src="https://repository-images.githubusercontent.com/203880869/b804a000-f1bb-11e9-8a5b-0772a8937d34"
                    alt="Passport Manager for Laravel Nova header image."
                >
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">Two-Way Attribute Casting for Laravel</div>
                    <p class="text-gray-700 text-base">
                        Perform attribute casting when saving Eloquent models to the database.
                    </p>
                </div>
            </a>
        </div>

        <div class="p-2 w-full sm:w-1/2 md:w-1/3 lg:w-1/4">
            <a
                class="rounded overflow-hidden shadow-lg block"
                href="https://github.com/GeneaLabs/laravel-imagery"
                target="_blank"
            >
                <img
                    class="w-full"
                    src="https://repository-images.githubusercontent.com/203880869/b804a000-f1bb-11e9-8a5b-0772a8937d34"
                    alt="Passport Manager for Laravel Nova header image."
                >
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">Imagery for Laravel</div>
                    <p class="text-gray-700 text-base">
                        Serve optimize images for faster page loads.
                    </p>
                </div>
            </a>
        </div>
    </div>

    <h2 class="mt-8">Forked Packages</h2>
    <p>
        The following packages were originally developed by other developers,
        but either have been abandoned or are not maintained very often.
    </p>

    <div class="md:flex -mx-2 -mx-4 flex-wrap">
        <div class="p-2 w-full sm:w-1/2 md:w-1/3 lg:w-1/4">
            <a
                class="rounded overflow-hidden shadow-lg block"
                href="https://github.com/GeneaLabs/laravel-cashier-braintree"
                target="_blank"
            >
                <img
                    class="w-full"
                    src="https://repository-images.githubusercontent.com/203880869/b804a000-f1bb-11e9-8a5b-0772a8937d34"
                    alt="Passport Manager for Laravel Nova header image."
                >
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">Cashier (Braintree) for Laravel</div>
                    <p class="text-gray-700 text-base">
                        Laravel Cashier provides an expressive, fluent interface to Braintree's subscription billing services.
                    </p>
                </div>
            </a>
        </div>

        <div class="p-2 w-full sm:w-1/2 md:w-1/3 lg:w-1/4">
            <a
                class="rounded overflow-hidden shadow-lg block"
                href="https://github.com/GeneaLabs/laravel-pivot-events"
                target="_blank"
            >
                <img
                    class="w-full"
                    src="https://repository-images.githubusercontent.com/203880869/b804a000-f1bb-11e9-8a5b-0772a8937d34"
                    alt="Passport Manager for Laravel Nova header image."
                >
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">Pivot Events for Laravel</div>
                    <p class="text-gray-700 text-base">
                        This package introduces new eloquent events for sync(), attach(), detach() or updateExistingPivot() methods on BelongsToMany relation.
                    </p>
                </div>
            </a>
        </div>

        <div class="p-2 w-full sm:w-1/2 md:w-1/3 lg:w-1/4">
            <a
                class="rounded overflow-hidden shadow-lg block"
                href="https://github.com/GeneaLabs/nova-prepopulate-searchable"
                target="_blank"
            >
                <img
                    class="w-full"
                    src="https://repository-images.githubusercontent.com/203880869/b804a000-f1bb-11e9-8a5b-0772a8937d34"
                    alt="Passport Manager for Laravel Nova header image."
                >
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">Prepopulate Searchable Field for Laravel Nova</div>
                    <p class="text-gray-700 text-base">
                        A tool to allow BelongsTo searchable fields to be pre-populated with data.
                    </p>
                </div>
            </a>
        </div>

        <div class="p-2 w-full sm:w-1/2 md:w-1/3 lg:w-1/4">
            <a
                class="rounded overflow-hidden shadow-lg block"
                href="https://github.com/GeneaLabs/laravel-maps"
                target="_blank"
            >
                <img
                    class="w-full"
                    src="https://repository-images.githubusercontent.com/203880869/b804a000-f1bb-11e9-8a5b-0772a8937d34"
                    alt="Passport Manager for Laravel Nova header image."
                >
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">Maps for Laravel</div>
                    <p class="text-gray-700 text-base">
                        Easy-peasy map integration for Laravel.
                    </p>
                </div>
            </a>
        </div>

    </div>
</section>
@endsection
