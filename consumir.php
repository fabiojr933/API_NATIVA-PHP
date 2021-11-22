<?php

$token = "66d81c0d-ab3c-4166-8ea2-486d958ea343";

$ch = curl_init('http://localhost/api/usuarios/listar/');

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Authorization: Bearer ' . $token
));

$data = curl_exec($ch);
$info = curl_getinfo($ch);

var_dump($data);

curl_close($ch);
