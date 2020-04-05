<?php
$l1 = $_GET["l1"];
$l2 = $_GET["l2"];
if($l1==null || $l2==null){
    echo "Nie podano liczby";
}else{
    echo "pierwsza liczba $l1, druga liczba $l2";
}
