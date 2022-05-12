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
    <body>
        <div class="container">
            <div class="row">
                <div class="col"></div>
                <div class="col-6">
                    <?php
                        $query = "SELECT * FROM artista;";
                        $result = mysqli_query($connessione, $query) or die("Query fallita " . mysqli_error($connessione) . " " . mysqli_errno($connessione));
                    ?>
                    <form action="" method="post">
                        <select class="form-select" name="artista" id="artista">
                            <option selected>Si scelga l'artista di cui si vuole vedere le opere</option>
                            <?php
                                while ($row = mysqli_fetch_assoc ($result)){
                                    echo "<option value=" . $row['id_artista'] . ">" . $row['nome_artista'] . $row['cognome_artista'] . "</option>";
                                }
                            ?>
                        </select>
                    </form>
                </div>
                <div class="col"></div>
                
            </div>
        </div>
    </body>
</html>