<div id='chartOrigemMidia' style='width:48%; float:left;'>
    <!-- DASHBOARD -->
        <?php
        // QUERY PARA GRAFICO LINHAS POR UNIDADE POR MES
        $origem = array();
        $sql = "SELECT cli_como_conheceu, COUNT(cli_id) as cnt FROM cadastro_clientes 
                GROUP By cli_como_conheceu
                ";
        $stmt_grafico = $PDO->prepare($sql);        
        if($stmt_grafico->execute())
        {
            while($result_grafico = $stmt_grafico->fetch())
            {
                $origem[$result_grafico['cli_como_conheceu']] = $result_grafico['cnt'];                            
            }                
        }        
       

        
        ?>
    <!-- FIM DASHBOARD -->
    
</div>