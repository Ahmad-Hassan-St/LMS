
<?php

session_start();

if (isset($_SESSION['cnic'])) {


require_once('database.php');
$db = new Database();
print_r($_POST);
if (isset($_POST['submit'])) {
    //print_r($_POST);


    $id = $_POST['ID'];
    $username = $_POST["name"];
    $email = $_POST['email'];
    $Password = $_POST['password'];
    $Address = $_POST['address'];
    $Mobile = $_POST['mobile'];
    $CNIC = $_POST['cnic'];
    $dob = $_POST['dob'];
    $picture = $_POST['picture'];



    $salary = $_POST['salary'];
    $department = $_POST['department'];

    require_once("database.php");
    $db =  new PDO("mysql:host=localhost;dbname=lms", "root", "");
        
    $sql="UPDATE `teacher` SET `picture`=?,`Name`=?,`Department`=?,`cnic`=?,`password`=?,`dob`=?,`mobile`=?,`address`=?,`salary`=?,`email`=? WHERE ID=?;";
   // $sql=" UPDATE `student` SET `picture`=?,`Name`=?,`email`=?,`password`=?,`mobile`=?,`address`=?,`cnic`=?,`dob`=?,`batch`=?,`degree`=? WHERE ID =?;";
    // $sql = "DELETE FROM student WHERE `student`.`ID` = ?";
    // $statement = $db->prepare($sql);
    // $statement->execute(array($id));
    // echo("dataDeleted");
    $statement = $db->prepare($sql);
    $statement->execute(array($picture,$username,$department,$CNIC,$Password,$dob,$Mobile,$Address,$salary,$email, $id));//
    echo ("Data Updated");
    header("location: showTeacher.php");
    
    }

} else {

    header("Location: index.php");
  
    exit();
  }
  
  ?>