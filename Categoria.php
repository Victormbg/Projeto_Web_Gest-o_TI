<?php
include("Servico.php");
class Categoria extends Servico{
  var $categoria;
  
  function setCat($categoria){
  	$this->categoria=$categoria;
  }
  function getCat() {
  	return $this->categoria;
  }	
}
?>