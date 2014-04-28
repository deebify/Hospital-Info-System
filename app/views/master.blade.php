<?php 
$url = URL::route('Register');
$home = URL::route('Home');
$boot =URL::route('Bootstrap');
$room = URL::route('RoomReserve');
$manage = URL::route('Manage');
$SearchPatient = URL::route('SearchPatient');
$ResOPRoom = URL::route('ResOPRoom');
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>{{$title}}</title>
	<!-- Bootstrap -->
   <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://raw.githubusercontent.com/silviomoreto/bootstrap-select/master/bootstrap-select.min.css">
</head>
 
<body>
<div class="navbar navbar-inverse" role="navigation">
<div class="container">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
  <a href="/" class="navbar-brand">Emergency Hospital System</a>
  </div>
  <div class="navbar-collapse collapse">
    <ul class="nav navbar-nav">
    <li ><a href={{$home}}>Home</a></li>
    <li> <a href={{$boot}}>  Register Patient</a></li>
    <li><a href={{$room}}>  Room Reservation</a></li>
    <li><a href={{$ResOPRoom}}>  Reserve an Operation</a></li>
    <li><a href={{$SearchPatient}}> Search Patient By Name</a></li>
    <li><a href={{$manage}}>  Administrator</a></li>
    </ul>
  </div>  
</div>
</div>

<div class="container">
	@yield('content')
	
</div>
 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://raw.githubusercontent.com/silviomoreto/bootstrap-select/master/bootstrap-select.min.js"></script>    
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>      
</body>
</html>