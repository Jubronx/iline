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
            <div class = "wrapper">
                <div class = "center">
                    <div class = "bloco_info1">
                        <p>Cansado de <span class = "vinho">perder seu tempo</span> de intervalo em filas?</p>
                    </div>
                        <div>
                            <div class = "bloco_info2">
                                <div style = "width: 100%">
                                    <div class="icone">
                                        <img  src="core/imagens/reloginho.png" alt="">
                                    </div>
                                    <div class = "texto">
                                        <p class ="titulo">Não desperdice seu tempo</p>
                                    </div>
                                </div>
                            </div>
                            <div class = "bloco_info2" id = "background">
                                <div class="icone">
                                    <img  src="core/imagens/reloginho.png" alt="">
                                </div>
                                <div class = "texto">
                                    <p class ="titulo">Faça seu pedido antecipado</p>
                                </div>
                            </div>
                            <div class = "bloco_info2">
                                <div class="icone">
                                    <img  src="core/imagens/reloginho.png" alt="">
                                </div>
                                <div class = "texto">
                                    <p class ="titulo">Retire no horário marcado</p>
                                </div>
                            </div>
                        </div>    
                    </div>         
            </div>

        <div class="info">
            <div class = "wrapper">
                <div class = "bloco_l">
                    <div style = "border: 1px solid;text-align: -webkit-center;padding-bottom: 27px;border-radius: 20px; margin-bottom: 20px;">
                        <h2 > Instituições </h2>
                        <div class = "cadastro" >
                            <h3 class = "titulo">Cadastre-se e gerencie suas filas</h3>
                        </div>
                        <button class= "cadastro1" id =" ">Quero me cadastrar</button> 
                    </div>
                </div>
                <div class = "bloco_r">
                    <div style = "border: 1px solid;text-align: -webkit-center;padding-bottom: 27px;border-radius: 20px;">
                        <h2>Alunos e Professores </h2>    
                        <div class = "cadastro" >
                            <h3 class = "titulo">Cadastre-se e evite filas em seu intervalo</h3>
                        </div>
                        <button class = "cadastro2">Quero me cadastrar</button>
                    </div>
                </div>
            </div>
        </div>    
  
        
</body>
</html>
