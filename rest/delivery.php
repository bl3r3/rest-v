<!DOCTYPE html>
<html lang="en">

  <head>

<style>

    .container {
            display: block;
            position: relative;
            padding-left: 35px;
            margin-bottom: 12px;
            cursor: pointer;
            font-size: 12px;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }


        .container input {
            position: absolute;
            opacity: 0;
            cursor: pointer;
        }


        .checkmark {
            position: absolute;
            top: 0;
            left: 0;
            height: 20px;
            width: 20px;
            background-color: #eee;
        }


        .container:hover input ~ .checkmark {
            background-color: #ccc;
        }


        .container input:checked ~ .checkmark {
            background-color: #222;
        }


        .checkmark:after {
            content: "";
            position: absolute;
            display: none;
        }


        .container input:checked ~ .checkmark:after {
            display: block;
        }


        .container .checkmark:after {
            left: 7px;
            top: 4px;
            width: 4px;
            height: 9px;
            border: solid white;
            border-width: 0 3px 3px 0;
            -webkit-transform: rotate(45deg);
            -ms-transform: rotate(45deg);
            transform: rotate(45deg);
        }
.login {
  margin: 20px auto;
  width: 300px;
  padding: 30px 25px;
  background: white;
  border: 1px solid #c4c4c4;
}

.login-button {
  width: 50%;
  height: 50px;
  padding: 0;
  font-size: 20px;
  color: #fff;
  text-align: center;
  background: #1eb2b2;
  border: 0;
  border-radius: 5px;
  cursor: pointer; 
  outline:0;
}

</style>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Ragno" >
    <title>Restaurante</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" >

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="css/shop-homepage.css" >

  <link rel='stylesheet' href='css/font'>


      <link rel="stylesheet" href="css/style.css">

  </head>

  <body>

     <header>
  <nav>
    <h2><a href="#" id="logo">☆</a></h2>
    <button class="nav-button fa fa-bars"></button>
    <div>
<!--     <ul> -->
      <ul>
        <button class="exit-menu fa fa-times"></button>
        <li><a href="index.html" >Inicio</a></li>
        <li><a href="delivery.html" class="active">Delivery</a></li>
      </ul>
<!--     </ul> -->
    </div>
  </nav>
  <div class="center">
    <h1 class="alex-brush">Solicita tu menu</h1>
    <h1></h1>
    <h2>La Boveda</h2>
    <span id="asterisk">*</span>
    <p>Listos para servir</p>
  </div>
</header>

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <div class="col-lg-3">
        <br>
          <div class="list-group">
           <form class="form-radio">
            <h3 style="text-align: left;">Ordenar</h3>
            
            	<div style="display: inline-block;">
              Selecciona el menu de tu preferencia para completar el pedido
              </label>
					</div>              
              
            </form>
           <!--  <a href="#" class="list-group-item">Category 1</a>
            <a href="#" class="list-group-item">Category 2</a>
            <a href="#" class="list-group-item">Category 3</a> -->
          </div>

        </div>
        <!-- /.col-lg-3 -->
  
  <br>
        <div class="col-lg-9">

         <!--  -->
  
  <br>
          <div class="row">
          <form class="login" method="POST" action="../rest/pedido.php">
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <img class="card-img-top" src="fotos/comida1.jpg" alt="">
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="" style="color: #be8040;">Ensalada cesar</a>
                  </h4>
                  <h5>$24.99</h5>
                  <p class="card-text">Los mejores alimentos frescos en tu paladar, un gran acompañante para tu comida favorita</p>
                </div> <center> <label class="container">
                <input type="checkbox" checked="checked">
                <span class="checkmark"></span></center>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="fotos/comida2.jpg" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="order.html" style="color: #be8040;">Salteado de Vegetales</a>
                  </h4>
                  <h5>$24.99</h5>La mejor opcion para los amantes de la comida vegana</p>
                </div>
                <center> <label class="container">
                <input type="checkbox" checked="checked">
                <span class="checkmark"></span></center>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="fotos/comida3.jpg" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="order.html" style="color: #be8040;">Pasticho de res con champiñones</a>
                  </h4>
                  <h5>$24.99</h5>
                  <p class="card-text">Disfruta de esta delicia italiana con sabor a hogar</p>
                </div>
                <center> <label class="container">
                <input type="checkbox" checked="checked">
                <span class="checkmark"></span></center>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="fotos/comida4.jpg" alt=""></a>
                <div class="card-body">
                <?php echo 
                  <h4 class="card-title" style="color: #be8040;">
                  'titulo1'
                  </h4><?
                  <h5>$24.99</h5>
                  <p class="card-text">Un clasico postre con un toque distinto</p>
                </div>
                <center> <label class="container">
                <input type="checkbox" checked="checked">
                <span class="checkmark"></span></center>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="fotos/comida5.jpg" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="order.html" style="color: #be8040;">Aperitivo</a>
                  </h4>
                  <h5>$24.99</h5>
                  <p class="card-text">Las mejores muestras de nuestros jamones y vinos</p>
                </div>
                <center> <label class="container">
                <input type="checkbox" checked="checked">
                <span class="checkmark"></span></center>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="fotos/comida6.jpg" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="order.html" style="color: #be8040;">Bandeja de Degustacion</a>
                  </h4>
                  <h5>$24.99</h5>
                  <p class="card-text">Disfruta de todo el sabor que la bodega te puede ofrecer</p>
                </div>
                <center> <label class="container">
                <input type="checkbox" checked="checked">
                <span class="checkmark"></span></center>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>
	 
          </div>
          <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

    </div>
    <center>
<button value="Entrar" class="login-button"> Complete su pedido</button>
    </center>
    <br>
    <footer>
  
  <div class="restaurant-info">
  
    <div class="locations">
      <h4>LOCATIONS</h4>
      <div class="location-1">
        <h5> Av. José Antonio Páez<br />Caracas, Distrito Capital &#8212; 1020</h5>
      </div>
      <div class="location-2">
        <h5>Calle San Felipe<br />Caracas, Distrito Capital &#8212; 1060</h5>
      </div>
    </div>

    <div class="hours">
      <h4>Horario</h4>
      <div class="weekdays">
        <h5>Lunes - Jueves<br />
          5:30pm - 10:00pm
        </h5>
      </div>
      
      <div class="weekends">
        <h5>Viernes & Sabados<br />
          5:30pm - 11:00pm
        </h5>
      </div>
      
      <div class="private-events">
        <h5>Disponible para eventos<br />
          privados el domingo
        </h5>
      </div>
      
    </div>
    
  </div>
</footer>

    <!-- Bootstrap core JavaScript -->
    <script src="js/jquery/jquery.min.js"></script>
    <script src="js/bootstrap/js/bootstrap.bundle.min.js"></script>
   

  </body>

</html>
