@extends('_layouts.master')

@push ('scripts')
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/iframe-resizer/3.5.14/iframeResizer.min.js"></script>
    <script type="text/javascript">
        setTimeout(function () {
            iFrameResize({
                checkOrigin: false,
                heightCalculationMethod: "taggedElement"
            });
        }, 30);
    </script>
@endpush

@push ('styles')

@endpush

@section('content')
    <section
        class="container mx-auto max-w-2xl"
        x-data="{open: false}"
    >
        <h1>In-Depth Site Audit</h1>
        <h2>Is your site not living up to expectations?</h2>
        <p>
            These days every business needs a website. What most businesses
            are challended with is making sure their site is doing what they
            expect it to: getting seen by potential clients.
        </p>
        <p>
            Is your target audience not finding you? Is your site slow? Does
            your site work correctly on various devices and screen sizes?
        </p>
        <h2>Imagine Actually Knowing What Is Holding Your Site Back &hellip;</h2>
        <p>
            Imagine holding a document in your hands that would list
            everything you needed to know that was wrong with your site,
            allowing you to take remedial action right away. Wouldn't that be
            awesome?
        </p>
        <p>
            Further, imagine this document provided background information on
            the listed categories as well as general advice on
            how to address each type of issue.
        </p>
        <h2>I Have You Covered</h2>
        <p>
            I have been working on website for years (since 1995) and am keenly
            aware of the issues surrounding poor website performance (not just
            in speed, but also in eyeballs).
        </p>
        <p>
            Performing a site audit is a quick and cost-effective way to get the
            measure of your website and plan your marketing strategies
            accordingly. In fact, it is recommended that website perform a
            complete site audit every 6 to 12 months. In some cases websites
            even perform monthly audits to better measure performance over time,
            as well as make sure that everything is operating nominally.
        </p>
        <p>
            Site audits will help you measure your website's speed, versatility,
            accessability, and relevance. These aspects directly affect your
            search engine performance.
        </p>
        <p>
            Also, performing multiple audits over time provide measurable feedback to
            changes and improvements you make based on previous audits and your
            marketing strategies.
        </p>
        <h2>Are You Ready To Audit Your Site?</h2>
        <p>
            Are you ready to start improving your site's performance? That's
            great! For only $750 you will receive a comprehensive document
            listing all the details affecting your web site, as well as the
            areas you don't have any issues with. This not only gives you piece
            of mind, but also serves as a benchmark for later site audits.
        </p>
        <div class="text-center">
            <button
                class="m-4 mx-auto py-2 px-6 block text-xl rounded-lg bg-brand-600 text-brand-100 hover:bg-brand-700"
                x-on:click="open = true"
            >
                Request Your Site Audit
            </button>
        </div>
        <h3>I have some questions. What do I do?</h3>
        <p>
            Not to worry! Simply email me at
            <a href="mailto:mike@genealabs.com">mike@genealabs.com</a> and I'll
            be happy to answer an questions you may have.
        </p>
        <h2>What's In My Site Audit Report?</h2>
        <p>Your site audit report will contain evaluations on the following
            rubrics:
        </p>
        <ul>
            <li>Content Keywork Focus</li>
            <li>URL Structure</li>
            <li>Title Tags</li>
            <li>Meta Data</li>
            <li>Headings</li>
            <li>Content</li>
            <li>Internal Linking</li>
            <li>Images</li>
            <li>Sitemaps</li>
            <li>Page Exclusions</li>
            <li>Redirects</li>
            <li>Cononical Content</li>
            <li>Links Analysis</li>
            <li>Page Speed</li>
            <li>Accessability</li>
            <li>and more &hellip;</li>
        </ul>
        <div class="text-center">
            <button
                class="m-4 mx-auto py-2 px-6 block text-xl rounded-lg bg-brand-600 text-brand-100 hover:bg-brand-700"
                x-on:click="open = true"
            >
                Request Your Site Audit
            </button>
        </div>
        <div
            x-show="open"
            class="fixed bottom-0 inset-x-0 px-4 pb-6 sm:inset-0 sm:p-0 sm:flex sm:items-center sm:justify-center"
        >
            <!--
                Background overlay, show/hide based on modal state.
            
                Entering: "ease-out duration-300"
                From: "opacity-0"
                To: "opacity-100"
                Leaving: "ease-in duration-200"
                From: "opacity-100"
                To: "opacity-0"
            -->
            <div
                class="fixed inset-0 transition-opacity"
                x-on:click="open = false"
            >
                <div class="absolute inset-0 bg-black opacity-75"></div>
            </div>
            
            <!--
                Modal panel, show/hide based on modal state.
            
                Entering: "ease-out duration-300"
                From: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                To: "opacity-100 translate-y-0 sm:scale-100"
                Leaving: "ease-in duration-200"
                From: "opacity-100 translate-y-0 sm:scale-100"
                To: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
            -->
            <div
                class="max-h-screen overflow-y-scroll bg-white rounded-lg overflow-hidden shadow-xl transform transition-all sm:max-w-lg sm:w-full"
                role="dialog"
                aria-modal="true"
                aria-labelledby="modal-headline"
            >
                <iframe
                    src="https://hello.dubsado.com:443/public/form/view/5ed2e3f3a1c2143d719823ad"
                    frameborder="0"
                    style="width:1px; min-width:100%;">
                </iframe>
            </div>
        </div>
    </section>
@endsection
