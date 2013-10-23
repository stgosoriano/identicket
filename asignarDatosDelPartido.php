 <!--
 Encargado
		Programador: Santigo Soriano.
		Fecha: 05/19/2013
		Hora: 16:26
		
 Modificado
		Programador: xxxxxx yyyyyyyy.
		Fecha: xx/yy/zzzz
		Hora: hh:mm
 -->

<!doctype html>
 <html lang="es">
   <head>
      <meta charset="utf-8"/>   
      <title>Identicket - Datos del Partido</title>
      <link rel="stylesheet" type="text/css" href="estilos/estilo_index.css">
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
		<center>Datos del Partido</center>
		<article>
			<form action="actualizar.php" method="get">
				<table>
				<tr>
					<td>
						Campeonato:
					</td>
					<td>
						<select/>
									<option value="torneoApertura"> Torneo de Apertura </option>
									<option value="torneoClausura"> Torneo de Clausura </option>
									<option value="copaChile"> Copa Chile </option>
									<option value="copaLibertadores"> Copa Libertadores </option>
									<option value="copaSudamericana"> Copa Sudamericana </option>
									<option value="amistoso"> Partido Amistoso </option>
									<option value="eliminatorias"> Eliminatorias </option>
								  </select>
					 </td>
					 <td>
					   Recinto:
					  </td>
					  <td>
					  	<select/>
									<option value="torneoApertura"> Monumental David Arellano </option>
									<option value="torneoClausura"> Santa Laura - Universidad SEK </option>
									<option value="copaChile"> San Carlos de Apoquindo </option>
									<option value="copaLibertadores"> CAP </option>
									<option value="copaSudamericana"> Estadio Nacional </option>
						</select>
					  </td>
				  </tr>
				  <tr>
						<td>
							Fecha del Partido:
						</td>
						<td>
							<input type="datetime-local" name="fechaPartido" placeholder="Example: DD/MM/YYYY" required>
						</td>
						<td>
						</td>	  	
				  </tr>
				  <tr>
					    <td>	
							Inicio de Venta:
						</td>
						<td>
							<input type="datetime-local" name="inicioVenta" placeholder="Example: DD/MM/YYYY" required>   
						</td>
						<td>
							Fin de Venta:
						</td>
						<td>
							<input type="datetime-local" name=		"finVenta"  placeholder="Example: DD/MM/YYYY" required>
						</td>
				   </tr>
				   </table>
				<br>
				<!--Dependiendo del recinto, se carga las localidades-->
				<table>
				<tr>
					<td>Habilitada</td>
					<td>Localidad</td>
					<td>Cant. de Público</td>
					<td>Precio</td>
					<td>Visitante</td>
				</tr>
				<tr>
					<td  align="center"><input type="checkbox" name="arica" checked/></td>
					<td>Arica</td>
					<td><input type="text" name="totalPublicoArica" required/></td>
					<td><input type="text" name="precioArica" required/></td>
					<td  align="center"><input type="checkbox" name="habilitarArica"/></td>
				</tr>
				<tr>
					<td  align="center"><input type="checkbox" name="lautaro" checked/></td>
					<td>Lautaro</td>
					<td><input type="text" name="totalPublicoLautaro" required/></td>
					<td><input type="text" name="precioLautaro" required/></td>
					<td  align="center"><input type="checkbox" name="habilitarLautaro"/></td>
				</tr>
				<tr>
					<td  align="center"><input type="checkbox" name="cordillera" checked/></td>
					<td>Cordillera</td>
					<td><input type="text" name="totalPublicoCordillera" required/></td>
					<td><input type="text" name="precioCordillera" required/></td>
					<td  align="center"><input type="checkbox" name="habilitarCordillera"/></td>
				</tr>
				<tr>
					<td  align="center"><input type="checkbox" name="Galvarino" checked/></td>
					<td>Galvarino</td>
					<td><input type="text" name="totalPublicoGalvarino" required/></td>
					<td><input type="text" name="precioGalvarino" required/></td>
					<td  align="center"><input type="checkbox" name="habilitarGalvarino"/></td>
				</tr>
				<tr>
					<td  align="center"><input type="checkbox" name="magallanes" checked/></td>
					<td>Magallanes</td>
					<td><input type="text" name="totalPublicoMagallanes" required/></td>
					<td><input type="text" name="precioMagallanes" required/></td>
					<td  align="center"><input type="checkbox" name="habilitarMagallanes"/></td>
				</tr>
				<tr>
					<td  align="center"><input type="checkbox" name="caupolican" checked/></td>
					<td>Caupolican</td>
					<td><input type="text" name="totalPublicoCaupolican" required/></td>
					<td><input type="text" name="precioCaupolican" required/></td>
					<td  align="center"><input type="checkbox" name="habilitarCaupolican"/></td>
				</tr>
				<tr>
					<td  align="center"><input type="checkbox" name="oceano" checked/></td>
					<td>Océano</td>
					<td><input type="text" name="totalPublicoOceano" required/></td>
					<td><input type="text" name="precioOceano" required/></td>
					<td  align="center"><input type="checkbox" name="habilitarOceano"/></td>
				</tr>
				<tr>
					<td  align="center"><input type="checkbox" name="tucapel" checked/></td>
					<td>Tucapel</td>
					<td><input type="text" name="totalPublicoTucapel" required/></td>
					<td><input type="text" name="precioTucapel" required/></td>
					<td  align="center"><input type="checkbox" name="habilitarTucapel"/></td>
				</tr>
				<tr>
					<td  align="center"><input type="checkbox" name="rapanui" checked/></td>
					<td>Rapa-nui</td>
					<td><input type="text" name="totalPublicoRapanui" required/></td>
					<td><input type="text" name="precioRapanui" required/></td>
					<td  align="center"><input type="checkbox" name="habilitarRapanui"/></td>
				</tr>
				
				</table>
				<br>
				<p>Público Total:<input type="text" name="totalPublico" required/></p>
				<p><input type="checkbox" name="habilitarVenta"/> Habilitar Venta </p>
				<!--Fin carga de localidades-->
	    		<center><input type="submit" name="Guardar" value="Guardar"></center>
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