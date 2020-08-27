<?php

include '../connect.php';

$grad_id = $_GET['grad_id'];

$sql = "SELECT * FROM podnosilac WHERE grad_id = $grad_id ORDER BY ime ASC";
$res = mysqli_query($dbconn, $sql);

$odgovor = "<option value=\"\"> - odaberite podnosioca - </option>";

while ($row = mysqli_fetch_assoc($res)) {
    $id_temp = $row['id'];
    $ime_temp = $row['ime'];
    $prezime_temp = $row['prezime'];
    $odgovor .= "<option value=\"$id_temp\" >$ime_temp $prezime_temp </option>";
}

echo $odgovor;
exit;
