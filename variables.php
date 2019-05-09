<?php 
    //variables de texto
    $palabra = "Alumno de ITI TAW";
    echo "Esto es una variable de texto: $palabra <br>";
    echo($palabra);
    var_dump($palabra);
    echo "<br><br>";
    //variable de arreglo
    $colores = array (
        "rojo", "amarillo"
    );
    echo "Esto es una variable de arreglo: $colores <br>";
    echo($palabra);
    var_dump($palabra);
    echo "<br><br>";
    //variable de arreglo con propiedades
    $verduras = array(
        "verdura1" => "lechuga", "verdura2" => "cebolla", "verdura3" => "tomate"
    );
    echo "Esto es una variable arreglo con propiedades $verduras[verdura1] <br> ";
    var_dump($verduras);
    echo "<br><br>";
    //variables de tipo objeto 
    $frutas =(object) ["fruta1" => "pera", "frutas2" => "sandia"];
    echo "Esto es una variable de tipo objeto: $frutas->fruta1 <br>";
    var_dump($frutas);
?>