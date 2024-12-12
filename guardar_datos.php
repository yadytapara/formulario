<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $asunto = $_POST['asunto'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];

    $sql = "INSERT INTO contactos (nombre, apellidos, asunto, email, mensaje) 
            VALUES ('$nombre', '$apellidos', '$asunto', '$email', '$mensaje')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
                alert('Registro guardado correctamente.');
                window.location.href = 'index.html';
              </script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
