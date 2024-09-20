<?php
$name = $_POST["name"];
$date = $_POST["date"];
$time = $_POST["time"];
$temp = $_POST["temp"];
$nodo = $_POST["nodo"];
$outo = $_POST["outo"];
$geri = $_POST["geri"];
$zutu = $_POST["zutu"];
$kusuri = $_POST["kusuri"];
$shokuji = $_POST["shokuji"];
$memo = $_POST["memo"];
$c = ",";
$str = $name.$c.$date.$c.$time.$c.$temp.$c.$nodo.$c.$outo.$c.$geri.$c.$zutu.$c.$kusuri.$c.$shokuji.$c.$memo;

$file = fopen("data.csv","a");
fwrite($file, $str."\n");
fclose($file);

header("Location: index.php");
exit;
?>