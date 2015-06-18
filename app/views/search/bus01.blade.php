<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/jquery-ui.css">
		<link rel="stylesheet" href="css/iconos.css">
		<link rel="stylesheet" href="css/wan.css">
		<link rel="stylesheet" href="css/main.css">
		<script src="js/jquery.js"></script>
		<script src="js/jquery-ui.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<title>Prueba WAN</title>
	</head>
	<body>
		<div class="container-fluid">
			<div class="row">
				<nav class="navbar navbar-default col-xs-12">
				 	<div class="">
				    <!-- Brand and toggle get grouped for better mobile display -->
				    	<div class="navbar-header">
				      		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					        	<span class="sr-only">Toggle navigation</span>
					        	<span class="icon-bar"></span>
					        	<span class="icon-bar"></span>
					        	<span class="icon-bar"></span>
				      		</button>
				      		<a class="navbar-brand" href="#">WAN</a>
				    	</div>

				    <!-- Collect the nav links, forms, and other content for toggling -->
					    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					    	<ul class="nav navbar-nav">
					        	<li class="active"><a href="#">WAN Destinos <span class="sr-only">(current)</span></a></li>
					        	<li><a href="#">WAN Calendario</a></li>
					        	<li class="dropdown">
					          		<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">WAN Servicios<span class="caret"></span></a>
					          		<ul class="dropdown-menu" role="menu">
					            		<li><a href="#">WAN Courrier</a></li>
					            		<li class="divider"></li>
					            		<li><a href="#">WAN Terrestre</a></li>
					            		<li class="divider"></li>
					            		<li><a href="#">WAN Corporativo</a></li>
					          		</ul>
					        	</li>
					      	</ul>
					    </div><!-- /.navbar-collapse -->
					</div><!-- /.container-fluid -->
				</nav>
			</div>
			
			<div class="row">
				<div class="col-xs-10  col-xs-offset-1 search-container">
					<form class="col-xs-10 col-md-5 col-xs-offset-1 col-md-offset-1 search-form " action="">
						<div class="row">
							<label class="col-xs-11 col-xs-offset-1 search-form-title" for="nombre">Compra de Pasajes</label>
						</div>
						<div class="row" style="margin-top:5px;margin-bottom:10px">
							<div class="form-group">
								<label class="col-xs-6 "> <input id="on" type="radio" name="optradio">Ida y Vuelta</label>
								<label class="col-xs-6 "> <input id="off" type="radio" name="optradio">Solo Ida</label>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12">
								<input class="search-form-place" type="text" id="tags1" placeholder="Ciudad de Origen" style="margin-bottom:10px">
							</div>
							<div class="col-xs-12">
								<input class="search-form-place" type="text" id="tags2" placeholder="Ciudad de Destino" >
							</div>
						</div>	
						<div class="row" style="margin-top:10px">
							<div class="col-xs-6" style="padding-right:5px">
								<input class="search-form-date" type="text" id="datepickerSalida" placeholder="Fecha Salida" >
							</div>
							<div class="col-xs-6 fecha-vuelta" style="padding-left:5px">
								<input class="search-form-date" type="text" id="datepickerRetorno" placeholder="Fecha Retorno" >
							</div>
						</div>
						<div style="padding:10px;padding-bottom:0px">
							N.Pasajeros <input class="row search-form-spinner" id="numPass" name="pasajeros" type="spinner" min="0"/>
							
						</div>
						<div  class="row">
							<input class="search-form-button col-xs-12" type="submit" value="Buscar Vuelo" style="float:right">
						</div>
					</form>
				</div>	
			</div>						
		</div>
		<footer >
			<div  class="ft_inicial">
				<div  class="ft_todo">
					<div class="ft_item" style="display:none" onclick="anterior()">
						<span class="it_icn"><i class="it_fnt icon-facebook" ></i></span>
					</div>	
					<div  class="opciones">
			
						<div id="work_icn" class="ft_item icn_efect" onclick="extender(this.id)">
							<span class="it_icn"><i class="it_fnt icon-user" ></i></span>
							<span class="it_txt">Trabajo</span>
						</div>
						<div  id="faq_icn" class="ft_item icn_efect" onclick="extender(this.id)" >
							<span class="it_icn"><i class="it_fnt  icon-user2"></i></span>
							<span class="it_txt">FAQ</span>
						</div>

					</div>
					<div class="ft_item " style="display:none" onclick="siguiente()">
						<span class="it_icn"><i class="it_fnt icon-airplane" ></i></span>
					</div>
				</div>
			</div>
			<div class="ft_extendido">
				<div class="ft_contenido">
					<div id="work_info" class="ft_bloque">
						<p class="bloque_t">
							Trabajo
						</p>
								
						<p class="bloque_txt">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. In cursus risus quis turpis interdum, pretium bibendum nisi consequat. Integer eu neque fringilla, adipiscing ante vitae, volutpat enim. Ut a metus tempor, dapibus justo quis, tempor sapien. Morbi sagittis luctus velit, vel tincidunt lacus vulputate vitae. Suspendisse ut lectus justo. Curabitur vel dui quis nisl adipiscing vestibulum quis id risus. Donec et consectetur sapien. Mauris ac pulvinar neque, nec imperdiet mauris. Proin nec felis nec neque ultricies molestie. Phasellus ante elit, feugiat vitae convallis eget, sollicitudin ac nisi.
						</p>
					</div>

					<div id="faq_info" class="ft_bloque">
						<p class="bloque_t">
							FAQ
						</p>
						<p class="bloque_txt">
							Donec et varius erat. Maecenas eget velit nisi. Etiam eleifend nibh augue, quis semper nulla semper vitae. Curabitur cursus lectus nec eros venenatis, sed porttitor nibh tempor. Vivamus vestibulum justo quis dui fermentum malesuada. Etiam in iaculis nibh, vel dignissim ipsum. Donec volutpat imperdiet mi, a pulvinar erat vestibulum ut. Phasellus ac pulvinar nibh, a bibendum nisl. Maecenas ut leo sit amet lorem fringilla placerat sed a enim. Curabitur vulputate luctus mi, lacinia semper justo rhoncus eget. Duis odio diam, ultricies non lacinia sit amet, interdum et lectus. Donec cursus nulla sed elit molestie rhoncus.
						</p>
					</div>
				</div>
			</div>
		</footer>
			<script>
  				$(function() {
  				$.datepicker.setDefaults($.datepicker.regional['es']);
    			$( "#datepickerSalida" ).datepicker({ 
    				minDate: "-0D", 
    				maxDate: "+10Y",
    				onSelect:function(selectedDate){
    					
    					$("fecha-vuelta").val(selectedDate);
    					var fechaSeparada=selectedDate.split("/");
    					$("#datepickerRetorno").datepicker(
    						"option","minDate", new Date(fechaSeparada[2],parseInt(fechaSeparada[0])-1, parseInt(fechaSeparada[1]) ));
    				} 
    			});
    			$( "#datepickerRetorno" ).datepicker({ 
    				minDate: "-0D", 
    				maxDate: "+10Y" ,
    				onSelect:function(selectedDate){
    					
    					$("fecha-ida").val(selectedDate);
    					var fechaSeparada=selectedDate.split("/");
    					$("#datepicker1").datepicker(
    						"option","maxDate", new Date(fechaSeparada[2],parseInt(fechaSeparada[0])-1, parseInt(fechaSeparada[1]) ));
    				} 
    			});
  				});	
  			</script>
			<script>
				$(function(){
					$("#on").click(function(){
						$(".fecha-vuelta").show();
					});
				});
				$(function(){
					$("#off").click(function(){
						$(".fecha-vuelta").hide();
					});
				});
			</script>
			
			  	<script>
				  $(function() {
				    var availableTags = [
				      "ActionScript",
				      "AppleScript",
				      "Asp",
				      "BASIC",
				      "C",
				      "C++",
				      "Clojure",
				      "COBOL",
				      "ColdFusion",
				      "Erlang",
				      "Fortran",
				      "Groovy",
				      "Haskell",
				      "Java",
				      "JavaScript",
				      "Lisp",
				      "Perl",
				      "PHP",
				      "Python",
				      "Ruby",
				      "Scala",
				      "Scheme"
				    ];
				    $( "#tags1" ).autocomplete({
				      source: availableTags
				    });
				    $( "#tags2" ).autocomplete({
				      source: availableTags
				    });
				  });
				  </script>
				  <script>
				  $(function() {
				    var spinner = $( "#numPass" ).spinner();
				    $( "#getvalue" ).click(function() {
				      alert( numPass.spinner( "value" ) );
				    });				 
				    $( "button" ).button();
				  });
				  </script>
		<script type="text/javascript" src="js/wan.js"></script>
	</body>

</html>	