
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap" rel="stylesheet">
    <title>Form </title>
    <link rel="styleSheet" href="style.css">
    <script type="text/javascript" src="one.js"></script>
</head>
<body>
    <img src="purple.jpg" alt="Background Image">
    <div class="container">
    <h2>Registration for Coding Challenge</h2>
    <p>Please fill the form correctly if you are interested in Coding Challenge</p>
    <form action="index.php" method="POST">
    <input type="text" spellcheck="true" name="fullname" placeholder="Enter your full name" style="background-color: azure;" required>
    <input type="number" spellcheck="true" name="age" placeholder="Enter your age" style="background-color: azure;" required>
    <input type="text" spellcheck="true" name="skills" placeholder="Enter your skills" style="background-color: azure;" required>
    <input type="email" spellcheck="true" name="email" placeholder="Enter your email" style="background-color: azure;" required>
    <input type="number" spellcheck="true" name="phoneno" placeholder="Enter your Phone Number" style="background-color: azure;" required>
    <input type="text" spellcheck="true" name="message" placeholder="Enter your message here, if any" style="background-color: azure;" required>
    <button onclick="Click()">Submit</button>
</form>
    </div>
<?php
//Its basically basic details of our XAMPP DataBase as done in Wordpress
$server="localhost";
$username="root";
$password="";
//Calling function named mysqli_connect and assigning it to $connection along with connecting to DataBase by 
//passing it name,server and passwords that are required for connection
$connection=mysqli_connect($server,$username,$password);

if(!$connection==true)
{
    //die is same as exit
   die("No connection at a time".mysqli_connect_error());
}
else
{
    echo "";
}
error_reporting(E_ERROR | E_PARSE);//For hiding warnings
//Posting and then Assigning the values to variables and then assigning them to $sql to store in DataBase
$fullname=$_POST["fullname"];
$age=$_POST["age"];
$skills=$_POST["skills"];
$email=$_POST["email"];
$phoneno=$_POST["phoneno"];
$message=$_POST["message"];
$sql="INSERT INTO `coding`.`coding` (`fullname`, `age`, `skills`, `email`, `phoneno`, `message`, `date`) 
VALUES ('$fullname', '$age', '$skills', '$email', '$phoneno', '$message', current_timestamp())";
// echo $sql;
//If connection is true or estabished then execute if else
if ($connection->query($sql)==true)
{
    echo "";
}
else
{
    echo "ERROR:$sql <br> $connection->error";
}
//for closing connection
$connection->close();

?>
</body>
</html>