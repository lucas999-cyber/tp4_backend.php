<! DOCTYPE html>
<html lang="en">
<cabeza>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" contenido="IE=edge">
    <meta nombre="ventana gráfica" content="width=device-width, initial-scale=1.0">
    <título>tp4_backend.php</título>
</cabeza>
<cuerpo>
<?php
eco"<h3>MATRICES</h3>";
eco "1. Almacenar en un array los 10 primeros números pares y mostrar en pantalla uno bajo del otro.<br><br>";
 $array=[2,4,6,8,10,12,14,16,18,20];
foreach($matriz como  $num){
    eco"$num<br><br>";
}
eco"<br>";
eco "2. Crear un array e introducir los valores: Pedro, Ana, 34 y 1, sin asignar el índice de la
Matriz. Mostrar el esquema del array con print_r().<br><br>";
 $array=[ "Pedro", "Ana", 34 , 1,];
foreach($matriz como  $valor){
    eco"<br>";
    print_r($valor);
}

eco"<br><br>";
eco "3. Crear un array asociativo e introducir los valores siguientes:
Nombre: Pedro
Apellido: Torres
Dirección: Av. Alcalde 3703
Teléfono: 1122334455
<br><br>";
$arreglo=[
"Nombre"=> "Pedro",
"Apellido"=> "Torres",
"Dirección"=> "Av. Mayor 3703",
"Teléfono" => 1122334455,
];
foreach ($matriz como  $indice =>  $valor){
    eco"$indice => $valor <br><br>";

}


eco "4. Crear un array introduciendo las ciudades: Madrid, Barcelona, Londres, Nueva York, Los Ángeles y
Chicago, sin asignar los índices al array. Una continuación, muestra el contenido del arreglo de discos.
Ejemplo: La ciudad con el índice 0 tiene el nombre Madrid.<br><br>";

 $array=[ "Madrid", "Barcelona", "Londres", "Nueva York", "Los Ángeles",
"Chicago"];
foreach ($matriz como  $indice =>  $valor){
    eco"$indice => $valor <br><br>";

}


eco "5. Repite el ejercicio anterior pero ahora se ha creado índices, MD para Madrid, BCL para Barcelona,
LD para Londres, NY para Nueva York, LOS Ángeles y CCG para Chicago.
Ejemplo: El índice de Madrid es MD.<br><br>";

 $array=["MD"=>"Madrid",
"BCL"=>"Barcelona",
"LC" => "Londres",
"NY" =>"Nueva York",
"LA" => "Los Ángeles",
"CCG" => "Chicago"];

foreach ($matriz como  $indice =>  $valor){
    eco"$indice => $valor <br><br>";

}






?>

</cuerpo>
</HTML>
