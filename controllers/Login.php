<?php
session_start();
include('../config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $conn->real_escape_string($_POST['usuario']);
    echo '<script>alert("'.$usuario.'");</script>';
    $contraseña = $conn->real_escape_string($_POST['contraseña']);

    $sql = "SELECT id, contraseña FROM usuarios WHERE correo = '$usuario'";
    $result = $conn->query($sql);

    if ($result) {
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            if (password_verify($contraseña, $row['contraseña'])) {
                $_SESSION['login_user'] = $usuario;
                header("location: ../vistas/principal.php");
                exit(); // Importante para evitar que el código se siga ejecutando después de redirigir.
            } else {
                echo '<script>alert("Contraseña incorrecta."); window.location.href = "../index.php";</script>';
                exit;
            }
        } else {
            echo '<script>alert("Usuario no encontrado."); window.location.href = "../index.php";</script>';
            exit;
        }
    } else {
        echo "Error en la consulta: " . $conn->error;
    }

    $conn->close();
}
?>

