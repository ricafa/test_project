<?php 
$titulo = (isset($_GET['titulo']) ? $_GET['titulo'] : 'Meu Titulo');
?>
<!DOCTYPE html>
<html>
<head>
	<title><?=$titulo?></title>
</head>
<body>
<span>
	<?=(isset($_GET['titulo']) ? 'Salvo com sucesso!' : '')?>
</span>
<form action="home.php" method="get" accept-charset="utf-8">
	<input type="hidden" name="titulo" value="Nosso Titulo">
	<input type="submit" value="Novo Título">
</form>
<script>
	function mudaTitlo(){
		document.title="Nosso Título";
	}
</script>
</body>
</html>