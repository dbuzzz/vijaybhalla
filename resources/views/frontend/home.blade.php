@extends('frontend.layout')
@section('extern-css')

 <style type="text/css">
   .containers {
    width: 100vw;
    margin-top: 2px;
}.ticker {
    display: flex;
    flex-wrap: wrap;
    width: 90%;
    height: 50px;
    margin: 0 auto;
}
.news {
    width: 76%;
    background: #ffa500;
    padding: 0 2%;
}
.title {
    width: 20%;
    text-align: center;
    background: #f28500;
    position: relative;
}
/*.title:after {
    position: absolute;
    content: "";
    right: -18%;
    border-left: 20px solid #f28500;
    border-top: 33px solid transparent;
    border-right: 20px solid transparent;
    border-bottom: 33px solid transparent;
    top: 0;
}*/
.title h5 {
    font-size: 18px;
    margin: 8% 0;
}
.news marquee {
    font-size: 18px;
}
marquee p {
    color: white;
}
 </style>

 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.css">

 <style>
      .jumbotron {
        text-align: center;
        padding: 20px;
        margin: 10px 0;
      }

      .gallery {
        padding: 40px;
      }

      .gallery img {
        width: 100%;
        border-radius: 0;
        position: relative;
      }
    </style>
@endsection
@section('content')
<!-- SLIDER -->
      <div class="slider-pro" id="index-slider">
      <div class="sp-slides">
          <!-- Slide 1 -->
          <div class="sp-slide">
              <img class="sp-image" src="{{asset('')}}uploads/newImages/2.jpg" alt=""/>
              <div class="hw-the-slider-content">
            <div class="row">
              <div class="col-sm-12">
                <div class="hw-the-slider-container">
                  <div class="hw-the-slider-captions sp-layer" data-show-transition="left" data-show-delay="800">
                    <h2>We  care  for  your  financial  controls and needs</h2>
                    <p>Team of like minded Chartered Accountants who can manage your big expenses by providing high level of advice because we care for you at every stage of your expenditure.</p>
                    {{-- <a href="#" class="hw-btn">Learn More</a> --}}
                  </div>
                </div>
              </div>
            </div>
          </div>
          </div>
           <!-- End of Slide 1 -->
          <!-- Slide 2 -->
          <div class="sp-slide">
               <img class="sp-image" src="{{asset('')}}uploads/newImages/3.jpg" alt=""/>
               <div class="hw-the-slider-content">
            <div class="row">
              <div class="col-sm-12">
                <div class="hw-the-slider-container">
                  <div class="hw-the-slider-captions sp-layer" data-show-transition="down" data-show-delay="800">
                    <h2>Working  together  to  achieve </h2>
                    <p>We, Here at VIJAY K. BHALLA & CO. believe in providing reliable professional services with integrity, excellence and confidentiality in the system of our firm to meet our customer's individual requests. </p>
                    {{-- <a href="#" class="hw-btn">Learn More</a> --}}
                  </div>
                </div>
              </div>
            </div>
          </div>
          </div>
            <!-- End of Slide 2 -->
          <!-- Slide 3 -->
          <div class="sp-slide">
               <img class="sp-image" src="{{asset('')}}uploads/newImages/4.jpg" alt=""/>
               <div class="hw-the-slider-content">
            <div class="row">
              <div class="col-sm-12">
                <div class="hw-the-slider-container">
                  <div class="hw-the-slider-captions sp-layer" data-show-transition="right" data-show-delay="800">
                    <h2>We  help  you  to  grow</h2>
                    <p>We help you to take care of your issued direct tax, indirect tax, statutory compliances, foreign exchange and other important compliance. </p>
                    {{-- <a href="#" class="hw-btn">Get Started</a> --}}
                  </div>
                </div>
              </div>
            </div>
          </div>
          </div>
          <!-- End of Slide 3 -->
      </div>
      </div>
   <!-- END OF SLIDER -->

   </div>
    <!-- FEATURES -->
    @if($news)
    <div class="containers">
      <div class="ticker">
        <div class="title"><h5 style="color: white;">{{$news->heading}}</h5></div>
        <div class="news">
          <marquee>
            <p style="color: white;margin-top: 2%;">
            @if(!empty($newsApi))
            {{$newsApi->data[$number]->title}}
            @else
            {!!$news->name!!}
            @endif
          </p>
          </marquee>
        </div>
      </div>
    </div>
    @endif

    @if(count($stock)>0)
    <div class="containers" style="margin-top: 2rem;">
      <div class="ticker">
        <div class="title"><h5 style="color: white;">Stock Updates</h5></div>
        <div class="news">
          <marquee>
            <p style="color: white;margin-top: 2%;">
            @foreach($stock as $key=>$value)
            @foreach($value as $key1=>$value1)
            {{$key1}} - {{$value1}} &nbsp;&nbsp;
            @endforeach
            @endforeach
          </p>
          </marquee>
        </div>
      </div>
    </div>
    @endif
    <section class="introtext">
      <div class="row">
        <div class="col-sm-12">
          <h2>How <span> VIJAY K.BHALLA & CO. </span>Team Can Help You?</h2>
          <p class="text-center">VIJAY K.BHALLA & CO. is a team of like minded Chartered Accountants who love to help companies & people to grow in their business as well as to achieve financial stability. Our Team represents a coalition of specialised skills which act as a helping hand for our clients & make their burden less.With our ability to decode and resolve complex issues and proactively engage with clientele, we are in a position to offer several offerings under one roof in the easiest way possible.</p>
        </div>
      </div>

      <div class="row spacing-45">
        <div class="col-sm-12">
          <div class="block-grid-sm-4 block-grid-xs-1">
              <div class="row">

            <!-- FEATURE 1 -->
            @if($services)
            @foreach($services as $key=>$value)
            <div class=" col-sm-4 block-grid-item wow fadeInLeft img-hover-zoom--zoom-n-rotate" data-wow-duration="300ms" data-wow-delay="300ms">
              <div class="shadow-effect">
                @if($value->smallIcon)
                <span class="img-hover-zoom--zoom-n-rotate"><img src="{{$value->smallIcon}}" style=" width: 75px; "></span>
                @else
                <span class="typcn typcn-chart-area-outline"></span>
                @endif
                <h3>{{$value->heading}}</h3>
                <p>{!!substr($value->description, 0, 100)!!}...</p>
                <a class="btn btn-default" href="{{url('services',$value->id)}}" role="button">Read More</a>
              </div>
            </div>
            @endforeach
            @endif
            </div>
           
            <!-- END OF FEATURE 4 -->
          </div>
        </div>
      </div>
    </section>
    <!-- END OF FEATURES -->

    <!-- ABOUT US -->
    <section class="aboutus">
      <div class="row">
        <div class="col-sm-8 col-md-6 wow fadeInLeft" data-wow-duration="600ms" data-wow-delay="600ms">
          <hr class="small" />
          <h2>About<span> VIJAY K.BHALLA & CO.</span></h2>
          <h4>Changing the way Normal Chartered Accountants work </h4>
          <p>We started as a small team and now we are a team behind many successful businesses & brands. We love to work with people & difficulty because we believe in delivering the best from the worst situations. We are on mission To provide reliable professional services with integrity, excellence and confidentiality in the system of our firm to meet our customers individual requests. </p>
          <a class="btn btn-default" href="{{url('about-us')}}" role="button">Read more about us</a>
        </div>
        <div class="col-sm-4 col-md-6">
        </div>
      </div>
    </section>
    <!-- END OF ABOUT US -->


  <div class="container-fluid">
   
    <div class="row gallery">
      <div class="col-sm-6 col-md-4 col-lg-3">
        <a href="{{asset('')}}uploads/images/1.jpg">
          <img class="img-fluid" src="{{asset('')}}uploads/images/1.jpg">
        </a>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3">
        <a href="{{asset('')}}uploads/images/2.jpg">
          <img class="img-fluid" src="{{asset('')}}uploads/images/2.jpg">
        </a>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3">
        <a href="{{asset('')}}uploads/images/3.jpg">
          <img class="img-fluid" src="{{asset('')}}uploads/images/3.jpg">
        </a>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3">
        <a href="{{asset('')}}uploads/images/4.jpg">
          <img class="img-fluid" src="{{asset('')}}uploads/images/4.jpg">
        </a>
      </div>
      
    </div>
  </div>

  <div class="container-fluid">
   
    <div class="row gallery">
     
      <div class="col-sm-6 col-md-4 col-lg-3">
        <a href="{{asset('')}}uploads/images/5.jpg">
          <img class="img-fluid" src="{{asset('')}}uploads/images/5.jpg">
        </a>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3">
        <a href="{{asset('')}}uploads/images/6.jpg">
          <img class="img-fluid" src="{{asset('')}}uploads/images/6.jpg">
        </a>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3">
        <a href="{{asset('')}}uploads/images/7.jpg">
          <img class="img-fluid" src="{{asset('')}}uploads/images/7.jpg">
        </a>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3">
        <a href="{{asset('')}}uploads/images/8.jpg">
          <img class="img-fluid" src="{{asset('')}}uploads/images/8.jpg">
        </a>
      </div>
    </div>
  </div>



    <section class="testimonials">

      <div class="row">
        <div class="col-sm-12">
          <h2>What <span>Our Customers </span> Have To Say</h2>
        </div>
      </div>

      <div class="row full-width no-gutter-all">
        <div class="col-sm-12">
          <div id="customers-testimonials" class="owl-carousel">

            @if(count($testimonial)!=0)
            @foreach($testimonial as $key =>$value)
            <div class="item">
              <div class="shadow-effect">
                <img class="img-circle" src="{{$value->image}}" alt="">
                <p>{!!$value->description!!}</p>
              </div>
              <div class="testimonial-name">{{$value->name}}</div>
            </div>
            @endforeach
            @endif
           
            
          </div>
        </div>
      </div>
    </section>
    <!-- END OF TESTIMONIALS -->

    <!-- NUMBERS -->
    <section class="numbers">
      <div class="row">
        <div class="col-sm-4 col-md-6">
        </div>

        <div class="col-sm-8 col-md-6">
          <h2>The Most <span>Advanced Finance </span>Solution</h2>
          <div class="row no-gutter wow fadeInUp" data-wow-duration="600ms" data-wow-delay="600ms">

            <div class="col-sm-9">
              <div class="numbersbox">
                <h4>Our Belief & Ethics </h4>
                <hr class="small" />
                <p>We believe in moral values and accept that there is no shortcut of quality professional services. We never compromise with the professional code of conduct; we abide by the professional ethics and would like to restrain ourselves from any conduct that might discredit the profession.</p>

                <p>We At VIJAY K.BHALLA & CO. Loves Partnering With People To Understand Their Problem And Solve Their Queries Easily. We Believe That India Has A Potential To Be The No 1 In Financial Sector.</p>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="numbersbox-small">
                <div class="number">
                  <div id="odometer1" class="odometer"></div>
                  <div class="numbername">YEARS IN THE MARKET</div>
                </div>
                <div class="number">
                  <div id="odometer2" class="odometer"></div>
                  <div class="numbername">HAPPY CLIENTS</div>
                </div>
                <div class="number">
                  <div id="odometer3" class="odometer"></div>
                  <div class="numbername">ADVISORS</div>
                </div>
                <div class="number">
                  <div id="odometer4" class="odometer"></div>
                  <div class="numbername">PROJECTS</div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>
    <!-- END OF NUMBERS -->

    <!-- CLIENTS -->
    <section class="clients wow fadeInUp" data-wow-duration="300ms" data-wow-delay="450ms">
      <div class="row">
        <div class="col-sm-12">
          <h2>People & Companies We have Worked For Till Now</h2>
          <p class="text-center">We Love & Celebrate each and every moment of our journey with  our people because we think that we work with some extraordinary & collaborative  group of people who are on a way to change the system it works & it behaves for handling large finance easily.</p>

          <div id="clients-carousel" class="owl-carousel">

            <div class="item">
              <img style=" opacity: 1; border: none; " src="{{asset('')}}uploads/logo/1.jpg" alt="">
            </div>
            <div class="item">
              <img style=" opacity: 1; border: none; " src="{{asset('')}}uploads/logo/2.jpg" alt="">
            </div>
            <div class="item">
              <img style=" opacity: 1; border: none; " src="{{asset('')}}uploads/logo/3.jpg" alt="">
            </div>
            <div class="item">
              <img style=" opacity: 1; border: none; " src="{{asset('')}}uploads/logo/4.jpg" alt="">
            </div>
            <div class="item">
              <img style=" opacity: 1; border: none; " src="{{asset('')}}uploads/logo/5.jpg" alt="">
            </div>
            <div class="item">
              <img style=" opacity: 1; border: none; " src="{{asset('')}}uploads/logo/6.jpg" alt="">
            </div>
            <div class="item">
              <img style=" opacity: 1; border: none; " src="{{asset('')}}uploads/logo/7.jpg" alt="">
            </div>
            <!--<div class="item">-->
            <!--  <img src="{{asset('')}}uploads/logo/8.jpg" alt="">-->
            <!--</div>-->
            <!--<div class="item">-->
            <!--  <img src="{{asset('')}}uploads/logo/9.png" alt="">-->
            <!--</div>-->
            

          </div>

        </div>
      </div>
    </section>


@endsection
@section('extern-js')
<script src="{{url('frontend_assets/custom_js/cart.js')}}"></script>

<script>
   jQuery(document).ready(function($) {
      "use strict";

        //  HEADER SLIDER HOOK
        $('#about1-slider').owlCarousel({
          loop: true,
          items: 1,
          margin: 0,
          autoplay: true,
          autoplayTimeout: 8500,
          animateIn: 'fadeIn',
          animateOut: 'bounceOut',
          lazyLoad: true,
        });

 });
  </script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.js"></script>
  <script>
    baguetteBox.run(".gallery", {
      animation: "slideIn"
    });
  </script>
@endsection