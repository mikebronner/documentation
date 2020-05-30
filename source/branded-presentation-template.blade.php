@extends('_layouts.master')

@push ('scripts')
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/iframe-resizer/3.5.14/iframeResizer.min.js"></script>
    <script type="text/javascript">setTimeout(function(){iFrameResize({checkOrigin: false, heightCalculationMethod: "taggedElement"});}, 30)</script>
@endpush

@push ('styles')

@endpush

@section('content')
    <section
        x-data="{ open: false }"
        class="container mx-auto max-w-2xl"
    >
        <h1>Branded Presentation Templates</h1>
        <h2>Frustrated with your slideshows?</h2>
        <p>
            You give presentations, host webinars, or create online courses. You
            feel like you are re-inventing the wheel each time you create a new 
            presentation. Maybe your branding isn't consistent from one to the
            other or your designs seem unprofessional. You know its something
            you need to fix, but you don't know how and don't have the time to
            figure it out for yourself. Have you been putting this off because
            it turned out to be a lot more work than expected?
        </p>
        <p>
            Powerpoint and Keynote make it easy to create presentations: after
            all, you only need to drag-and-drop the content onto the slides.
            However, this can be a slippery slope, as it can encourage not being
            picky about branding (your logo, colors, fonts, etc.) and design (layout,
            styling, spacing, use of colors, etc.). All these aspects take time
            to learn and implement. Time you don't have because you're busy
            running your business.
        </p>
        <h2>Imagine Having It Already Done</h2>
        <p>
            Imagine (no seriously, visualize your slideshow) having your
            custom-branded templates ready to be filled in. Imagine not having
            to worry about layout and design each time your fire up Powerpoint
            or Keynote. Imagine being able to create your uniquely branded
            slideshow in a fraction of the time it used to take.
        </p>
        <h2>I'll Take Care Of This For You</h2>
        <p>
            Focus on presenting, on running your business. We will handle the
            design and branding of your slideshow template. With this new
            template you will be able to assemble your presentations quicker,
            appear more professional, and be focused  on earning money, rather
            than having to learn technologies that are not directly in line with
            your business. Order one of our slideshow template packages now. Why?
        </p>
        <ul class="ml-4 list-disc list-outside">
            <li>I have years of experience with slideshows and Audio/Visual technologies.</li>
            <li>I understand design and accessiblity.</li>
            <li>I have successfully helped other professional genealogists with this.</li>
        </ul>
        <h3>Here Is How It Works</h3>
        <p>
            You first choose what level of package you would be interested in,
            anywhere from 6 to 18 slide formats.
        </p>
        <p>
            I'll ask you for your branding materials (typefaces, colors, logos),
            as well as any supporting materials like pamphlets, web sites,
            handouts, that you have done in the past as a branding reference. I
            would also ask that you provide your most complex presentation you
            have put together. We will use that as a benchmark during design (to
            guide us in designing your slides based on how you use them). You
            will also receive that presentation implemented using the new
            template.
        </p>
        <p>
            After receiving your materials, I will work on your template and
            provide you with a first draft within 5 working days for your
            review. You will have 1 round of design changes based on your
            feedback, if necessary. Pending your approval, we will send you the
            final product.
        </p>
        <h2>Sample Template</h2>
        <p>
            The template consists of some or all of the following types of
            slides. Your template will be customized with your branding,
            and your slide layouts may differ in various aspects.
        </p>
        <div
            class="grid grid-cols-3 gap-4"
        >
            <div
                class="text-center"
            >
                <img
                    class="rounded shadow-md"
                    src="/assets/images/slideshow-presentation-title.jpg"
                >
                Presentation Title
            </div>
            <div
                class="text-center"
            >
                <img class="rounded shadow-md" src="/assets/images/slideshow-presentation-title-photo.jpg">
                Pres. Title & Photo
            </div>
            <div
                class="text-center"
            >
                <img class="rounded shadow-md" src="/assets/images/slideshow-title-photo.jpg">
                Title & Photo
            </div>
            <div
                class="text-center"
            >
                <img class="rounded shadow-md" src="/assets/images/slideshow-title-bullets.jpg">
                Title & Bullets
            </div>
            <div
                class="text-center"
            >
                <img class="rounded shadow-md" src="/assets/images/slideshow-bullets-2-col.jpg">
                Bullets 2-Column
            </div>
            <div
                class="text-center"
            >
                <img class="rounded shadow-md" src="/assets/images/slideshow-bullets-3-col.jpg">
                Bullets 3-Column
            </div>
            <div
                class="text-center"
            >
                <img class="rounded shadow-md" src="/assets/images/slideshow-title-text.jpg">
                Title & Text
            </div>
            <div
                class="text-center"
            >
                <img class="rounded shadow-md" src="/assets/images/slideshow-bullets.jpg">
                Bullets
            </div>
            <div
                class="text-center"
            >
                <img class="rounded shadow-md" src="/assets/images/slideshow-title-bullets-photo.jpg">
                Title & Bullets & Photo
            </div>
            <div
                class="text-center"
            >
                <img class="rounded shadow-md" src="/assets/images/slideshow-section.jpg">
                Section Title
            </div>
            <div
                class="text-center"
            >
                <img class="rounded shadow-md" src="/assets/images/slideshow-title.jpg">
                Title
            </div>
            <div
                class="text-center"
            >
                <img class="rounded shadow-md" src="/assets/images/slideshow-agenda.jpg">
                Agenda
            </div>
            <div
                class="text-center"
            >
                <img class="rounded shadow-md" src="/assets/images/slideshow-statement.jpg">
                Statement
            </div>
            <div
                class="text-center"
            >
                <img class="rounded shadow-md" src="/assets/images/slideshow-fact.jpg">
                Fact
            </div>
            <div
                class="text-center"
            >
                <img class="rounded shadow-md" src="/assets/images/slideshow-quote.jpg">
                Quote
            </div>
            <div
                class="text-center"
            >
                <img class="rounded shadow-md" src="/assets/images/slideshow-photo-3-up.jpg">
                Photos 3-Up
            </div>
            <div
                class="text-center"
            >
                <img class="rounded shadow-md" src="/assets/images/slideshow-photo.jpg">
                Photo
            </div>
            <div
                class="text-center"
            >
                <img class="rounded shadow-md" src="/assets/images/slideshow-blank.jpg">
                Blank
            </div>
        </div>
        <h2>Are You Ready To Get Started?</h2>
        <p>
            Are you ready to move your presentations to the next level? Great!
            The pricing is between $400 and $1200, depending on the package you
            choose. Professional templates show that you are serious about your
            business, and the cost is easily recouped through increased business
            and/or higher fees.
        </p>
        <table
            class="table"
        >
            <thead>
                <tr>
                    <th>Minimal Deck</th>
                    <th>Basic Deck</th>
                    <th>Full Deck</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>6 Slide Formats</td>
                    <td>12 Slide Formats</td>
                    <td>18 Slide Formats</td>
                </tr>
                <tr>
                    <td>$400</td>
                    <td>$800</td>
                    <td>$1200</td>
                </tr>
            </tbody>
        </table>
        <button
            class="m-4 mx-auto py-2 px-6 block text-xl rounded-lg bg-brand-600 text-brand-100 hover:bg-brand-700"
            x-on:click="open = true"
        >
            Order Now
        </button>
        <h2>100% Money-Back Guarantee</h2>
        <p>
            We are confident that you will find the templates you receive
            helpful in speeding up your presentation development process, and
            the design professional, clean, and on-point to your branding. If
            after reviewing the designs you feel that I am not delivering a
            valuable product, please let me know, and I will happily refund your
            payment in full.
        </p>
        <h2>Still have a question or two?</h2>
        <h3>What happens after I place the order?</h3>
        <p>
            You will receive an invoice from GeneaLabs with further details and
            options to choose from. Based on your choices you will be presented
            with an invoice for the appropriate amount.
        </p>
        <h3>What happens after I pay?</h3>
        <p>
            Once you submit payment, we will schedule your project in our
            calendar and you will receive a questionaire to gather all the materials
            necessary to create your branded template. These required materials
            include brand details (logo, colors, typefaces) and the most
            comprehensive presentation you have built in the past.
        </p>
        <h3>What happens after I submit the materials?</h3>
        <p>
            This is where I start working on your branded templates! Within 5
            business days we will provide a preview of the design. At this point
            you will have the opportunity to review the designs and provide
            feedback. I then incorporate your feedback and present the final
            designs. If you approve the designs, you will receive the fully
            functional template.
        </p>
        <h3>What happens if I don't like the final design?</h3>
        <p>
            At this point you have two options: we can go through additional
            design iterations for a nominal fee for each additional iteration.
            If you feel that I have completely missed the mark and don't think
            the design is salvagable, you can request a refund. In that case I
            will refund your payment in full, no questions asked. However, you
            will not receive the template we worked on.
        </p>
        <h3>How long does the project take from start to finish?</h3>
        <p>
            From the time we start working on the template to final approval,
            including one design iteration, you could expect the project to take
            about two weeks.
        </p>
        <h3>I still have additional questions, though...</h3>
        <p>
            No worries! Simply email me at
            <a href="mailto:mike@genealabs.com">mike@genealabs.com</a>.
        </p>
        <h2>About Me</h2>
        <p>
            I'm Mike Bronner, co-partner of GeneaLabs with my wife, Myelene.
            I've been doing web development since the mid-90s. I have also been
            praciticing genealogy more seriously since that time as well. With
            GeneaLabs we merge these two passions and provide professional
            genealogists with technological solutions to help them run their
            businesses. 
        </p>
        <h2>Get Scheduled Now</h2>
        <p>
            We schedule our clients on a first-come, first-serve basis. Be sure
            to order now to get the process started: the sooner you order, the
            sooner you will receive your templates for your next presentation.
        </p>
        <button
            class="m-4 mx-auto py-2 px-6 block text-xl rounded-lg bg-green-800 text-green-100"
            x-on:click="open = true"
        >
            Order Now
        </button>
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
                class="max-h-screen overflow-y-scroll bg-white rounded-lg px-4 pt-5 pb-4 overflow-hidden shadow-xl transform transition-all sm:max-w-lg sm:w-full sm:p-6"
                role="dialog"
                aria-modal="true"
                aria-labelledby="modal-headline"
            >
                <iframe
                    src="https://hello.dubsado.com:443/public/form/view/5ec6e8d5ce434202a9245d95"
                    frameborder="0"
                    style="width:1px; min-width:100%;"
                ></iframe>
            </div>
        </div>
        <p>
            My 100% money-back guarantee: if during the final review you aren't
            satisfied with the results, I'll refund your payment in full.
        </p>
    </section>
@endsection
