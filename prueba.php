<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>IdenTicket - Comprar Entrada</title>
		
	<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>	

	<style>
		body {
			margin:0;
			padding:0;
			background: #FFF;
		}	
		
		#tab {
			width:40px;
			height:50px;
			position:fixed;
			right:0px;
			top:300px;
			display:block;
			cursor:pointer;
			background-color:#232526;
			border-radius: 10px 0 0 10px;
			padding: 5px 0 5px 5px;	
		}
		
	
		
		#tab_interna {
			border-radius:  5px 0  0 5px;
			width: 100%;			
			height: 100%;
			background: #CCC url('images/fd2.png') no-repeat center center;
		}		

		#tab_interna:hover {
			background-position: 5px 13px;
		}
		
		
		.expandida {
			background: #CCC url('images/fd1.png') no-repeat center center !important;			
		}		
		.expandida:hover {
			background-position: 11px 13px !important;
		}

		#panel {
			position:absolute;			
			right:0px;
			top:45px;
			background: url('images/mapa.jpg');
			height:400px;
			width:0;
			font: 18px Arial;
			color: #707275;
			text-align: center;
			border-radius: 0 0 0 15px;
			
		}
	
		#panel h3 {
			margin: 0;
			margin-bottom: 15px;
			text-transform: uppercase;
		}
		
		#panel .content {
			width:320px;
			margin: 5px auto;
		}	
		
		
	</style>
</head>
<body>
<header>
	
</header>

<!-- Botón que activa el panel -->
<a href="#" id="abre_tab">
	<div id="tab"> 
		<div id="tab_interna"  >

		</div>
	</div> 
</a>
<!-- Panel oculto -->
<div id="panel">
		<div>
			<h3>Hola Mundo</h3>
		</div>
       <div class="contenido">
				<!--<h3>Estadio</h3>-->
       </div>	
</div>





	<script>
	(function($){
		var $contenido = $('.contenido').hide(),
			$contenido_2 = $('.contenido_2'),
			$tab = $('#tab'),
			$tab_2 = $('#tab_2'),
			$tab_interna = $('#tab_interna'),
			$tab_interna_2 = $('#tab_interna_2'),
			$panel = $('#panel'),
			$panel_2 = $('#panel_2'),
			$abre_tab = $('a#abre_tab'),
			$abre_tab_2 = $('a#abre_tab_2');
			
		$abre_tab.on('click',function(e){ e.preventDefault();});
		
		
		$tab.toggle(
			function(){
				$tab
					.stop()
					.animate({
						right: "1320px"//650 muestra todo el estadio
					},500, function(){
						$tab_interna.addClass('expandida');
					})
				$panel
					.stop()
					.animate({
						width: "1320px",//650 muestra todo el estadio
						opacity: 0.8
					}, 500, function(){
						$contenido.fadeIn('slow');
					});
			},
			function(){
				$contenido.fadeOut('slow', function() {
					$tab
						.stop()
						.animate({
							right: "0"
						},500, function(){
							$tab_interna.removeClass();
						});
					$panel
						.stop()
						.animate({
							width: "0",
							opacity: 0.1
						}, 500);
				});
			}
		);

	})(jQuery);
	</script>
</body>
</html>