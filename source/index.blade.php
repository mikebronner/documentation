@extends('_layouts.master')

@push ('scripts')
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.9"></script>
    <script type="text/javascript">
        new Typed("#typed", {
            strings: [
                'web applications',
                'web sites',
                'blogs',
                'homepages'
            ],
            contentType: 'text',
            typeSpeed: 100,
            backSpeed: 75,
            interStringDelay: 500,

            backDelay: 1500,
            loop: true
        });
    </script>
    <script type="text/javascript" src="https://genealabs.17hats.com/ruby/embed/lead/script/hrspbdcvncvnbdpkngrcrxnrwsbghcws"></script>
@endpush

@section('content')
<section id="intro"
    class="block w-screen h-screen -mt-8 bg-cover flex items-center justify-center"
>
    <p>We
        <span class="fa-stack">
            <i class="heart fa fa-stack-1x fa-heart fa-lg"></i>
            <i class="heart animated infinite bounceIn bounceOut fa fa-stack-1x fa-heart fa-lg"></i>
        </span>
        to <strong><span id="rotating-actions">craft</span></strong>
        &nbsp;<span id="typed"></span>!
    </p>
</section>
<section class="flex w-full container max-w-xl mx-auto py-16 px-6">
    <section id="services">
        <h2 class="text-center text-5xl">Our Services</h2>
        <div class="flex mt-16 -mx-2 flex-wrap">
            <div class="w-full md:w-1/3 px-2 rounded overflow-hidden">
                <p class="block text-center mb-0">
                    <i class="fa-stack fa-lg" style="font-size: 36px;">
                        <i class="fa fa-circle fa-stack-2x" style="color: black;"></i>
                        <i class="fa fa-pencil fa-stack-1x" style="color: white;"></i>
                    </i>
                </p>
                <h3 class="text-center m-0">Design</h3>
                <p>
                    Our designs are developed using a responsive, mobile-first development approach. This means that your site will work on all devices.
                </p>
            </div>
            <div class="w-full md:w-1/3 px-2 rounded overflow-hidden">
                <p class="block text-center mb-0">
                    <i class="fa-stack fa-lg" style="font-size: 36px;">
                        <i class="fa fa-circle fa-stack-2x" style="color: black;"></i>
                        <i class="fa fa-code fa-stack-1x" style="color: white;"></i>
                    </i>
                </p>
                <h3 class="text-center m-0">Development</h3>
                <p>
                    Your site is custom-hand-crafted to meet your specific needs. In addition, we will make sure your site runs on the best infrastructure for the job.
                </p>
            </div>
            <div class="w-full md:w-1/3 px-2 rounded overflow-hidden">
                <p class="block text-center mb-0">
                    <i class="fa-stack fa-lg" style="font-size: 36px;">
                        <i class="fa fa-circle fa-stack-2x" style="color: black;"></i>
                        <i class="fa fa-hdd-o fa-stack-1x" style="color: white;"></i>
                    </i>
                </p>
                <h3 class="text-center m-0">Hosting</h3>
                <p>
                    We provide performant, modern cloud-hosting for all our projects, enabling us to continuously monitor for and catch any potential issues.
                </p>
            </div>
        </div>
    </div>
    <a
        class="sh_lead_button text-center mt-12 block rounded bg-green mx-auto hover:bg-green-300 text-white font-bold py-2 px-4"
        href="https://genealabs.17hats.com/p#/lcf/hrspbdcvncvnbdpkngrcrxnrwsbghcws"
        onclick="shLeadFormPopup.openForm(event)"
    >
        Get in touch with us now about your web project!
    </a>
</section>
<footer class="container mx-auto max-w-xl border-t mt-12 py-16 px-6">
    <h3>Contact Information</h3>
    <div class="flex flex-wrap -mx-2">
        <div class="w-full md:w-2/3 px-2">
            <p>
                We are located in West Covina in the greater Los Angeles area, and are available for hire
                for both start-to-finish <strong>web application </strong> projects (including
                sub-contract work for Laravel projects).
            </p>
            <p>
                We also perform <strong>German-English translation services</strong> with a focus on Genealogy.
                Please contact us any time via the methods listed on the right -- we are happy to discuss potential
                projects with you!
            </p>
        </div>
        <div class="w-full md:w-1/3 px-2">
            <div class="border border-grey-light bg-white rounded p-4 flex flex-col justify-between leading-normal">
                <ul class="list-reset">
                    <li><a class="text-success" href="tel:+16266714300"><strong><span class="fa fa-phone"></span>&nbsp;+1 (626) 671-4300</strong></a></li>
                    <li><a class="text-success" href="mailto:hello@genealabs.com"><strong><span class="fa fa-send"></span>&nbsp;hello@genealabs.com</strong></a></li>
                    <li><a class="text-success" href="http://twitter.com/intent/tweet?screen_name=GeneaLabs" target="_blank"><strong><span class="fa fa-twitter"></span>&nbsp;@GeneaLabs</strong></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
@endsection
