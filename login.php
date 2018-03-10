<<?php
 ob_start();
 session_start();
 require_once 'db_connect.php';

 // it will never let you open index(login) page if session is set
 if ( isset($_SESSION['user'])!="" ) {
  header("Location: index.php");
  exit;
 }

 $error = false;

 if( isset($_POST['btn-login']) ) {

  // prevent sql injections/ clear user invalid inputs
  $email = trim($_POST['email']);
  $email = strip_tags($email);
  $email = htmlspecialchars($email);

  $pass = trim($_POST['pass']);
  $pass = strip_tags($pass);
  $pass = htmlspecialchars($pass);
  // prevent sql injections / clear user invalid inputs

  if(empty($email)){
   $error = true;
   $emailError = "Please enter your email address.";
  } else if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
   $error = true;
   $emailError = "Please enter valid email address.";
  }

  if(empty($pass)){
   $error = true;
   $passError = "Please enter your password.";
  }

  // if there's no error, continue to login
  if (!$error) {

   $password = hash('sha256', $pass); // password hashing using SHA256

   $res=mysqli_query($conn, "SELECT userId, userName, userPass FROM users WHERE userEmail='$email'");
   $row=mysqli_fetch_array($res, MYSQLI_ASSOC);
   $count = mysqli_num_rows($res); // if uname/pass correct it returns must be 1 row

   if( $count == 1 && $row['userPass']==$password && $email=="admin@admin.com") {
    $_SESSION['user'] = $row['userId'];
    header("Location: home2.php");
   }

   else if( $count == 1 && $row['userPass']==$password ) {
    $_SESSION['user'] = $row['userId'];
    header("Location: index.php");
   } else {
    $errMSG = "Incorrect Credentials, Try again...";
   }

  }

 }
 ?>

<!DOCTYPE html>

<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <title>Events in Viena</title>
</head>
<body>
<nav class="navbar navbar-fixed-top">
      <div class="container-fluid">
        <ul class="nav navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" href="#">ALL EVENTS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">MUSIC</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">SPORT</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">MOVIES</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">THEATER</a>
            </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            
        </ul>
      </div>
    </nav>
    
    <div class="wide">
        <div class="col-xs-5 line"><hr></div>
        <div class="col-xs-2 logo">EVENTS IN VIENA</div>
        <div class="col-xs-5 line"><hr></div>
    </div>


    <div class="container">
    
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">

   

     

             <h2>Sign In.</h2>

             <hr />

             

            <?php

   if ( isset($errMSG) ) {



echo $errMSG; ?>

               

                <?php

   }

   ?>

           

           

             

             <input type="email" name="email" class="form-control" placeholder="Your Email" value="<?php echo $email; ?>" maxlength="40" />

         

             <span class="text-danger"><?php echo $emailError; ?></span>

   

           


             <input type="password" name="pass" class="form-control" placeholder="Your Password" maxlength="15" />

         

            <span class="text-danger"><?php echo $passError; ?></span>


             <hr />


             <button type="submit" name="btn-login">Sign In</button>

           

           

             <hr />

   

             <a href="register.php">Sign Up Here...</a>

       

           

    </form>

</div>

    </div>


</div>


</body>

</html>

<?php ob_end_flush(); ?>