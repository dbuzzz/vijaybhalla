@extends('frontend.layout')
@section('extern-css')

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


<!-- PAGE HEADER -->
    <div id="page-header" class="about1">
   <div class="title-breadcrumbs">
   <h1>About-Us</h1>
   <div class="thebreadcumb">
    <ul class="breadcrumb">
        <li><a href="{{url('/')}}">Home</a></li>
        <li class="active">About-Us</li>
    </ul>
   </div>
   </div>

    </div>
    <!-- END OF PAGE HEADER -->
  </div>

 <section class="introtext about1">
    <div class="row">
      <div class="col-sm-12">
        <h2>One Stop Solution For Your <span>Accounting Needs & Financial Consultation</span></h2>
        <p class="text-center">We Believe In Providing The Best Assistance To Our Clients & People So That They Can Grow Rapidly. As a  CA (Chartered Accountancy) firmware provides  professional services firm that provides a range of financial and accounting services to individuals, businesses, and other organizations. These services may include audit and assurance, tax planning and compliance, financial reporting and analysis, management consulting, and other related services. We are powered by more than 50+ Chartered Accountants who are responsible for managing the firm's operations and providing high-quality services to clients. </p>
      <hr class="small"/>
      </div>
    </div>

<!-- NUMBERS -->
<div class="about1-numbers">
      <div class="row">
        <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
        <div class="shadow-effect">
          <div class="row">
            <div class="col-sm-12 col-md-3">
              <div class="number blue">1</div>
            </div>
            <div class="col-sm-12 col-md-9">
              <h4>Our Mission</h4>
              <p>To provide reliable professional services with integrity, excellence and confidentiality in the system of our firm to meet our customers individual requests.</p>
            </div>
          </div>
          </div>
        </div>

        <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
         <div class="shadow-effect">
          <div class="row">
            <div class="col-sm-12 col-md-3">
              <div class="number blue">2</div>
            </div>
            <div class="col-sm-12 col-md-9">
              <h4>Our Vision</h4>
              <p>To establish a one roof platform for clients for all their professional needs with the motive of recognition of CA profession and to serve for nation.</p>
            </div>
          </div>
          </div>
        </div>

        <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="700ms">
         <div class="shadow-effect">
          <div class="row">
            <div class="col-sm-12 col-md-3">
              <div class="number blue">3</div>
            </div>
            <div class="col-sm-12 col-md-9">
              <h4>Our Ethics</h4>
              <p>We never compromise with the professional code of conduct; we are abide by the professional ethics and would like to restrain ourselves from any conduct that might discredit to the profession.</p>
            </div>
            </div>
          </div>
        </div>
      </div>
      </div>
<!-- END OF NUMBERS -->
</section>

<!-- SLIDER / ACCORDION -->
<section class="about1-slider-accordion">
<div class="row">
<div class="col-md-6">
<div id="about1-slider">
<img src="{{asset('')}}uploads/newImages/4.jpg" alt="">
<img src="{{asset('')}}uploads/newImages/5.jpg" alt="">
<img src="{{asset('')}}uploads/newImages/6.jpg" alt="">
</div>
    <!-- END OF SLIDER -->
</div>
<div class="col-md-6">

    <!-- ACCORDION -->
<div id="accordion" class="style2 panel-group">
                <div class="panel panel-default">

                  <div class="panel-heading">
                    <h4 class="panel-title"><i class="indicator fa fa-minus-square-o pull-left"></i><a data-toggle="collapse" data-parent="#accordion.style2" href="#collapse-style2-1">Team Of Professional Leaders Leading The Future</a></h4>
                  </div>

                  <div id="collapse-style2-1" class="panel-collapse collapse in">
                    <div class="panel-body">
                      <p>We At Vijay K Bhalla & Co  always maintain a high level of professionalism in our  work, interactions with clients, and approach to problem-solving.</p>
                    </div>
                  </div>
                </div>

                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title"><i class="indicator fa fa-plus-square-o pull-left"></i><a data-toggle="collapse" data-parent="#accordion.style2" href="#collapse-style2-2">We Speak With Experience & Trust</a></h4>
                  </div>

                  <div id="collapse-style2-2" class="panel-collapse collapse">
                    <div class="panel-body">
                      <p>A reputable CA firm should have a team of experienced and qualified Chartered Accountants who can provide clients with expert advice and guidance.</p>
                    </div>
                  </div>
                </div>

                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title"><i class="indicator fa fa-plus-square-o pull-left"></i><a data-toggle="collapse" data-parent="#accordion.style2" href="#collapse-style2-3">Build a Positive Team and Family Spirit</a></h4>
                  </div>

                  <div id="collapse-style2-3" class="panel-collapse collapse">
                    <div class="panel-body">
                      <p>Building a positive team and family spirit is essential to foster a supportive and harmonious environment where individuals feel valued, respected, and motivated</p>
                    </div>
                  </div>
                </div>

                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title"><i class="indicator fa fa-plus-square-o pull-left"></i><a data-toggle="collapse" data-parent="#accordion.style2" href="#collapse-style2-4">Doing Everything With Passion & Love </a></h4>
                  </div>

                  <div id="collapse-style2-4" class="panel-collapse collapse">
                    <div class="panel-body">
                      <p>Doing everything with passion and love is a great way to live your life. When you are passionate about something, you naturally want to learn more about it, improve your skills, and excel at it. </p>
                    </div>
                  </div>
                </div>

                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title"><i class="indicator fa fa-plus-square-o pull-left"></i><a data-toggle="collapse" data-parent="#accordion.style2" href="#collapse-style2-5">Happy Clients Is Our Strength </a></h4>
                  </div>

                  <div id="collapse-style2-5" class="panel-collapse collapse">
                    <div class="panel-body">
                      <p>Indeed, having happy clients is a great strength for any business or organization. When clients are satisfied with the products or services they receive.</p>
                    </div>
                  </div>
                </div>
              </div>
                  <!-- END OF ACCORDION -->
</div>
</div>
</section>

<div class="container-fluid">
   
    <div class="row gallery">
      <div class="col-sm-6 col-md-4 col-lg-3">
        <a href="{{asset('')}}uploads/images/9.jpg">
          <img class="img-fluid" src="{{asset('')}}uploads/images/9.jpg">
        </a>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3">
        <a href="{{asset('')}}uploads/images/10.jpg">
          <img class="img-fluid" src="{{asset('')}}uploads/images/10.jpg">
        </a>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3">
        <a href="{{asset('')}}uploads/images/11.jpg">
          <img class="img-fluid" src="{{asset('')}}uploads/images/11.jpg">
        </a>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3">
        <a href="{{asset('')}}uploads/images/12.jpg">
          <img class="img-fluid" src="{{asset('')}}uploads/images/12.jpg">
        </a>
      </div>
     
    </div>
  </div>

  <div class="container-fluid">
   
    <div class="row gallery">
      
      <div class="col-sm-6 col-md-4 col-lg-3">
        <a href="{{asset('')}}uploads/images/18.jpg">
          <img class="img-fluid" src="{{asset('')}}uploads/images/18.jpg">
        </a>
      </div>
      
      <div class="col-sm-6 col-md-4 col-lg-3">
        <a href="{{asset('')}}uploads/images/15.jpg">
          <img class="img-fluid" src="{{asset('')}}uploads/images/15.jpg">
        </a>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3">
        <a href="{{asset('')}}uploads/images/16.jpg">
          <img class="img-fluid" src="{{asset('')}}uploads/images/16.jpg">
        </a>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3">
        <a href="{{asset('')}}uploads/images/19.jpg">
          <img class="img-fluid" src="{{asset('')}}uploads/images/19.jpg">
        </a>
      </div>
    </div>
  </div>

    <!-- TEAM -->
<section class="about1-team introtext">
<div class="row">
<div class="col-sm-12">
        <h2>Meet <span>Our Team</span></h2>
        <p class="text-center">Vijay Bhalla & Co  is a team of Smart  chartered accountant, corporate financial advisors and tax consultants in India. Our firm of chartered accountants represents Unique  skills that is geared to offer sound financial solutions and advices. We Are  professionally qualified and experienced persons who are committed to add value and optimize the benefits accruing to clients.</p>


           <div class="block-grid-md-4 block-grid-sm-2 block-grid-xs-1 team-grid">

           <!-- TEAM 1 -->
           <h2><span>Core </span>Members</h2>
           @if($coreTeam)
           @foreach($coreTeam as $key=>$value)
            <div class="block-grid-item black wow zoomIn img-hover-zoom--zoom-n-rotate" data-wow-duration="500ms" data-wow-delay="100ms">
            <div class="shadow-effect">
              <img src="{{$value->image}}" alt=""/>
                <h3>{{$value->name}}</h3>
                <p>{{$value->education}}</p>
                <p style=" overflow-wrap: break-word; ">{!!substr(strip_tags($value->description), 0,250)!!}</p>
                {{-- <a class="btn btn-default" href="{{url('TeamDetail',$value->id)}}" role="button">Read More</a> --}}
              </div>
            </div>
            @endforeach 
            @endif
       
         
          <!-- END OF TEAM 7 -->

      </div>

      <div class="block-grid-md-4 block-grid-sm-2 block-grid-xs-1 team-grid">

           <!-- TEAM 1 -->
           <h2><span>Other </span>Members</h2>
           @if($otherTeam)
           @foreach($otherTeam as $key=>$value)
            <div class="block-grid-item black wow zoomIn img-hover-zoom--zoom-n-rotate" data-wow-duration="500ms" data-wow-delay="100ms">
            <div class="shadow-effect">
              <img src="{{$value->image}}" alt=""/>
                <h3>{{$value->name}}</h3>
                <p>{{$value->education}}</p>
                <p style=" overflow-wrap: break-word; ">{!!substr(strip_tags($value->description), 0,250)!!}</p>
                {{-- <a class="btn btn-default" href="{{url('TeamDetail',$value->id)}}" role="button">Read More</a> --}}
              </div>
            </div>
            @endforeach 
            @endif
       
         
          <!-- END OF TEAM 7 -->

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