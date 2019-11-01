<?php

    

  function exibirSaldos() { 

    //include "movimento_caixaDAO.php"; 
    echo '<ul class="list-group mb-3">';
    
    // Saldo Anterior 
    echo '<li class="list-group-item d-flex justify-content-between lh-condensed">'; 
    echo '  <div>'; 
    echo '    <h6 class="my-0"> Saldo Anterior </h6>'; 
    echo '    <small class="text-muted"> Breve descrição </small>'; 
    echo '  </div>';
    echo '  <span class="text-muted"> R$ ';  
         
    $saldoAnterior = obterSaldoAnterior( $_SESSION['dataCaixa'] );
    
    echo formatarMoeda($saldoAnterior);
    echo '</span>';
    echo '</li>'; 
    
    // Entrada 
    echo '<li class="list-group-item d-flex justify-content-between lh-condensed">'; 
    echo '  <div>'; 
    echo '    <h6 class="my-0"> Entrada </h6>'; 
    echo '    <small class="text-muted"> Breve descrição </small>'; 
    echo '  </div>';
    echo '  <span class="text-muted"> R$ ';  
    
    $entrada = obterEntrada( $_SESSION['dataCaixa'] ); 
    
    echo formatarMoeda( $entrada ); 
    
    echo '</span>';
    echo '</li>'; 

    // Saida  
    echo '<li class="list-group-item d-flex justify-content-between lh-condensed">'; 
    echo '  <div>'; 
    echo '    <h6 class="my-0"> Saída </h6>'; 
    echo '    <small class="text-muted"> Breve descrição </small>'; 
    echo '  </div>';
    echo '  <span class="text-muted"> R$ ';  
    
    $saida = obterSaida( $_SESSION['dataCaixa'] );
        
    echo formatarMoeda( $saida ); 
    
    echo '</span>';
    echo '</li>'; 

    // Saldo Atual  
    echo '<li class="list-group-item d-flex justify-content-between">'; 
    echo '<span> Saldo Atual </span>';  
    $saldoAtual = $saldoAnterior + $entrada - $saida; 
    echo '<strong> R$ '. formatarMoeda( $saldoAtual ).'</strong>'; 
    echo '</span>';
    echo '</li>'; 
    echo '</ul>';

}


?>