<?php
$host = "sehatcodekar.000webhostapp.com";
$username = "id6571714_sehatcodekar";
$password = "9351449307";
$database = "id6571714_user";
$dsn = "mysql:host=$host;dbname=$database";
try {
$conn = new PDO( $dsn, $username, $password );
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//$conn = null;
}
catch (PDOException $e) {
$conn = null;
exit("Connection failed: " . $e->getMessage());
}
?>
