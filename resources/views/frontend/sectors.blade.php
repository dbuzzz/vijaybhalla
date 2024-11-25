@extends('frontend.layout')
@section('extern-css')

 
@endsection
@section('content')


<!-- PAGE HEADER -->
    <div id="page-header" class="about1">
   <div class="title-breadcrumbs">
   <h1>Sector</h1>
   <div class="thebreadcumb">
    <ul class="breadcrumb">
        <li><a href="{{url('/')}}">Home</a></li>
        <li class="active">Sector</li>
    </ul>
   </div>
   </div>

    </div>
    <!-- END OF PAGE HEADER -->
  </div>


    <section class="about1-team">
<div class="row">
<div class="col-sm-12">
        <h2><span>Sectors </span>We Serve</h2>
       

           <div class="block-grid-md-4 block-grid-sm-2 block-grid-xs-1 team-grid">

            <div class="block-grid-item black wow zoomIn img-hover-zoom--zoom-n-rotate" data-wow-duration="500ms" data-wow-delay="100ms">
            <div class="shadow-effect">
              <img src="{{asset('')}}frontend_assets/images/sector/s1.jpg">
                <h3>Pharmaceuticals Industry</h3>
              </div>
            </div><div class="block-grid-item black wow zoomIn img-hover-zoom--zoom-n-rotate" data-wow-duration="500ms" data-wow-delay="100ms">
            <div class="shadow-effect">
              <img src="{{asset('')}}frontend_assets/images/sector/s2.jpg">
                <h3>Textile Industry</h3>
              </div>
            </div><div class="block-grid-item black wow zoomIn img-hover-zoom--zoom-n-rotate" data-wow-duration="500ms" data-wow-delay="100ms">
            <div class="shadow-effect">
              <img src="{{asset('')}}frontend_assets/images/sector/s3.jpg">
                <h3>Healthcare Industry</h3>
              </div>
            </div><div class="block-grid-item black wow zoomIn img-hover-zoom--zoom-n-rotate" data-wow-duration="500ms" data-wow-delay="100ms">
            <div class="shadow-effect">
              <img src="{{asset('')}}frontend_assets/images/sector/t13.jpg">
                <h3>Hospitality Industry</h3>
              </div>
            </div><div class="block-grid-item black wow zoomIn img-hover-zoom--zoom-n-rotate" data-wow-duration="500ms" data-wow-delay="100ms">
            <div class="shadow-effect">
              <img src="{{asset('')}}frontend_assets/images/sector/s5.jpg">
                <h3>Tour & Travel Industry</h3>
              </div>
            </div><div class="block-grid-item black wow zoomIn img-hover-zoom--zoom-n-rotate" data-wow-duration="500ms" data-wow-delay="100ms">
            <div class="shadow-effect">
               <img src="{{asset('')}}frontend_assets/images/sector/s6.jpg">
                <h3>Construction</h3>
              </div>
            </div><div class="block-grid-item black wow zoomIn img-hover-zoom--zoom-n-rotate" data-wow-duration="500ms" data-wow-delay="100ms">
            <div class="shadow-effect">
              <img src="{{asset('')}}frontend_assets/images/sector/s8.jpg">
                <h3>Estate | Property</h3>
              </div>
            </div><div class="block-grid-item black wow zoomIn img-hover-zoom--zoom-n-rotate" data-wow-duration="500ms" data-wow-delay="100ms">
            <div class="shadow-effect">
              <img src="{{asset('')}}frontend_assets/images/sector/s9.jpg">
                <h3>Power, Gas & Oil</h3>
              </div>
            </div><div class="block-grid-item black wow zoomIn img-hover-zoom--zoom-n-rotate" data-wow-duration="500ms" data-wow-delay="100ms">
            <div class="shadow-effect">
              <img src="{{asset('')}}frontend_assets/images/sector/s10.jpg">
                <h3>Infrastructure</h3>
              </div>
            </div><div class="block-grid-item black wow zoomIn img-hover-zoom--zoom-n-rotate" data-wow-duration="500ms" data-wow-delay="100ms">
            <div class="shadow-effect">
              <img src="{{asset('')}}frontend_assets/images/sector/s11.jpg">
                <h3>Educational Institute</h3>
              </div>
            </div><div class="block-grid-item black wow zoomIn img-hover-zoom--zoom-n-rotate" data-wow-duration="500ms" data-wow-delay="100ms">
            <div class="shadow-effect">
              <img src="{{asset('')}}frontend_assets/images/sector/s12.jpg">
                <h3>Engineering</h3>
                </div>
            </div><div class="block-grid-item black wow zoomIn img-hover-zoom--zoom-n-rotate" data-wow-duration="500ms" data-wow-delay="100ms">
            <div class="shadow-effect">
                <img src="{{asset('')}}frontend_assets/images/sector/1200.jpg">
                <h3>Automation</h3>
              </div>
            </div>
  
         
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
@endsection