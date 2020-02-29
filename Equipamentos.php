<?php
include("Servico.php");
class Equipamentos extends Servico{
  var $equipamentos;
  
  function setEquipamentos($equipamentos) {
  	$this->equipamentos=$equipamentos;
  }
  function getEquipamentos() {
  	return $this->equipamentos;
  }	
}
?>