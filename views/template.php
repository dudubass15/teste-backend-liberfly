<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<!--Import Google Icon Font-->
	 	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	 	<!--Import materialize.css-->
	 	<link type="text/css" rel="stylesheet" href="<?php echo URL; ?>/assets/css/materialize.min.css"  media="screen,projection"/>
	 	<!--Import template.css-->
	 	<link type="text/css" rel="stylesheet" href="<?php echo URL; ?>/assets/css/template.css"  media="screen,projection"/>
	    <!--Import template.css-->
	  	<link type="text/css" rel="stylesheet" href="<?php echo URL; ?>/assets/css/animate.css"  media="screen,projection"/>

	  	<!--Let browser know website is optimized for mobile-->
	  	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	</head>
	<body>
	  	<nav id="navbar">
	    	<div class="nav-wrapper">
	      	<a href="<?php echo URL; ?>/home" class="brand-logo">Liberfly</a>
	      	<ul id="nav-mobile" class="right hide-on-med-and-down">
	        	<li><a href="#"><i class="material-icons left">help</i>Informações</a></li>
	      	</ul>
	    	</div>
	  	</nav>

		<div class="container">
			<?php $this->loadViewInTemplate($viewName, $viewData); ?>
		</div>

	  	<footer class="footer mt-auto py-3">
	    	<div class="container">
	      		<span class="text-muted" id="rodapetext">Desenvolvido por Carlos Eduardo.</span>
	    	</div>
	  	</footer>

	  	<!--Import jQuery before materialize.js-->
  		<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  		<script type="text/javascript" src="<?php echo URL; ?>/assets/js/materialize.min.js"></script>
	</body>
</html>