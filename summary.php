<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Es 34 - riepilogo</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    
    <h1 class="w-100 text-center bg-primary text-white"> RIEPILOGO </h1>

    <?php 
        if(!isset($_SESSION["maxPhr"]) || !isset($_SESSION["allChar"]) || !isset($_SESSION["allWords"])) {
            echo "Nessuna frase ancora inserita";
            exit();
        }
    ?>

    <div class="w-75 mx-auto bg-body-secondary shadow-lg my-3 p-3">
        <p>  </p>
        <ul style="list-style-type: none; color: green">
            <?php
                if(count($_SESSION["maxPhr"]) > 0) {
                    foreach($_SESSION["maxPhr"] as $phrase) {
                        echo "<li> $phrase </li> ";
                    }
                } else  
                    echo "<li style='color: black;'> Nessuna frase con importanza massima inserita </li>";
            ?>
        </ul>
    </div>
    <div class="w-75 mx-auto bg-body-secondary shadow-lg my-3 p-3">
        <p> Dati su tutte frasi inserite finora </p>
        <table class="table rounded-3">
            <tr>
                <th>Numero di parole</th>
                <th>Numero di caratteri totali</th>
            </tr>
            <tr>
                <td><?php echo $_SESSION["allWords"] ?></td>
                <td><?php echo $_SESSION["allChar"] ?></td>
            </tr>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>