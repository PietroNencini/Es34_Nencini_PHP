<?php 
    session_start();
    if(!isset($_SESSION["maxPhr"]))
        $_SESSION["maxPhr"] = [];
    if(!isset($_SESSION["allChar"]))
        $_SESSION["allChar"] = 0;
    if(!isset($_SESSION["allWords"]))
        $_SESSION["allWords"] = 0;
?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Es 34- script</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    
    <h1 class="w-100 text-center bg-primary text-white"> DATI INSERITI </h1>

    <?php 
        $inserted_phrase = $_POST["phrase"];
        $priority = $_POST["priority"];

        if($priority == 4)
            array_push($_SESSION["maxPhr"], $inserted_phrase);

        $_SESSION["allChar"] += strlen($inserted_phrase);
        $_SESSION["allWords"] += str_word_count($inserted_phrase);
    ?>

    <div class="w-50 mx-auto text-center">
        <p class="fs-5"> Frase inserita: <br> <span style="color: green;"> <?php echo $inserted_phrase ?> </span> </p>
        <p> Importanza della frase: <?php echo $priority ?>/5  </p>
    </div>

    <a href="index.html" target="_blank" class="link fs-4 d-block w-50 mx-auto"> Torna alla Home Page </a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>