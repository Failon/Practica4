<?php

class contingut{
	protected $contingut;

	function __construct(){
		$this->contingut = "<section><p>Contingut de la Pagina</p></section></div>";
	}
	
	public function mostrar(){
		echo $this->contingut;
	}

}