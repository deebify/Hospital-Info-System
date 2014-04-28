@extends('master')
@section('content')
<h1>Dashboard Emergency Hospital Information System</h1>
<h3>Number of Doctor : <strong> {{$NumDoc}} </strong> Doctors </h3>
<h3>Number Of Patient : <strong> {{$NumPat}} </strong> Patients </h3>

		<canvas id="canvas" height="450" width="450"></canvas>

		<script src="js/Chart.js"></script>

	<script>

		var pieData = [
				{
					value: {{$NumDoc}},
					color:"#F38630"
				},
				{
					value : {{$NumPat}},
					color : "#E0E4CC"
				}
			];

	var myPie = new Chart(document.getElementById("canvas").getContext("2d")).Pie(pieData);
	
	</script>

@stop