@extends('_layouts.master')

@push('meta')
    <meta property="og:title" content="About {{ $page->siteName }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="A little bit about {{ $page->siteName }}" />
@endpush

@section('content')
    <section class="container mx-auto py-6 px-4">
        <h1>About Us</h1>

        <img src="/assets/images/mike-and-myelene.jpg"
            alt="About image"
            class="block rounded-full h-48 w-48 border-white border-4 shadow-md bg-contain mx-auto md:float-right my-6 md:ml-10">

            <p class="mb-6">
                I (Mike Bronner) founded GeneaLabs with my wife, Myelene, in early 2014 to combine my
                passions for Genealogy and Web Development.
            </p>
            <p class="mb-6">
                Born and raised in a bi-lingual house-hold (speaking English at home, and German in school
                and with relatives) I grew up fluent in both languages. I graduated with <em>Abitur</em> in
                Germany, then moved to the United States to go to College and University. I have, of course,
                maintained my German language skills and speak, read, and write at a native level.
            </p>
            <p class="mb-6">
                Since my early teen years I have been interested in Genealogy and Calligraphy. The
                intersection of which suits the translation of old German documents with a focus on
                genealogical analysis.
            </p>

            <div class="flex flex-wrap mt-12 -mx-2 border rounded bg-white">
                <div class="w-full md:w-1/2 p-2">
                    <h3>Memberships</h3>
                    <ul class="fa-ul">
                        <li><i class="fa fa-li fa-gavel"></i> Association of Professional Genealogists Website Committee 2016</li>
                        <li><i class="fa fa-li fa-gavel"></i> Association of Professional Genealogists Virtual Chapter Representative 2016</li>
                        <li><i class="fa fa-li fa-group"></i> Association of Professional Genealogists Member</li>
                        <li><i class="fa fa-li fa-group"></i> Genealogist Mastermind Group</li>
                        <li><i class="fa fa-li fa-book"></i> Southern California Genealogical Society (German Interest Group)</li>
                        <li><i class="fa fa-li fa-book"></i> Immigrant Genealogy Society</li>
                        <li><i class="fa fa-li fa-group"></i> Utah Genealogical Association - Virtual Chapter</li>
                    </ul>
                </div>
                <div class="w-full md:w-1/2 p-2">
                    <h3>Continuing Education</h3>
                    <ul class="fa-ul">
                        <li><i class="fa fa-li fa-mortar-board"></i> SCGS Jamboree 2016</li>
                        <li><i class="fa fa-li fa-mortar-board"></i> Salt Lake Institute for Genealogy 2016</li>
                        <li><i class="fa fa-li fa-mortar-board"></i> SCGS Jamboree 2015</li>
                        <li><i class="fa fa-li fa-mortar-board"></i> Salt Lake Institute for Genealogy 2015</li>
                        <li><i class="fa fa-li fa-mortar-board"></i> APG PMC 2015</li>
                        <li><i class="fa fa-li fa-mortar-board"></i> GenProof Study Group 37</li>
                        <li><i class="fa fa-li fa-mortar-board"></i> ProGen Study Group 17 (Group Leader)</li>
                        <li><i class="fa fa-li fa-gavel"></i> NGSQ Article Discussion Group A 2014 - 2015 (Coordinator)</li>
                        <li><i class="fa fa-li fa-mortar-board"></i> Salt Lake Institute for Genealogy 2014</li>
                        <li><i class="fa fa-li fa-mortar-board"></i> APG PMC 2014</li>
                        <li><i class="fa fa-li fa-mortar-board"></i> GenProof Study Group 6</li>
                        <li><i class="fa fa-li fa-mortar-board"></i> Salt Lake Institute for Genealogy 2013</li>
                        <li><i class="fa fa-li fa-mortar-board"></i> APG PMC 2013</li>
                        <li><i class="fa fa-li fa-mortar-board"></i> Brickwall Study Group 3</li>
                    </ul>
                </div>
            </div>
    </section>
@endsection
