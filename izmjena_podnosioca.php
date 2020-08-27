<?php

include './connect.php';

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id_za_izmjenu = $_GET['id'];
} else {
    exit("Morate odabrati ID podnosioca za izmjenu!");
}

$sql = "SELECT * FROM podnosilac WHERE id = $id_za_izmjenu";
$res = mysqli_query($dbconn, $sql);
$row = mysqli_fetch_assoc($res);

$ime_podnosioca = $row['ime'];
$prezime_podnosioca = $row['prezime'];
$jmbg_podnosioca = $row['jmbg'];
$grad_id = $row['grad_id'];

?>
<!DOCTYPE html>
<html>

<head>
    <title>Izmjena podnosioca</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>

    <div class="container">

        <div class="row">
            <div class="col-8 offset-2">
                <h3 class="text-center mb-3 mt-3 ">Izmjena podnosioca</h3>

                <form action="./izmjeni_podnosioca_back.php" method="POST">

                    <input type="hidden" name="id_za_izmjenu" value="<?= $id_za_izmjenu ?>">

                    <div class="form-group">
                        <label for="ime_input">Ime podnosioca</label>
                        <input type="text" name="ime" id="ime_input" class="form-control" placeholder="Unesite ime podnosioca..." required value="<?php echo $ime_podnosioca ?>">
                    </div>

                    <div class="form-group">
                        <label for="orezime_input">Prezime podnosioca</label>
                        <input type="text" name="prezime" id="prezime_input" class="form-control" placeholder="Unesite prezime podnosioca..." required value="<?php echo $prezime_podnosioca ?>">
                    </div>

                    <div class="form-group">
                        <label for="jmbg_input">JMBG podnosioca</label>
                        <input type="number" name="jmbg" id="jmbg_input" class="form-control" placeholder="Unesite JMBG podnosioca..." required value="<?php echo $jmbg_podnosioca ?>">
                    </div>

                    <div class="form-group">
                        <label for="grad_select">Grad</label>
                        <select name="grad_id" class="form-control" id="grad_select" required>
                            <option value="">- odaberite grad -</option>
                            <?php
                            $sql_grad = "SELECT * FROM grad ORDER BY naziv ASC";
                            $res_grad = mysqli_query($dbconn, $sql_grad);

                            while ($row_grad = mysqli_fetch_assoc($res_grad)) {
                                $id_temp = $row_grad['id'];
                                $naziv_temp = $row_grad['naziv'];

                                $selected = "";
                                if ($id_temp == $grad_id)
                                    $selected = "selected";

                                echo "<option value=\"$id_temp\" $selected >$naziv_temp</option>";
                            }
                            ?>
                        </select>
                    </div>

                    <button type="sumbit" name="submit" class="btn btn-success btn-block mt-5">Izmijeni podnosioca</button>
                </form>

            </div>
        </div>

    </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>