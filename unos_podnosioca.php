<?php

include './connect.php';
?>
<!DOCTYPE html>
<html>

<head>
    <title>Novi podnosilac</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>

    <div class="container">

        <div class="row">
            <div class="col-8 offset-2">
                <h3 class="text-center mb-3 mt-3 ">Dodavanje novog podnosioca</h3>

                <form action="./dodaj_podnosioca.php" method="POST">

                    <div class="form-group">
                        <label for="ime_input">Ime podnosioca</label>
                        <input type="text" name="ime" id="ime_input" class="form-control" placeholder="Unesite ime podnosioca..." required>
                    </div>

                    <div class="form-group">
                        <label for="prezime_input">Prezime podnosioca</label>
                        <input type="text" name="prezime" id="prezime_input" class="form-control" placeholder="Unesite prezime podnosioca..." required>
                    </div>

                    <div class="form-group">
                        <label for="jmbg_input">JMBG podnosioca</label>
                        <input type="number" name="jmbg" id="jmbg_input" class="form-control" placeholder="Unesite JMBG podnosioca..." required>
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
                                echo "<option value=\"$id_temp\" >$naziv_temp</option>";
                            }
                            ?>
                        </select>
                    </div>

                    <button type="sumbit" name="submit" class="btn btn-success btn-block mt-5">Dodaj podnosioca</button>
                </form>
                <div>
                    <a href="uredjuj_podnosioce.php" class="btn btn-dark mt-5">Nazad</a>
                </div>
                <div>
                    <a href="index.php" class="btn btn-dark mt-5">Nazad na pocetnu</a>
                </div>
            </div>
        </div>

    </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>