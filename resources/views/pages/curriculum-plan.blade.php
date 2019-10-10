@extends('layouts.master')
@section('pre')
	@php
	$title = "Academic Calendar";
	$menu_item = 'academics';
@endphp
@endsection
@section('content')
	<div id="curriculum-plan" class="section clearfix object-non-visible" data-animation-effect="fadeIn">
		<div id="members" class="container main-content-sub tab-pane fade in">
			<h1 class="text-center title"><span>Academic Calendar</span></h1>
			<table class="table table-striped">
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
						<td>04/07/2019</td>
						<td>Display of the Time Table, Roll list, EXP. List</td>
						<td>SE-BE</td>
					</tr>
					<tr>
						<td>2</td>
						<td>06/07/2019</td>
						<td>Departmental Meeting</td>
						<td>SE-BE</td>
					</tr>
					<tr>
						<td>3</td>
						<td>08/07/2019</td>
						<td>Commencement of the Semester</td>
						<td>SE-BE</td>
					</tr>
					<tr>
						<td>4</td>
						<td>08/07/2019-13/07/2019</td>
						<td>Discussion of CO’S and PO’S with students</td>
						<td>SE-BE</td>
					</tr>
					<tr>
						<td>5</td>
						<td>20/07/2019</td>
						<td>Project title finalization</td>
						<td>BE</td>
					</tr>
					<tr>
						<td>6</td>
						<td>22/7/2019 - 26/7/19</td>
						<td>Mentor meeting</td>
						<td>SE-BE</td>
					</tr>
					<tr>
						<td>7</td>
						<td>31/07/2019</td>
						<td>1 st Attendance Review   (10th July - 31st  July)</td>
						<td>SE-BE</td>
					</tr>
					<tr>
						<td>8</td>
						<td>03/08/2019</td>
						<td>Parents Teacher Meet for SE, TE, BE</td>
						<td>SE-BE</td>
					</tr>
					<tr>
						<td>9</td>
						<td>07/08/2019</td>
						<td>Submission of Unit test-I Question paper</td>
						<td>SE-BE</td>
					</tr>
					<tr>
						<td>10</td>
						<td>07/08/2019</td>
						<td>(40%)  Syllabus completion Report</td>
						<td>ALL</td>
					</tr>
					<tr>
						<td>11</td>
						<td>12/08/2019</td>
						<td>Holiday-Bakri Eid</td>
						<td>ALL</td>
					</tr>
					<tr>
						<td>12</td>
						<td>15/08/2019</td>
						<td>Holiday- Independence day</td>
						<td>ALL</td>
					</tr>
					<tr>
						<td>13</td>
						<td>17/08/2019</td>
						<td>Holiday- Parsi New Year</td>
						<td>ALL</td>
					</tr>
					<tr>
						<td>14</td>
						<td>13/08/2019 - 16/08/2019</td>
						<td>IA Test-I</td>
						<td>SE-BE</td>
					</tr>
					<tr>
						<td>15</td>
						<td>19/08/2019 - 24/8/2019</td>
						<td>Mid Term Oral Feedback (By HoD)</td>
						<td>SE-BE</td>
					</tr>
					<tr>
						<td>16</td>
						<td>26/08/2019</td>
						<td>Display of Result</td>
						<td>SE-BE</td>
					</tr>
					<tr>
						<td>17</td>
						<td>31/8/2019</td>
						<td>Attendance Review II</td>
						<td>SE-BE</td>
					</tr>
					<tr>
						<td>18</td>
						<td>02/09/2019 - 6/9/2019</td>
						<td>Mid Term Break (Ganpati Festival)</td>
						<td>ALL</td>
					</tr>
					<tr>
						<td>19</td>
						<td>10/09/2019</td>
						<td>Moharrum Holiday</td>
						<td>ALL</td>
					</tr>
					<tr>
						<td>20</td>
						<td>16/09/2019 - 20/09/2019</td>
						<td>Mentor Meeting II</td>
						<td>SE-BE</td>
					</tr>
					<tr>
						<td>21</td>
						<td>15/09/2017</td>
						<td>Engineer’s Day / Techfest</td>
						<td>ALL</td>
					</tr>
					<tr>
						<td>22</td>
						<td>30/09/2019</td>
						<td>III rd  Attendance Review</td>
						<td>SE-BE</td>
					</tr>
					<tr>
						<td>23</td>
						<td>30/09/2019</td>
						<td>(80%)  Syllabus completion Report</td>
						<td>SE-BE</td>
					</tr>
					<tr>
						<td>24</td>
						<td>02/10/2019</td>
						<td>Gandhi Jayanti</td>
						<td>SE-BE</td>
					</tr>
					<tr>
						<td>25</td>
						<td>04/10/2019</td>
						<td>Fresher’s party</td>
						<td>FE-SE</td>
					</tr>
					<tr>
						<td>26</td>
						<td>05/10/2019</td>
						<td>Founders Day</td>
						<td>ALL</td>
					</tr>
					<tr>
						<td>27</td>
						<td>08/10/2019</td>
						<td>Dassera Holiday</td>
						<td>ALL</td>
					</tr>
					<tr>
						<td>28</td>
						<td>09/10/2019</td>
						<td>BE project Progress report Submission and Internal presentation</td>
						<td>BE</td>
					</tr>
					<tr>
						<td>29</td>
						<td>11/10/2019</td>
						<td>Submission of Unit test-II Question paper</td>
						<td>SE-BE</td>
					</tr>
					<tr>
						<td>30</td>
						<td>14/10/2019 - 16/10/2019</td>
						<td>IA Test-II</td>
						<td>SE-BE</td>
					</tr>
					<tr>
						<td>31</td>
						<td>17/10/2019 - 19/10/2019</td>
						<td>Practice Practical Exam</td>
						<td>SE-BE</td>
					</tr>
					<tr>
						<td>32</td>
						<td>21/10/2019 - 24/10/2019</td>
						<td>Remedial Lectures & Submission</td>
						<td>SE-BE</td>
					</tr>
					<tr>
						<td>33</td>
						<td>26/10/2019</td>
						<td>Term End, Course Exit Survey, Faculty Feedback</td>
						<td>SE-BE</td>
					</tr>
					<tr>
						<td>34</td>
						<td>27/10/2019 - 29/10/2019</td>
						<td>Diwali Holidays</td>
						<td>ALL</td>
					</tr>
					<tr>
						<td>35</td>
						<td>30/10/2019 - 11/11/2019</td>
						<td>Conduction of External Oral and Practical Examinations</td>
						<td>SE-BE</td>
					</tr>
					<tr>
						<td>36</td>
						<td>10/11/2019</td>
						<td>Unit test-II Result declaration & display</td>
						<td>SE-BE</td>
					</tr>
					<tr>
						<td>37</td>
						<td>12/11/2019</td>
						<td>Holiday - Guru Nanak Jayanti</td>
						<td>ALL</td>
					</tr>
					<tr>
						<td>38</td>
						<td>14/11/2019</td>
						<td>Commencement of  Theory exam</td>
						<td>ALL</td>
					</tr>
					<tr>
						<td>39</td>
						<td>06/01/2019</td>
						<td>Commencement of  New term</td>
						<td>ALL</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
@endsection
@section('post')
@endsection
