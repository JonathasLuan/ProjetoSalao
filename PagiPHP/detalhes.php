<?php include_once("conexao.php");
$id_servico = $_GET['id_servico'];
$result_servico = "SELECT * FROM servico WHERE id='$id_servico'";
$resultado_servico = mysqli_query($conn, $result_servico);
$row_servico = mysqli_fetch_assoc($resultado_servico);
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Página de Serviços</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
		<div class="container theme-showcase" role="main">
			<div class="page-header">
				<h1><?php echo $row_servico['nome']; ?></h1>
			</div>
			<div>

			  <!-- Nav tabs -->
			  <ul class="nav nav-tabs" role="tablist">
				<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Conteúdo</a></li>
				<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Texto 1</a></li>
				<li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Texto 2</a></li>
				<li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Texto 3</a></li>
				<li role="presentation"><a href="#detalhes" aria-controls="detalhes" role="tab" data-toggle="tab">Texto 4</a></li>
				<li role="presentation"><a href="#tutores" aria-controls="tutores" role="tab" data-toggle="tab">Texto 5</a></li>
			  </ul>

			  <!-- Tab panes -->
			  <div class="tab-content">
				<div role="tabpanel" class="tab-pane active" id="home">
					<?php echo $row_servico['nome']; ?>
				</div>
				<div role="tabpanel" class="tab-pane" id="profile">
					<?php echo $row_servico['descricao']; ?>
				</div>
				<div role="tabpanel" class="tab-pane" id="messages">
					<?php echo $row_servico['preco']; ?>
				</div>
				<div role="tabpanel" class="tab-pane" id="settings">
					<?php echo $row_servico['categoria']; ?>
				</div>
				<div role="tabpanel" class="tab-pane" id="detalhes">
					<?php echo $row_servico['subcategoria']; ?>
				</div>
				<div role="tabpanel" class="tab-pane" id="tutores">
					<?php echo $row_servico['tempo']; ?>
				</div>
			  </div>

			</div>
		</div>
		
		
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>