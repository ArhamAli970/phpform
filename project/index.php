<?php


if (isset($_POST['name'])){


$server="localhost";
$username="root";
$pass="";


$conne=mysqli_connect($server,$username,$pass);

$name=$_POST['name'];
$age=$_POST['age'];
$mail=$_POST['mail'];
$no=$_POST['no'];
$father=$_POST['father'];
$fno=$_POST['name'];
$adhar=$_POST['adhar'];


$sq="INSERT INTO `usa`.`usacolltrip` (`name`, `age`, `mail`, `no`, `father`, `fno`, `adhar`, `dt`) VALUES ( '$name', '$age', '$mail','$no', '$father', '$fno', '$adhar', current_timestamp())";


if ($conne->query($sq)==TRUE){ 
    echo "";
}
else{ 
    echo "";
}

$conne->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head> 
<body>

    <header>

<h1>KRISHNA ENGINEERING COLLEGE</h1>

<p>our college is taking us on the  trip to USA from 3 to 17 september and the cost is 1,23,000 Rs</p>
<p>interested student  submit form till 2 august</p> 



<main>
 
    <form action="index.php" method="post"> 
      
    <input type="text" name="name" placeholder="Enter your Name"> 
    <input type="text" name="age" placeholder="Enter your Age"> 
    <input type="email" name="mail" placeholder="Enter your email">  
    <input type="phone" name="no" placeholder="Enter your mobile no."> 
    <input type="text" name="father" placeholder="Enter your Father's Name"> 
    <input type="phone" name="fno" placeholder="Enter your Father's Moble no.">
    <input type="text" name="adhar" placeholder="Enter your Adhaar no.">

    <input type="submit" name="submit">

    </form>
    

    
</main>

    </header>
    

</body>
</html>
