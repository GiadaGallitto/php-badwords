<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Intro</title>
</head>

<body>
    <header>
        <h1>Parole proibite</h1>
    </header>
    <main>
        <form action="response.php" method="GET">
            <label for="paragraph">Inserisci il tuo testo</label>
            <input type="text" id="paragraph" name="paragraph">

            <label for="censured">Inserisci la tua parola da censurare</label>
            <input type="text" id="censured" name="censured">

            <button type="submit">Invia</button>
        </form>
    </main>
</body>
</html>