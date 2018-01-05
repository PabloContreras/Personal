<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Tweet:D</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
	<link rel="stylesheet" href="{{ URL::asset('public/css/style.css')}}" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	<!--Fuentes botón scroll-->
    
    <link href="{{ URL::asset('assets/css/estilos.css')}}" rel="stylesheet" />
    <script src="http://code.jquery.com/jquery-latest.js"></script>
	
</head>
<body>
	<header>
		<nav>
			<ul>
				<li><a href="#">Inicio</a></li>
				<li><a href="#">Perfil</a></li>
				<li><a href="#">Salir</a></li>
			</ul>
		</nav>
	</header>
	<div class="container">
		<div class="row">
			@section('body')

			@show
		</div>
	</div>
	<script>
		$(document).ready(function(){
	$('.ir-arriba').click(function(){
		$('body, html').animate({
			scrollTop: '0px'
		}, 1000);
	});
	$(window).scroll(function(){
		if ($(this).scrollTop()>0) {
			$('.ir-arriba').slideDown(300);
		}else{
			$('.ir-arriba').slideUp(300);	
		}
	});
});
	</script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<section>
	<div class="footer">
        <div class="container text-left">
             Hecho con <i class="fa fa-heart heart"></i> por <a href="https://www.facebook.com/MostPeopleCallMeChizpa">Code Monkey</a>
    	</div>
    </div>
    </section>
</body>
</html>