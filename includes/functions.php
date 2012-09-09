<?php
function valideaza_nume(){

}
function valideaza_email(){

}
function validare_data($data){
    list($zi,$luna,$an) = preg_split('/[ \.\-\/]/',$data);
    return ($zi>=1 && $zi<=31 && $luna>=1 && $luna<=12);
}

?>
