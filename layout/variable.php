<?php include "header.php" ?>


<h3> Exercise 3 In-class Task Variable & Operators 07.02.2023 (variable.php)</h2> 

<h4>
    1. Create a simple html form to get Firstname and Lastname from the user and use echo echo statement to print using tag: Hello …., You are welcome to my site. <br>    
    2. Apply bootstrap style to the form.
</h4> 

<form action="action.php" method="post"> 
<div class="row">
    <div class="col">
        <input type="text" name="fname" required placeholder="First name" class="form-control"> 
    </div>
    <div class="col">
        <input type="text" name="lname" required placeholder="Last name" class="form-control"> 
    </div>
    </div>
<div class="row">
    <div class="col">
        Birth Date: <input type="date" name="bdate"  class="form-control">  
    </div>
    <div class="col">
        Select Fav Color: <input type="color" name="color" class="form-control"> 
    </div>
</div>
<input type="submit" value="submit"> 
</form> 

<h4>3.Prepare a simple html table and apply bootstrap style to the table. </h4>
<table class="table table-bordered">
<tr>
<th> No </th><th> First Name </th><th> Last Name </th> 
</tr>
<tr>
<th> 1 </th><th> Salome </th><th> Bird </th> 
</tr>
<tr>
<th> 2 </th><th> Kayden </th><th> Perera </th> 
</tr>
<tr>
<th> 3 </th><th> Kayla </th><th> Perera </th> 
</tr>
</table>


<h4>4.Write a PHP script with two string variables. Assign any text to these variables. Join them together.  Print the length of the string. </h4>


<?php
$fname = 'Dhanushke';
$lname = 'Perera';
 
echo $fname." ".$lname; 
echo "<br> String length is " .strlen($fname.$lname);
?>

<h4> 5.Write a script to add up the numbers: 298, 234, 46. Use variables to store these numbers and echo statement to output your answer. </h4>

<?php
$num1 = '298';
$num2 = '234';
$num3 = '46';
$total = $num1+$num1+$num1; 

echo "total=" .$total; 
?>

<h4> 6.Write a PHP script to detect the browser being used to view your pages. (Use predefined variables: $_SERVER). </h4>
<?php echo "your use agent is: " . $_SERVER['HTTP_USER_AGENT'];?>


<h4> 7.Write a PHP script in the footer section of your universal footer just below the Copyright information to display the last modification time of a file. </h4>
Done in footer.php 



<?php include "footer.php" ?> 