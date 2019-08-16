<?php 

$fName = $_POST['Fname'];
$lName = $_POST['Lname'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$message = $_POST['textarea'];

echo "Name: " . $fName . $lName . '<br>';
echo "Mail Address: " . $email . '<br>';
echo "Gender: " . $gender . '<br>';
echo "Message: " . $message . '<br>';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php echo $fName ?>
Back to<a href="index.html"> Home Page</a>


</body>
</html>