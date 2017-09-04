
<!-- opration function constructor -->
<?php

function opration($a,$b,$opr){
    $res=0;
    switch($opr){
        case "+" :
            $res=$a+$b;
            break;
        case "-" :
            $res=$a-$b;
            break;
        case "*" :
            $res=$a*$b;
            break;
        case "/" :
            $res=$a/$b;
            break;
        default:
            echo 'Wrong';
    }
    return $res;
}


?>