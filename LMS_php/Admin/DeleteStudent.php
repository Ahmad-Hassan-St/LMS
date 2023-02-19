<?php

session_start();

if (isset($_SESSION['cnic'])) {

  ?>

  <?php
require_once("database.php");
$db =  new PDO("mysql:host=localhost;dbname=lms", "root", "");
if(isset($_GET["studentID"])){
    $id= $_GET["studentID"];

    $data = [
        'ID' => $id,
       // 'used' => $used,
    ];
    
$sql = "DELETE FROM student WHERE `student`.`ID` = ?";
$statement = $db->prepare($sql);
$statement->execute(array($id));
echo("dataDeleted");

header("location: ShowStudent.php");

}
// $sql = "SELECT * FROM `auth` WHERE `Username` = ? AND `Password` = ?";

// $st = $this->db->prepare($sql);
// $st->execute(array($username, $password));
// $pdo = new PDO('dsn', 'username', 'password');
// $sql = "DELETE FROM table_name WHERE some_column = :some_value";
// $statement = $pdo->prepare($sql);
// $statement->execute(array(':some_value' => $someValue));


} else {

  header("Location: index.php");

  exit();
}

?>