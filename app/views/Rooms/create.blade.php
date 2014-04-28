@extends('master')

@section('content')
    <script src="js/Chart.js"></script>

<h3>Number Rooms Left  = {{$LR}} of {{$TR}}</h3>
<h4>Busy Room = {{$BS}}</h4>
<h1>Room Reservation</h1>

{{Form::open(array('method'=>'post','action'=>'RoomsController@Reserve','class'=>'form-horizontal'))}}
        <div class="form-group">
        {{Form::label('SSN', 'Social Security Number (SSN) *',array('class'=>'control-label col-xs-3'))}}
        <div class="col-xs-9">
            {{Form::text('SSN','#SocialSecurityNumber',array('class'=>'form-control'))}}
        </div>
        </div>
	
            <div class="form-group">
            {{Form::submit('Reserve',array('class'=>'btn btn-success btn-lg col-sm-3 col-sm-offset-3'))}}

            {{Form::reset('Delete Entites', array('class'=>'btn btn-danger btn-lg col-sm-3 col-xs-offset-1'))}}
            </div>
{{Form::close()}}
        <style>
            canvas{
                margin-left: 350px;
                display: center;
            }
        </style>
<canvas id="canvas" height="450" width="450"></canvas>

    <script>

        var pieData = [
                {
                    value: {{$BS}},
                    color:"red"
                },
                {
                    value : {{$LR}},
                    color : "#E0E4CC"
                }
            
            ];

    var myPie = new Chart(document.getElementById("canvas").getContext("2d")).Pie(pieData);
    
    </script>       


@stop