<?php

class peu{
	protected $contingut;
	protected $tancament;

	function __construct(){
		$this->contingut = "<footer><center><p>@CopyRight: pepito.enterprise";
		$this->tancament ="</p></center></footer></body>";

	}

	public function mostrar(){
		echo $this->contingut;
		echo $this->tancament;
	}
	

}