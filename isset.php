<?php
$var1 = "hola, mundo!";
$var2 = "";
if(isset($var1, $var2)) {
    echo "ambas ariables estan definidas";
} else{
    echo "al menos una de las variables no esta definida.";
}
echo "<br>"
?>

<?php
$array = array("nombre" => "juan", "edad" => 25);
if(isset($array("nombre"))) {
    echo "El indice 'nombre' esta definido en el array";
} else{
    echo "El indice 'nombre' no esta definido en el array";
}
?>