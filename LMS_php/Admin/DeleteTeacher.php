 <!-- #region -->

 <?php

session_start();

if (isset($_SESSION['cnic'])) {

  
  


require_once("database.php");
$db =  new PDO("mysql:host=localhost;dbname=lms", "root", "");
if(isset($_GET["TeacherID"])){
    $id= $_GET["TeacherID"];

    
     
$sql = "DELETE FROM teacher WHERE `teacher`.`ID` = ?";
$statement = $db->prepare($sql);
$statement->execute(array($id));

header("location: ShowTeacher.php");

}


} else {

  header("Location: index.php");

  exit();
}

?>