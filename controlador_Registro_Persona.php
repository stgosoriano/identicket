<?php



			$run				=	$_POST['runPersona'];
			$nombre				=	$_POST['nombrePersona'];
			$apellidoPaterno	=	$_POST['apellidoPaternoPersona'];
			$apellidoMaterno	=	$_POST['apellidoMaternoPersona'];
			$telefono			=	$_POST['telefonoPersona'];
			$email				=	$_POST['emailPersona'];
			$pass1				=	$_POST['pass1Persona'];
			$pass2				=	$_POST['pass2Persona'];
			$fechaNacimiento	=	$_POST['fechaNacimientoPersona'];
			$direccion			=	$_POST['direccionPersona'];
			$pais				=	$_POST['pais'];
			$region				=	$_POST['region'];
			$ciudad				=	$_POST['ciudad'];
			$comuna				=	$_POST['comuna'];



echo "$run";
echo "$nombre";
echo "$apellidoPaterno";
echo "$apellidoMaterno";
echo "$telefono";
echo "$email";
echo "$pass1";
echo "$pass2";
echo "$fechaNacimiento";
echo "$direccion";
echo "$pais";
echo "$region";
echo "$ciudad";
echo "$comuna";




/*
	$run			=	$_POST['runPersona'];
	echo $run;

			  	function requerido($run)
					{
					     $valor=trim($valor);
					     if(empty($valor))
					     {
					          return true; // Error significa que el campo esta vació
					     }
					     else
					     {
					          return false; // el campo tiene un valor
					     }
					}


				function numerico($valor)
					{
					     if(empty($valor))
					     {
					           return false; //campo vacio no validar
					     }
					     else
					     {
					           if(ctype_digit($valor))
					          {
					               return false; // Si es un número
					          }
					          else
					          {
					                return true; // Error no es un número
					          }
					     } 
					}






			class Persona
		{
			public $run				=	$_POST['runPersona'];
			public $nombre			=	$_POST['nombrePersona'];
			public $apellidoPaterno	=	$_POST['apellidoPaternoPersona'];
			public $apellidoMaterno	=	$_POST['apellidoMaternoPersona'];
			public $telefono		=	$_POST['telefonoPersona'];
			public $email			=	$_POST['emailPersona'];
			public $pass1			=	$_POST['pass1Persona'];
			public $pass2			=	$_POST['pass2Persona'];
			public $fechaNacimiento	=	$_POST['fechaNacimientoPersona'];
			public $direccion		=	$_POST['direccionPersona'];
			public $pais			=	$_POST['pais'];
			public $region			=	$_POST['region'];
			public $ciudad			=	$_POST['ciudad'];
			public $comuna			=	$_POST['comuna'];
			
			
		
					public function __construct($run)
					{
		
						$this->run=$run;
					} 

				
					public function identificarCasa()
				{
					echo 'Es una casa';
				}
			
			$objPersona = new Persona();
			$objPersona->identificarCasa();
			echo $objPersona -> run;
			}
			*/
			
?>
		

