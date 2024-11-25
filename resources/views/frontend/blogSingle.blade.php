@extends('frontend.layout')
@section('extern-css')

 
@endsection
@section('content')
 <!-- PAGE HEADER -->
    <div id="page-header" class="blog-single">
   <div class="title-breadcrumbs">
   <h1>News Detail</h1>
   <div class="thebreadcumb">
    <ul class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li class="active">News Detail</li>
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
                <article>
                 <div class="shadow-effect">
                    <img src="{{@$blog->image}}" alt="" />
                    <div class="post-content">
                    <div class="themeta">
                        <span>{{date('d M Y', strtotime(@$blog->created_at))}}</span>
                        <span>Posted in <a href="#">{{@$blog->cat}}</a></span>
                        </div>

                        <h2><a href="#">{{@$blog->name}}</a></h2>

                        <hr/>
                        {!!@$blog->description!!}
                      

                    </div>
                    {{-- <div>
                                                <ul class="social-box">
                                                    @foreach($share as $key=>$value)
                                                    <li class="{{$key}}"><span><a href="{{$value}}" target="_blank"><i class="fa fa-{{$key}}"></i></a></span></li>
                                                    @endforeach
                                                    
                                                </ul>
                                            </div> --}}
                     </div>
                <!-- End of Blog Post-->

<!-- AUTHOR BOX -->
{{-- <div class="author-wrap">
<div class="row">
<div class="col-sm-2">
<div class="author-gravatar"><img src="{{asset('')}}frontend_assets/images/testimonial1.jpg" alt=""/></div>
</div>
<div class="col-sm-10">
<div class="author-info">
<div class="author author-title"><h6>audemedia</h6></div>
<div class="author-description"><p>Focus on impact cornerstone raise awareness non-partisan long-term progress. Medicine human-centered design visionary meaningful asylum accessibility action elevate resourceful. Disruption vulnerable population.</p></div>
</div>
</div>
</div>
</div> --}}
<!-- END OF AUTHOR BOX -->

<!-- Comments -->
{{-- <div class="shadow-effect">
<div class="comments">
<div id="thecomments">
<h2 class="badge">1 Comment</h2>
<ol class="commentlist">

<li class="comment">
<div class="comment-body">
<div class="comment-author vcard">
<img class="avatar" src="{{asset('')}}frontend_assets/images/testimonial2.jpg" alt="">
<h6><a class="url" rel="external nofollow" href="#">Quaron Whitherspoon</a></h6>
<div class="comment-time"><a href="#">January 9, 2015 - 04:21:11</a></div>
</div>
<div class="comment-meta commentmetadata">
<p>Focus on impact cornerstone raise awareness non-partisan long-term progress. Medicine human-centered design visionary meaningful asylum accessibility action elevate resourceful. Disruption vulnerable population. Focus on impact cornerstone raise awareness non-partisan long-term progress. Medicine human-centered design visionary meaningful asylum accessibility action elevate resourceful. Disruption vulnerable population.</p>
<div class="reply">
<a class="comment-reply-link" href="#">Reply</a>
</div>
</div>
</div>
</li>
</ol>
</div>
    </div>

    <div id="addcomments">
    <div id="respond" class="comment-respond">
    <h2 class="badge">Leave a Reply</h2>
    <form action="#" method="post" id="commentform" class="comment-form">
    <p class="comment-notes"><span id="email-notes">Your email address will not be published.</span> Required fields are marked <span class="required">*</span></p>
    <p class="comment-form-author"><label for="author">Name <span class="required">*</span></label> <input id="author" class="form-control" name="author" type="text" value="" size="30"/></p>
    <p class="comment-form-email"><label for="email">Email<span class="required">*</span></label> <input id="email" class="form-control" name="email" type="email" value="" size="30"/></p>
    <p class="comment-form-url"><label for="url">Website</label> <input id="url" class="form-control" name="url" type="url" value="" size="30" /></p>
    <p class="comment-form-comment"><label for="comment">Comment</label> <textarea id="comment" class="form-control" name="comment" cols="45" rows="8"></textarea></p>
    <p class="form-submit"><input name="submit" type="submit" id="submit" class="submit" value="Post Comment" /></p>
    </form>
    </div><!-- #respond -->
    </div>
    </div> --}}
                </article>

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