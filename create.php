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

 
<div></div>
<fieldset>

    <legend>Add Event</legend>

 

    <form action="actions/a_create.php" method="post">
        <table class="table table-bordered table-inverse">

            <tr>

                <th>Name</th>

                <td><br><input type="text" name="name" placeholder="Name"/></td>

            </tr>     

            <tr>

                <th>Start Date</th>

                <td><br><input type="datetime-local" name="start_date" placeholder="Start Date"/></td>

            </tr>

            <tr>

                <th>End Date</th>

                <td><br><input type="datetime-local" name="end_date" placeholder="End Date"/></td>

            </tr>

            <tr>

                <th>Description</th>

                <td><br><input type="text" name="description" placeholder="Description"/></td>

            </tr>

            <tr>

                <th>Image</th>

                <td><br><input type="text" name="image" placeholder="Link to image"/></td>

            </tr>

            <tr>

                <th>Capacity</th>

                <td><br><input type="number" name="capacity" placeholder="Capacity"/></td>

            </tr>

            <tr>

                <th>Email</th>

                <td><br><input type="email" name="email" placeholder="Contact email"/></td>

            </tr>

            <tr>

                <th>Phone-Nr.</th>

                <td><br><input type="tel" name="phone_nr" placeholder="Contact phone number"/></td>

            </tr>

            <tr>

                <th>Address</th>

                <td><br><input type="text" name="address" placeholder="Event address"/></td>

            </tr>

            <tr>

                <th>URL</th>

                <td><br><input type="url" name="url" placeholder="Event URL"/></td>

            </tr>

            <tr>

                <th>Type</th>

                <td><br><select name="type">
                            <option value="music">music</option>
                            <option value="sport">sport</option>
                            <option value="movie">movie</option>
                            <option value="theater">theater</option>
                    </select></td>

            </tr>

            <tr>

                <input type="hidden" name="id" value="<?php echo $data['id']?>" />

                <td><br><button type="submit">Save Changes</button></td>

                <td><a href="home2.php"><br><button type="button">Back</button></a></td>

            </tr>


        </table>
    </form>

 
</fieldset>

 

</body>

</html>