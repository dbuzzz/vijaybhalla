@extends('frontend.layout')
@section('extern-css')

 
@endsection
@section('content')
 <!-- PAGE HEADER -->
    <div id="page-header">
   <div class="title-breadcrumbs">
   <h1>Latest Financial News</h1>
   <div class="thebreadcumb">
    <ul class="breadcrumb">
        <li class="active">Latest Financial News</li>
    </ul>
   </div>
   </div>

    </div>
    <!-- END OF PAGE HEADER -->
  </div>

<section class="content blog">
<div class="row">

<div class="col-sm-12">

 <!-- Blog Post-->
            @if(count($blog)!=0)
            @foreach($blog as $key=>$value)
                <article>
                 <div class="shadow-effect">
                    <img src="{{$value->image}}" alt="" />
                    <div class="post-content">
                    <div class="themeta">
                        <span>{{date('d M Y', strtotime($value->created_at))}}</span>
                        <span>Posted in <a href="#">{{$value->cat}}</a></span>
                        </div>

                        <h2><a href="{{route('blog-single',['id'=>$value->id])}}">{{$value->name}}</a></h2>

                        <hr/>
                        <p>{!!substr($value->description, 0,200)!!} ...</p>

                        <a class="button" href="{{route('blog-single',['id'=>$value->id])}}">Continue reading →</a>
                    </div>
                     </div>
                </article>
            @endforeach
            @endif
               
                <!-- End of Blog Post-->

                {{-- <nav>
                    <ul class="pagination">
                        <li>
                            <a href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li><a href="#">1</a>
                        </li>
                        <li><a href="#">2</a>
                        </li>
                        <li><a href="#">3</a>
                        </li>
                        <li><a href="#">4</a>
                        </li>
                        <li><a href="#">5</a>
                        </li>
                        <li>
                            <a href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav> --}}
</div>

{{-- <div class="col-sm-3">
<div class="sidebar">

<div class="widget">
<h5 class="title">TEXT BLOCK</h5>
<p>Phosfluorescently expedite impactful supply chains via focused results. Holistically generate open-source applications through bleeding-edge sources.</p>
</div>

<div class="widget">
<h5 class="title">CATEGORIES</h5>
<ul>
<li><a href="#">FINANCIAL</a> <span class="badge">6</span></li>
<li><a href="#">VALUATION</a> <span class="badge">2</span></li>
<li><a href="#">CONSULTING</a> <span class="badge">13</span></li>
<li><a href="#">ACCOUNTING</a> <span class="badge">3</span></li>
<li><a href="#">SERVICES</a> <span class="badge">3</span></li>
<li><a href="#">BUDGET</a> <span class="badge">10</span></li>
</ul>
</div>

<div class="widget">
<h5 class="title">TAGS</h5>
<div class="tagcloud"><a href="#">market-driven</a>
                            <a href="#">innovation</a>
                            <a href="#">open-source</a>
                            <a href="#">high-payoff</a>
                            <a href="#">client-centric</a>
                            <a href="#">applications</a>
                            <a href="#">capital</a>
                            <a href="#">solutions</a>
                            <a href="#">process</a>
                            <a href="#">premium quality</a>
                            <a href="#">enterprise</a>
                            <a href="#">e-business</a>
                            <a href="#">collaboration</a>
                        </div>
</div>

</div>
</div> --}}

</div>
</section>



@endsection
@section('extern-js')
<script src="{{url('frontend_assets/custom_js/cart.js')}}"></script>

@endsection