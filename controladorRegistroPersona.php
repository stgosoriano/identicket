
<?php

	class Registro{
	
		/*	
			En una clase, la funcion que este afuera de una clase se llama funcion, si la funcion esta dentro de la clase se llama método.
			Una variable fuera de la clase se llama variable, si la variable esta dentro de la clase se llama atributo o propiedad.
			
			private significa que es restringido y no se puede cambiar
			una variable dentro de la clase se llama 
		*/
		
		public $run= "14683901-0";
		public $nombre="santiago";
		public $apellidoPaterno="soriano";
		public $apellidoMaterno="coronel";
		public $email= "ing.stgo.soriano@gmail.com";
		public $pass= "123456";
		public $pass2="123456";
		public $fechaNacimiento="13/03/91";
		public $telefono= 81521150;
		
		
		public function __construct($run,$nombre,$apellidoPaterno) {
		
			$this->run=run;
			$this->nombre=nombre;
			$this->apellidoPaterno=apellidoPaterno;
		} 
		
		public function __destruct(){
			unset (this->run);
			unset (this->nombre);
			unset (this->apellidoPaterno);
			
			echo "Objeto Destruido";
		}
}	
	//instancio la clase
	$Registro = new Registro("999", "pepe", "rojas");
	//llamo a la clase e imprimo el atributo
	echo $Registro->run;
	
?>