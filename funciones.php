<?php
//funciones sin propiedades
function saludo (){
    echo "Hola, soy alumna de ITI <br>";
}
saludo();
//funcion con parametro
function despedida($adios){
    echo $adios, "<br>";
}
despedida("Adios a todos <br>");
function retorno ($retornar){
    return $retornar;
}
echo retorno("Funciones");
?>