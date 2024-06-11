<?php
const API_URL = 'https://whenisthenextmcufilm.com/api';
# Inicializar una nueva sesión de cURL; ch = curl handle
$ch = curl_init(API_URL);
// Indicar que queremos recibir el resultado de la petición y no mostrarla en pantalla
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
/** Ejecutar la petición
 * y guardamos el resultado
 */
$result = curl_exec($ch);
// una alternativa sería usar file_get_contents
// $result = file_get_contents(API_URL); // si solo quieres hacer un GET de una API
$data = json_decode($result, true);
curl_close($ch);
// var_dump($data);
?>

<head>
    <title>MCU's Next Movie</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Centered viewport -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css" />
</head>
<main>
    <pre>
        <? var_dump($data) ?>
    </pre>
    <section>
        <img src="<?= $data['poster_url'] ?>" alt="<?= $data['title'] ?>" width="200" style="border-radius: 16px" />
    </section>
    <hgroup>
        <h3>
            <?= $data['title'] ?>
            will be released in <?= $data['days_until'] ?> days
        </h3>
        <p>
            Release Date <?= $data['release_date'] ?>
        </p>
        <p>
            The next movie of the Marvel Cinematic Universe is <?= $data['following_production']['title'] ?>
        </p>
    </hgroup>
</main>

<style>
    :root {
        color-scheme: light dark;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }

    body {
        background-color: white;
        color: black;
        display: grid;
        place-content: center;
    }

    img {
        margin: 0 auto;
    }

    section {
        display: flex;
        justify-content: center;
        text-align: center;
    }

    hgroup {
        display: flex;
        flex-direction: column;
        justify-content: center;
        text-align: center;
    }

    @media (prefers-color-scheme: dark) {
        body {
            background-color: black;
            color: white;
        }
    }
</style>