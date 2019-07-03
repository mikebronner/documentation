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
    <script type="text/javascript" src="https://genealabs.17hats.com/vendor/iframeSizer.min.js"></script>
    <script>
        var openmodal = document.querySelectorAll('.modal-open')

        for (var i = 0; i < openmodal.length; i++) {
            openmodal[i].addEventListener('click', function(event) {
                event.preventDefault();
                toggleModal();
            });
        }
        
        const overlay = document.querySelector('.modal-overlay')
        overlay.addEventListener('click', toggleModal)
        var closemodal = document.querySelectorAll('.modal-close')

        for (var i = 0; i < closemodal.length; i++) {
            closemodal[i].addEventListener('click', toggleModal)
        }
        
        document.onkeydown = function(evt) {
            evt = evt || window.event;
            var isEscape = false;
            if ("key" in evt) {
                isEscape = (evt.key === "Escape" || evt.key === "Esc")
            } else {
                isEscape = (evt.keyCode === 27)
            }

            if (isEscape && document.body.classList.contains('modal-active')) {
                toggleModal()
            }
        };
        
        function toggleModal () {
            const body = document.querySelector('body')
            const modal = document.querySelector('.modal')

            modal.classList.toggle('opacity-0')
            modal.classList.toggle('pointer-events-none')
            body.classList.toggle('modal-active')
        }
  </script>
@endpush

@push ("styles")
    <style>
        .modal {
            transition: opacity 0.25s ease;
        }

        body.modal-active {
            overflow-x: hidden;
            overflow-y: visible !important;
        }
    </style>
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
<section class="flex-auto w-full container max-w-xl mx-auto py-16 px-6">
<div class="">
    <div class="tab" onclick="$('html, body').animate({scrollTop: (window.height - 75) + 'px'}, 900, 'swing');"></div>
    <section id="services">
        <header class="row">
            <h2 class="page-header">Our Services</h2>
        </header>
        <div class="flex -mx-2 flex-wrap">
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
        <button class="modal-open mt-12 block rounded bg-green mx-auto hover:bg-green-300 text-white font-bold py-2 px-4"
            type="button"
            data-toggle="modal"
            data-target="#lead-modal"
        >
            Get in touch with us now about your web project!
        </button>
    </div>
</section>


  
  <!--Modal-->
  <div class="modal absolute opacity-0 pointer-events-none fixed w-full h-full  flex items-center justify-center">
    <div class="modal-overlay absolute w-full h-full bg-gray-darker opacity-50"></div>
    
    <div class="modal-container bg-white w-4/5 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">
      
      <div class="modal-close absolute top-0 right-0 cursor-pointer flex flex-col items-center mt-4 mr-4 text-white text-sm z-50">
        <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
          <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
        </svg>
        <span class="text-sm">(Esc)</span>
      </div>

      <!-- Add margin if you want to see some of the overlay behind the modal-->
      <div class="modal-content py-4 text-left px-6">
        <!--Title-->
        <div class="flex justify-between items-center pb-3">
          <p class="text-2xl font-bold">Let's get started ...</p>
          <div class="modal-close cursor-pointer z-50">
            <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
              <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
            </svg>
          </div>
        </div>

        <!--Body-->
        <iframe name="lc_contact_form" frameborder="0" width="100%" height="600" src="https://genealabs.17hats.com/embed/lead/form/hrspbdcvncvnbdpkngrcrxnrwsbghcws"></iframe>

      </div>
    </div>
  </div>



</section>
@endsection
