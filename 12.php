<?php

if($_GET["n1"]==null || $_GET["n2"]==null){
    echo "Nie podano liczby";
}else{
    echo $_GET["n1"];
    echo " i ";
    echo $_GET["n2"];
    
}

?>