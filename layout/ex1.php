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

<script>
document.write("Hello world this is JavaScript");
</script>
<noscript>
Please enable JavaScript to view this content,
</noscript>
<input type="button" onclick="hello()" value="Click Me"> 


<h3>3.4 "PHP is interesting".  </h3>
<?php
$title = "PHP is interesting";
echo "<h1>" . $title . "</h1>"; 
?>
<script>
    //window.alert 
//window.alert("This will trigger alert box");
//window.alert(5+10);

//document.write 
document.write("Hello this is interesting");
</script>

<h3>3.5 Table and variation. </h3>
<button onclick="add()"> Click to Add</button>
<hr>
<p id="place1" style="color:red; background-color:yellow;"></p>
<span id="place2" style="color:white; background-color:green;"></span>
<script>
document.getElementById("place1").innerHTML = "This will go to place1";
document.getElementById("place2").innerHTML = "This will go to span";
</script>

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


<h3>4 Screenshot of the development environment  </h3>
<img src="Images/DockerSSWeb1.png" alt="Docker Image">

<h2>Changing the background-color</h2>
<form>
<input type="color" name="background" onchange="changeColor('background',this.value)">
</form>

<?php include "footer.php" ?> 

