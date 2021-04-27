<?php
//VARIAVEIS
$null = '';
$inicio 	= date("Y-m")."-01";                
$hoje 		= date("Y-m-d")."";
$mes_passado_ini = date("Y-m",strtotime("-1 month"))."-01";
$mes_passado_fim = date("Y-m-d",strtotime("-1 month"));

$atual = $diferenca = $dif = $valor_old = $pc = "";

$sql = "SELECT COUNT(fot_id) as valor FROM cadastro_galeria_fotos";
$stmt = $PDO->prepare($sql);
$stmt->execute();
$rows = $stmt->rowCount();

if($rows > 0)
{
    while($result = $stmt->fetch())
    {
        $atual = str_pad($result['valor'],2,"0",STR_PAD_LEFT);          
    }
}

?>
<div class='quad-int'><i class="nc-icon nc-vector"></i>
    <i class="fas fa-camera purple"></i> 
    <div class='txt'>
        Fotos cadastradas<br>
        <span class='n'><?php echo $atual;?></span> <br>
    </div>		
    <div class='more'>
        <a href='cadastro_galeria/view'><i class="fas fa-cog"></i> Gerenciar</a>
    </div>
</div>