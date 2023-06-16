<?php
require_once "list.php";

if (isset($_POST['guardar'])) {

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $edad = $_POST['edad'];
    $especialidad = $_POST['especialidad'];

    $ch = curl_init();

    $url = 'http://localhost/psicologa/psicologia1/apirest/controllers/psychology.php?op=insert';

    // Datos que se enviarán en la solicitud POST
    $data = array(
        'nombre' => $nombre,
        'apellido' => $apellido,
        'edad' => $edad,
        'especialidad' => $especialidad
    );

    // Configurar opciones de cURL
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 
    // Realizar la solicitud POST
    $response = curl_exec($ch);
    if (curl_errno($ch)) echo curl_error($ch); 
    else $decoded=json_decode($response,true);
    
    echo "<script>alert('Los datos fueron guardados satisfactoriamente');</script>";
} 
?>

