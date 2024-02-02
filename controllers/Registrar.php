<?php
include('../config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombres = $conn->real_escape_string($_POST['nombres']);
    $apellidos = $conn->real_escape_string($_POST['apellidos']);
    $DNI = $conn->real_escape_string($_POST['DNI']);
    $correo = $conn->real_escape_string($_POST['correo']);

    $contraseña = $conn->real_escape_string($_POST['contraseña']);

    $hashed_contraseña = password_hash($contraseña, PASSWORD_DEFAULT);

    $sql = "CALL insertarUsuario('$nombres', '$apellidos', '$DNI', '$correo', '$hashed_contraseña')";
    
    // Usuario registrado exitosamente
    if ($conn->query($sql) === TRUE) {
        $conn->close();
        header("location: ../index.php");

        echo '<script>alert("Usuario registrado exitosamente.");</script>';
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
