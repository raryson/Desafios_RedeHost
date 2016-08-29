<?php
//le o json
$arquivo = "signos.json";
$info = file_get_contents($arquivo);
$campo = json_decode($info);


    //pageview
    $cont = $campo->pageview;
    $aquario = $campo->aquario;
    $aries = $campo->aries;
    $cancer = $campo->cancer +1;
    $capricornio = $campo->capricornio;
    $escorpiao = $campo->escorpiao;
    $gemeos = $campo->gemeos;
    $leao = $campo->leao;
    $libra = $campo->libra;
    $peixes = $campo->peixes;
    $sagitario = $campo->sagitario;
    $touro = $campo->touro;
    $virgem = $campo->virgem;
    
  

$signos = array("aquario"=> $aquario, "aries"=> $aries, "cancer"=> $cancer,
"capricornio"=> $capricornio, "escorpiao"=> $escorpiao, "gemeos"=> $gemeos, "leao"=> $leao,
"libra"=> $libra, "peixes"=> $peixes, "sagitario"=> $sagitario, "touro"=> $touro, "virgem"=> $virgem,
"pageview"=>$cont);

$json_str = json_encode($signos);
$fp = fopen('signos.json', 'w');
fwrite($fp, $json_str);
fclose($fp);


?>