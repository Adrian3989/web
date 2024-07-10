<?php
$servername = "localhost";
$username = "root";         
$password = "";
$dbname = "deli-house"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("La conexión ha fallado: " . $conn->connect_error);
}

$nombre = htmlspecialchars($_POST['name']);
$telefono = htmlspecialchars($_POST['phone']);
$direccion = htmlspecialchars($_POST['adress']);
$tipo_envio = htmlspecialchars($_POST['tipo-envio']);
$carrito = isset($_POST['carrito']) ? json_encode($_POST['carrito']) : '';
$fecha = date("Y-m-d");

$sql = "INSERT INTO pedido (NOMBRE, TELÉFONO, ENVÍO, DIRECCIÓN, PRODUCTOS, FECHA)
        VALUES (?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);

if ($stmt === false) {
    die("Error al preparar la consulta: " . $conn->error);
}

$stmt->bind_param("ssssss", $nombre, $telefono, $tipo_envio, $direccion, $carrito, $fecha);

if ($stmt->execute() === TRUE) {
    echo "Pedido realizado con éxito.";
    header("refresh:5;url=index.html");
} else {
    echo "Error al realizar el pedido: " . $stmt->error;
}

// Cerrar la conexión a la base de datos
$stmt->close();
$conn->close();
?>
