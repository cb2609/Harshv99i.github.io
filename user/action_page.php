<?php

$firstname = $_GET['firstname'];
$lastname = $_GET['lastname'];
$gender = $_GET['gender'];
$bloodg = $_GET['blood group'];
$bday= $_GET['bday'];
$id= $_GET['userid'];
$pass= $_GET['psw'];
$email= $_GET['email'];
$mobile= $_GET['usrtel'];
$aadhar= $_GET['aadhar'];

try {
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "my_db";
    $dsn = "mysql:host=$host;dbname=$database";

    $conn = new PDO( $dsn, $username, $password );
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO userprofile("
    . "firstname, lastname, sex,bloodg,bday,id,pass,email,mobile,aadhar" 
    . " ) VALUES (" 
    . "'" . $firstname . "',"
    . "'" . $lastname . "',"
    . "'" . $gender . "',"
            . "'" . $bloodg . "',"
            . "'" . $id . "',"
            . "'" . $pass . "',"
            . "'" . $email . "',"
. "'" . $mobile . "',"
    . "'" . $aadhar .")";

    $conn->query($sql);

    $sql = "SELECT * FROM userdata";
    $userdata = $conn-query($sql);
    echo '<table>';
    echo '<tr>';
    echo '<th>First Name</th>
          <th>Last Name</th>
          <th>Gender</th>

    echo '<tr>';
    foreach ($userdata as $userdata) {
    echo '<tr>';
    echo '  <td>' . $userprofile['firstname'] . '</td>';
    echo '  <td>' . $userprofile['lastname'] . '</td>';
    echo '  <td>' . $userprofile['gender'] . '</td>';

    echo '  </tr> ';
}

echo '</table>';

        $conn = null;
    }
    catch (PDOException $e) {
        $conn = null;
        exit("Connection failed: " . $e->getMessage());
    }
?>

<?php
require_once '../Connection.php';
?>
