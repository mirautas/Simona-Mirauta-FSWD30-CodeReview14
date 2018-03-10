<?php


require_once 'actions/db_connect.php';


if($_GET['id']) {

    $id = $_GET['id'];

 

    $sql = "SELECT * FROM event WHERE id = {$id}";

    $result = $connect->query($sql);

    $data = $result->fetch_assoc();

 
    $connect->close();

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
                <a class="nav-link active" href="index.php">ALL EVENTS</a>
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
            <li class="nav-item">
                <a class="nav-link active" href="logout.php?logout"><span class="glyphicon glyphicon-log-out"></span> LOGOUT</a>
            </li>
        </ul>
      </div>
    </nav>
    
    <div class="wide">
        <div class="col-xs-5 line"><hr></div>
        <div class="col-xs-2 logo">EVENTS IN VIENA</div>
        <div class="col-xs-5 line"><hr></div>
    </div>

<div class="container">

	<fieldset>

<h3>Do you really want to delete this user?</h3>

<form action="actions/a_delete.php" method="post">

 
    <input type="hidden" name="id" value="<?php echo $data['id'] ?>" />

    <button type="submit">Yes, delete it!</button>

    <a href="home2.php"><button type="button">No, go back!</button></a>

</form>

 </fieldset>
</div>
</body>
</html>

 
<?php

}

?>

