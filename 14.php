<?php
$l1 = $_POST["l1"];
$l2 = $_POST["l2"];

if($l1==null || $l2==null){
    echo "potrzebne sa liczby";
}else{
    echo "Dodawanie = " .($l1+$l2), "<br />";
    echo "Odejmowanie = " .($l1-$l2),"<br />";
    echo "Mnożenie = " .($l1*$l2),"<br />";;
    if($l2 == 0){
        echo "Nie można dzielić przez 0!";
    }else {
        echo "Dzielenie = " .($l1/$l2)."<br />";
    }
}
