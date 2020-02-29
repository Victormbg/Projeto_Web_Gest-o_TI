<?php
$nome=$_GET['nome'];
$data=$_GET['data'];
$Des=$_GET['descricao'];

   if($_GET['btn1']=="Recuperar"){
      Include("gravar.php");
      recuperar("D:/victor/Cod.txt",$nome);
   }else{
     if ($_GET['equipamentos'] != "NS") {
      $equipamentos = $_GET['equipamentos'];
      include("Equipamentos.php");
      $est = new Equipamentos(); 
      $est->setNome($nome);
      $est->setData($data);
      $est->setDescricao($Des);
      $est->setEquipamentos($equipamentos);
      $tipo="Equipamentos";
      Include("gravar.php");
      grava($est->getNome(),$est->getData(), $est->getDescricao(),$equipamentos ,$tipo);
   }else{
      include("Categoria.php");
      $categoria=$_GET['categoria'];
      $est = new Categoria();  
      $est->setNome($nome);
      $est->setData($data);
      $est->setDescricao($Des);
      $est->setCat($categoria);
      $tipo="categoria";
      Include("gravar.php");
      grava($est->getNome(),$est->getData(), $est->getDescricao(),$categoria ,$tipo);
   }
}
?>