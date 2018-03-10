
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <title>php</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <style type="text/css">

     fieldset {
            margin: auto;
            margin-top: 100px;
            width: 50%;
        }

 

        table tr th {
            padding-top: 20px;
        }
    </style>


</head>
<body>

<div class="container"><br><br>

    <fieldset>

<?php


require_once 'db_connect.php';


if($_POST) {
     $name = $_POST['name'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $description = $_POST['description'];
    $image = $_POST['image'];
    $capacity = $_POST['capacity'];
    $email = $_POST['email'];
    $phone_nr = $_POST['phone_nr'];
    $address = $_POST['address'];
    $url = $_POST['url'];
    $type = $_POST['type'];

 
    $sql = "INSERT INTO event (name, start_date, end_date, description, image, capacity, email, phone_nr, address, URL, type) VALUES 
    ('$name', '2018-03-02 00:00:00', '2018-03-20 00:00:00', '$description', '$image', $capacity, '$email', $phone_nr, '$address', '$url', '$type')";

    if($connect->query($sql) === TRUE) {
        echo "<p>New Record Successfully Created</p>";
        echo "<a href='../create.php'><button type='button'>Back</button></a>";
        echo "<a href='../home2.php'><button type='button'>Home</button></a>";
    } else {
        echo "Error " . $sql . ' ' . $connect->connect_error;
    }

 
    $connect->close();

}

?>

</fieldset>
</div>
    
</body>
</html>