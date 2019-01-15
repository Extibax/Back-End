<?php

if(isset($_GET['firstN']) && isset($_GET['secondN'])){

    $firstN = $_GET['firstN'];
    $secondN = $_GET['secondN'];

    if($firstN < $secondN){
        for( $i = $firstN; $i <= $secondN; $i++){
            echo "<h3>$i</h3>";
        }
    }else{
        echo "<h1>El primer numero debe de ser menor que el segundo numero</h1>";
    }
    
}else {
    echo "<h1>Inserte los numeros por la URL</h1>";
}