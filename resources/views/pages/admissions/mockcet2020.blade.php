@extends('layouts.master')
@section('pre')
  @php
  $title = "Admissions 2020";
  $menu_item = 'admissions';
@endphp
@endsection
@section('content')
  <div class="section clearfix object-non-visible" data-animation-effect="fadeIn">
    <div class="container main-content">
      @if (isset($success))
        <div class="row">
          <div class="col-lg-12">
            <div style="background-color: #f7f7f7; padding: 15px; border-radius: 5px;">
              <p class="text-center">Thank you for your time kindly check your mail to verify and complete the Registration Process.</p>
            </div>
          </div>
        </div>
      @else
        <div class="row">
          <div class="col-md-12">
            @php
            $car = App\Carousel::where('type', 'mockcet2020')->first();
            if(!$car) goto carouselEnd;
            $no = 0;
            @endphp
            <div id="myCarousel" class="carousel slide">
              <div class="carousel-inner">
                @foreach ($car->images as $id)
                  @php
                  $image = App\ImageUpload::where('id', $id)->first();
                  if(!$image) continue;
                  @endphp
                  <div class="item {{$no==0?'active':''}}" data-slide-number="{{$no++}}">
                    <img src="{{$image->getUrl()}}" width="1200">
                  </div>
                @endforeach
              </div>
              <!-- Controls-->
              <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
            @php
            carouselEnd:
            @endphp
          </div>
        </div>
        <div class="space"></div>
        <div class="row">
          <div style="background-color: #f7f7f7; padding: 15px; border-radius: 5px;">
            <div class="container">
              <div class="col-md-12">
                <h3 class="text-center">Dear aspirant, Following are some useful courses you can do before you start your career in Engineering</h3>
                <ul class="list-unstyled">
                  <li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img" style="margin-top: 3px;"></i> <p class="list-text-ovrflw-fix">Swayam - <a class="ribbon-link" href="https://swayam.gov.in/">https://swayam.gov.in/</a></p></li>
                  <li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img" style="margin-top: 3px;"></i> <p class="list-text-ovrflw-fix">NPTEL - <a class="ribbon-link" href="https://onlinecourses.nptel.ac.in/">https://onlinecourses.nptel.ac.in/</a></p></li>
                  <li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img" style="margin-top: 3px;"></i> <p class="list-text-ovrflw-fix">Mooc - <a class="ribbon-link" href="http://mooc.org/">http://mooc.org/</a></p></li>
                  <li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img" style="margin-top: 3px;"></i> <p class="list-text-ovrflw-fix">Edx - <a class="ribbon-link" href="https://www.edx.org/">https://www.edx.org/</a></p></li>
                  <li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img" style="margin-top: 3px;"></i> <p class="list-text-ovrflw-fix">Coursera- <a class="ribbon-link" href="https://www.coursera.org/">https://www.coursera.org/</a></p></li>
                  <li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img" style="margin-top: 3px;"></i> <p class="list-text-ovrflw-fix">Udacity - <a class="ribbon-link" href="https://in.udacity.com/">https://in.udacity.com/</a></p></li>
                  <li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img" style="margin-top: 3px;"></i> <p class="list-text-ovrflw-fix">Udemy - <a class="ribbon-link" href="https://www.udemy.com/">https://www.udemy.com/</a></p></li>
                  <li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img" style="margin-top: 3px;"></i> <p class="list-text-ovrflw-fix">Khanacademy - <a class="ribbon-link" href="https://www.khanacademy.org/">https://www.khanacademy.org/</a></p></li>
                  <li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img" style="margin-top: 3px;"></i> <p class="list-text-ovrflw-fix">Skillsahre - <a class="ribbon-link" href="https://www.skillshare.com/">https://www.skillshare.com/</a></p></li>
                  <li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img" style="margin-top: 3px;"></i> <p class="list-text-ovrflw-fix">Harvard University - <a class="ribbon-link" href="https://online-learning.harvard.edu/">https://online-learning.harvard.edu/</a></p></li>
                  <li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img" style="margin-top: 3px;"></i> <p class="list-text-ovrflw-fix">Ted - <a class="ribbon-link" href="https://ed.ted.com/">https://ed.ted.com/</a></p></li>
                  <li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img" style="margin-top: 3px;"></i> <p class="list-text-ovrflw-fix">Alison - <a class="ribbon-link" href="https://alison.com/">https://alison.com/</a></p></li>
                  <li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img" style="margin-top: 3px;"></i> <p class="list-text-ovrflw-fix">Futurelearn - <a class="ribbon-link" href="https://www.futurelearn.com/">https://www.futurelearn.com/</a></p></li>
                  <li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img" style="margin-top: 3px;"></i> <p class="list-text-ovrflw-fix">Web Development - <a class="ribbon-link" href="https://digitaldefynd.com/best-free-web-development-courses-tutorials-certification/">https://digitaldefynd.com/best-free-web-development-courses-tutorials-certification/</a></p></li>
                  <li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img" style="margin-top: 3px;"></i> <p class="list-text-ovrflw-fix">Digital Marketing - <a class="ribbon-link" href="https://digitaldefynd.com/best-free-digital-marketing-certifications/">https://digitaldefynd.com/best-free-digital-marketing-certifications/</a></p></li>
                  <li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img" style="margin-top: 3px;"></i> <p class="list-text-ovrflw-fix">IOS app development - <a class="ribbon-link" href="https://digitaldefynd.com/best-ios-app-development-course-tutorial/">https://digitaldefynd.com/best-ios-app-development-course-tutorial/</a></p></li>
                  <li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img" style="margin-top: 3px;"></i> <p class="list-text-ovrflw-fix">Open Learn - <a class="ribbon-link" href="http://www.open.edu/openlearn/">http://www.open.edu/openlearn/</a></p></li>
                  <li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img" style="margin-top: 3px;"></i> <p class="list-text-ovrflw-fix">Tuts Plus - <a class="ribbon-link" href="https://tutsplus.com/">https://tutsplus.com/</a></p></li>
                  <li><i class="fa fa-caret-right pr-10 text-colored list-dept-page-uorder-img" style="margin-top: 3px;"></i> <p class="list-text-ovrflw-fix">Open Culture - <a class="ribbon-link" href="http://www.openculture.com">http://www.openculture.com</a></p></li>
                </ul>
              </div>
              <h1 id="ribbon-title" class="title text-center"><span style="font-weight: 100;">Stay home, Stay safe!</span></h1>
            </div>
          </div>
        </div>
        <div class="space"></div>
        <div class="row">
          <div class="col-md-6">
            <h2 class="title"><span>Mock CET 2020</span></h2>
            <h4>Enter name and email to get the link for Mock CET 2020</h4>
            <form method="post" id="cet_form">
              @if ($errors->any())
                <div class="alert alert-danger">
                  <ul>
                    @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                    @endforeach
                  </ul>
                </div>
              @endif
              {{ csrf_field() }}
              <div class="form-group">
                <div class="input-group" style="width:100%">
                  <label for="name">Name</label>
                  <input id="name" type="text" class="form-control" name="name" placeholder="Enter your name" required>
                </div>
              </div>
              <div class="form-group">
                <div class="input-group" style="width:100%">
                  <label for="email">Email</label>
                  <input id="email" type="email" class="form-control" name="email" placeholder="Enter your email" required>
                </div>
              </div>
              <div class="form-group">
                <button type="submit" name="button" class="btn btn-primary btn-wide btn-flat">Get Link</button>
              </div>
            </form>
          </div>
          <div class="col-md-6">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/u5uc69ZEwF4?controls=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>
        <div class="space"></div>
        <div style="background-color: #f7f7f7; padding: 15px; border-radius: 5px;">
          <div class="container">
            <div class="col-md-12">
              <h3 class="text-center">Get more info about CET </br><a class="ribbon-link" href="http://cetcell.mahacet.org">Government of Maharashtra CET Cell Link</a></h3>
              {{-- <h3 class="text-center">Interested in test series? <a class="ribbon-link" href="">Click here!</a></h3> --}}
            </div>
          </div>
        </div>
      @endif
    </div>
  </div>
@endsection
@section('post')
@endsection
