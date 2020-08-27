<?php

include '../connect.php';

$sql = "SELECT * FROM grad ORDER BY id ASC";
$res = mysqli_query($dbconn, $sql);

$odgovor = "<option value=\"\"> - odaberite grad - </option>";

while ($row = mysqli_fetch_assoc($res)) {
	$id_temp = $row['id'];
	$naziv_temp = $row['naziv'];
	$odgovor .= "<option value=\"$id_temp\" >$naziv_temp</option>";
}

echo $odgovor;
exit;
