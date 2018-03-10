<?php require_once 'actions/db_connect.php'; ?>

 

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
                <a class="nav-link" href="music.php">MUSIC</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="sport.php">SPORT</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="movies.php">MOVIES</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="theater.php">THEATER</a>
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
    

   




    <br/><br/>
    
    <div class="container">  
            <?php
            $sql = "SELECT * FROM event";
            $nrOfEvents = 0;
            $result = $connect->query($sql);


            if($result->num_rows > 1) {
                while($row = $result->fetch_assoc()) {
                  if ($nrOfEvents % 3 == 0){
                     echo "<div class='row'> ";
                  }
                  
                  
                    echo "<div class='col-xs-6 col-sm-4 .col-md-4'>
                            <div class='thumbnail'>
                                <img class='img-responsive' style='width:100%' src='".$row['image']."'>
                                <div class='caption'>
                                    <h3>".$row['name']."</h3>
                                 </div>
                                  <a href = 'view.php?id=".$row['id']."' class = 'btn btn-primary' role = 'button'>View</a>  
                                 <a href = 'update.php?id=".$row['id']."' class = 'btn btn-primary' role = 'button'>Edit</a>            
                                 <a href = 'delete.php?id=".$row['id']."' class = 'btn btn-primary' role = 'button'>Delete</a>
                            </div>
                        </div>";
                    if ($nrOfEvents % 3 == 2){
                     echo "</div> "; //close row div
                    } 
                    $nrOfEvents++;   
                  }
            } else {

                echo "<div class='col-sm-12 text-center'><h3>No Data Avaliable</h3></div>";

            }

            ?>
    </div>
    <div class="row"> 
        <div class="col-xs-12 col-sm-12 text-center">
              <a href = "create.php" class = "btn btn-primary" role = "button">Add Event</a>  
            </div>
    </div>
</div>

<br><br>
</div>
</div>
</body>
</html>