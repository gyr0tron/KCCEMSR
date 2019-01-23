@extends('layouts.master')
@section('pre')
	@php
	$title = "Curriculum Plan";
	$menu_item = 'academics';
@endphp
@endsection
@section('content')
	<div id="curriculum-plan" class="section clearfix object-non-visible" data-animation-effect="fadeIn">
		<div id="members" class="container main-content-sub tab-pane fade in">
			<h1 class="text-center title"><span>Curriculum Plan</span></h1>
			<table class="table">
				<thead>
					<tr>
						<th>Sr. No</th>
						<th>Date</th>
						<th>Activity</th>
						<th>Year</th>
					</tr>
				</thead>
				<tbody>
					@php
						$no = 1;
					@endphp
					{{-- @foreach (App\FileUpload::where('type', 'curriculum-plan')->orderBy('section','ASC')->get() as $fp) --}}
						{{-- <tr>
							<td>{{$no++}}</td>
							<td>{{$fp->section}}</td>
							<td>{{$fp->name}}</td>
							<td>{{$fp->department}}</td>
						</tr> --}}
					{{-- @endforeach --}}
					<tr>
						<td>1</td>
						<td>03/01/2019</td>
						<td>Display of Time Table, Roll List, Experiment List</td>
						<td>All Years (FE to BE)</td>
					</tr>
					<tr>
						<td>2</td>
						<td>03/01/2019</td>
						<td>Departmental Meeting</td>
						<td>All Years (FE to BE)</td>
					</tr>
					<tr>
						<td>3</td>
						<td>07/01/2019</td>
						<td>Commencement of the Semester</td>
						<td>All Years (FE to BE)</td>
					</tr>
					<tr>
						<td>4</td>
						<td>07/01/2019</td>
						<td>Discussion of Course Outcome and Program Outcome with students</td>
						<td>All Years (FE to BE)</td>
					</tr>
					<tr>
						<td>5</td>
						<td>07/01/2019 to 13/01/2019</td>
						<td>Sports Day</td>
						<td>All Years (FE to BE)</td>
					</tr>
					<tr>
						<td>6</td>
						<td>22/01/2019 to 24/01/2019</td>
						<td>Cultural Festival - Reflexionz</td>
						<td>All Years (FE to BE)</td>
					</tr>
					<tr>
						<td>7</td>
						<td>31/01/2019</td>
						<td>1st Attendance Report (07 Jan 2019 to 31 Jan 2019)</td>
						<td>All Years (FE to BE)</td>
					</tr>
					<tr>
						<td>8</td>
						<td>12/02/2019</td>
						<td>Submission of Internal Assessment Test - 1 Question Paper</td>
						<td>All Years (FE to BE)</td>
					</tr>
					<tr>
						<td>9</td>
						<td>15/02/2019</td>
						<td>Feedback</td>
						<td>All Years (FE to BE)</td>
					</tr>
					<tr>
						<td>10</td>
						<td>15/02/2019</td>
						<td>Syllabus Completion Report</td>
						<td>All Years (FE to BE)</td>
					</tr>
					<tr>
						<td>11</td>
						<td>15/02/2019</td>
						<td>2nd Attendance Report (01 Feb 2019 to 14 Feb 2019)</td>
						<td>All Years (FE to BE)</td>
					</tr>
					<tr>
						<td>12</td>
						<td>19/02/2019</td>
						<td>Shivaji Maharaj Jayanti Holiday</td>
						<td>All Years (FE to BE)</td>
					</tr>
					<tr>
						<td>13</td>
						<td>20/02/2019 to 22/02/2019</td>
						<td>Internal Assessment Test - 1</td>
						<td>All Years (FE to BE)</td>
					</tr>
					<tr>
						<td>14</td>
						<td>28/02/2019</td>
						<td>Display of Internal Assessment - 1 Test Result</td>
						<td>All Years (FE to BE)</td>
					</tr>
					<tr>
						<td>15</td>
						<td>28/02/2019</td>
						<td>3rd Attendance Report (15 Feb 2019 to 28 Feb 2019)</td>
						<td>All Years (FE to BE)</td>
					</tr>
					<tr>
						<td>16</td>
						<td>02/03/2019</td>
						<td>1st Parents Meeting</td>
						<td>All Years (FE to BE)</td>
					</tr>
					<tr>
						<td>17</td>
						<td>04/03/2019</td>
						<td>Mahashivratri Holiday</td>
						<td>All Years (FE to BE)</td>
					</tr>
					<tr>
						<td>18</td>
						<td>05/03/2019 to 08/03/2019</td>
						<td>Mid-Semester Submission</td>
						<td>All Years (FE to BE)</td>
					</tr>
					<tr>
						<td>19</td>
						<td>14/03/2019</td>
						<td>4th Attendance Report (1st March 2019 to 14 March 2019)</td>
						<td>All Years (FE to BE)</td>
					</tr>
					<tr>
						<td>20</td>
						<td>21/03/2019</td>
						<td>Dhulivandan Holiday	</td>
						<td>All Years (FE to BE)</td>
					</tr>
					<tr>
						<td>21</td>
						<td>22/03/2019</td>
						<td>Syllabus Completion Report	</td>
						<td>All Years (FE to BE)</td>
					</tr>
					<tr>
						<td>22</td>
						<td>22/03/2019</td>
						<td>Submission of Internal Assessment Test - II Question Paper</td>
						<td>All Years (FE to BE)</td>
					</tr>
					<tr>
						<td>23</td>
						<td>30/03/2019</td>
						<td>5th Attendance Report (15 March 2019 to 29 March 2019)</td>
						<td>All Years (FE to BE)</td>
					</tr>
					<tr>
						<td>24</td>
						<td>01/04/2019 to 05/04/2019</td>
						<td>Internal Assessment Test - II</td>
						<td>All Years (FE to BE)</td>
					</tr>
					<tr>
						<td>25</td>
						<td>06/04/2019</td>
						<td>Display of Internal Assessment -II Test Result	</td>
						<td>All Years (FE to BE)</td>
					</tr>
					<tr>
						<td>26</td>
						<td>06/04/2019</td>
						<td>2nd Parents Meeting</td>
						<td>All Years (FE to BE)</td>
					</tr>
					<tr>
						<td>27</td>
						<td>08/04/2019 to 20/04/2019</td>
						<td>Practice Practical Session / Remedial Lectures / Make Up Classes, Course Exit Survey, Faculty Feedback</td>
						<td>All Years (FE to BE)</td>
					</tr>
					<tr>
						<td>28</td>
						<td>15/04/2019 to 18/04/2019</td>
						<td>Final Term-Work Submission</td>
						<td>All Years (FE to BE)</td>
					</tr>
					<tr>
						<td>29</td>
						<td>17/04/2019</td>
						<td>Mahavir Jayanti - Holiday</td>
						<td>All Years (FE to BE)</td>
					</tr>
					<tr>
						<td>30</td>
						<td>19/04/2019</td>
						<td>Good Friday - Holiday</td>
						<td>All Years (FE to BE)</td>
					</tr>
					<tr>
						<td>31</td>
						<td>20/04/2019</td>
						<td>Term End</td>
						<td>All Years (FE to BE)</td>
					</tr>
					<tr>
						<td>32</td>
						<td>22/04/2019 to 02/05/2019</td>
						<td>Oral Practical Examination</td>
						<td>All Years (FE to BE)</td>
					</tr>
					<tr>
						<td>33</td>
						<td>07/05/2019</td>
						<td>Commencement of Theory Examination</td>
						<td>All Years (FE to BE)</td>
					</tr>
					<tr>
						<td>34</td>
						<td>08/07/2019</td>
						<td>Commencement of the Semester</td>
						<td>All Years (FE to BE)</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
@endsection
@section('post')
@endsection
