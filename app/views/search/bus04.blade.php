<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/jquery-ui.css">
	<link rel="stylesheet" href="css/iconos.css">
	<link rel="stylesheet" href="css/wan.css">
	<link rel="stylesheet" href="css/main.css">
	<title>bus04</title>
	<link rel="stylesheet" href="css/iconos2.css" type="text/css" />
	<link rel="stylesheet" href="css/bus04.css" type="text/css" />
	<link rel="stylesheet" href="css/wan.css" type="text/css" />
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
		
		<div class=" row viaje">
			<div  class="vuelo col-md-5  col-md-offset-1 col-xs-10 col-xs-offset-1">
				<h4 style="text-align:center">IDA</h4>
				<div id="ida" class="avion">
					
				</div>
			</div>

			<div class="vuelo col-md-5  col-md-offset-1 col-xs-10 col-xs-offset-1">
				<h4>VUELTA</h4>
				<div id="vuelta"  class="avion">
					
				</div>
			</div>
		</div>
		<div class="row">
				<button class="seat-form-button" onclick="validar()" style="float:right" >Siguiente</button>			
		</div>
	</div>

	<div class="row">
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
	</div>
		

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jquery-ui.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/wan.js"></script>
	<script type="text/javascript" src="js/bus04.js"></script>
</body>
</html>