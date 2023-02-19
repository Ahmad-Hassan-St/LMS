
<?php

session_start();

if (isset($_SESSION['cnic'])) {

  
  


require_once('database.php');
$db = new Database();
print_r($_POST);
if (isset($_POST['submit'])) {
    $username = $_POST["Name"];
    $email = $_POST['Email'];
    $Password = $_POST['Password'];
    $Address = $_POST['Address'];
    $Mobile = $_POST['Mobile'];
    $CNIC = $_POST['CNIC'];
    $dob = $_POST['dob'];
    $picture = $_POST['picture'];



    $degree = $_POST['degree'];
    $Batch = $_POST['Batch'];

    $array=[
        'Name'=>$username,
        'email'=>$email,
        'password'=>$Password,
        'mobile'=>$Mobile,
        'address'=>$Address,
        'cnic'=>$CNIC,
        'dob'=>$dob,
        'batch'=>$Batch,
        'degree'=>$degree,
        'picture'=>$picture
    ];
    $db->insertData('student',$array);
    // echo "data added";
    // $db->AddStudentRecord("34434",null,$username,null,$email,$Password,$Mobile,$Address,null,null,$CNIC,$dob,$Batch,$degree);
    //$db->AddStudentRecord($username, $email, $Password);
    echo "data added";
    header("Location: AddStudent.php?id=1");

}


} else {

  header("Location: index.php");

  exit();
}

?>