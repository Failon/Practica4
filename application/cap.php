<?php

class cap{
	protected $apertura;
	protected $contingut;
	protected $tancament;

	function __construct(){
		$this->apertura = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>Practica4</title><style type='text/css' rel='styles/styles.css'></style></head><body><header><center><h1>";
		$this->contingut = "Practica4";
		$this->tancament = "</h1></center></header>";
	}

	public function mostrar(){
		echo $this->apertura;
		echo $this->contingut;
		echo $this->tancament;
	}


}