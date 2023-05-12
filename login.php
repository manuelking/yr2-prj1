<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body class="index">

<section>
<div class="text-center">
    <button type="button" class="btn btn-info btn-large text-white mb-4" data-toggle="modal" data-target="#exampleModalCenter">
      Learn about this project!
    </button>
  </div>
    
    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">About this project</h5>
            </button>
          </div>
          <div class="modal-body">
          <h1>Assignment: Web Development</h1><br>
            <p>
              Programming anguages and tools: HTML, CSS, PHP. Additionally, XAMPP was used to host the 
              application on a local web server, as well as phpMyAdmin to manage the MySQL database.<br><br>
              About: We were assigned a scenario and databse, and were required to create a PHP web 
              application that would demonstrate, browse functionality, create functionality, authentication 
              and authorisation, writing maintainable code and CSS and design.<br><br>
              This particular application would be created around the Queensgate Airlines scenario which 
              featured several tables including flights, crew and so on. Users can log into the application, 
              view a list of flights dynamically generated from the database and authorised users only can 
              create new flights. The application was built using code that was sturectured effectively 
              using MVC principles and the CSS optimised to ensure, pages load quickly, not noisy, has a cohesive 
              consistent design and is easy to navigate. <br><br>
            How to use: <br> 
            1. Login in using one of the following credentials - <br>
            - email: k.l.hutton@assign3.ac.uk password: password <br>
            - email: y.miandad@assign3.ac.uk password: letmein <br>
            - email: s.laxman@assign3.ac.uk password: password2<br><br>
            Different users have different roles and so will be authorised to access pages in the application.<br><br>
            2. Navigate the application.<br>
            

    
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
</section>

<div class="header">
  <a href="index.html"><img src="img/paperplane3.jpg" alt="plane logo"></a>
  Queensgate Airlines
</div>

<section class="text-center">
<h2>Welcome to Queensgate Airlines</h2>
<p>Please Login</p>
<?php
if(isset($_SESSION["error_msg"])){
  echo "<p>{$_SESSION["error_msg"]}</p>";
}
?>

<form action="login_process.php" method="post">
    <label for="username">Email address:</label>
    <input type="email" id="email" name="email">
    <label for="password" >Password:</label>
    <input type="password" id="password" name="password">
    <input type="submit" name="login" value="Login">
</form>
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.7.2/css/all.css"></script>
</body>
</html>
