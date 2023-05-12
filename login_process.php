<?php
session_start();
?>
<!DOCTYPE html>
<html lang = "en">
<head>
<title>Login Process</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
</head>

<body>

  <?php
include "connect.php";


if(isset($_POST['login']))
{
    $email=$_POST['email'];
    $password=$_POST['password'];
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = :email");
    $stmt->bindValue(':email',$email);
    $stmt->execute();
    $login=false;
    if($row = $stmt->fetch()){
        if (password_verify($password, $row['password'])) {
          $login=true;
        }
    }
    if($login){
        $_SESSION["user"]=$email;
        header( "Location: page1.php" );
    }else{
        $_SESSION["error_msg"]="Wrong login details";
        header( "Location: login.php" );
    }
}else{
    header( "Location: login.php" );
}

$email=$_POST['email'];
  $password=$_POST['password'];
  $stmt = $conn->prepare("SELECT * FROM users WHERE email = :email");
  $stmt->bindValue(':email',$email);
  $stmt->execute();
  $login=false;
  if($row = $stmt->fetch()){
      if (password_verify($password, $row['password'])) {
        $_SESSION["user"]=$email;
        $_SESSION["role"]=$row['role'];
        header( "Location: index.php" );
      }
  }
  ?>

</body>
</html>
