<?php include "header.php" ;

$fname = $_POST['fname']; 
$lname = $_POST['lname']; 
$bdate = $_POST['bdate']; 
$color = $_POST['color']; 

echo "<h3> Hello $fname $lname Welcome to My Site. <br>
Your favourite color is $color and your date of birth is $bdate.</h3>"; 

?> 

<?php include "footer.php" ?> 