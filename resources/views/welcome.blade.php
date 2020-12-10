@extends('layouts.index')

@section('content')
    <!-- ========== MAIN CONTENT ========== -->
  <main id="content" role="main">

    <div class="position-relative border-bottom">
      <!-- Hero Carousel Main -->
      <div id="heroNav" class="js-slick-carousel slick slick-equal-height space-top-3"
           data-hs-slick-carousel-options='{
             "prevArrow": "<span class=\"fas fa-arrow-left d-none d-md-inline-block slick-arrow slick-arrow-soft-white slick-arrow-left slick-arrow-centered-y rounded-circle ml-sm-2 ml-xl-4\"></span>",
             "nextArrow": "<span class=\"fas fa-arrow-right d-none d-md-inline-block slick-arrow slick-arrow-soft-white slick-arrow-right slick-arrow-centered-y rounded-circle mr-sm-2 mr-xl-4\"></span>",
             "infinite": true,
             "autoplay": true,
             "autoplaySpeed": 10000,
             "adaptiveHeight": true,
             "counterSelector": "#slickCounter",
             "counterDivider": "/",
             "counterClassMap": {
               "current": "slick-counter-current",
               "total": "slick-counter-total",
               "divider": "slick-counter-divider"
             },
             "dots": true,
             "dotsClass": "slick-pagination slick-pagination-white d-md-none container position-absolute bottom-0 right-0 left-0 justify-content-start mb-6 pl-3 mx-auto",
             "asNavFor": "#heroNavThumb"
           }'>
        <div class="js-slide gradient-y-overlay-sm-dark bg-img-hero" style="background-image: url({{ asset('img/1920x800/img2.jpg') }});">
          <!-- Slide #1 -->
          <div class="container d-md-flex align-items-md-center vh-md-70 space-top-4 space-bottom-3 space-md-0">
            <div class="w-80 w-lg-50">
              {{-- <span class="d-block h3 text-white mb-2"
                    data-hs-slick-carousel-animation="fadeInUp">

              </span> --}}
              <h1 class="text-white display-4 mb-0"
                  data-hs-slick-carousel-animation="fadeInUp"
                  data-hs-slick-carousel-animation-delay="200">
                 SOFTWARE CONSULTING AND DEVELOPMENT FOR YOUR DIGITAL SUCCESS.
              </h1>
            </div>
          </div>
          <!-- End Slide #1 -->
        </div>

        <div class="js-slide gradient-y-overlay-sm-dark bg-img-hero" style="background-image: url({{ asset('img/1920x800/img3.jpg') }});">
          <!-- Slide #2 -->
          <div class="container d-md-flex align-items-md-center vh-md-70 space-top-4 space-bottom-3 space-md-0">
            <div class="w-80 w-lg-50">
              {{-- <span class="d-block h3 text-white mb-2"
                    data-hs-slick-carousel-animation="fadeInUp">
                It is an
              </span> --}}
              <h2 class="text-white display-4 mb-0"
                  data-hs-slick-carousel-animation="fadeInUp"
                  data-hs-slick-carousel-animation-delay="200">
                 {{-- Our Experienced developers can deliver great products which will exceed your expectations. --}}
                 Are you planing to develop a software, we have proven expertise in the area of software development.
              </h2>
            </div>
          </div>
          <!-- End Slide #2 -->
        </div>
      </div>
      <!-- End Hero Carousel Main -->

      <!-- Slick Paging -->
      <div class="container position-relative">
        <div id="slickCounter" class="slick-counter"></div>
      </div>
      <!-- End Slick Paging -->

      <!-- Hero Carousel Secondary -->
      <div id="heroNavThumb" class="js-slick-carousel slick"
           data-hs-slick-carousel-options='{
             "infinite": true,
             "autoplay": true,
             "autoplaySpeed": 10000,
             "isThumbs": true,
             "asNavFor": "#heroNav"
           }'>
        <div class="js-slide">
          <!-- Slide #1 -->
          <div class="d-flex align-items-center bg-white position-relative vh-md-30">
            <div class="container space-2">
              <div class="row">
                <div class="col-md-4">
                  <h3 class="text-muted">
                    <span class="d-block font-weight-bold">01.</span>
                    <span class="d-block text-primary">Memdal IT Services</span>
                  </h3>
                  <p class="mb-0">We transform businesses with powerful and adaptable digital solutions that satisfy the needs of today and unlock the opportunities of tomorrow..</p>
                </div>
              </div>
            </div>

            <div class="col-md-5 d-none d-md-inline-block bg-primary position-absolute top-0 right-0 bottom-0">
              <div class="content-centered-y p-7">
                <a class="btn btn-color btn-wide transition-3d-hover"
                href="https://htmlstream.com/preview/front-v3.2.2/html/pages/login-simple.html">Get Started</a>
              <a class="btn btn-link btn-wide" href="#">Learn More <i class="fas fa-angle-right fa-sm ml-1"></i></a>
              </div>
            </div>
          </div>
          <!-- End Slide #1 -->
        </div>

        <div class="js-slide">
          <!-- Slide #2 -->
          <div class="d-flex align-items-center bg-white position-relative vh-md-30">
            <div class="container space-2">
              <div class="row">
                <div class="col-md-4">
                  <h3 class="text-muted">
                    <span class="d-block font-weight-bold">02.</span>
                    <span class="d-block text-navy">Memdal IT Services</span>
                  </h3>
                  <p class="mb-0">Memdal IT Services is focused on developing and delivering products that drive growth and convert leads..</p>
                </div>
              </div>
            </div>

            <div class="col-md-5 d-none d-md-inline-block bg-primary position-absolute top-0 right-0 bottom-0">
              <div class="content-centered-y p-7">
                <a class="btn btn-color btn-wide transition-3d-hover"
                href="https://htmlstream.com/preview/front-v3.2.2/html/pages/login-simple.html">Get Started</a>
              <a class="btn btn-link btn-wide" href="#">Learn More <i class="fas fa-angle-right fa-sm ml-1"></i></a>
              </div>
            </div>
          </div>
          <!-- End Slide #2 -->
        </div>
      </div>
      <!-- End Hero Carousel Secondary -->
    </div>

    <div class="hero">
        <div class="container">
            <div class="btn-box">
                <button id="btn1" onclick="openHTML()">Software Development</button>
                <button id="btn2" onclick="openCSS()">Web Development</button>
                <button id="btn3" onclick="openJS()">IT Consulting</button>
            </div>
            <div id="content1" class="content">
                <div class="content-left">
                    <h2>Software Development</h2>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cumque fuga ratione necessitatibus quod molestiae neque quaerat soluta veritatis asperiores ipsum impedit error quam, ducimus maxime aut tenetur accusamus doloribus labore.</p>
                    <a href="javascript:;">Learn More <i class="fas fa-angle-right fa-sm"></i></a>
                </div>
                <div class="content-rigt"></div>
            </div>
            <div id="content2" class="content">
                <div class="content-left">
                    <h2>Web Development</h2>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cumque fuga ratione necessitatibus quod molestiae neque quaerat soluta veritatis asperiores ipsum impedit error quam, ducimus maxime aut tenetur accusamus doloribus labore.</p>
                    <a href="javascript:;">Learn More <i class="fas fa-angle-right fa-sm"></i></a>
                </div>
                <div class="content-rigt"></div>
            </div>
            <div id="content3" class="content">
                <div class="content-left">
                    <h2>IT Consulting</h2>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cumque fuga ratione necessitatibus quod molestiae neque quaerat soluta veritatis asperiores ipsum impedit error quam, ducimus maxime aut tenetur accusamus doloribus labore.</p>
                    <a href="javascript:;">Learn More <i class="fas fa-angle-right fa-sm"></i></a>
                </div>
                <div class="content-rigt"></div>
            </div>
        </div>
    </div>

    <!-- Testimonials Section -->
    <div class="bg-light rounded mx-3 mx-md-11">
      <div class="container space-1 space-md-2">
        <div class="card bg-transparent shadow-none">
          <div class="row">
            <div class="col-lg-3 d-none d-lg-block">
              <div class="dzsparallaxer auto-init height-is-based-on-content use-loading mode-scroll bg-light"
                data-options='{direction: "reverse"}' style="overflow: visible;">
                <div>
                  <img class="img-fluid rounded shadow-lg" src="{{ asset('img/400x500/img31.jpg') }}"
                    alt="Image Description">

                  <!-- SVG Shapes -->
                  <figure class="max-w-15rem w-100 position-absolute bottom-0 left-0 z-index-n1">
                    <div class="mb-n7 ml-n7">
                      <img class="img-fluid"
                        src="https://htmlstream.com/preview/front-v3.2.2/assets/svg/components/dots-5.svg"
                        alt="Image Description">
                    </div>
                  </figure>
                  <!-- End SVG Shapes -->
                </div>
              </div>
            </div>

            <div class="col-lg-9">
              <!-- Card Body -->
              <div class="card-body h-100 rounded p-0 p-md-4">
                <!-- SVG Quote -->
                <figure class="mb-3">
                  <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="36" height="36" viewBox="0 0 8 8">
                    <path fill="#377dff" d="M3,1.3C2,1.7,1.2,2.7,1.2,3.6c0,0.2,0,0.4,0.1,0.5c0.2-0.2,0.5-0.3,0.9-0.3c0.8,0,1.5,0.6,1.5,1.5c0,0.9-0.7,1.5-1.5,1.5
                      C1.4,6.9,1,6.6,0.7,6.1C0.4,5.6,0.3,4.9,0.3,4.5c0-1.6,0.8-2.9,2.5-3.7L3,1.3z M7.1,1.3c-1,0.4-1.8,1.4-1.8,2.3
                      c0,0.2,0,0.4,0.1,0.5c0.2-0.2,0.5-0.3,0.9-0.3c0.8,0,1.5,0.6,1.5,1.5c0,0.9-0.7,1.5-1.5,1.5c-0.7,0-1.1-0.3-1.4-0.8
                      C4.4,5.6,4.4,4.9,4.4,4.5c0-1.6,0.8-2.9,2.5-3.7L7.1,1.3z" />
                  </svg>
                </figure>
                <!-- End SVG Quote -->

                <div class="row">
                  <div class="col-lg-8 mb-3 mb-lg-0">
                    <div class="pr-lg-5">
                      <blockquote class="h3 font-weight-normal mb-4">I'm absolutely floored by the level of care and
                        attention to detail the team at Htmlstream have put into this theme and for one can guarantee
                        that I will be a return customer.</blockquote>
                      <div class="media">
                        <div class="avatar avatar-xs avatar-circle d-lg-none mr-2">
                          <img class="avatar-img" src="{{ asset('img/100x100/img19.jpg') }}" alt="Image Description">
                        </div>
                        <div class="media-body">
                          <span class="text-dark font-weight-bold">Lewis</span>
                          <span class="font-size-1">&mdash; happy customer</span>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-4 column-divider-lg">
                    <hr class="d-lg-none">

                    <div class="pl-lg-5">
                      <span class="h1 text-primary">3,500+</span>
                      <p class="font-size-1">Leaders use Front to build a startup, ecommerce, portfolio and many more
                        websites.</p>
                      <a class="font-size-1 text-nowrap" href="#">Read the case studies <i
                          class="fas fa-angle-right fa-sm ml-1"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Card Body -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Testimonials Section -->

    <!-- Features Section -->
    <div class="bg-navy rounded mx-3 mx-xl-10" style="background-image: url(https://htmlstream.com/preview/front-v3.2.2/assets/svg/components/abstract-shapes-20.svg);">
      <div class="container-xl container-fluid space-1 space-md-2 px-4 px-md-8 px-lg-10">
        <div class="px-3">
          <!-- Title -->
          <div class="w-md-80 w-lg-50 text-center mx-md-auto mb-5 mb-md-9">
            <h1 class="text-white">Explore Our Services</h1>
          </div>
          <!-- End Title -->

          <!-- Slick Carousel -->
          <div class="js-slick-carousel slick slick-equal-height ie-slick-equal-height slick-gutters-3"
              data-hs-slick-carousel-options='{
                 "prevArrow": "<span class=\"fas fa-arrow-left slick-arrow slick-arrow-primary-white slick-arrow-left slick-arrow-centered-y shadow-soft rounded-circle ml-n2\"></span>",
                 "nextArrow": "<span class=\"fas fa-arrow-right slick-arrow slick-arrow-primary-white slick-arrow-right slick-arrow-centered-y shadow-soft rounded-circle mr-n2\"></span>",
                 "slidesToShow": 2,
                 "infinite": true,
                 "dots": true,
                 "dotsClass": "slick-pagination slick-pagination-white d-none mt-5",
                 "responsive": [{
                   "breakpoint": 992,
                   "settings": {
                     "slidesToShow": 2
                     }
                   }, {
                   "breakpoint": 768,
                   "settings": {
                     "slidesToShow": 1
                     }
                   }, {
                   "breakpoint": 554,
                   "settings": {
                     "slidesToShow": 1
                   }
                 }]
               }'>
            <div class="js-slide mb-4">
              <!-- Card Info -->
              <div class="card h-100">
                <img class="card-img-top" src="{{ asset('img/480x320/img7.jpg') }}" alt="Image Description">
                <div class="card-body">
                  <div class="max-w-13rem w-100 mb-3">
                    {{-- <img class="img-fluid" src="https://htmlstream.com/preview/front-v3.2.2/assets/svg/clients-logo/airbnb-original.svg" alt="Logo"> --}}
                    Software Development
                  </div>
                  <p class="mb-0">The development of reliable and scalable software solutions for any OS, browser and device. We bring together deep industry expertise and the latest IT advancements to deliver custom solutions and products that perfectly fit the needs and behavior of their users.</p>
                </div>
                <div class="card-footer border-0 pt-0">
                  <a class="font-weight-bold" href="https://htmlstream.com/preview/front-v3.2.2/html/pages/customer-story.html">Read story <i class="fas fa-angle-right fa-sm ml-1"></i></a>
                </div>
              </div>
              <!-- End Card Info -->
            </div>

            <div class="js-slide mb-4">
              <!-- Card Info -->
              <div class="card h-100">
                <img class="card-img-top" src="{{ asset('img/480x320/img7.jpg') }}" alt="Image Description">
                <div class="card-body">
                  <div class="max-w-13rem w-100 mb-3">
                    {{-- <img class="img-fluid" src="https://htmlstream.com/preview/front-v3.2.2/assets/svg/clients-logo/airbnb-original.svg" alt="Logo"> --}}
                    UI / UX Design
                  </div>
                  <p class="mb-0">User experience and user interface design for all types of websites, SaaS, and web/mobile apps. We combine the latest UI/UX trends with our customers’ individual goals and needs to deliver intuitive, vibrant, and impactful designs that power up businesses.</p>
                </div>
                <div class="card-footer border-0 pt-0">
                  <a class="font-weight-bold" href="https://htmlstream.com/preview/front-v3.2.2/html/pages/customer-story.html">Read story <i class="fas fa-angle-right fa-sm ml-1"></i></a>
                </div>
              </div>
              <!-- End Card Info -->
            </div>

            <div class="js-slide mb-4">
              <!-- Card Info -->
              <div class="card h-100">
                <img class="card-img-top" src="{{ asset('img/480x320/img6.jpg') }}" alt="Image Description">
                <div class="card-body">
                  <div class="max-w-13rem w-100 mb-3">
                    IT Consulting
                  </div>
                  <p class="mb-0">Our experts can help to develop and implement an effective IT strategy, assist in smooth digital transformation and system integration as well as advise on improvements to your digital customer experience..</p>
                </div>
                <div class="card-footer border-0 pt-0">
                  <a class="font-weight-bold" href="https://htmlstream.com/preview/front-v3.2.2/html/pages/customer-story.html">Read story <i class="fas fa-angle-right fa-sm ml-1"></i></a>
                </div>
              </div>
              <!-- End Card Info -->
            </div>

            <div class="js-slide mb-4">
              <!-- Card Info -->
              <div class="card h-100">
                <img class="card-img-top" src="{{ asset('img/480x320/img14.jpg') }}" alt="Image Description">
                <div class="card-body">
                  <div class="max-w-13rem w-100 mb-3">
                    Web Development
                  </div>
                  <p class="mb-0">Memdal is a professional web development which offers responsive website design services. Providing business website design and development services in Nigeria</p>
                </div>
                <div class="card-footer border-0 pt-0">
                  <a class="font-weight-bold" href="https://htmlstream.com/preview/front-v3.2.2/html/pages/customer-story.html">Read story <i class="fas fa-angle-right fa-sm ml-1"></i></a>
                </div>
              </div>
              <!-- End Card Info -->
            </div>

            <div class="js-slide mb-4">
              <!-- Card Info -->
              <div class="card h-100">
                <img class="card-img-top" src="{{ asset('img/480x320/img12.jpg') }}" alt="Image Description">
                <div class="card-body">
                  <div class="max-w-13rem w-100 mb-3">
                    Branding and Logo Design
                  </div>
                  <p class="mb-0">Branding and Logo Design has never been so easy and fun. Choose us and we can help amplify the brands reach. We are one of the best branding and Logo designing company in Nigeria. Contact us today for a free quotation.</p>
                </div>
                <div class="card-footer border-0 pt-0">
                  <a class="font-weight-bold" href="https://htmlstream.com/preview/front-v3.2.2/html/pages/customer-story.html">Read story <i class="fas fa-angle-right fa-sm ml-1"></i></a>
                </div>
              </div>
              <!-- End Card Info -->
            </div>

            <div class="js-slide mb-4">
              <!-- Card Info -->
              <div class="card h-100">
                <img class="card-img-top" src="{{ asset('img/mockups/seo.jpg') }}" alt="Image Description">
                <div class="card-body">
                  <div class="max-w-13rem w-100 mb-3">
                    Search Engine Optimization
                  </div>
                  <p class="mb-0">Get your website optimized with award winning SEO Experts, with over 6 years experience we are ready to make your website rank NO 1 on the web.</p>
                </div>
                <div class="card-footer border-0 pt-0">
                  <a class="font-weight-bold" href="https://htmlstream.com/preview/front-v3.2.2/html/pages/customer-story.html">Read story <i class="fas fa-angle-right fa-sm ml-1"></i></a>
                </div>
              </div>
              <!-- End Card Info -->
            </div>
          </div>
          <!-- End Slick Carousel -->
        </div>
      </div>
    </div>
    <!-- End Features Section -->

    <!-- Clients Section -->
    <div class="container space-2 space-bottom-lg-3">
        <h2 class="mb-5">TECHNOLOGIES WE USE</h2>
        <div class="js-slick-carousel slick"
           data-hs-slick-carousel-options='{
             "slidesToShow": 5,
             "autoplay": true,
             "autoplaySpeed": 5000,
             "infinite": true,
             "responsive": [{
               "breakpoint": 1200,
               "settings": {
                 "slidesToShow": 4
               }
             }, {
               "breakpoint": 992,
               "settings": {
                 "slidesToShow": 4
               }
             }, {
               "breakpoint": 768,
               "settings": {
                 "slidesToShow": 3
               }
             }, {
               "breakpoint": 576,
               "settings": {
                 "slidesToShow": 3
               }
             }]
           }'>
        <div class="js-slide">
          <img class="max-w-11rem max-w-md-13rem mx-auto" src="https://htmlstream.com/preview/front-v3.2.2/assets/svg/clients-logo/kaplan.svg" alt="Image Description">
        </div>
        <div class="js-slide">
          <img class="max-w-11rem max-w-md-13rem mx-auto" src="https://htmlstream.com/preview/front-v3.2.2/assets/svg/clients-logo/hubspot.svg" alt="Image Description">
        </div>
        <div class="js-slide">
          <img class="max-w-11rem max-w-md-13rem mx-auto" src="https://htmlstream.com/preview/front-v3.2.2/assets/svg/clients-logo/stripe.svg" alt="Image Description">
        </div>
        <div class="js-slide">
          <img class="max-w-11rem max-w-md-13rem mx-auto" src="https://htmlstream.com/preview/front-v3.2.2/assets/svg/clients-logo/slack.svg" alt="Image Description">
        </div>
        <div class="js-slide">
          <img class="max-w-11rem max-w-md-13rem mx-auto" src="https://htmlstream.com/preview/front-v3.2.2/assets/svg/clients-logo/airbnb.svg" alt="Image Description">
        </div>
        <div class="js-slide">
          <img class="max-w-11rem max-w-md-13rem mx-auto" src="https://htmlstream.com/preview/front-v3.2.2/assets/svg/clients-logo/spotify.svg" alt="Image Description">
        </div>
        <div class="js-slide">
          <img class="max-w-11rem max-w-md-13rem mx-auto" src="https://htmlstream.com/preview/front-v3.2.2/assets/svg/clients-logo/weebly.svg" alt="Image Description">
        </div>
      </div>
    </div>
    <!-- End Clients Section -->

    <script>
        var content1 = document.getElementById("content1");
        var content2 = document.getElementById("content2");
        var content3 = document.getElementById("content3");
        var btn1 = document.getElementById("btn1")
        var btn2 = document.getElementById("btn2")
        var btn3 = document.getElementById("btn3")

        function openHTML(){
            content1.style.transform = "translateX(0)";
            content2.style.transform = "translateX(120%)";
            content3.style.transform = "translateX(120%)";
            btn1.style.color = "#fff";
            btn2.style.color = "#000";
            btn3.style.color = "#000";
            btn1.style.background = "#ff000d";
            btn2.style.background = "transparent";
            btn3.style.background = "transparent";
            content1.style.transitionDelay = "0.3s"
            content2.style.transitionDelay = "0s"
            content3.style.transitionDelay = "0s"
        }
        function openCSS(){
            content1.style.transform = "translateX(120%)";
            content2.style.transform = "translateX(0)";
            content3.style.transform = "translateX(120%)";
            btn2.style.color = "#fff";
            btn1.style.color = "#000";
            btn3.style.color = "#000";
            btn2.style.background = "#ff000d";
            btn1.style.background = "transparent";
            btn3.style.background = "transparent";
            content2.style.transitionDelay = "0.3s"
            content1.style.transitionDelay = "0s"
            content3.style.transitionDelay = "0s"
        }
        function openJS(){
            content1.style.transform = "translateX(120%)";
            content2.style.transform = "translateX(120%)";
            content3.style.transform = "translateX(0)";
            btn3.style.color = "#fff";
            btn2.style.color = "#000";
            btn1.style.color = "#000";
            btn3.style.background = "#ff000d";
            btn2.style.background = "transparent";
            btn1.style.background = "transparent";
            content3.style.transitionDelay = "0.3s"
            content2.style.transitionDelay = "0s"
            content1.style.transitionDelay = "0s"
        }
    </script>
@endsection
