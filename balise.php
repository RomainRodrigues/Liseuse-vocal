#!/usr/bin/php
<?php
    $fic_config = 'lienConfig';
    $print=0;
    $conf = file("$fic_config");
    $nom = "text1";
    foreach($conf as $line){
        $file = fopen("$nom" . ".txt","w");
        $lien = $line;
        $lien = rtrim($lien);
        $data = file("$lien");
        foreach($data as $key => $ligne){
            $regex_1 = preg_match('%<p>%', $ligne);
            $regex_2 = preg_match('%</p>%', $ligne);
            if($regex_2 == 1){
                $print = 0;
            }
            if($print == 1){
                $ligne = trim($ligne);
                fwrite($file, $ligne);
            }
            if($regex_1 == 1){
                $print = 1;
            }
        }
        $nom++;
        fclose($file);
    }
?>
