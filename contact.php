<?php 

$fName = $_POST['Fname'];
$lName = $_POST['Lname'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$message = $_POST['textarea'];






?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="contact-form.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <header>
        <h2 class="display-3">Contact Form Detail</h2>


    </header>
<section class="flex col-lg-10 offset-1">
    <div class="card col-lg-4">
        <img src="images/boy.png" alt="" class="card-img-top">
        <div class="card-body">
            <h2 class="card-title"><?php echo $fName ." " .$lName ; ?></h2>
            <p class="card-text"><span class="text-edit">Mail Address:</span> <?php echo $email; ?></p>
            <p class="card-text"><span class="text-edit">Gender:</span> <?php echo $gender; ?></p>
        </div>
        <div class="card-body">
            <h4 class="card-text"><span class="text-edit">Message:</span></h4>
        <p><?php echo $message ; ?></p>

        </div>
    </div>
</section>
<div class="footer">
<button class="btn btn-info"> <a href="index.html" class="nav-link">Home Page</a></button>


</div>

</body>
</html>