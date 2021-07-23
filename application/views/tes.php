<?php
$a = "run winner";
$t = str_replace(" ","",$a);
$hasil = count_chars($t,1);
$konsonan = str_split(str_replace(["a","i","u","e","o"], "",$t));

$aw = $konsonan[0];
$ak = $konsonan[1];
// foreach ($hasil as $key => $value) {
// 	echo chr($key);
// 	echo "<br>";
// }


?>