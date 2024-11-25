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
        <li class="active">Team</li>
    </ul>
   </div>
   </div>

    </div>
    <!-- END OF PAGE HEADER -->
  </div>

  <section class="services2">
    <div class="row">
      <div class="col-md-3">
        <div class="image-padding-shadow"><img src="{{@$data->image}}" alt=""/></div>
      </div>
      <div class="col-md-9">
        <h2 class="text-left"><span>{{@$data->name}}</span></h2>
        <h5>{{@$data->education}}</h5>
        {!!@$data->description!!}

      </div>

       
      </div>
  </section>


@endsection
@section('extern-js')
<script src="{{url('frontend_assets/custom_js/cart.js')}}"></script>
@endsection