 <!--
 Encargado
		Programador: Santigo Soriano.
		Fecha: 18/09/2013
		Hora: 03:01
		
 Modificado
		Programador: Santigo Soriano.
		Fecha: 06/10/2013
		Hora: 00:21
 -->

<!doctype html>
 <html lang="es">
   <head>
      <meta charset="utf-8"/>   
      <title>Identicket - Registro Persona</title>
      <link rel="stylesheet" type="text/css" href="estilos/estilo_index.css">
      <script src="js/jquery-1.10.2.min.js" type="text/javascript"></script>
      <script src="js/jquery-validation-1.11.1/dist/jquery.validate.min.js" type="text/javascript"></script>
      <script src="js/jquery.Rut.js" type="text/javascript"></script> 
      <script src="js/jquery-validation-1.11.1/dist/additional-methods.js"></script><!--script solo letras-->

              <script>
              $().ready(function() {

              		

           
           			//Validador solo letras
           		    jQuery.validator.addMethod("lettersonly", function(value, element) {
      				return this.optional(element) || /^[a-z]+$/i.test(value);
    				}, "Solo letras");


                $("#frm_RegistroPersona").validate({
                    rules:{
                    	runPersona:
                    	{
                    		required:true
                    		
                    	},

                    	nombrePersona:
                    		{
                    			required:true,
                    			lettersonly:true
                    		},

                    	apellidoPaternoPersona:
                    		{
                    			required:true,
                    			lettersonly:true
                    		},

                    	apellidoMaternoPersona:
                    		{
                    			required:true,
                    			lettersonly:true
                    		},
                    	
                    	telefonoPersona:
                    		{
                    			required:true,
                    			number:true
                    		},
                        emailPersona:
                        	{
                        		required:true,
                        		email:true
                        	},
                        pass1Persona:
                        	{
                        		required:true,
                        		minlength:6
                        	},
                        pass2Persona:
                        	{
                        		required:true,
                        		minlength:6,
                        		equalTo: "#pass1Persona"
                        	},
                       	fechaNacimientoPersona:"required",
                        direccionPersona:"required",
                        
                    },
                    messages:{
                        runPersona:
                        {
                        	required:'Ingrese su run'
                        	
                        },

                        nombrePersona:
                        {
                        	required:'Ingrese su nombre',
                        	lettersonly:"No se acepta números"
                        },

                        apellidoPaternoPersona:
                        {
                        	required:'Ingrese su apellido Paterno',
                        	lettersonly:"No se acepta números"
                        },

                        apellidoMaternoPersona:
                        {
                        	required:'Ingrese su apellido materno',
                        	lettersonly:"No se acepta números"
                        },

						telefonoPersona:'Solo puedes ingresar numeros',
                        emailPersona:'Correo no valido',
                        pass1Persona:
                        {
                        	required: "Ingrese una contraseña",
                        	minlength: "La contraseña debe tener mínimo 6 caracteres"
                        },
                        pass2Persona :
                        {
                        	required : "Ingrese una Contraseña",
                        	minlength: "La contraseña debe tener mínimo 6 caracteres",
                        	equalTo	 : "Las password introducidas no son iguales"
			            },
                        
                        fechaNacimientoPersona:'Ingrese su fecha de nacimiento',
                        direccionPersona:'Ingrese una dirección',
                        
                    },
                    debug:true,
                    submitHandler:function(form){
                        alert('Datos ingresados correctamente');
                    }
                });
            });
        </script>

   </head>
 
    <body background="img_bkg/dark.png">

		<header>
			<center><img src="img_bkg/banner2.png"></center>
		</header>
   
		<nav>
			<ul class="navlist">
				<li><a href="index.php">Inicio</a></li>
				<li>Mi cuenta</li>
				<li>Eventos</li>
			</ul>
		</nav>

     <aside id="izq">
      <h3>aside</h3>
      <h3>Publicidad</h3>
	</aside>  

	<section>
		<center>Formulario de Registro</center>
		<article>
			<form id="frm_RegistroPersona" method="post"><!-- action="controlador_Registro_Persona.php" -->
			<table>
					<tr>
						<td>RUN:</td>
						<td><input type="text" name="runPersona" placeholder="Example: 17666123-0" required "></td>
						<td>Nombre:</td>
						<td><input type="text" name="nombrePersona" required></td>
					</tr>
					
					<tr>
						<td>Apellido Paterno:</td>
						<td><input type="text" name="apellidoPaternoPersona" required></td>
						<td>Apellido Materno:</td>
						<td><input type="text" name="apellidoMaternoPersona" required></td>
					</tr>
						
					<tr>
						<td>Teléfono Móvil:</td>
						<td><input type="text" name="telefonoPersona" required></td>
						<td>E-mail:</td>
						<td><input type="email" name="emailPersona" required></td>
					</tr>
					
						
					<tr>
						<td>Contraseña:</td>
						<td><input id="pass1Persona" type="password" name="pass1Persona" required></td>
						<td>Confirmar Contraseña:</td>
						<td><input type="password" name="pass2Persona" required></td>
					</tr>
					
					<tr>

						<td>Fecha Nacimiento:</td>
						<td><input type="date" name="fechaNacimientoPersona" placeholder="Example: DD/MM/YYYY" required></td>
						<td>Dirección:</td>
						<td><input type="text" name="direccionPersona" required></td>
						
						
					</tr>
						
						
					<tr>
						<td>País:</td>
						<td><select name="pais">
									<option value="chile"> Chile </option>
									<option value="argentina"> Argentina </option>
									<option value="brasil"> Brasil </option>
									<option value="peru"> Perú </option>
									<option value="ecuador"> Ecuador </option>
							</select>
						</td>
						<td>Región:</td>
						<td><select name="region">
									<option value="metropolitana"> Metropolitana </option>
							</select>
						</td>
						
					</tr>
								
										
					<tr>
						<td>Ciudad:</td>
						<td><select name="ciudad">
									<option value="santiago"> Santiago </option>
							</select>
						</td>
						<td>Comuna:</td>
						<td><select name="comuna">
									<option value="maipu"> Maipú </option>
									<option value="estacionCentral"> Estación Central </option>
									<option value="providencia"> Providencia </option>
									<option value="colina"> Colina </option>
									<option value="penaflor"> Peñaflor </option>
							</select>
						</td>
						
					</tr>
					
												
					<tr>
						<td></td>
						<td><center><input type="submit" name="Guardar" value=" Guardar "></center></td>
						<td><center><input type="submit" name="Cancelar" value=" Cancelar "></center></td>
						<td></td>
					</tr>
								
				</table>
			</form>
			
		</article>

	</section>

	<aside id="der">
		<h3>Siguenos</h3>
		<a class="twitter-timeline" href="https://twitter.com/Identicket" data-widget-id="377655519797727232">Tweets por @Identicket</a>
		<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
	</aside>

	<footer>
		<p>Contactanos: 555-3835 | Identicket ®</p>
	</footer>

    </body>
 </html>