@extends('layouts.master')
@section('pre')
	@php
	$title = "Academic Calendar";
	$menu_item = 'academics';
@endphp
@endsection
@section('css')
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/4.2.0/core/main.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/4.2.0/bootstrap/main.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/4.2.0/daygrid/main.min.css">
	<style media="screen">
	.fc-day-grid-event .fc-content {
		white-space: inherit !important;
	}
	</style>
@endsection
@section('content')
	<div class="section clearfix object-non-visible" data-animation-effect="fadeIn">
		<div class="container main-content-sub tab-pane fade in">
			<h1 class="text-center title"><span>Academic Calendar</span></h1>
			<div id="calendar"></div>
		</div>
	</div>
@endsection
@section('post')
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/4.2.0/core/main.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/4.2.0/bootstrap/main.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/4.2.0/daygrid/main.min.js"></script>
	<script type="text/javascript">
	(function() {
		var calendarEl = document.getElementById('calendar');
		var calendar = new FullCalendar.Calendar(calendarEl, {
			plugins: [ 'bootstrap', 'dayGrid' ],
			themeSystem: 'bootstrap',
			defaultView: 'dayGridMonth',
			events: [
				{"title":"Display of Timetable, Roll List, EXP List, Dept Metting","start":"2020-01-01","end":"2020-01-01"},
				{"title":"Commencement of Semester","start":"2020-01-06","end":"2020-01-06"},
				{"title":"Discussion of CO’S and PO’S ","start":"2020-01-06","end":"2020-01-06"},
				{"title":"1st Attendance Review 6th Jan 2020 to 17 Jan 2020","start":"2020-01-17","end":"2020-01-17"},
				{"title":"1st Mentor Meeting","start":"2020-01-23","end":"2020-01-23"},
				{"title":"Mentor Meeting Report Submission to HoD","start":"2020-01-24","end":"2020-01-24"},
				{"title":"Mentor Meeting Summary Report Submission to Principal","start":"2020-01-27","end":"2020-01-27"},
				{"title":"Xavion 2020 (Sports Day)","start":"2020-01-24","end":"2020-01-27"},
				{"title":"Mid Term Feedback & Syllabus Completion Report","start":"2020-02-07","end":"2020-02-07"},
				{"title":"2nd Attendance Review 6th Jan 2020 to 6th Feb 2020","start":"2020-02-07","end":"2020-02-07"},
				{"title":"Question Paper Submission for IA-I","start":"2020-01-17","end":"2020-01-17"},
				{"title":"Shivaji Jayanti Holiday","start":"2020-01-19","end":"2020-01-19"},
				{"title":"3rd Attendance Review 6th Jan 2020 to 20th Feb 2020","start":"2020-02-20","end":"2020-02-20"},
				{"title":"Mahashivratri Holiday","start":"2020-01-21","end":"2020-01-21"},
				{"title":"Internal Assesment Test -I","start":"2020-01-24","end":"2020-01-26"},
				{"title":"Internal Assesment Test -I Result Display","start":"2020-03-04","end":"2020-03-04"},
				{"title":"First PTM","start":"2020-01-06","end":"2020-01-06"},
				{"title":"Dhulivandhan Holiday","start":"2020-03-10","end":"2020-03-10"},
				{"title":"4th Attendance Review 6th Jan 2020 to 13th March 2020","start":"2020-03-13","end":"2020-03-13"},
				{"title":"Detriox 2020 & Reflexionz 2020","start":"2020-03-18","end":"2020-03-21"},
				{"title":"Gudi Padava Holiday","start":"2020-03-25","end":"2020-03-25"},
				{"title":"National Level Project Competition","start":"2020-03-27","end":"2020-03-27"},
				{"title":"Ram Navami Holiday","start":"2020-04-02","end":"2020-04-02"},
				{"title":"National Level Hackathon Competition","start":"2020-04-03","end":"2020-04-04"},
				{"title":"2nd PTM ","start":"2020-04-04","end":"2020-04-04"},
				{"title":"Mahavir Jayanti Holiday","start":"2020-04-06","end":"2020-04-06"},
				{"title":"Question Paper Submission for IA-II","start":"2020-04-08","end":"2020-04-08"},
				{"title":"Good Friday Holiday","start":"2020-04-10","end":"2020-04-10"},
				{"title":"Practice practical, Remedial, Course Exit, Feedback","start":"2020-04-07","end":"2020-04-18"},
				{"title":"5th Attendance Review till 6 Jan to 13 April 2020","start":"2020-04-13","end":"2020-04-13"},
				{"title":"Dr. B.R. Ambedkar Jayanti Holiday","start":"2020-04-14","end":"2020-04-14"},
				{"title":"Internal Assesment Test -II","start":"2020-04-15","end":"2020-04-17"},
				{"title":"Submission","start":"2020-04-18","end":"2020-04-20"},
				{"title":"Term End","start":"2020-04-18","end":"2020-04-18"},
				{"title":"Internal Assesment Test -II Result","start":"2020-04-22","end":"2020-04-22"},
				{"title":"University Oral / Practical Exam","start":"2020-04-23","end":"2020-04-30"},
				{"title":"Commencement of University Theory Exam","start":"2020-05-07","end":"2020-05-07"},
				{"title":"Commencement of Semester","start":"2020-07-06","end":"2020-07-06"},
			]
		});

		calendar.render();
	})();
	</script>
@endsection
