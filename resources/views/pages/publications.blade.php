@extends('layouts.master')
@section('pre')
	@php
	$title = "Infrastructure & Activities";
	$menu_item = 'academics';
@endphp
@endsection
@section('content')
	<div class="section clearfix object-non-visible" data-animation-effect="fadeIn">
		<div class="container main-content-sub">
			@php
			$publications = App\Publication::all();
			$total = count($publications);
			@endphp
			@for ($i=0; $i < $total; $i++)
				<div class="section clearfix object-non-visible" data-animation-effect="fadeIn">
					<div class="row">
						{{--  <div class="col-md-6" {!!$i/2==0?'':'style="float:right"'!!}>
							<img src="{{$publications[$i]->getUrl()}}"/>
						</div>  --}}

						<div class="col-md-6" style="float:left">
							<div id="myCarousel" class="carousel slide">
								<div class="carousel-inner">
									<div class="active" data-slide-number="1">
										<img src="http://placehold.it/1200x600&amp;text=8" width="1200">
									</div>
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

						<div class="col-md-6">
							<h2 class="title"><span>{{$publications[$i]->name}}</span></h2>
							{{$publications[$i]->description}}
						</div>
					</div>
				
					<div class="space" style="margin-top:50px"></div>

					{{--  Menu  --}}

					<div class="col-md-12">
						<div class="card">
							<ul class="nav nav-tabs" role="tablist">
									<li role="presentation" class="active"><a href="#ptrn" aria-controls="home" role="tab" data-toggle="tab">Patron</a></li>
									<li role="presentation"><a href="#advcmtee" aria-controls="profile" role="tab" data-toggle="tab">Advisory committee</a></li>
									<li role="presentation"><a href="#editTeam" aria-controls="messages" role="tab" data-toggle="tab">Editorial Team</a></li>
									<li role="presentation"><a href="#gc" aria-controls="settings" role="tab" data-toggle="tab">Guidelines for Contribution</a></li>
									<li role="presentation"><a href="#cntctUs" aria-controls="profile" role="tab" data-toggle="tab">Contact Us</a></li>
									<li role="presentation"><a href="#dwnlds" aria-controls="profile" role="tab" data-toggle="tab">Downloads</a></li>
							</ul>

							<!-- Tab panes -->
							<div class="tab-content">
									<div role="tabpanel" class="tab-pane active" id="ptrn">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</div>
									<div role="tabpanel" class="tab-pane" id="advcmtee">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</div>
									<div role="tabpanel" class="tab-pane" id="editTeam">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</div>
									<div role="tabpanel" class="tab-pane" id="gc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passage..</div>
									<div role="tabpanel" class="tab-pane" id="cntctUs">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</div>
									<div role="tabpanel" class="tab-pane" id="dwnlds">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</div>
							</div>
						</div>
					</div>
				</div>
				<div class="space" style="margin-top:50px"></div>
			@endfor
		</div>
	</div>
@endsection
@section('post')
@endsection
