@extends('layouts.master')
@section('pre')
  @php
  $title = "Admissions 2018";
  $menu_item = 'admissions';
@endphp
@endsection
@section('content')
  <div class="section clearfix object-non-visible" data-animation-effect="fadeIn">
    <div class="container main-content">
      <div class="row">
        <div class="col-md-12">
          <div id="myCarousel" class="carousel slide">
						<div class="carousel-inner">
            {{-- @foreach ($car->images as $id)
              @php
              $image = App\ImageUpload::where('id', $id)->first();
              if(!$image) continue;
              @endphp
              <div class="item {{$no==0?'active':''}}" data-slide-number="{{$no++}}">
                <img src="{{$image->getUrl()}}" width="1200">
              </div>
            @endforeach --}}
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
        </div>
      </div>
        <div class="space"></div>
        
      <div class="row">
				<div class="col-md-6">
					<h2 class="title"><span>Mock CET 2020</span></h2>
					<h4>Subtitle</h4>
					<form method="post" id="cet_form">
            {{ csrf_field() }}
            <div class="form-group">
              <div class="input-group" style="width:100%">
                  <label for="field1">field1</label>
                {{-- <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span> --}}
                <input id="field1" type="text" class="form-control" name="field1" placeholder="field1" value="">
              </div>
            </div>
            <div class="form-group">
              <div class="input-group" style="width:100%">
                  <label for="field1">field1</label>
                {{-- <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span> --}}
                <input id="field1" type="text" class="form-control" name="field1" placeholder="field1" value="">
              </div>
            </div>
            <div class="form-group">
              <button type="submit" name="button" class="btn btn-primary btn-wide btn-flat">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
@section('post')
@endsection
