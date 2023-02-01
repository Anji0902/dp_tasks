<?php include "header.php" ?>
<h3>3.1 Write a simple PHP script to print your information (Name and your groupid). </h3>
<?php
echo "Dhanushke Perera";
echo "BBCAP22";
?>
<h3>3.2 Write PHP code to display the following message. </h3>
<?php
echo "Hello world! My name is \"Dhanushke\"";
?>
<h3>3.3 Write the PHP code in to display the current date.  </h3>
<?php echo date("m.d.Y")?>

<h3>3.4 "PHP is interesting".  </h3>
<?php
$title = "PHP is interesting";
echo "<h1>" . $title . "</h1>"; 
?>

<h3>3.5 Table and variation. </h3>
<?php
$g1 = 5;
$g2 = 4; 
$g3 = 5;
echo "
<table border=\"1\">
<tr>
<th> S.N </th><th> Name </th><th> Grade </th> 
</tr>
<tr>
<th> 1 </th><th> Pekka </th><th> $g1 </th> 
</tr>
<tr>
<th> 2 </th><th> Johanna </th><th> $g2 </th> 
</tr>
<tr>
<th> 3 </th><th> John </th><th> $g3 </th> 
</tr>
</table>
";
?>


<h3>3.6 Screenshot of the development environment  </h3>
<img src="DockerSSWeb1.png" alt="">


<?php include "footer.php" ?> 

