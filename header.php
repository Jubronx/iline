<?php ob_start();	    
    setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
    date_default_timezone_set('America/Sao_Paulo');
    require_once("core/mod_includes/php/ctracker.php");
    require_once("core/mod_includes/php/parametros.php");
    
    $ttl = "s3tecnologia"; 
    session_start(); 

?>
<!-- <base href="https://<?php echo $_SERVER['HTTP_HOST'];?>/" /> -->
<base href="http://<?php echo $_SERVER['HTTP_HOST'];?>/iline/" />

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5.0">
<meta name="author" content="MogiComp">
	<meta http-equiv="Content-Language" content="pt-br">

<!-- INCLUDES PHP -->


<!-- ESTILO CSS -->
<link rel="stylesheet" type="text/css" href="core/css/estilo.css">
<link rel="stylesheet" type="text/css" href="core/css/animate.css">
<link rel="shortcut icon" href="core/imagens/favicon.png">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    
<!-- JAVASCRIPT -->
<script src="core/mod_includes/js/jquery-1.8.3.min.js"></script>
<script src="core/mod_includes/js/funcoes.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="core/mod_includes/js/wow.min.js"></script>
<script>
	 new WOW().init();
</script>



