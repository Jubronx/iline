<?php include('header.php');?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>i-Line</title>
</head>

<body>
<?php 
	include ('core/mod_topo/topo.php');
	include	('banner.php');
?>
     <div class="body">
        <div class = "bloco_info">
            <div class = "wrapper">
                <div class = "bloco_info1">
                    <p>Cansado de <span class = "vinho">perder seu tempo</span> de intervalo em filas</p>
                </div>
                 <div class = "bloco_info2">
                    <div class="icone">
                        <img src="core/imagens/reloginho.png" alt="">
                    </div>
                    <div class = "texto">
                        <p>Não desperdice seu tempo</p>
                    </div>
                </div>
                 <div class = "bloco_info3">
                     <div class="icone">
                        <img src="core/imagens/reloginho.png" alt="">
                    </div>
                    <div class = "texto">
                        <p>Faça seu pedido antecipado</p>
                    </div>
                </div>
                 <div class = "bloco_info4">
                    <div class="icone">
                        <img src="core/imagens/reloginho.png" alt="">
                    </div>
                    <div class = "texto">
                        <p>Retire no horário marcado</p>
                    </div>
                </div>

            </div>    
        </div>

        <div class="info">
            <p><h1>Cansado de perder seu tempo em filas?</h1></p>
            <div class = "bloco_l">
                <div class = "cadastro">
                    <h1>Cadastre seu estabelecimento e gerencie suas filas.</h1>
                    <button class= "login">Cadastre-se</button>
                </div>
            </div>
            <div class = "bloco_r">
                <div class = "cadastro">
                    <h1>Cadastre-se e evite filas em seu intervalo.</h1>
                    <button class = "login">Cadastre-se</button>
                </div>
            </div>
        </div>    
    </div> 
        <?php include('core/mod_rodape/rodape.php');?>
</body>
</html>
