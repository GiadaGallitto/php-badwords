<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Php Intro</title>
</head>

<body>
    <header class="text-center">
        <h1>Parole proibite</h1>
        <h4>Scrivi il tuo testo personale ed una parola che vuoi censurare al suo interno, una volta inviato, potrai vedere il tuo parafrago scritto, e al di sotto il paragrafo con le parole scelte censurate da degli asterischi</h4>
        <h2>Buona scrittura!</h2>
    </header>
    <main class="text-center">
        <form action="response.php" method="POST">
            <div class="text mb-3 row">
                <label for="paragraph">Inserisci il tuo testo</label>
                <input type="text" class="w-25 mx-auto" id="paragraph" name="paragraph">
            </div>

            <div class="word mb-3 row">                
                <label for="censured">Inserisci la tua parola da censurare</label>
                <input type="text" class="w-25 mx-auto" id="censured" name="censured">
            </div>

            <button class="btn btn-success" type="submit">Invia</button>
        </form>
    </main>
</body>
</html>