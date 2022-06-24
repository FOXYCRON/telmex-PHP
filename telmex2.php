<html>
<head>
<title>CheckBox</title>
</head>
<body background= "imagenes/telmex.jpg">
<h1 align=center><font color=White face="Lucida Sans Unicode" size=6>Telmex</font></h1>
<font color=white face="Cooper" size=3>
<?
echo "<br>Nombre: ";
echo $_REQUEST['nom'];
echo "<br><br>Apellido: ";
echo $_REQUEST['apell'];

if (isset($_REQUEST['check1']) && ($_REQUEST['check2'])) {
$paquete=698;
echo "<br><br>La contratacion de su paquete tiene un costo de:$" . $paquete;
}else{

if (isset($_REQUEST['check1'])) {
$tel=299;
echo "<br><br>La contratacion de su paquete tiene un costo de:$" . $tel . "<br>";
}
else{
if (isset($_REQUEST['check2'])) {
$internet=399;
echo "<br><br>La contratacion de su paquete tiene un costo de:$" . $internet;
}
}
}


?>
</body>
</html>