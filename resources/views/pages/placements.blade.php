@extends('layouts.master')
@section('pre')
	@php
	$title = 'Placements';
	$menu_item = 'placements';
@endphp
@endsection
@section('content')
	<div class="section clearfix object-non-visible" data-animation-effect="fadeIn">
		<div class="container main-content">
			{{-- <h1 class="title"><h1> --}}
			<canvas id="myChart" style="height:600px;"></canvas>
		</div>
	</div>
@endsection
@section('post')
	<script type="text/javascript" src="js/chart.min.js"></script>
	<script>
	var ctx = document.getElementById("myChart").getContext('2d');
	var myChart = new Chart(ctx, {
		type: 'bar',
		responsive: false,
		data: {
			labels: ["2012-13", "2013-14","2014-15","2015-16","2016-17"],
			datasets: [{
				label: 'Total placed students',
				data: [60, 45, 65, 86, 92],
				backgroundColor: 'rgba(85, 172, 238, 0.2)',
				borderColor: 'rbga(255, 99, 132, 0.2)',
				borderWidth: 1
			}],
		},
		options: {
			tooltips: {enabled: true},
			hover: {mode: null},
			maintainAspectRatio: true,
			legend: { display: false },
			scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        },
			title: {
				display: true,
				text: 'Total placed students'
			}
		},
	});

	document.getElementById("myChart").onclick = function(evt){
		var activePoints = myChart.getElementsAtEvent(evt);
		var firstPoint = activePoints[0];
		var label = myChart.data.labels[firstPoint._index];
		var value = myChart.data.datasets[firstPoint._datasetIndex].data[firstPoint._index];
		if (firstPoint !== undefined)
			alert(label + ": " + value);
	};

	</script>
@endsection
