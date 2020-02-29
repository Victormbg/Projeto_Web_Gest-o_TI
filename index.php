<!DOCTYPE html>
<html>
<head>
	<style>
	img {
	  border-radius: 50%;
	  float:right;
	  margin-top:80px;
	  margin-right:70px;
	}
	</style>
	<link rel="icon" href="img/icon.ico" type="image/x-icon" />
	<meta charset="utf-8">
	<link href="css/estilo.css" rel="stylesheet">
	<script type="text/javascript">
	function mascaraData(campoData){
		var data = campoData.value;
		if(data.length == 2){
			data += '/';
			document.forms[0].data.value = data;
			return true;
		}
		if(data.length == 5){
			data += '/';
			document.forms[0].data.value = data;
			return true;
		}
	}
	</script>
	<title>Gestão De TI</title>
</head>
<body>
	<h1>GESTÃO DE TECNOLOGIA DA INFORMAÇÃO</h1>
		<form method="get" action="script.php">
			<img src="css/gestao.png" width="550">
			<h2>Serviço</h2>
			<label>Nome do Profissional:</label>
			<input type="text" name="nome"><br><br>
			<label>Data:</label>
			<input type="text" name="data" onKeyUp="mascaraData(this);" maxlength="10"><br><br>
			<label>Descricão:</label>
			<input type="text" name="descricao"><br><br>
				
			<h2>Equipamento</h2>
			<label>Equipamentos:</label>
			<select name="equipamentos">
				<option value="NS">Não selecionado
				<option value="Computador">Computador
				<option value="Teclado">Teclado
				<option value="Mouse">Mouse
				<option value="Monitor">Monitor
				<option value="Estabilizador">Estabilizador
				<option value="Cabos de Energia">Cabos de Energia
			</select>
		
			<h2>Profissional</h2>
			<label>Categoria:</label>
			<select name="categoria">
				<option value="NS">Não selecionado
				<option value="Estagiario">Estagiario
				<option value="Suporte Técnico N1">Suporte Técnico N1
				<option value="Suporte Técnico N2">Suporte Técnico N2
				<option value="Suporte Técnico N3">Suporte Técnico N3
				<option value="Supervisor">Supervisor
			</select>
			
			<div id="botao">
				<input type = "submit" name= "btn1">
				<input type = "submit" name= "btn1" value= "Recuperar">
				<input type="reset" value="Limpar" />
			</div>
		</form>
</body>
</html>