<head>
	<meta charset="utf-8">
      <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="index.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<title>Prueba WP</title>
   <div class="container">
    <img src="<?php echo get_theme_file_uri()?>assets/img/marca/logo.png">
     <h1>IL RISTORANTE </h1>
    <div id="reservation" class="section">

			<!-- Backgound Image -->
  <div>
	<script type="text/javascript">
      $(document).ready(function(){
      $("#flip-1").click(function(){
      $("#panel-1").slideToggle("slow");
      });
      });
      </script> 
    <div id="flip-1" class="flip-1">Haz click aquí para RESERVAS</div> 
	    <div id="panel-1"> 
	    	<div class="container">
				<!-- Grilla --> 	
 			<div class="row">
					<!-- Formulario de Reserva -->
					<div class="col-md-6 col-md-offset-1 col-sm-10 col-sm-offset-1">
						<form class="reserve-form row">
							<div class="section-header text-center">
								<h4 class="sub-title">Reservación</h4>
								
							</div>

							<div class="col-md-6">
								<div class="form-group">
									<label for="name">Nombre:</label>
									<input class="input" type="text" placeholder="Name" id="name">
								</div>
								<div class="form-group">
									<label for="phone">Teléfono:</label>
									<input class="input" type="tel" placeholder="Phone" id="phone">
								</div>
								<div class="form-group">
									<label for="date">Fecha:</label>
									<input class="input" type="text" placeholder="MM/DD/YYYY" id="date">
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-group">
									<label for="email">Email:</label>
									<input class="input" type="email" placeholder="Email" id="email">
								</div>
								<div class="form-group">
									<label for="number">Número de comensales:</label>
									<select class="input" id="number">
										<option>1 Person</option>
										<option>2 People</option>
										<option>3 People</option>
										<option>4 People</option>
										<option>5 People</option>
										<option>6 People</option>
									</select>
								</div>
								<div class="form-group">
								  <label for="time">Hora:</label>
								  <input class="input" type="text" placeholder="HH:MM" id="time">
								</div>
							</div>

							<div class="col-md-12 text-center">
								<button class="main-button">Reserva Ahora</button>
							</div>

						</form>
					</div>
			</div>		
  </div>	
</div> 
<?php wp_head() ?>
</head>

</head>