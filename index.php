<?php

const API_URL = "https://whenisthenextmcufilm.com/api";
# Inicializar una nueva sesión de cURL; ch = cURL handle
$ch = curl_init(API_URL);
// Indicar que queremos recibir el resultado de la petición y no mostrarla en pantalla
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
/* Ejecutamos la petición y guardamos el resultado */
$result = curl_exec($ch);

if ($e = curl_error($ch)) {
    echo $e;
} else {
    $data = json_decode($result, true);
    var_dump($data);
}

curl_close($ch);

?>


<main>

</main>

<style>
    :root {
        color-scheme: light dark;
    }

    body {
        display: grid;
        place-content: center;
    }
</style>