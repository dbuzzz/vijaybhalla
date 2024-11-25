@extends('frontend.layout')
@section('extern-css')

 
@endsection
@section('content')
 <!-- PAGE HEADER -->
    <div id="page-header" class="contact">
   <div class="title-breadcrumbs">
   <h1>Apply For Job</h1>
   <div class="thebreadcumb">
    <ul class="breadcrumb">
        <li><a href="{{url('/')}}">Home</a></li>
        <li class="active">Apply For Job</li>
    </ul>
   </div>
   </div>

    </div>
    <!-- END OF PAGE HEADER -->
  </div>

 <!--  ICON BOXES -->
<div class="about1-numbers contact">
      <div class="row">

        <div class="col-sm-4">
        <div class="shadow-effect">
          <div class="row">
            <div class="col-sm-12 col-md-3">
              <div class="number blue"><span class="typcn typcn-mail"></span></div>
            </div>
            <div class="col-sm-12 col-md-9">
              <h4>DROP US A LINE</h4>
              <p>Have a query? We will be happy to help. Let's get connected</p>
              <span><a href="mailto:cavijaykbhalla@yahoo.in">cavijaykbhalla@yahoo.in</a></span>
            </div>
          </div>
          </div>
        </div>

        <div class="col-sm-4">
         <div class="shadow-effect">
          <div class="row">
            <div class="col-sm-12 col-md-3">
              <div class="number blue"><span class="typcn typcn-heart"></span></div>
            </div>
            <div class="col-sm-12 col-md-9">
              <h4>ASK FOR SUPPORT</h4>
              <p>Have a query regarding our services? Drop us a mail</p>
              <span><a href="mailto:cavijaykbhalla@yahoo.in">cavijaykbhalla@yahoo.in</a></span>
            </div>
          </div>
          </div>
        </div>

        <div class="col-sm-4">
         <div class="shadow-effect">
          <div class="row">
            <div class="col-sm-12 col-md-3">
              <div class="number blue"><span class="typcn typcn-location"></span></div>
            </div>
            <div class="col-sm-12 col-md-9">
              <h4>VISIT OUR OFFICE</h4>
              <p> A-46, 1st Floor, Sector-67, Noida-201307 Gautam Buddha Nagar , India</p>
            </div>
            </div>
          </div>
        </div>
      </div>

      </div>
<!--  END OF ICON BOXES -->

<!--  FORM -->
<section class="contact-form">
<div class="row">
<div class="col-sm-12">
 <h2>Send Your <span>Application</span></h2>
<hr class="small"/>
</div>
</div>
<div class="row">
<div class="col-sm-12">
 <div id="sendstatus"></div>

   <div id="contactform">
<form id="applyForJob" >
<div class="row">
<div class="col-md-6 offset-md-3">
            <p><label for="name">Name:*</label> <input type="text" class="form-control" name="name" id="name" tabindex="1" /></p>
            <p><label for="email">Email:*</label> <input type="text" class="form-control" name="email" id="email" tabindex="2" /></p>
            <p><label for="phone">Phone Number:*</label> <input type="text" class="form-control" name="phone" id="phone" tabindex="3" /></p>
            <p><label for="phone">Qualification*</label> <input type="text" class="form-control" name="qualification" id="qualification" tabindex="3" /></p>
            <p><label for="phone">Resume*</label> <input type="file" class="form-control" name="resume" id="resume" tabindex="3" /></p>
</div>
<div class="col-sm-6">
            <p><label for="comments">Message:*</label> <textarea  class="form-control" name="message" id="comments" tabindex="6" style="min-height: 445px;"></textarea></p>
</div>
</div>
 <p><input name="submit" type="submit" id="submit" class="submit" value="Apply" tabindex="5" /></p>
</form>

</div>
</div>
</div>
</section>
<!--  END OF FORM -->

<div id="map_wrapper">
<div id="map_canvas" class="mapping"><div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=571&amp;height=400&amp;hl=en&amp;q=A-46, 1st Floor, Sector-67, Noida-201307 Gautam Buddha Nagar (Uttar Pradesh), India&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://capcuttemplate.org/">Capcut Templates</a></div><style>.mapouter{position:relative;text-align:right;width:100%;height:400px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:400px;}.gmap_iframe {height:400px!important;}</style></div></div>
</div>


@endsection
@section('extern-js')
<script src="{{url('frontend_assets/custom_js/cart.js')}}"></script>

@endsection