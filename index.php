<?php
  $badword = $_GET['badword'];
  $paragrafo = 'Sono un paragrafo di testo '.$badword;
  $paragrafoLunghezza = strlen($paragrafo);
  $paragrafoCensurato = str_replace($badword,'***',$paragrafo);
  $paragrafoCensuratoLunghezza = strlen($paragrafoCensurato);
?>
  <h2>Uncensored</h2>
  <p> <?php echo $paragrafo ?> e sono lungo <?php echo $paragrafoLunghezza ?> caratteri </p>
  <h2>Censored</h2>
  <p> <?php echo $paragrafoCensurato ?> e sono lungo <?php echo $paragrafoCensuratoLunghezza ?> caratteri </p>
