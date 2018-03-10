

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>php</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<style type="text/css">

        .manageUser {
            width: 50%;
            margin: auto;

        }

        fieldset {
            margin: auto;
            margin-top: 100px;
            width: 50%;
        }
    
    body{
        background: url("#");
        background-repeat: no-repeat;
        background-position: center top;
    }

    </style>


</head>
<body>


<br><br>
<div class="container">
<fieldset>

	<?php

 

require_once 'db_connect.php';

 

if($_POST) {

    $id = $_POST['id'];

 

    $sql = "DELETE FROM event WHERE id = {$id}";

    if($connect->query($sql) === TRUE) {

        echo "<p>Successfully deleted!!</p>";

        echo "<a href='../home2.php'><button type='button'>Back</button></a>";

    } else {

        echo "Error updating record : " . $connect->error;

    }

 

    $connect->close();

}

 

?>
</div>
</fieldset>	
</body>
</html>