<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Tweet:D</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	<!--Fuentes botón scroll-->    
    <link href="{{ URL::asset('assets/css/estilos.css')}}" rel="stylesheet" />   
    <script src="http://code.jquery.com/jquery-latest.js"></script>
	<!--Barra de proceso-->		
    <link href="{{ URL::asset('assets/css/pace-theme-bounce.css')}}" rel="stylesheet" /> 
	<script src="/js/pace.min.js"></script>

    
	
</head>

<body>
	<header>
		<nav>
			<ul>
				<li><a href="/tweet">Inicio</a></li>
				<li><a href="#">Perfil</a></li>
				<li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar Sesión</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form></li>
			</ul>
		</nav>
	</header>

	<div class="container">
		<div class="row">
	<div class="col-lg-18 ">
	<br><br><br>
		<center><button type="button" class="btn btn-primary btn-lg btn-block" disabled="true">Tweets:)</button></center>
	</div>
	
	<br><br>	
	<div class="col-lg-6 col-lg-offset-3">
		<center> <a href="tweet/create" class="btn btn-primary">Nuevo Tweet</a> </center>
		<br><br>
	</div>

	<div class="list-group col-lg-4 col-lg-offset-4">
	@foreach ($tweets as $tweet)
		<div class="card text-white bg-info">
  			<div class="card-body">
  			<form class="form-group pull-right" action="{{'/tweet/'.$tweet->id}}" method="post">
    				{{csrf_field()}}
    				{{method_field('DELETE')}}
    				<button type="submit" class="fa fa-trash-o"><i  aria-hidden="true"></i></button>
    			</form>	
    			<blockquote class="card-blockquote">
      				<p><a href="{{'/tweet/'.$tweet->id}}">{{$tweet->body}}</a></p>
      				<footer>{{$tweet->created_at->diffForHumans()}}</footer>
    			</blockquote>
    			
    			
  			</div>
		</div>			
	@endforeach
	</div>
	</div>
	</div>
	<span class="ir-arriba fa fa-angle-up"></span>
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