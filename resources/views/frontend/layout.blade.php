<!DOCTYPE html>
  <html lang="en">
  
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="_token" content="{{ csrf_token() }}">
	<title>{{@$title}}</title>
    <link rel="shortcut icon" href="{{asset('')}}frontend_assets/images/favicon.png" />
    <!-- GOOGLE WEB FONTS -->
    <link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lato:400,100,300,700,900&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <!-- END OF GOOGLE WEB FONTS -->

    <!-- BOOTSTRAP & STYLES -->
    <link href="{{asset('')}}frontend_assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('')}}frontend_assets/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="{{asset('')}}frontend_assets/css/block_grid_bootstrap.css" rel="stylesheet">
    <link href="{{asset('')}}frontend_assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{asset('')}}frontend_assets/css/typicons.min.css" rel="stylesheet">
    <link href="{{asset('')}}frontend_assets/css/odometer-theme-default.css" rel="stylesheet">
    <link href="{{asset('')}}frontend_assets/css/slider-pro.min.css" rel="stylesheet">
    <link href="{{asset('')}}frontend_assets/css/animate-custom.css" rel="stylesheet">
    <link href="{{asset('')}}frontend_assets/css/owl.carousel.css" rel="stylesheet">
    <link href="{{asset('')}}frontend_assets/css/owl.theme.default.min.css" rel="stylesheet">
    <link href="{{asset('')}}frontend_assets/css/slicknav.min.css" rel="stylesheet">
    <link href="{{asset('')}}frontend_assets/css/style.css" rel="stylesheet">
    <!-- END OF BOOTSTRAP & STYLES -->

    <link rel="stylesheet" href="{{asset('plugins/toastr/toastr.min.css')}}">

    @yield("extern-css")

	<script>
        const siteUrl = '{{url("")}}';
    </script> 
  </head>

  <body>
  	@php 
		$menu = new App\Http\Controllers\Frontend\HomeController;
		    $menus = $menu->getmenu();
		@endphp

    <!-- HEADER -->

    <div id="hw-hero">
      <div class="header header1">
        <!-- TOP BAR -->
        <div class="topbar">
          <div class="row">
            <div class="col-sm-6">
              <ul class="phone">
                <li><span class="typcn typcn-phone-outline"></span> +91-98100 11041, 9717183093</li>
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              </ul>
            </div>
            <div class="col-sm-6">
              <ul class="toplinks">
                <li> Monday To Saturday [ 10:00 A.M - 7:00 P.M ]</li>
                <li><a href="mailto:cavijaykbhalla@yahoo.in">E-MAIL US</a></li>
                {{-- <li><a href="#search"><i class="fa fa-search"></i></a></li> --}}

              </ul>
            </div>
          </div>
        </div>
        <!-- END OF TOP BAR -->

        <!-- SEARCH FORM -->
        <div id="search">
          <button type="button" class="close">×</button>
          <form>
            <span>Type and Press enter</span>
            <input type="search" value="" placeholder="" />
          </form>
        </div>
        <!-- END OF SEARCH FORM -->

        <!-- LOGO & NAVIGATION -->
        <div class="header-navigation">
        <div class="row">
          <div class="col-sm-12">
            <div class="logonav">
              <div class="row no-gutter">
                <div class="col-sm-3">
                  <div class="logo" style="margin-top: 6px;">
                    <a href="{{url('/')}}"><img src="{{asset('uploads/default/logo.png')}}" alt="" /></a>
                  </div>
                </div>
                <div class="col-sm-9">
                  <nav id="desktop-menu">
                    <ul class="sf-menu" id="navigation">
                      <li class="current"><a href="{{'/'}}">Home</a>
                      </li>

                      <li><a href="{{url('/about-us')}}">About Us</a>
                      </li>

                      <li><a href="{{url('/sectors')}}">Sectors</a>
                      </li>

                      <li><a href="#">Services</a>
                        <ul>
                        	@if($menus)
                        	@foreach($menus as $key=>$value)
                          <li><a href="{{url('services',$value->id)}}">{{$value->heading}}</a></li>
                          @endforeach
                          @endif
                        </ul>
                      </li>

                      
                      <li><a href="{{url('/contact-us')}}">Contact Us</a>
                      </li>
                       <li><a href="{{url('/apply-for-job')}}">Apply for Job</a>
	                      </li>
                    
                    </ul>
                  </nav>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
        <!-- END OF LOGO & NAVIGATION -->
      </div>

      
   

   @yield('content')


   <section class="footer">

      <div class="footer-elements">
        <div class="row">
          <div class="col-sm-12">
            <div class="row no-gutter">

              <!-- FOOTER TOP ELEMENT -->
              <div class="col-sm-3">
                <div class="footer-element">
                  <span class="typcn typcn-watch"></span>
                  <p> Monday To Saturday<span>10:00 A.M - 7:00 P.M</span></p>
                </div>
              </div>
              <!-- FOOTER TOP ELEMENT -->

              <!-- FOOTER TOP ELEMENT -->
              <div class="col-sm-3">
                <div class="footer-element">
                  <span class="typcn typcn-location-outline"></span>
                  <p>A-46, 1st Floor, Sector-67, Noida-201307 Gautam Buddha Nagar, India</p>
                </div>
              </div>
              <!-- FOOTER TOP ELEMENT -->

              <!-- FOOTER TOP ELEMENT -->
              <div class="col-sm-3">
                <div class="footer-element">
                  <span class="typcn typcn-mail"></span>
                  <p>E-MAIL:<span><a href="mailto: cavijaykbhalla@yahoo.in">cavijaykbhalla@yahoo.in</a></span></p>
                </div>
              </div>
              <!-- FOOTER TOP ELEMENT -->

              <!-- FOOTER TOP ELEMENT -->
              <div class="col-sm-3">
                <div class="footer-element">
                  <span class="typcn typcn-phone-outline"></span>
                  <p>CALL US:<span>+91-98100 11041, 9717183093</span></p>
                </div>
              </div>
              <!-- FOOTER TOP ELEMENT -->
            </div>
          </div>
        </div>
      </div>

      <div class="footer-widgets">
        <div class="row">

          <!-- FOOTER WIDGET -->
          <div class="col-sm-3">
            <div class="footer-widget">
              <div class="small-logo"><img src="{{asset('uploads/default/logo1.jpg')}}" alt=""></div>
              <p>VIJAY K.BHALLA & CO. is a team of like minded Chartered Accountants who love to help companies & people to grow in their business as well as to achieve financial stability.</p>
              <ul class="social-links">
                <li><a href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
              </ul>
            </div>
          </div>
          <!-- END FOOTER WIDGET -->
          <!-- FOOTER WIDGET -->
          <div class="col-sm-3">
            <div class="footer-widget">
              <h5>Important Links</h5>
              <ul class="posts">
                <li><a href="https://www.incometax.gov.in/iec/foportal/" target="_blank">Income Tax</a></li>
                <li><a href="https://www.mca.gov.in/content/mca/global/en/contact-us/roc.html" target="_blank">ROC</a></li>
                <li><a href="https://www.gst.gov.in/" target="_blank">GST</a></li>
                <li><a href="https://noidaauthorityonline.in/" target="_blank">Noida Authority</a></li>
                
              </ul>
            </div>
          </div>
          <!-- END FOOTER WIDGET -->


          <!-- FOOTER WIDGET -->
          <div class="col-sm-3">
            <div class="footer-widget">
              <h5>Links</h5>
              <ul class="posts">
                <li><a href="{{url('/')}}">Home</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="{{url('/about-us')}}">About-Us</a></li>
                <li><a href="{{url('/contact-us')}}">Contact</a></li>
              </ul>
            </div>
          </div>
          <!-- END FOOTER WIDGET -->


          <!-- FOOTER WIDGET -->
          <div class="col-sm-3">
            <div class="footer-widget">
              <h5>NEWSLETTER</h5>
              <p>Enter your e-mail and subscribe to our newsletter</p>
              <div id="mc_embed_signup">
                <form id="newsLetter">
                  <input id="mce-EMAIL" type="email" name="email" placeholder="E-mail" required>
                  <div style="position: absolute; left: -5000px;">
                    <input type="text" name="b_b5638e105dac814ad84960d90_9345afa0aa" tabindex="-1" value="">
                  </div>
                  <input type="submit" value="SUBSCRIBE" name="subscribe" id="mc-embedded-subscribe" class="mtr-btn button-blue">
                </form>
              </div>

            </div>
          </div>
          <!-- END FOOTER WIDGET -->

        </div>
      </div>
    </section>
    <!-- END OF FOOTER -->

    <div class="copyright">
      <div class="row">
        <div class="col-sm-12">
          <p class="text-center">Copyright VIJAY K.BHALLA & CO. All Rights Reserved.</p>
        </div>
      </div>
    </div>

    <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

    <!-- JAVASCRIPT FILES -->
    <script src="{{asset('')}}frontend_assets/js/jquery.min.js"></script>
    <script src="{{asset('')}}frontend_assets/js/bootstrap.min.js"></script>
    <script src="{{asset('')}}frontend_assets/js/jquery.hoverIntent.js"></script>
    <script src="{{asset('')}}frontend_assets/js/superfish.min.js"></script>
    <script src="{{asset('')}}frontend_assets/js/jquery.sliderPro.min.js"></script>
    <script src="{{asset('')}}frontend_assets/js/owl.carousel.min.js"></script>
    <script src="{{asset('')}}frontend_assets/js/odometer.min.js"></script>
    <script src="{{asset('')}}frontend_assets/js/waypoints.min.js"></script>
    <script src="{{asset('')}}frontend_assets/js/jquery.slicknav.min.js"></script>
    <script src="{{asset('')}}frontend_assets/js/wow.min.js"></script>
    <script src="{{asset('')}}frontend_assets/js/retina.min.js"></script>
    <script src="{{asset('')}}frontend_assets/js/custom.js"></script>
    <script src="{{asset('plugins/toastr/toastr.min.js')}}"></script>
    @yield("extern-js")
    <!-- END OF JAVASCRIPT FILES -->


    <script>
      jQuery(document).ready(function($) {
        "use strict";

        window.odometerOptions = {
          format: 'd'
        };

      //  HEADER SLIDER HOOK
      jQuery('#index-slider').fadeIn(1000);
      $('#index-slider').sliderPro({
      width: '100%',
      height: 760,
      arrows: false,
      buttons: true,
      waitForLayers: true,
      fade: true,
      fadeDuration: 800,
      autoplay: true,
      autoplayDelay: 7500,
      autoplayOnHover: 'none',
      autoScaleLayers: false
  });

          //  TESTIMONIALS CAROUSEL HOOK
          $('#customers-testimonials').owlCarousel({
            loop: true,
            center: true,
            items: 3,
            margin: 0,
            autoplay: true,
            autoplayTimeout: 8500,
            smartSpeed: 450,
            responsive: {
              0: {
                items: 1
              },
              768: {
                items: 2
              },
              1170: {
                items: 3
              }
            }
          });
          //  CLIENTS CAROUSEL HOOK
          $('#clients-carousel').owlCarousel({
            loop: true,
            items: 5,
            margin: 30,
            autoplay: true,
            autoplayTimeout: 8500,
            smartSpeed: 450,
            responsive: {
              0: {
                items: 2
              },
              768: {
                items: 3
              },
              1170: {
                items: 5
              }
            }
          });

          $('.odometer').waypoint(function() {

            setTimeout(function() {
              $('#odometer1.odometer').html(22);
            }, 500);

            setTimeout(function() {
              $('#odometer2.odometer').html(6102);
            }, 1000);

            setTimeout(function() {
              $('#odometer3.odometer').html(18);
            }, 1500);

            setTimeout(function() {
              $('#odometer4.odometer').html(3144);
            }, 2000);

          }, {
            offset: 800,
            triggerOnce: true
          });

      });
    </script>
<script>(function(w, d) { w.CollectId = "646518eb1b0491e28f619fa5"; var h = d.head || d.getElementsByTagName("head")[0]; var s = d.createElement("script"); s.setAttribute("type", "text/javascript"); s.async=true; s.setAttribute("src", "https://collectcdn.com/launcher.js"); h.appendChild(s); })(window, document);</script>

  </body>
 
</html>