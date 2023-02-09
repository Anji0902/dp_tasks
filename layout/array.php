<?php include "header.php" ?>

<form action="" method="get">
<input type="number" placeholder="Enter your first number" name="num1" required >
<input type="number" placeholder="Enter your second number" name="num2" required >
<select name="operator">
<option value="add"> Add</options>
<option value="sub"> Subtract</option>
<option value="mul"> Multiply</option>
<option value="div"> Divide</option>
</select>
<input type="Submit" name="cal" value="Calculate">
</form>



<?php
if (isset($_GET['cal'])) {
    $num1=$_GET['num1'];
    $num2 = $_GET['num2'];
    $operator = $_GET['operator'];
    switch ($operator){
        case "add":
            $result=$num1 + $num2;
            break;
        case "sub":
            $result=$num1 - $num2;
            break;
        case "mul":
            $result=$num1 * $num2;
            break;
        case "div":
            $result=$num1 / $num2;
            break;
        default:
            $result = "Error.you have not selected the correct operator";
    }
if(isset($result)){
    echo "<h2>Result : $result</h2>";
}
}
?> <br> 

<h3> 5.In-class Task Arrays  09.02.2023 (array.php) </h3>

<h4>
1.  Write a php script to display courses as list.
</h4> 
<?php
$courses=array("PHP", "HTML", "JavaScript", "CMS", "Project"); 
foreach ($courses as $value) {
echo "<li>".$value . "</li>";
}
?> <br>

<h4>
2. The unset() function is used to remove element from the array.
</h4> 
<?php
$courses1=array("PHP", "HTML", "JavaScript", "CMS", "Project");
unset($courses1["2"]);
var_dump($courses1);
print_r(array_values($courses1));
?> 
<br>
<h4>
3. Delete an element from the array below:
</h4> 
<?php
    $courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");
echo "a) ascending order sort by value <br>";
asort($courses);
foreach($courses as $x=>$x_value){
   echo  $x_value;
   echo "<br>";
   }
echo "b) ascending order sort by Key<br>";
ksort($courses);
foreach($courses as $x=>$x_value){
   echo  $x_value;
   echo "<br>";
   }
echo "c) descending order sort by Value<br>";
arsort($courses);
foreach($courses as $x=>$x_value){
   echo  $x_value;
   echo "<br>";
   }
echo "d) descending order sort by Key<br>";
krsort($courses);
foreach($courses as $x=>$x_value){
   echo  $x_value;
   echo"<br>";
}
?> <br>

<h4>
4. Change the following array's all values to upper case.
</h4> 
<?php
$courses=array("php", "html", "javascript", "cms", "project");
print_r( array_change_key_case($courses,CASE_UPPER));
?> <br>
<br>

<h4>
5. List all your favorite colors and their hexadecimal equivalents. (associative arrays)
</h4> 
<?php 
    $color['#8B0000'] = "DarkRed";
    $color['#696969'] = "DimGray";
    $color['#00FFFF'] = "Aqua";
    $color['#F5F5DC'] = "Beige";
    $color['#A52A2A'] = "Brown";
    foreach ($color as $x=>$x_values){
        echo $x . " => ".$x_values."<br>";
    }
?> <br> 

<h4>
6. PHP script to calculate and display average temperature, five lowest and highest temperatures.
</h4> 
<?php

?>



<?php include "footer.php" ?> 