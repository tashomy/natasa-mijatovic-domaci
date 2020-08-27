<?php

include './connect.php';

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


    $sql_insert = " INSERT INTO podnosilac  
									(
										ime,
										prezime,
										jmbg, 
                                        grad_id
									)
								VALUES
									(
										'$ime',
										'$prezime',
										$jmbg,
                                        $grad_id
									)
						";
    $res_insert = mysqli_query($dbconn, $sql_insert);

    if ($res_insert) {
        header("location: ./index.php");
        exit();
    } else {
        exit("Greska pri izvrsavanju upita!");
    }
} else {
    exit("Nedozvoljen metod!");
}
