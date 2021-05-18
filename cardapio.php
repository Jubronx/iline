<?php 
	/*if (!isset($_SESSION['id_aluno'])) {
		// vai pra pagina inicial
	}*/

	if (!isset($_GET['id_cantina']) || !isset($_GET['categoria'])) {
		header('location: index.php');
		return;
	} 

	$id_cantina = $_GET['id_cantina'];
	$categoria = $_GET['categoria'];

	include('core/mod_includes/php/connect.php');

	$sql = 'SELECT nome_instituicao FROM cantina WHERE id = ' . $id_cantina;
	$result = mysqli_query($conn, $sql);

	if (!mysqli_num_rows($result) == 1)
		return;

	$cantina = mysqli_fetch_assoc($result);

	$sql = 'SELECT nome, descricao, preco, categoria FROM produto WHERE cantina_id = '. $id_cantina;
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
		$produtos = mysqli_fetch_all($result, MYSQLI_ASSOC);
	} else {
		$produtos = 'Nenhum produto encontrado';
	}

	$sql = 'SELECT periodo, TIME_FORMAT(abertura, "%H:%i") AS abertura, TIME_FORMAT(fechamento, "%H:%i") AS fechamento
		FROM horario_funcionamento WHERE cantina_id = ' . $id_cantina;
	$result = mysqli_query($conn, $sql);	
	
	if (mysqli_num_rows($result) != 3)
		return;

	$horarios = mysqli_fetch_all($result, MYSQLI_ASSOC);
	$horarioManha = $horarios[0];
	$horarioTarde = $horarios[1];
	$horarioNoite = $horarios[2];
	
	include('header.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>i-Line</title>
	<script src="core/mod_includes/js/jquery-3.4.1.min.js"></script>
</head>

<body>
<?php 
	include ('core/mod_topo/topo.php');
?>
	<?php include('core/mod_rodape/rodape.php');?>

	<br><h1 class="vinho">Bem-vindo à 
		<span class="laranja"><?php echo $cantina['nome_instituicao']; ?></span>
	</h1>

	<p class="laranja centralizado">O que você <b>deseja comer?</b></p>

	<div class = "wrapper">
		<div class="categoria">
			<div>
				<a href="cardapio.php?id_cantina=<?php echo $id_cantina; ?>&categoria=Pizza">
					<div class="fundo-categoria">
					</div>
					<img src="core/imagens/pizza.png" alt="">
				</a>
					<div>
						<p>Pizza</p>
					</div>
			</div>
		</div>

		<div class="categoria">
			<div>
				<a href="cardapio.php?id_cantina=<?php echo $id_cantina; ?>&categoria=Salgado">
					<div class="fundo-categoria">
					</div>
					<img src="core/imagens/salgado.png" alt="">
				</a>
					<div>
						<p>Salgado</p>
					</div>
			</div>
		</div>
		
		<div class="categoria">
			<div>
				<a href="cardapio.php?id_cantina=<?php echo $id_cantina; ?>&categoria=Lanche">
					<div class="fundo-categoria">
					</div>
					<img src="core/imagens/lanche.png" alt="">
				</a>
					<div>
						<p>Lanche</p>
					</div>
			</div>
		</div>

		<div class="categoria">
			<div>
				<a href="cardapio.php?id_cantina=<?php echo $id_cantina; ?>&categoria=Doces">
					<div class="fundo-categoria">
					</div>
					<img src="core/imagens/doces.png" alt="">
				</a>
					<div>
						<p>Doces</p>
					</div>
			</div>
		</div>

		<div class="categoria">
			<div>
				<a href="cardapio.php?id_cantina=<?php echo $id_cantina; ?>&categoria=Bebidas">
					<div class="fundo-categoria">
					</div>
					<img src="core/imagens/bebidas.png" alt="">
				</a>
					<div>
						<p>Bebidas</p>
					</div>
			</div>
		</div>
	</div>

	<div>
		<?php foreach ($produtos as $produto) : ?>
			<?php if($produto['categoria'] == $categoria) : ?>
				<div>
					<img src="core/imagens/lanche.png" alt="Alimento">
					<h3><?php echo $produto['nome']; ?></h3>
					<p><?php echo $produto['descricao']; ?></p>
					<p class="laranja"><?php echo $produto['preco']; ?></p>
				</div>
			<?php endif; ?>
		<?php endforeach; ?>
	</div>

	<footer class="footer">
		<p><b>Horário de Funcionamento:</b></p>
		<p>
			<span>Manhã: 
				<?php 
					if ($horarioManha['abertura'] != null)
						echo $horarioManha['abertura'] . ' às ' . $horarioManha['fechamento'];
					else 
						echo 'Não atendemos de manhã';
				?>
			</span>
			|
			<span>Tarde: 
				<?php 
					if ($horarioTarde['abertura'] != null)
						echo $horarioTarde['abertura'] . ' às ' . $horarioTarde['fechamento'];
					else 
						echo 'Não atendemos de manhã';
				?>
			</span>
			|
			<span>Noite: 
				<?php 
					if ($horarioNoite['abertura'] != null)
						echo $horarioNoite['abertura'] . ' às ' . $horarioNoite['fechamento'];
					else 
						echo 'Não atendemos de noite';
				?>
			</span>
		</p>
	</footer>
</body>
</html>