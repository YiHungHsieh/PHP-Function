<?php

require 'functions.php';

$res_add = opration(100,20,"+");

echo '加法輸出結果 = '.$res_add; echo'<br/>';
echo '減法輸出結果 = '.opration(100,20,"-"); echo'<br/>';
echo '乘法輸出結果 = '.opration(100,20,"*"); echo'<br/>';
echo '除法輸出結果 = '.opration(100,20,"/");


?>