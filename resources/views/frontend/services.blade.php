@extends('frontend.layout')
@section('extern-css')

 
@endsection
@section('content')
<div id="page-header">
   <div class="title-breadcrumbs">
   <h1>{{@$data->heading}}</h1>
   <div class="thebreadcumb">
    <ul class="breadcrumb">
        <li><a href="{{'/'}}">Home</a></li>
        <li class="active">Services</li>
    </ul>
   </div>
   </div>

    </div>
    <!-- END OF PAGE HEADER -->
  </div>

  <section class="services2">
    <div class="row">
      <div class="col-md-6">
        <h2 class="text-left"><span>{{@$data->heading}}</span></h2>
        <h5>{{@$data->subHeading}}</h5>
        {!!@$data->description!!}

      </div>

       <div class="col-md-6">
        <div class="image-padding-shadow"><img src="{{@$data->image}}" alt=""/></div>
      </div>
      </div>
  </section>


  <section class="services2-list">
<div class="row">
      <div class="col-sm-12">
        <div class="block-grid-sm-4 block-grid-xs-1">

          <!-- SERVICE 1 -->
          @if($data->serviceHeading)
          @php
          $serviceHeading = explode('$HARSH$', $data->serviceHeading);
          $servicesubHeading = explode('$HARSH$', $data->servicesubHeading);
          $serviceImage = explode('$HARSH$', $data->serviceImage);
          @endphp
          @foreach($serviceHeading as $key=>$value)
          <div class="block-grid-item wow fadeInUp" data-wow-duration="300ms" data-wow-delay="300ms">

              @if(@$serviceImage[@$key])
                <span><img src="{{@$serviceImage[@$key]}}" style=" width: 75px; "></span>
                @else
                <span class="typcn typcn-chart-area-outline"></span>
                @endif
              <h3>{{@$value}}</h3>
              <p>{{@$servicesubHeading[@$key]}}</p>
          </div>
          @endforeach
          @endif
          <!-- END OF SERVICE 1 -->
        </div>
      </div>
    </div>
  </section>
  <!-- END OF SERVICES -->

  <section class="contact-form">
<div class="row">
<div class="col-sm-12">
 <h2>Ask Us About<span> {{@$data->heading}}</span></h2>
<hr class="small"/>
</div>
</div>
<div class="row">
<div class="col-sm-12">
 <div id="sendstatus"></div>

   <div id="contactform">
<form >
<div class="row">
<div class="col-sm-6">
            <p><label for="name">Name:*</label> <input type="text" class="form-control" name="name" id="name" tabindex="1" /></p>
            <p><label for="email">Email:*</label> <input type="text" class="form-control" name="email" id="email" tabindex="2" /></p>
            <p><label for="phone">Phone Number:*</label> <input type="text" class="form-control" name="phone" id="phone" tabindex="3" /></p>
</div>
<div class="col-sm-6">
            <p><label for="comments">Message:*</label> <textarea  class="form-control" name="comments" id="comments" tabindex="4"></textarea></p>
</div>
</div>
 <p><input name="submit" type="submit" id="submit" class="submit" value="Ask" tabindex="5" /></p>
</form>

</div>
</div>
</div>
</section>


  <section class="content">

<div class="row">

  <div class="col-md-6">
 {!!@$data->description2!!}
</div>

<div class="col-md-6">

<!-- ACCORDION CODE -->
         <h5>FAQ's</h5>

        <div id="accordion" class="style1 panel-group">

          @if($data->question)
          @php
          $question = explode('$HARSH$', $data->question);
          $answer = explode('$HARSH$', $data->answer);
          $i=0;
          @endphp
          @foreach($question as $key=>$value)

                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title"><i class="indicator fa fa-minus-square-o pull-left"></i><a data-toggle="collapse" data-parent="#accordion" href="#collapse{{@$i}}">{{@$value}}</a></h4>
                  </div>

                  <div id="collapse{{@$i}}" class="panel-collapse collapse">
                    <div class="panel-body">
                      <p>{{@$answer[@$key]}}</p>
                    </div>
                  </div>
                </div>
                @php
                  $i++;
                @endphp

            @endforeach
            @endif

              </div>
</div>

</div>
</section>


@endsection
@section('extern-js')
<script src="{{url('frontend_assets/custom_js/cart.js')}}"></script>
@endsection