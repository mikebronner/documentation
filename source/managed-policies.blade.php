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
    <section class="container mx-auto max-w-2xl">
        <h1>Managed Policy Documents</h1>
        <p>by Termageddon</p>
        <h2>Feeling overwhelmed by policy regulations?</h2>
        <p>You have a website for your business. You've heard about all these
            privacy laws and regulations, but maybe aren't sure if and how they
            affect you. You probably don't have time to stay on top of these
            ever-changing privacy regulations, either? Do you know which privacy
            legislation is being enacted this week? What about the coming months
            or even years -- how are you going to stay on top of your policy
            documents?
        </p>
        <h2>Imagine Not Having To Worry</h2>
        <p>
            Close your eyes for a minute and visualize the following scenario:
            <ul>
                <li>a privacy policy, terms of service, disclaimer, or end-user
                license agreement that updates itself as the laws change</li>
                <li>someone is there to guide you through the process and answer
                    your questions</li>
            </ul>
            That's a nice feeling, isn't it?
        </p>
        <h2>Termageddon Does All This For You!</h2>
        <p>
            I work closely with Termageddon to provide my clients with their
            policy document needs. I also use them myself.
        </p>
        <p>
            They are there to guide you through the process and answer any
            questions regarding your policy documents and your specific
            circumstance.
        </p>
        <p>
            At the end you will be given a short JavaScript snippet to embedd in
            your website, and you're all done! When I created the documents for
            GeneaLabs, I created and embedded them live on the site within 30
            minutes!
        </p>
        <p>
            Termageddon then continues to update your documents whenever any
            privacy laws change, including international ones.
        </p>
        <h2>Are You Ready To Get Started?</h2>
        <p>
            Are you ready to upgrade your policy documents and protect yourself?
            Great! Start the process for only $10 per month.
        </p>
        <div class="text-center">
            <a
                class="m-4 py-2 px-6 text-xl rounded-lg bg-purple-600 text-purple-100 hover:text-purple-100 hover:bg-purple-700"
                href="https://app.termageddon.com?fp_ref=genealabs"
                target="_blank"
            >
                Protect Yourself
            </a>
        </div>
        <h2>Here's What Other Termageddon Customers Are Saying</h2>
        <section class="bg-gray-50 overflow-hidden">
            <div class="relative max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
              <div class="relative">
                <blockquote class="mt-8 border-purple-600">
                  <div class="max-w-3xl mx-auto text-center text-2xl leading-9 font-medium text-gray-900">
                    <p>
                      &ldquo;Fast on boarding and auto updating policies. The code to publish on your site is also quick and easy. You can get online in under 5 minutes.&rdquo;
                    </p>
                  </div>
                  <footer class="mt-8">
                    <div class="md:flex md:items-center md:justify-center">
                      <div class="md:flex-shrink-0">
                        <img class="mx-auto h-10 w-10 rounded-full" src="https://termageddon.com/wp-content/uploads/2020/04/mike-demo-inmotion.jpeg" alt="" />
                      </div>
                      <div class="mt-3 text-center md:mt-0 md:ml-4 md:flex md:items-center">
                        <div class="text-base leading-6 font-medium text-gray-900">Mike Demopoulos</div>
          
                        <svg class="hidden md:block mx-1 h-5 w-5 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M11 0h3L9 20H6l5-20z" />
                        </svg>
          
                        <div class="text-base leading-6 font-medium text-gray-500">InMotion Hosting</div>
                      </div>
                    </div>
                  </footer>
                </blockquote>
              </div>
            </div>
          </section>
          <section class="bg-gray-50 overflow-hidden">
            <div class="relative max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
              <div class="relative">
                <blockquote class="mt-8 border-purple-600">
                  <div class="max-w-3xl mx-auto text-center text-2xl leading-9 font-medium text-gray-900">
                    <p>
                      &ldquo;Termageddon has proven to be a great solution. The Termageddon setup process is hassle-free and simply requires adding a script to the client website. I would definitely recommend this service.&rdquo;
                    </p>
                  </div>
                  <footer class="mt-8">
                    <div class="md:flex md:items-center md:justify-center">
                      <div class="md:flex-shrink-0">
                        <img class="mx-auto h-10 w-10 rounded-full" src="https://termageddon.com/wp-content/uploads/2020/04/golden-oak-logo.jpeg" alt="" />
                      </div>
                      <div class="mt-3 text-center md:mt-0 md:ml-4 md:flex md:items-center">
                        <div class="text-base leading-6 font-medium text-gray-500">Golden Oak Web Design</div>
                      </div>
                    </div>
                  </footer>
                </blockquote>
              </div>
            </div>
          </section>
          <section class="bg-gray-50 overflow-hidden">
            <div class="relative max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
              <div class="relative">
                <blockquote class="mt-8 border-purple-600">
                  <div class="max-w-3xl mx-auto text-center text-2xl leading-9 font-medium text-gray-900">
                    <p>
                      &ldquo;Termageddon has made one of the most scary and daunting things on the web actually fun! Their support is outstanding and they’re extremely knowledgeable, all my questions were answered immediately – wonderful team!&rdquo;
                    </p>
                  </div>
                  <footer class="mt-8">
                    <div class="md:flex md:items-center md:justify-center">
                      <div class="md:flex-shrink-0">
                        <img class="mx-auto h-10 w-10 rounded-full" src="https://termageddon.com/wp-content/uploads/2020/04/gina-stricklind-infini-systems.jpeg" alt="" />
                      </div>
                      <div class="mt-3 text-center md:mt-0 md:ml-4 md:flex md:items-center">
                        <div class="text-base leading-6 font-medium text-gray-900">Gina Stricklind</div>
          
                        <svg class="hidden md:block mx-1 h-5 w-5 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M11 0h3L9 20H6l5-20z" />
                        </svg>
          
                        <div class="text-base leading-6 font-medium text-gray-500">Infini Systems</div>
                      </div>
                    </div>
                  </footer>
                </blockquote>
              </div>
            </div>
          </section>
          <section class="bg-gray-50 overflow-hidden">
            <div class="relative max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
              <div class="relative">
                <blockquote class="mt-8 border-purple-600">
                  <div class="max-w-3xl mx-auto text-center text-2xl leading-9 font-medium text-gray-900">
                    <p>
                      &ldquo;Easy to use, well-priced, solves a need for lawyer-managed privacy policies, terms and conditions, and disclaimers. Gives me a value-add with my web clients.&rdquo;
                    </p>
                  </div>
                  <footer class="mt-8">
                    <div class="md:flex md:items-center md:justify-center">
                      <div class="md:flex-shrink-0">
                        <img class="mx-auto h-10 w-10 rounded-full" src="https://termageddon.com/wp-content/uploads/2020/04/joe-fletcher.jpeg" alt="" />
                      </div>
                      <div class="mt-3 text-center md:mt-0 md:ml-4 md:flex md:items-center">
                        <div class="text-base leading-6 font-medium text-gray-900">Joe Fletcher</div>
          
                        <svg class="hidden md:block mx-1 h-5 w-5 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M11 0h3L9 20H6l5-20z" />
                        </svg>
          
                        <div class="text-base leading-6 font-medium text-gray-500">Fletcher Digital</div>
                      </div>
                    </div>
                  </footer>
                </blockquote>
              </div>
            </div>
          </section>
          <section class="bg-gray-50 overflow-hidden">
            <div class="relative max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
              <div class="relative">
                <blockquote class="mt-8 border-purple-600">
                  <div class="max-w-3xl mx-auto text-center text-2xl leading-9 font-medium text-gray-900">
                    <p>
                      &ldquo;Every business is different so we don’t trust templates but we were sold after speaking with Termageddon and seeing it in action! Well Done!!&rdquo;
                    </p>
                  </div>
                  <footer class="mt-8">
                    <div class="md:flex md:items-center md:justify-center">
                      <div class="md:flex-shrink-0">
                        <img class="mx-auto h-10 w-10 rounded-full" src="https://termageddon.com/wp-content/uploads/2020/04/matthew-schaaf-renew-power-marketing.jpeg" alt="" />
                      </div>
                      <div class="mt-3 text-center md:mt-0 md:ml-4 md:flex md:items-center">
                        <div class="text-base leading-6 font-medium text-gray-900">Matthew Schaaf</div>
          
                        <svg class="hidden md:block mx-1 h-5 w-5 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M11 0h3L9 20H6l5-20z" />
                        </svg>
          
                        <div class="text-base leading-6 font-medium text-gray-500">Renew Power Marketing</div>
                      </div>
                    </div>
                  </footer>
                </blockquote>
              </div>
            </div>
          </section>
          <section class="bg-gray-50 overflow-hidden">
            <div class="relative max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
              <div class="relative">
                <blockquote class="mt-8 border-purple-600">
                  <div class="max-w-3xl mx-auto text-center text-2xl leading-9 font-medium text-gray-900">
                    <p>
                      &ldquo;Great Product! Makes adding the daunting task of TOS/Privacy and more easy!&rdquo;
                    </p>
                  </div>
                  <footer class="mt-8">
                    <div class="md:flex md:items-center md:justify-center">
                      <div class="md:flex-shrink-0">
                        <img class="mx-auto h-10 w-10 rounded-full" src="https://termageddon.com/wp-content/uploads/2020/04/micah-emerine.jpeg" alt="" />
                      </div>
                      <div class="mt-3 text-center md:mt-0 md:ml-4 md:flex md:items-center">
                        <div class="text-base leading-6 font-medium text-gray-900">Micah Emerine</div>
                      </div>
                    </div>
                  </footer>
                </blockquote>
              </div>
            </div>
        </section>
        <h2>Still have a question or two?</h2>
        <h3>Why should I use yet another third-party service?</h3>
        <p>
            I'm not a lawyer, and I don't like pretending to be one. Instead of
            bungling my way through things and providing a half-baked template
            taken from somewhere else, I'd rather work with a professional for
            a nominal fee that protects you and your company.
        </p>
        <h3>How do I know I can trust Termageddon?</h3>
        <p>
            I work closely with Termaggedon and trust and recommend their
            product. In fact, I use it on all my websites. See for yourself:
        </p>
        <ul>
            <li><a href="/privacy-policy" target=_blank">GeneaLabs's Privacy Policy</a></li>
            <li><a href="/terms-of-service" target=_blank">GeneaLabs's Terms of Service</a></li>
            <li><a href="/disclaimer" target=_blank">GeneaLabs's Disclaimer</a></li>
        </ul>
        <h3>I have more questions. What do I do?</h3>
        <p>
            Not to worry! Simply email me at
            <a href="mailto:mike@genealabs.com">mike@genealabs.com</a> and I'll
            be happy to answer an questions you may have.
        </p>
        <h2>What is so special about Termageddon?</h2>
        <p>
            Termageddon was founded by a lawyer specializing in privacy laws.
            They are also the only policy generator approved by the
            International Association of Privacy Professionals (IAPP).
        </p>
        <div class="text-center">
            <a
                class="m-4 py-2 px-6 text-xl rounded-lg bg-purple-600 text-purple-100 hover:text-purple-100 hover:bg-purple-700"
                href="https://app.termageddon.com?fp_ref=genealabs"
                target="_blank"
            >
                Protect Yourself
            </a>
        </div>
        <h2>Laws Are Changing!</h2>
        <p>
            With new privacy laws being enacted all the time, it is more
            important than ever that you protect yourself.
        </p>
        <p>
            Not having policy documentation on your website opens you up to
            lawsuits, even if you don't reside in the country or state that
            has enacted those laws.
        </p>
        <p>
            Further, communicating your policies with your visitors builds trust
            and provides a resource for setting expectations.
        </p>
        {{-- <h2>Looking for something more?</h2>
        <p>
            Are you looking for a more hands-off solution? We've got you covered
            with our Managed Policy Service:
            <ul class="pl-8 list-disc list-outside">
                <li>
                    I will guide you through the entire process over a Zoom
                    call. If any specific questions come up during the call, I
                    will reach out to Termageddon for answers for you.
                </li>
                <li>I will implement the documents on your website during the call.</li>
                <li>
                    I will follow up with you annually to review your policy
                    documents to make sure they reflect your business practices.
                </li>
            </ul>
            <a href="/managed-policies">Learn More &hellip;</a>
        </p> --}}
    </section>
@endsection
