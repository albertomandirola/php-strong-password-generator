<?php
function generatePass($num,$string){
    $pass ='';
    for ($i = 0; $i < $num; $i++) {     
        $rest = substr($string, rand(0, strlen($string)), 1);
        $pass .= ($rest);
    }
    return $pass;
}

 

?>