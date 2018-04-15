@extends('layouts.master')
@section('pre')
	@php
	$admission = App\Admission::where('userid', Auth::user()->id)->first();
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
if($admission) {
	$data = json_decode($admission->data);
}else {
	$data = json_decode('{"pre1":"Computer Engineering","pre2":"Computer Engineering","pre3":"Computer Engineering","surname":null,"firstname":null,"fathername":null,"mothername":null,"dob":null,"blood":"A+","nationality":"India","caste":null,"sex":"Male","category":"Open","caddress":null,"croad":null,"carea":null,"ccity":null,"ctelephone":null,"cphone":null,"cparent":null,"cpin":null,"pflat":null,"proad":null,"parea":null,"pcity":null,"ptel":null,"pphone":null,"ppin":null,"parentOffice":null,"parentOccupation":null,"parentIncome":null,"parentOfficeNo1":null,"parentOfficeNo2":null,"parentOfficePin":null,"hscPhysics":null,"hscPhysicsMax":null,"cetPhysics":null,"cetPhysicsMax":null,"hscMaths":null,"hscMathsMax":null,"cetMaths":null,"cetMathsMax":null,"hscChem":null,"hscChemMax":null,"cetChem":null,"cetChemMax":null,"diploma2Branch":null,"diploma2Marks":null,"diploma2Max":null,"diploma2Percent":null,"sscYear":null,"sscBoard":null,"sscMarks":null,"sscMax":null,"hscYear":null,"hscBoard":null,"hscMarks":null,"hscMax":null,"diplomaYear":null,"diplomaBoard":null,"diplomaMarks":null,"diplomaMax":null}');
}
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
						<img src="http://via.placeholder.com/500x500" alt="">
					</div>
				</div>
			</fieldset>

				<legend>Branch Preference</legend>
				<div data-row-span="3">
					<div data-field-span="1">
						<label>Preference 1</label>
							<p>Computer Engineering</p>
					</div>

					<div data-field-span="1">
						<label>Preference 2</label>
							<p>Computer Engineering</p>
					</div>

					<div data-field-span="1">
						<label>Preference 3</label>
							<p>Computer Engineering</p>
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
						<input style="text-transform: uppercase;" type="text" name="surname" value="{{$data->surname}}">
					</div>
					<div data-field-span="2" style="height: 55px;">
						<label>First Name</label>
						<input style="text-transform: uppercase;" type="text" name="firstname" value="{{$data->firstname}}">
					</div>
					<div data-field-span="2" style="height: 55px;">
						<label>Father's/Husband's Name</label>
						<input style="text-transform: uppercase;" type="text" name="fathername" value="{{$data->fathername}}">
					</div>
					<div data-field-span="2" style="height: 55px;">
						<label>Mother's Name</label>
						<input style="text-transform: uppercase;" type="text" name="mothername" value="{{$data->surname}}">
					</div>
				</div>

				<div data-row-span="3">
					<div data-field-span="1" style="height: 60px;">
						<label>Date of birth</label>
						<input type="text" placeholder="DD/MM/YYYY" name="dob" value="{{$data->dob}}">
					</div>
					<div data-field-span="1" style="height: 60px;" class="">
						<label>Blood Group</label>
						<select name="blood">
							@php
								$bloodGroups = ["A+", "A-", "B+", "B-", "O+", "O-", "AB+", "AB-"];
							@endphp
							@foreach ($bloodGroups as $key)
								<option value="{{$key}}" title="{{$key}}" {{$data->blood == $key?"selected":""}}>{{$key}}</option>
							@endforeach
						</select>
					</div>
					<div data-field-span="1" style="height: 60px;" class="">
						<label>Nationality</label>
						<select name="nationality">
							@php
							$countries = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");
							@endphp
							@foreach ($countries as $key)
								<option value="{{$key}}" title="{{$key}}" {{$data->nationality==$key?"selected":""}}>{{$key}}</option>
							@endforeach
						</select>
					</div>
				</div>

				<div data-row-span="3">
					{{--  <div data-field-span="2" data-field-error="Please enter a valid email address" style="height: 55px;">
						<label>E-mail</label>
						<input type="text">
					</div>  --}}
					<div data-field-span="1" style="height: 60px;">
						<label>Caste</label>
						<input type="text" name="caste" value="{{$data->caste}}">
					</div>
					<div data-field-span="1" style="height: 60px;">
						<label>Sex</label>
						<select name="sex">
							@php
								$sexs = ["Male", "Female", "Other", "Prefer not to say"];
							@endphp
							@foreach ($sexs as $key)
								<option value="{{$key}}" title="{{$key}}" {{$data->sex==$key?"selected":""}}>{{$key}}</option>
							@endforeach
						</select>
					</div>
					<div data-field-span="1" style="height: 60px;">
						<label>Category</label>
						<select name="category">
							@php
								$categories = ["Open", "SV", "OBC"];
							@endphp
							@foreach ($categories as $key)
								<option value="{{$key}}" title="{{$key}}" {{$data->category==$key?"selected":""}}>{{$key}}</option>
							@endforeach
						</select>
					</div>
				</div>
			</fieldset>

			<br>

			<fieldset>
				<legend>Address for Correspondence</legend>
				<div data-row-span="2">
					<div data-field-span="1" style="height: 55px;">
						<label>Flat no. and bldg. name</label>
						<p>TEST</p>
					</div>
					<div data-field-span="1" style="height: 55px;">
						<label>Road no./name</label>
						<p>TEST</p>
					</div>
				</div>
				<div data-row-span="4">
					<div data-field-span="3" style="height: 55px;">
						<label>Area and landmark</label>
						<p>TEST</p>
					</div>
					<div data-field-span="1" style="height: 55px;">
						<label>City</label>
						<p>TEST</p>
					</div>
				</div>
				<div data-row-span="4">
					<div data-field-span="1" style="height: 55px;">
						<label>Telephone Residence</label>
						<p>TEST</p>
					</div>
					<div data-field-span="1" style="height: 55px;">
						<label>Phone Number</label>
						<p>232323</p>
					</div>
					<div data-field-span="1" style="height: 55px;">
						<label>Parent's Phone Number</label>
						<p>232323</p>
					</div>
					<div data-field-span="1" style="height: 55px;">
						<label>Pin code</label>
						<p>232323</p>
					</div>
				</div>
			</fieldset>

			<br>

			<fieldset>
				<legend>Permanent Address</legend>
				<div data-row-span="2">
					<div data-field-span="1" style="height: 55px;">
						<label>Flat no. and bldg. name</label>
						<p>TEST</p>
					</div>
					<div data-field-span="1" style="height: 55px;">
						<label>Road no./name</label>
						<p>TEST</p>
					</div>
				</div>
				<div data-row-span="4">
					<div data-field-span="3" style="height: 55px;">
						<label>Area and landmark</label>
						<p>TEST</p>
					</div>
					<div data-field-span="1" style="height: 55px;">
						<label>City</label>
						<p>TEST</p>
					</div>
				</div>
				<div data-row-span="3">
					<div data-field-span="1" style="height: 55px;">
						<label>Telephone Residence</label>
						<p>232323</p>
					</div>
					<div data-field-span="1" style="height: 55px;">
						<label>Phone Number</label>
						<p>232323</p>
					</div>
					<div data-field-span="1" style="height: 55px;">
						<label>Pin code</label>
						<p>232323</p>
					</div>
				</div>
			</fieldset>

			<br>

			<fieldset>
				<legend>Parent's Information</legend>
				<div data-row-span="1">
					<div data-field-span="1" style="height: 55px;">
						<label>Office Address</label>
						<p>TEST</p>
					</div>
				</div>
				<div data-row-span="2">
					<div data-field-span="1" style="height: 55px;">
						<label>Father's Occupation</label>
						<p>TEST</p>
					</div>
					<div data-field-span="1" style="height: 55px;">
						<label>Annual Income</label>
						<p>232323</p>
					</div>
				</div>
				<div data-row-span="3">
					<div data-field-span="1" style="height: 55px;">
						<label>Office Telephone</label>
						<p>232323</p>
					</div>
					<div data-field-span="1" style="height: 55px;">
						<label>Phone Number</label>
						<p>232323</p>
					</div>
					<div data-field-span="1" style="height: 55px;">
						<label>Pin code</label>
						<p>232323</p>
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
						<p>232323</p>
					</div>
					<div data-field-span="1" style="height: 55px;">
						<label>Maximum Marks (HSC)*</label>
						<p>232323</p>
					</div>
					<div data-field-span="1" style="height: 55px;">
						<label>Marks Obtained(CET)*</label>
						<p>232323</p>
					</div>
					<div data-field-span="1" style="height: 55px;">
						<label>Maximum Marks(CET)*</label>
						<p>232323</p>
					</div>
				</div>
				<div data-row-span="5">
					<div data-field-span="1" style="height: 55px;">
						<h2 class="form-center-relative" style="bottom:0px">Mathematics</h2>
					</div>
					<div data-field-span="1" style="height: 55px;">
						<label>Marks Obtained (HSC)*</label>
						<p>232323</p>
					</div>
					<div data-field-span="1" style="height: 55px;">
						<label>Maximum Marks (HSC)*</label>
						<p>232323</p>
					</div>
					<div data-field-span="1" style="height: 55px;">
						<label>Marks Obtained(CET)*</label>
						<p>232323</p>
					</div>
					<div data-field-span="1" style="height: 55px;">
						<label>Maximum Marks(CET)*</label>
						<p>232323</p>
					</div>
				</div>
				<div data-row-span="5">
					<div data-field-span="1" style="height: 55px;">
						<h2 class="form-center-relative" style="font-size: 2.1rem;bottom:0px;">Chem/Bio/BioTech/
							Tech.voc.</h2>
					</div>
					<div data-field-span="1" style="height: 55px;">
						<label>Marks Obtained (HSC)*</label>
						<p>232323</p>
					</div>
					<div data-field-span="1" style="height: 55px;">
						<label>Maximum Marks (HSC)*</label>
						<p>232323</p>
					</div>
					<div data-field-span="1" style="height: 55px;">
						<label>Marks Obtained(CET)*</label>
						<p>232323</p>
					</div>
					<div data-field-span="1" style="height: 55px;">
						<label>Maximum Marks(CET)*</label>
						<p>232323</p>
					</div>
				</div>
			</fieldset>

			<br><br>

			<fieldset>
				<legend>Marks Obtained in Various Exams</legend>
				<div data-row-span="5">
					<div data-field-span="2" style="height: 55px;">
						<label>Diploma Branch</label>
						<p>TEST</p>
					</div>
					<div data-field-span="1" style="height: 55px;">
						<label>Diploma Marks</label>
						<p>232323</p>
					</div>
					<div data-field-span="1" style="height: 55px;">
						<label>Out of</label>
						<p>232323</p>
					</div>
					<div data-field-span="1" style="height: 55px;">
						<label>Percentage</label>
						<p>232323</p>
					</div>
				</div>
				<div data-row-span="5">
					<div data-field-span="1" style="height: 55px;">
						<h2 class="form-center-relative" style="bottom:0px">SSC</h2>
					</div>
					<div data-field-span="1" style="height: 55px;">
						<label>Year of Passing</label>
						<p>232323</p>
					</div>
					<div data-field-span="1" style="height: 55px;">
						<label>Board</label>
						<p>TEST</p>
					</div>
					<div data-field-span="1" style="height: 55px;">
						<label>Marks Obtained</label>
						<p>232323</p>
					</div>
					<div data-field-span="1" style="height: 55px;">
						<label>Total Marks</label>
						<p>232323</p>
					</div>
				</div>
				<div data-row-span="5">
					<div data-field-span="1" style="height: 55px;">
						<h2 class="form-center-relative" style="bottom:0px">HSC</h2>
					</div>
					<div data-field-span="1" style="height: 55px;">
						<label>Year of Passing</label>
						<p>232323</p>
					</div>
					<div data-field-span="1" style="height: 55px;">
						<label>Board</label>
						<p>TEST</p>
					</div>
					<div data-field-span="1" style="height: 55px;">
						<label>Marks Obtained</label>
						<p>232323</p>
					</div>
					<div data-field-span="1" style="height: 55px;">
						<label>Total Marks</label>
						<p>232323</p>
					</div>
				</div>
				<div data-row-span="5">
					<div data-field-span="1" style="height: 55px;">
						<h2 class="form-center-relative" style="bottom:0px">Diploma</h2>
					</div>
					<div data-field-span="1" style="height: 55px;">
						<label>Year of Passing</label>
						<p>232323</p>
					</div>
					<div data-field-span="1" style="height: 55px;">
						<label>Board</label>
						<p>TEST</p>
					</div>
					<div data-field-span="1" style="height: 55px;">
						<label>Marks Obtained</label>
						<p>232323</p>
					</div>
					<div data-field-span="1" style="height: 55px;">
						<label>Total Marks</label>
						<p>232323</p>
					</div>
				</div>
			</fieldset>

			<br><br>
		</div>
	</div>
@endsection
@section('post')
@endsection
