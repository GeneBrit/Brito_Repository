<?php
$host = 'localhost';    // Servidor de MySQL (localhost en XAMPP)
$dbname = 'bdparra'; // Nombre de la base de datos
$username = 'root';      // Usuario por defecto en XAMPP
$password = '';          // Contraseña, en XAMPP por defecto suele estar vacía

// Crear una conexión
  $conn = mysqli_connect($host, $username, $password, $dbname);

// Verificar la conexión
if ($conn) {
  echo "conexion exitosa";
} else {
    echo "Conexión no exitosa";
}
?>