<?php
$msg = "sua média é:";
$nome = "ketilyn";
$m1 = 8;
$m2 = 9;
$m3 = 1;
$média = 0;
$média = (($m1 + $m2 + $m3)/3);

if ($média >=9) {
    echo "MB";
}

if ($média < 8 && $média >= 7) {
    echo "B";
}

if ($média < 7 && $média >= 4) {
echo "R";
}

if ($média < 4) {
 echo "I";
}
   
