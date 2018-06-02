@extends('layouts.master')
@section('pre')
	@php
	$title = "Print student Application";
	$menu_item = 'admissions';
	$nonav = true;
@endphp
@endsection
@section('content')
	<link rel="stylesheet" href="/css/gridforms.css">
	<script src="/js/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.21.0/moment-with-locales.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
	<div class="clearfix object-non-visible" data-animation-effect="fadeIn" style="width: 1000px;">
		<div class="container">
			@php
			$data = json_decode($admission->data);
			@endphp
			<h1 class="title text-center">Student Application Form To First/Second Year Degree Course In Engineering</h1>
			@if (isset($errors) && count($errors) > 0)
				<div class="alert alert-danger">
					<ul>
						@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
			@endif
			{{--  <h2>Sample text lol</h2>  --}}
			<form id="form-admission" method="post" class="grid-form" enctype="multipart/form-data">
				{{ csrf_field() }}
				<fieldset>
					<legend>Photograph</legend>
					<div data-row-span="4">
						<div data-field-span="1">
							<img src="{{$admission->getImage()}}" alt="">
						</div>
					</div>
				</fieldset>

				<legend>Branch Preference</legend>
				<div data-row-span="3">
					<div data-field-span="1">
						<label>Preference 1</label>
						<p>{{$data->pre1}}</p>
					</div>

					<div data-field-span="1">
						<label>Preference 2</label>
						<p>{{$data->pre2}}</p>
					</div>

					<div data-field-span="1">
						<label>Preference 3</label>
						<p>{{$data->pre3}}</p>
					</div>
					{{--  <label>Branch Preference</label>
					<input type="text" autofocus="">  --}}
				</div>
			</fieldset>

			<br>

			<fieldset>
				<legend>Personal Information</legend>
				<div data-row-span="9">
					{{--  <div data-field-span="1" style="height: 55px;">
					<label>Title</label>
					<input id="r1" name="customer-title" type="radio"><label for="r1"> Mr.</label>
					<input id="r2" name="customer-title" type="radio"><label for="r2"> Mrs.</label>
					<input id="r3" name="customer-title" type="radio"><label for="r3"> Ms.</label>
				</div>  --}}
				<div data-field-span="1" style="height: 55px;">
					<h2 style="font-size: 22px;bottom: 0px;" class="form-center-relative">Full Name</h2>
				</div>
				<div data-field-span="2" style="height: 55px;">
					<label>Surname</label>
					<p style="text-transform: uppercase;">{{$data->surname}}</p>
				</div>
				<div data-field-span="2" style="height: 55px;">
					<label>First Name</label>
					<p style="text-transform: uppercase;">{{$data->firstname}}</p>
				</div>
				<div data-field-span="2" style="height: 55px;">
					<label>Father's/Husband's Name</label>
					<p style="text-transform: uppercase;">{{$data->fathername}}</p>
				</div>
				<div data-field-span="2" style="height: 55px;">
					<label>Mother's Name</label>
					<p style="text-transform: uppercase;">{{$data->mothername}}</p>
				</div>
			</div>

			<div data-row-span="3">
				<div data-field-span="1" style="height: 60px;">
					<label>Date of birth</label>
					<input type="text" placeholder="DD/MM/YYYY" name="dob" value="{{$data->dob}}">
				</div>
				<div data-field-span="1" style="height: 60px;" class="">
					<label>Blood Group</label>
					<p>{{$data->blood}}</p>
				</div>
				<div data-field-span="1" style="height: 60px;" class="">
					<label>Nationality</label>
					<p>{{$data->nationality}}</p>
				</div>
			</div>

			<div data-row-span="3">
				<div data-field-span="1" style="height: 60px;">
					<label>Caste</label>
					<p>{{$data->caste}}</p>
				</div>
				<div data-field-span="1" style="height: 60px;">
					<label>Sex</label>
					<p>{{$data->sex}}</p>
				</div>
				<div data-field-span="1" style="height: 60px;">
					<label>Category</label>
					<p>{{$data->category}}</p>
				</div>
			</div>
		</fieldset>

		<br>

		<fieldset>
			<legend>Address for Correspondence</legend>
			<div data-row-span="2">
				<div data-field-span="1" style="height: 55px;">
					<label>Flat no. and bldg. name</label>
					<p>{{$data->caddress}}</p>
				</div>
				<div data-field-span="1" style="height: 55px;">
					<label>Road no./name</label>
					<p>{{$data->croad}}</p>
				</div>
			</div>
			<div data-row-span="4">
				<div data-field-span="3" style="height: 55px;">
					<label>Area and landmark</label>
					<p>{{$data->carea}}</p>
				</div>
				<div data-field-span="1" style="height: 55px;">
					<label>City</label>
					<p>{{$data->ccity}}</p>
				</div>
			</div>
			<div data-row-span="4">
				<div data-field-span="1" style="height: 55px;">
					<label>Telephone Residence</label>
					<p>{{$data->ctelephone}}</p>
				</div>
				<div data-field-span="1" style="height: 55px;">
					<label>Phone Number</label>
					<p>{{$data->cphone}}</p>
				</div>
				<div data-field-span="1" style="height: 55px;">
					<label>Parent's Phone Number</label>
					<p>{{$data->cparent}}</p>
				</div>
				<div data-field-span="1" style="height: 55px;">
					<label>Pin code</label>
					<p>{{$data->cpin}}</p>
				</div>
			</div>
		</fieldset>

		<br>

		<fieldset>
			<legend>Permanent Address</legend>
			<div data-row-span="2">
				<div data-field-span="1" style="height: 55px;">
					<label>Flat no. and bldg. name</label>
					<p>{{$data->pflat}}</p>
				</div>
				<div data-field-span="1" style="height: 55px;">
					<label>Road no./name</label>
					<p>{{$data->proad}}</p>
				</div>
			</div>
			<div data-row-span="4">
				<div data-field-span="3" style="height: 55px;">
					<label>Area and landmark</label>
					<p>{{$data->parea}}</p>
				</div>
				<div data-field-span="1" style="height: 55px;">
					<label>City</label>
					<p>{{$data->pcity}}</p>
				</div>
			</div>
			<div data-row-span="3">
				<div data-field-span="1" style="height: 55px;">
					<label>Telephone Residence</label>
					<p>{{$data->ptel}}</p>
				</div>
				<div data-field-span="1" style="height: 55px;">
					<label>Phone Number</label>
					<p>{{$data->pphone}}</p>
				</div>
				<div data-field-span="1" style="height: 55px;">
					<label>Pin code</label>
					<p>{{$data->ppin}}</p>
				</div>
			</div>
		</fieldset>

		<br>

		<fieldset>
			<legend>Parent's Information</legend>
			<div data-row-span="1">
				<div data-field-span="1" style="height: 55px;">
					<label>Office Address</label>
					<p>{{$data->parentOffice}}</p>
				</div>
			</div>
			<div data-row-span="2">
				<div data-field-span="1" style="height: 55px;">
					<label>Father's Occupation</label>
					<p>{{$data->parentOccupation}}</p>
				</div>
				<div data-field-span="1" style="height: 55px;">
					<label>Annual Income</label>
					<p>{{$data->parentIncome}}</p>
				</div>
			</div>
			<div data-row-span="3">
				<div data-field-span="1" style="height: 55px;">
					<label>Office Telephone</label>
					<p>{{$data->parentOfficeNo1}}</p>
				</div>
				<div data-field-span="1" style="height: 55px;">
					<label>Phone Number</label>
					<p>{{$data->parentOfficeNo2}}</p>
				</div>
				<div data-field-span="1" style="height: 55px;">
					<label>Pin code</label>
					<p>{{$data->parentOfficePin}}</p>
				</div>
			</div>
		</fieldset>

		<br><br>

		<fieldset>
			<legend>Details of HSC/CET Examination</legend>
			<div data-row-span="5">
				<div data-field-span="1" style="height: 55px;">
					<h2 class="form-center-relative" style="bottom:0px">Physics</h2>
				</div>
				<div data-field-span="1" style="height: 55px;">
					<label>Marks Obtained (HSC)*</label>
					<p>{{$data->hscPhysics}}</p>
				</div>
				<div data-field-span="1" style="height: 55px;">
					<label>Maximum Marks (HSC)*</label>
					<p>{{$data->hscPhysicsMax}}</p>
				</div>
				<div data-field-span="1" style="height: 55px;">
					<label>Marks Obtained(CET)*</label>
					<p>{{$data->cetPhysics}}</p>
				</div>
				<div data-field-span="1" style="height: 55px;">
					<label>Maximum Marks(CET)*</label>
					<p>{{$data->cetPhysicsMax}}</p>
				</div>
			</div>
			<div data-row-span="5">
				<div data-field-span="1" style="height: 55px;">
					<h2 class="form-center-relative" style="bottom:0px">Mathematics</h2>
				</div>
				<div data-field-span="1" style="height: 55px;">
					<label>Marks Obtained (HSC)*</label>
					<p>{{$data->hscMaths}}</p>
				</div>
				<div data-field-span="1" style="height: 55px;">
					<label>Maximum Marks (HSC)*</label>
					<p>{{$data->hscMathsMax}}</p>
				</div>
				<div data-field-span="1" style="height: 55px;">
					<label>Marks Obtained(CET)*</label>
					<p>{{$data->cetMaths}}</p>
				</div>
				<div data-field-span="1" style="height: 55px;">
					<label>Maximum Marks(CET)*</label>
					<p>{{$data->cetMathsMax}}</p>
				</div>
			</div>
			<div data-row-span="5">
				<div data-field-span="1" style="height: 55px;">
					<h2 class="form-center-relative" style="font-size: 2.1rem;bottom:0px;">Chem/Bio/BioTech/
						Tech.voc.</h2>
					</div>
					<div data-field-span="1" style="height: 55px;">
						<label>Marks Obtained (HSC)*</label>
						<p>{{$data->hscChem}}</p>
					</div>
					<div data-field-span="1" style="height: 55px;">
						<label>Maximum Marks (HSC)*</label>
						<p>{{$data->hscChemMax}}</p>
					</div>
					<div data-field-span="1" style="height: 55px;">
						<label>Marks Obtained(CET)*</label>
						<p>{{$data->cetChem}}</p>
					</div>
					<div data-field-span="1" style="height: 55px;">
						<label>Maximum Marks(CET)*</label>
						<p>{{$data->cetChemMax}}</p>
					</div>
				</div>
			</fieldset>

			<br><br>

			<fieldset>
				<legend>Marks Obtained in Various Exams</legend>
				<div data-row-span="5">
					<div data-field-span="2" style="height: 55px;">
						<label>Diploma Branch</label>
						<p>{{$data->diploma2Branch}}</p>
					</div>
					<div data-field-span="1" style="height: 55px;">
						<label>Diploma Marks</label>
						<p>{{$data->diploma2Marks}}</p>
					</div>
					<div data-field-span="1" style="height: 55px;">
						<label>Out of</label>
						<p>{{$data->diploma2Max}}</p>
					</div>
					<div data-field-span="1" style="height: 55px;">
						<label>Percentage</label>
						<p>{{$data->diploma2Percent}}</p>
					</div>
				</div>
				<div data-row-span="5">
					<div data-field-span="1" style="height: 55px;">
						<h2 class="form-center-relative" style="bottom:0px">SSC</h2>
					</div>
					<div data-field-span="1" style="height: 55px;">
						<label>Year of Passing</label>
						<p>{{$data->sscYear}}</p>
					</div>
					<div data-field-span="1" style="height: 55px;">
						<label>Board</label>
						<p>{{$data->sscBoard}}</p>
					</div>
					<div data-field-span="1" style="height: 55px;">
						<label>Marks Obtained</label>
						<p>{{$data->sscMarks}}</p>
					</div>
					<div data-field-span="1" style="height: 55px;">
						<label>Total Marks</label>
						<p>{{$data->sscMax}}</p>
					</div>
				</div>
				<div data-row-span="5">
					<div data-field-span="1" style="height: 55px;">
						<h2 class="form-center-relative" style="bottom:0px">HSC</h2>
					</div>
					<div data-field-span="1" style="height: 55px;">
						<label>Year of Passing</label>
						<p>{{$data->hscYear}}</p>
					</div>
					<div data-field-span="1" style="height: 55px;">
						<label>Board</label>
						<p>{{$data->hscBoard}}</p>
					</div>
					<div data-field-span="1" style="height: 55px;">
						<label>Marks Obtained</label>
						<p>{{$data->hscMarks}}</p>
					</div>
					<div data-field-span="1" style="height: 55px;">
						<label>Total Marks</label>
						<p>{{$data->hscMax}}</p>
					</div>
				</div>
				<div data-row-span="5">
					<div data-field-span="1" style="height: 55px;">
						<h2 class="form-center-relative" style="bottom:0px">Diploma</h2>
					</div>
					<div data-field-span="1" style="height: 55px;">
						<label>Year of Passing</label>
						<p>{{$data->diplomaYear}}</p>
					</div>
					<div data-field-span="1" style="height: 55px;">
						<label>Board</label>
						<p>{{$data->diplomaBoard}}</p>
					</div>
					<div data-field-span="1" style="height: 55px;">
						<label>Marks Obtained</label>
						<p>{{$data->diplomaMarks}}</p>
					</div>
					<div data-field-span="1" style="height: 55px;">
						<label>Total Marks</label>
						<p>{{$data->diplomaMax}}</p>
					</div>
				</div>
			</fieldset>

			<br><br>
		</div>
	</div>
@endsection
@section('post')
<script type="text/javascript">
$(function() {
	setTimeout(function () {
		window.print();
	}, 1000);
});
</script>
@endsection
