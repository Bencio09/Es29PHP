<?php
    session_start();
    include "./connessione.php";
    $autore = $_POST["artista"];
?>
<html>
    <head>
        <link rel="stylesheet" href="../CSS/bootstrap.css" type="text/css">
        <script src="../JS/bootstrap.js"></script>
        <title>Museo</title>
        <link rel="icon" href="../Images/favicon.ico">
    </head>
    <body class="bg-dark">
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
                        $query = "SELECT opera.nome_opera, opera.tipo_opera FROM opera WHERE opera.id_artista = $autore;";
                        $result = mysqli_query($connessione, $query) or die("Query fallita " . mysqli_error($connessione) . " " . mysqli_errno($connessione));
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "
                                <div class='card' style='width: 18rem;'>
                                    <div class='card-body'>
                                        <h5 class='card-title'>$row[nome_opera]</h5>
                                        <h6 class='card-subtitle mb-2 text-muted'>Tipo di opera: $row[tipo_opera]</h6>
                                    </div>
                                </div>
                                <br>
                            ";
                        }
                    ?>
                    
                </div>
                <div class="col"></div>
                
            </div>
        </div>
    </body>
</html>