@extends('layouts.frontend')

@section('content')
<section class="contacts-area section-gap">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-lg-5 col-md-6 about-left">
          <img class="img-fluid" src="{{asset('/frontend')}}/img/about-img.png" alt="">
        </div>
        <div class="offset-lg-1 col-lg-5 col-md-12 about-right">
          <h1>
            Silahkan<br>
            Hubungi Kami<br>
           
          </h1>
          <div>
            <p>
                <li>Email : pantaw@gmail.com</li>
                <li>Telepon: 08123456778</li>
           
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

@stop