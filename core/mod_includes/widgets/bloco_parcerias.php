<?php
//VARIAVEIS
$null = '';
$inicio 	= date("Y-m")."-01";                
$hoje 		= date("Y-m-d")."";
$mes_passado_ini = date("Y-m",strtotime("-1 month"))."-01";
$mes_passado_fim = date("Y-m-d",strtotime("-1 month"));

$atual = $diferenca = $dif = $valor_old = $pc = "";

$sql = "SELECT COUNT(par_id) as valor FROM cadastro_parcerias";
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
    <i class="fas fa-hands-helping green"></i> 
    <div class='txt'>
        Parcerias cadastradas<br>
        <span class='n'><?php echo $atual;?></span> <br>
    </div>		
    <div class='more'>
        <a href='cadastro_parcerias/view'><i class="fas fa-cog"></i> Gerenciar</a>
    </div>
</div>