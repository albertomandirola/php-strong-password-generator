<?php
function generatePass($num,$array){
    $pass ='';
    for ($i = 0; $i < $num; $i++) {     
        $rest = substr($array, rand(0, strlen($array)), 1);
        $pass .= ($rest);
    }
    return $pass;
}

 

?>