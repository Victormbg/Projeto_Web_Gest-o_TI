<style type="text/css">
body{
background-image:url('fundo.jpg');
color:white;
font-size:35px;
text-align:center;
}

input[type=button]{
	margin-top: 35px;
	background-color: #4CAF50;
  	border: none;
  	font-size:20px; 
  	color: white;
  	padding: 16px 32px;
  	text-decoration: none;
  	cursor: pointer;
}

input[type=button]:hover{
	margin-top: 35px;
	background-color: green;
  	border: none;
  	font-size:20px; 
  	color: white;
  	padding: 16px 32px;
  	text-decoration: none;
  	cursor: pointer;
}
</style>
<body>
<?php
function recuperar($nomeArq,$proc){
  $achou=false;
  $ptArq= fopen($nomeArq,"r");
  if(!$ptArq){
    printf("Impossivel abrir o arquivo");
    exit;
  }else{
		 while(!feof($ptArq) && $achou==false) {
			$char =fgets($ptArq);
			$pos=strpos($char,"#");  
			$nome=substr($char,0,$pos);
			$linha=substr($char,$pos+1);
			$pos=strpos($linha,"#");
			$data=substr($linha,0,$pos);
		 if ($nome==$proc)
			$achou=true;
			}  
		 $linha=substr($linha,$pos+1);
		 $pos=strpos($linha,"#");
		 $Des=substr($linha,0,$pos); 
		 $linha=substr($linha,$pos+1);
		 $pos=strpos($linha,"#");
		 $especial=substr($linha,0,$pos);
		 $linha=substr($linha,$pos+1);
		 $pos=strpos($linha,"#");
		 $categoria=$linha;
		 if (feof($ptArq)==false) {
			 print("<br>Nome do Profissional: <font color='lightgreen'>".$nome."<br></font>");
			 print "Data do Serviço: <font color='lightgreen'> ". $data."</font><br>";
			 print "Descrição do Serviço: <font color='lightgreen'>". $Des."</font><br>";
			 print "Equipamentos: <font color='lightgreen'>". $especial."</font><br>";
			 print "Categoria do Profissional: <font color='lightgreen'>". $categoria."</font><br>";
			 echo '<a href="index.php"><input type="button" value="Voltar"></a>';
		}
  }
    fclose($ptArq);
}

  function gravar($nomeArq,$linha) {
     print "Gravado no seu Disco Local $nomeArq";
     echo '<br>';
     echo '<a href="index.php"><input type="button" value="Voltar"></a>';
     echo '<br><br>';
    $linha=$linha . "\n";
     if(!file_exists($nomeArq)) {
      $ptArq=fopen($nomeArq,"w");
      fputs($ptArq,$linha);
      fclose($ptArq);
     }else{
       $ptArq=fopen($nomeArq,"a");
       fputs($ptArq,$linha);
       fclose($ptArq);
     }
  print("Concluido");
  }

  function grava($nome,$data,$Des,$especial,$tipo){
    $nomeArq="D:/victor/Cod.txt";
    $linha=$nome."#";
    $linha.=$data ."#";
    $linha.=$Des . "#";
    $linha.=$especial . "#";
    $linha.=$tipo;
    Gravar($nomeArq,$linha);
  }

  function recupera($proc){
    $nomeArq="D:/victor/Cod.txt";
    recuperar($nomeArq,$proc);
  }
?>
</body>    