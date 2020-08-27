<?php

include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    if (isset($_POST['ime']) && $_POST['ime'] != "") {
        $ime = $_POST['ime'];
    } else {
        exit("Morate unijeti ime podnosioca!");
    }
    if (isset($_POST['prezime']) && $_POST['prezime'] != "") {
        $prezime = $_POST['prezime'];
    } else {
        exit("Morate unijeti prezime podnosioca!");
    }
    if (isset($_POST['jmbg']) && is_numeric($_POST['jmbg'])) {
        $jmbg = $_POST['jmbg'];
    } else {
        exit("Morate unijeti JMBG podnosioca!");
    }
    if (isset($_POST['grad_id']) && is_numeric($_POST['grad_id'])) {
        $grad_id = $_POST['grad_id'];
    } else {
        exit("Morate odabrati grad!");
    }
    // salje se u skrivenom polju
    if (isset($_POST['id_za_izmjenu']) && is_numeric($_POST['id_za_izmjenu'])) {
        $id_za_izmjenu = $_POST['id_za_izmjenu'];
    } else {
        exit("Morate predati ID!");
    }

    $sql_update = "
					UPDATE podnosilac SET  
										ime = '$ime',
										prezime = '$prezime',
										jmbg = $jmbg,
										grad_id = $grad_id
					WHERE id = $id_za_izmjenu
				";
    $res_update = mysqli_query($dbconn, $sql_update);

    if ($res_update) {
        header("location: ./index.php");
        exit();
    } else {
        exit("Greska u upitu za izmjenu!");
    }
} else {
    exit("Nedozvoljen metod!");
}
