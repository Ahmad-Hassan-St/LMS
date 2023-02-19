
<?php

session_start();

if (isset($_SESSION['cnic'])) {
require_once('database.php');
$db = new Database();
print_r($_POST);
if (isset($_POST['submit'])) {
    $username = $_POST["name"];
    $email = $_POST['email'];
    $Password = $_POST['password'];
    $Address = $_POST['address'];
    $Mobile = $_POST['mobile'];
    $CNIC = $_POST['cnic'];
    $dob = $_POST['dob'];
    $picture = $_POST['picture'];



    $dep = $_POST['department'];
    $salary = $_POST['salary'];

    $array=[
        'Name'=>$username,
        'email'=>$email,
        'password'=>$Password,
        'mobile'=>$Mobile,
        'address'=>$Address,
        'cnic'=>$CNIC,
        'dob'=>$dob,
        'salary'=>$salary,
        'Department'=>$dep,
        'picture'=>$picture
    ];
    $db->insertData('teacher',$array);
     echo "data added";
     header("location: AddTeacher.php");

}
//INSERT INTO `teacher` (`ID`, `picture`, `Name`, `Department`, `Title`, `cnic`, `password`, `father`, `dob`, `gender`, `bps`, `mobile`, `address`, `salary`, `email`) VALUES (NULL, '', 'ali', 'English', NULL, '33100', '1234', '', '', '', '', '', '', '', '');


} else {

    header("Location: index.php");
  
    exit();
  }
  
  ?>