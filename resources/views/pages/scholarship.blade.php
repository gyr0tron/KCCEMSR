@extends('layouts.master')
@section('pre')
	@php
	$title = "Scholarship";
	$menu_item = 'admissions';
@endphp
@endsection
@section('content')
	<div id="aicte-affiliation" class="section clearfix object-non-visible" data-animation-effect="fadeIn">
		<div class="container main-content-sub">
			<div class="row">
				<h1 class="text-center"><strong><span>{{$title}}</span></strong></h1>
				{{-- <ul class="list-unstyled resp-text-sub" style="margin-left: 12px;">
					@foreach (App\FileUpload::where('type','scholarship')->orderBy('created_at', 'DESC')->get() as $fp)
						<li><i style="float: left;margin-top: 7px;" class="fa fa-chevron-right pr-10 text-colored"></i><a style="display: block;" href="{{$fp->getUrl()}}"><p style="display:flex;">{{$fp->name}}</p></a></li>
					@endforeach
				</ul> --}}
				<div id="members" class="tab-pane fade in">
					<table class="table">
						<thead>
						<tr>
							<th>Year</th>
							<th>Branch</th>
							<th>Rank</th>
							<th>Name of student</th>
							<th>CGPI</th>
						</tr>
						</thead>
						<tr>
							<td rowspan="2">FE</td>
							<td rowspan="2">-</td>
							<td>1</td>
							<td>BHAT KARTIK RAJESH</td>
							<td>9.02</td>
						</tr>
						<tr>
							<td>2</td>
							<td>NAIK SUDHASHRI RAJENDRA</td>
							<td>8.55</td>
						</tr>
						<tr>
							<td rowspan="8">SE</td>
							<td rowspan="2">EXTC</td>
							<td>1</td>
							<td>CHODNEKAR NITANT KRISHNA</td>
							<td>8.62</td>
						</tr>
						<tr>
							<td>2</td>
							<td>P REBITHA RAMCHANDRAN</td>
							<td>8.49</td>
						</tr>
						<tr>
							<td rowspan="2">ETRX</td>
							<td>1</td>
							<td>BORADE SAHIL MAHENDRA</td>
							<td>7.76</td>
						</tr>
						<tr>
							<td>2</td>
							<td>ADALA RAJESHBABU DEVENDRA</td>
							<td>7.3</td>
						</tr>
						<tr>
							<td rowspan="2">IT</td>
							<td>1</td>
							<td>SUVARNA RITESH MITHRADAS</td>
							<td>8.32</td>
						</tr>
						<tr>
							<td>2</td>
							<td>DUBEY PRIYA SHAILESH</td>
							<td>8.25</td>
						</tr>
						<tr>
							<td rowspan="2">COMPS</td>
							<td>1</td>
							<td>GAVNANG SARANG KRISHNA</td>
							<td>8.16</td>
						</tr>
						<tr>
							<td>2</td>
							<td>YADAV DARSHAN SHESHNATH</td>
							<td>7.96</td>
						</tr>
						<tr>
							<td rowspan="8">TE</td>
							<td rowspan="2">EXTC</td>
							<td>1</td>
							<td>BHANDARY MOHAN JAGANNATH</td>
							<td>8.99</td>
						</tr>
						<tr>
							<td>2</td>
							<td>SAWANT TEJAS GOVIND</td>
							<td>8.85</td>
						</tr>
						<tr>
							<td rowspan="2">ETRX</td>
							<td>1</td>
							<td>MUMBARKAR ANIRUDH</td>
							<td>8.77</td>
						</tr>
						<tr>
							<td>2</td>
							<td>DEBROY SHRIYANKA PRANAB</td>
							<td>8.71</td>
						</tr>
						<tr>
							<td rowspan="2">IT</td>
							<td>1</td>
							<td>TULSANKAR MINAL HARI</td>
							<td>8.22</td>
						</tr>
						<tr>
							<td>2</td>
							<td>BERDE TEJAL</td>
							<td>7.93</td>
						</tr>
						<tr>
							<td rowspan="2">COMPS</td>
							<td>1</td>
							<td>MOURYA AMITKUMAR DINESH</td>
							<td>8.55</td>
						</tr>
						<tr>
							<td>2</td>
							<td>MENON ANKITA ANIL</td>
							<td>8.28</td>
						</tr>
						<tr>
							<td rowspan="8">BE</td>
							<td rowspan="2">EXTC</td>
							<td>1</td>
							<td>BHALERAO NAMRATA VIJAY</td>
							<td>7.83</td>
						</tr>
						<tr>
							<td>2</td>
							<td>WADEKAR SURAJ LAXMAN</td>
							<td>7.77</td>
						</tr>
						<tr>
							<td rowspan="2">ETRX</td>
							<td>1</td>
							<td>SINGH PRITESHKUMAR SHASHANKSHEKHAR</td>
							<td>7.75</td>
						</tr>
						<tr>
							<td>2</td>
							<td>MEHTA RAVEENA SANJEEV</td>
							<td>7.32</td>
						</tr>
						<tr>
							<td rowspan="2">IT</td>
							<td>1</td>
							<td>WARSI MAROOF KHADIM</td>
							<td>8.75</td>
						</tr>
						<tr>
							<td>2</td>
							<td>THAKKAR MANSI VIJAY</td>
							<td>8.13</td>
						</tr>
						<tr>
							<td rowspan="2">COMPS</td>
							<td>1</td>
							<td>JASROTIA RISHAB NAROTTAMCHAND</td>
							<td>8.56</td>
						</tr>
						<tr>
							<td>2</td>
							<td>NATEKAR NACHIKET SHASHIKANT</td>
							<td>8.25</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>
@endsection
@section('post')
@endsection
