<?php

class menu{

	protected $contingut;

	function __construct(){

		$this->contingut = Array("cap","menu","contingut","peu");

	}

	public function mostar(){
		$max = sizeof($this->contingut);
		echo "<div class='navegacio'><nav><ul>";
		for($i=0;$i<$max;$i++){
			echo "<li>".$this->contingut[$i]."</li>";
		}
		echo "</ul></nav>";
	}

}