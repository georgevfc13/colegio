<?php
// Configuración de conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$database = "colegio";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Establecer el charset a utf8
$conn->set_charset("utf8");

echo "Conectado exitosamente a la base de datos 'colegio'";
?>
