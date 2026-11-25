<!doctype html>
<html lang = "es">
<head>
<?php
echo "<h3>MatrizA;(/h3>";
$MatrizA=array();
echo "<table border='1'>";
$valor1=100;
for ($f=0; $f<3; $f++) {
   for ($c=0; $c<3; $c++) {
$numeros[$f][$c] = $valor1;
$valor1+=10;
echo "<td>",$numeros[$f][$c],"</td>";}
echo "</tr>";
}
echo "</table>";

echo "<br>";

echo "<h3>MatizB:</h3>";
$matrizB=array();

echo "<table border='1'>";

$valor2=500;
for ($f=0; $f<3; $f++) {
	echo "<tr>";
for ($c=0; $c<3; $c++) {
$numeros2[$f][$c] = $valor2;
$valor2+=20;
echo "<td>",$numeros2[$f][$c],"</td>";}
echo "</tr>";
}
echo "</table>";
echo "<br>";

echo "<h3>MatrizC:</h3>";
$matrizC=array();
echo "<table border='1'>";
for ($f=0; $f<3; $f++) {
	echo "<tr>";
	for ($c=0; $c<3; $c++) {
		$valor3=$numeros[$f][$c]+$numeros2[$f][$c];
		$numeros3[$f][$c] = $valor3;
		echo"<td>",$numeros3[$f][$c],"</td>";}
		echo"</tr>";
	    }
	    echo "</table>";
	    
