<?php
include './connect.php';

$sql = " 
        SELECT
            p.id as id,
            p.ime as ime,
            p.prezime as prezime,
            g.naziv as grad
        FROM podnosilac as p
        JOIN grad as g
        ON p.grad_id = g.id
";

$res = mysqli_query($dbconn, $sql);
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uredjivanje podnosioca</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="text-center mt-5">Uredi podnosioce</h3>
                <div class="table-responsive">
                    <table class="table table-hover mt-5">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Ime</th>
                                <th>Prezime</th>
                                <th>Grad</th>
                                <th>Brisanje</th>
                                <th>Izmjena</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                            while ($row = mysqli_fetch_assoc($res)) {
                                $id_temp = $row['id'];
                                $ime_temp = $row['ime'];
                                $prezime_temp = $row['prezime'];
                                $grad_temp = $row['grad'];

                                $link_brisanje = "<a href=\"brisanje_podnosioca.php?id=$id_temp\" > <i class=\"fa fa-times\" ></i> </a>";

                                $link_izmjena = "<a href=\"izmjena_podnosioca.php?id=$id_temp\" > <i class=\"fa fa-edit\" ></i> </a>";

                                echo "<tr>";
                                echo "	<td>$id_temp</td>";
                                echo "	<td>$ime_temp</td>";
                                echo "	<td>$prezime_temp</td>";
                                echo "	<td>$grad_temp</td>";
                                echo "	<td>$link_brisanje</td>";
                                echo "	<td>$link_izmjena</td>";
                                echo "</tr>";
                            }

                            ?>

                        </tbody>
                    </table>
                </div>
                <div>
                    <a href="unos_podnosioca.php" class="btn btn-warning mt-5">Dodaj podnosioca</a>
                </div>
                <div>
                    <a href="index.php" class="btn btn-dark mt-5">Nazad na pocetnu</a>
                </div>
            </div>
        </div>




        <!-- <div class="row">
            <div class="col-4">
                <a class="btn btn-secondary mr-4 mt-5" href="unos_podnosioca.php">Unesi podnosioca</a>
            </div>
            <div class="col-4">
                <a class="btn btn-secondary mr-4 mt-5" href="izmjena_podnosioca.php">Izmijeni podnosioca</a>
            </div>
            <div class="col-4">
                <a class="btn btn-secondary mr-4 mt-5" href="brisanje_podnosioca.php">Izbrisi podnosioca</a>
            </div>
        </div> -->
        <!-- <div class="row">
            <div class="col-4">
                <a href="nova_primjedba.php" class="btn btn-primary mt-5">Dodaj primjedbu</a>
            </div>
        </div> -->
    </div>




    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>