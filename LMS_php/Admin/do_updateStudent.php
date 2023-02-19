
<?php

session_start();

if (isset($_SESSION['cnic'])) {

require_once('database.php');
$db = new Database();
print_r($_POST);
if (isset($_POST['submit'])) {
    $id = $_POST['ID'];
    $username = $_POST["name"];
    $email = $_POST['email'];
    $Password = $_POST['password'];
    $Address = $_POST['address'];
    $Mobile = $_POST['mobile'];
    $CNIC = $_POST['cnic'];
    $dob = $_POST['dob'];
    $picture = $_POST['picture'];



    $degree = $_POST['degree'];
    $Batch = $_POST['batch'];

    $array = [
        'Name' => $username,
        'email' => $email,
        'password' => $Password,
        'mobile' => $Mobile,
        'address' => $Address,
        'cnic' => $CNIC,
        'dob' => $dob,
        'batch' => $Batch,
        'degree' => $degree,
        'picture' => $picture
    ];

    require_once("database.php");
    $db =  new PDO("mysql:host=localhost;dbname=lms", "root", "");
        

    $sql=" UPDATE `student` SET `picture`=?,`Name`=?,`email`=?,`password`=?,`mobile`=?,`address`=?,`cnic`=?,`dob`=?,`batch`=?,`degree`=? WHERE ID =?;";
    
    $statement = $db->prepare($sql);
    $statement->execute(array($picture,$username,$email,$Password,$Mobile,$Address,$CNIC,$dob,$Batch,$degree,$id));//
    //echo ("Data Updated");
    header("location: ShowStudent.php");
    
    }


} else {

    header("Location: index.php");
  
    exit();
  }
  
  ?>