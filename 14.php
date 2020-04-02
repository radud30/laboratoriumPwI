<?php

if($_POST["n1"]==null || $_POST["n2"]==null){
    echo "Nie podano liczby";
}else{
    echo "Dodawanie: ", $_POST["n1"] + $_POST["n2"],"<br />";
    echo "Odejmowanie: ", $_POST["n1"] - $_POST["n2"],"<br />";
    echo "Mnożenie: ", $_POST["n1"] * $_POST["n2"],"<br />";
    if($_POST["n2"]==0){
        echo "Dzielenie przez 0";
    }else{
       echo "Dzielenie: ", $_POST["n1"] / $_POST["n2"],"<br />"; 
    }
    
}

?>