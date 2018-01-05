<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Tweet:D</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
  <link rel="stylesheet" type="text/css" href="/public/css/style.css" />
</head>
<body>
  <div class="container">
    <div class="row">
    <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
      <div class="col-lg-18 ">
        @include('tweet.parciales.errores')
        <center><button type="button" class="btn btn-primary btn-lg btn-block" disabled="true">Crear Nuevo Tweet</button></center>
      </div>
      </div>
      <br><br>
      @section('editMethod')
        @show
        <form class="form-horizontal" action="/tweet" method="post">
          {{csrf_field()}}
          <fieldset>
            <center><legend>Inserta un mensaje</legend> </center>  
            <div class="form-group col-lg-4">
              <textarea class="form-control col-lg-offset-12" name="body" id="exampleTextarea" rows="6"></textarea>
            </div>
            <br>
            <center><a href="/tweet" class="btn btn-info">Regresar</a></center>
            <br>
            <center><button type="submit" class="btn btn-success">Aceptar </button></center>
          </fieldset>
        </form>
        </div>
      <!--Modal content-->
    </div>
    </div>
    </div>
  </div>
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