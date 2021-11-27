<?php 


$db_server = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "finate";


$connect = mysqli_connect($db_server, $db_user, $db_password, $db_name) or die("Bazaga ulanishda xatolik");


if(isset($_POST['register'])){
    $email = $_POST['email'];
    $password1 = $_POST['password'];
    $password = $password1;
    $confirmation = $_POST['confirm'];
    $time = time(); 
    if($confirmation == $password){
    $sql_admin_add = "INSERT INTO `admin` (`id`, `email`, `password`, `created_date`, `status`) VALUES (NULL, '$email', '$password', '$time', '0');";
    $res = mysqli_query($connect, $sql_admin_add);
    header("Location: login.php");
    
  }else{
    header("Location: registration.php");
  }
  }

?>

