<?php
session_start();
include "./Pages/connessione.php";
?>
<html>

<head>
    <link rel="stylesheet" href="./CSS/bootstrap.css" type="text/css">
    <script src="./JS/bootstrap.js"></script>
    <title>Museo</title>
    <link rel="icon" href="./Images/favicon.ico">
</head>

<body class="bg-dark">
    <form action="./Pages/opere.php" method="post">
        <div class="container">
            <div class="row">
                <div class="col"></div>
                <div class="col-6">
                    <h1 class="alert alert-success" style="text-align:center">DATABASE OPERE</h1>
                </div>
                <div class="col"></div>
            </div>
            <div class="row">
                <div class="col"></div>
                <div class="col-6">
                    <?php
                    $query = "SELECT * FROM artista;";
                    $result = mysqli_query($connessione, $query) or die("Query fallita " . mysqli_error($connessione) . " " . mysqli_errno($connessione));
                    ?>

                    <select class="form-select" name="artista" id="artista">
                        <option selected>Si scelga l'artista di cui si vuole vedere le opere</option>
                        <?php
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<option value=" . $row['id_artista'] . ">" . $row['nome_artista'] . $row['cognome_artista'] . "</option>";
                        }
                        ?>
                    </select>

                </div>
                <div class="col"></div>
            </div>
            <div class="row">
                <div class="col-3"></div>
                <div class="col-6" style="text-align:center">
                    <br>
                    <input class="btn btn-primary" type="submit" value="Cerca Opere">
                </div>
                <div class="col-3"></div>
            </div>
        </div>
    </form>
</body>

</html>