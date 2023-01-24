
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>Document</title>
    </head>

    <body>
        <header class="text-center mb-5">
            <h1>Ecco a te il tuo risultato!</h1>
        </header>
        
        <main class="text-center">
            <div class="mb-5">
                <h4 class="text-danger">Paragrafo originale:</h4>
                <p class="fs-5">
                    <?php
                        $normalParagraph = $_POST['paragraph'];
                        echo $normalParagraph;
                    ?>
                    <span class="d-block fs-6 fw-bold">
                        Lunghezza =
                        <?php 
                            echo strlen($normalParagraph);
                        ?>
                        parole
                    </span>
                </p>
            </div>
            
            <div>
                <h4 class="text-success">Paragrafo censurato:</h4>
                <p class="fs-5">
                    <?php
                        $wordCensured = $_POST['censured'];
                    ?>
                    <?php
                        $newParagraph = str_ireplace($wordCensured, '***', $normalParagraph);
                        echo $newParagraph;
                    ?>
                    <span class="d-block fs-6 fw-bold">
                    Lunghezza =
                        <?php 
                            echo strlen($newParagraph);
                        ?>
                        parole
                    </span>
                </p>
            </div>
        </main>
    </body>
</html>