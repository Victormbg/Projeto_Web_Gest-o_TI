<?php
class Servico {
   var $nome;
   var $data;
   var $descricao;
   
   function setNome($nome) {
    $this->nome=$nome;
   }
   function getNome() {
    return $this->nome;
   }	

   function setData($data) {
    $this->data=$data;
   }
   function getData() {
    return $this->data;
   }	  
   
   function setDescricao($descricao) {
    $this->descricao=$descricao;
   }
   
   function getDescricao() {
    return $this->descricao;
   }	
}
?>