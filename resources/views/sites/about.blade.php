@extends('layouts.frontend')

@section('content')
<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url(&quot;{{asset('/frontend')}}/images//bg_2.jpg&quot;); height: 657px; background-position: 50% 0px;" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start" style="height: 657px;">
          <div class="col-md-9 ftco-animate pb-5 fadeInUp ftco-animated">
            <h1 class="mb-3 bread">About Us</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>About us <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-no-pt ftco-no-pb">
			<div class="container">
				<div class="row no-gutters">
					<div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url({{asset('/frontend')}}/images//about.jpg);">
					</div>
					<div class="col-md-7 wrap-about py-md-5 ftco-animate fadeInUp ftco-animated">
	          <div class="heading-section mb-5 pt-5 pl-md-5">
	          	<div class="pr-md-5 mr-md-5">
		            <h2 class="mb-4">What is all about us?</h2>
	            </div>

	            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
	            <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>
	            <p><a href="# " class="btn btn-primary">Join now</a></p>
	          </div>
					</div>
				</div>
			</div>
    </section>
    
    <section class="ftco-counter img" id="section-counter">
    	<div class="container">
    		<div class="row">
          <div class="col-md-3 justify-content-center counter-wrap ftco-animate fadeInUp ftco-animated">
            <div class="block-18 text-center py-4 bg-primary mb-4">
              <div class="text">
              	<div class="icon d-flex justify-content-center align-items-center">
              		<span class="flaticon-guest"></span>
              	</div>
                <strong class="number" data-number="30">30</strong>
                <span>Speakers</span>
              </div>
            </div>
          </div>
          <div class="col-md-3 justify-content-center counter-wrap ftco-animate fadeInUp ftco-animated">
            <div class="block-18 text-center py-4 bg-primary mb-4">
              <div class="text">
              	<div class="icon d-flex justify-content-center align-items-center">
              		<span class="flaticon-handshake"></span>
              	</div>
                <strong class="number" data-number="200">200</strong>
                <span>Sponsor</span>
              </div>
            </div>
          </div>
          <div class="col-md-3 justify-content-center counter-wrap ftco-animate fadeInUp ftco-animated">
            <div class="block-18 text-center py-4 bg-primary mb-4">
              <div class="text">
              	<div class="icon d-flex justify-content-center align-items-center">
              		<span class="flaticon-chair"></span>
              	</div>
                <strong class="number" data-number="2500">2,500</strong>
                <span>Total Seats</span>
              </div>
            </div>
          </div>
          <div class="col-md-3 justify-content-center counter-wrap ftco-animate fadeInUp ftco-animated">
            <div class="block-18 text-center py-4 bg-primary mb-4">
              <div class="text">
              	<div class="icon d-flex justify-content-center align-items-center">
              		<span class="flaticon-idea"></span>
              	</div>
                <strong class="number" data-number="40">40</strong>
                <span>Topics</span>
              </div>
            </div>
          </div>
        </div>
    	</div>
    </section>

@stop