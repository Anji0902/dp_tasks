<?php include "header.php" ?>

<h3> 4.In-class Task Control flow and loops 08.02.2023 (controlflow.php) </h3>

<h4>
    1. Write a script that gets the current month and prints one of the following responses, depending on whether it's August or not:
</h4> 
<?php
$month = date('F'); 
if ($month == 'August'){
    echo "It's August, so it is still holiday";
}
else{
    echo "Not August, so at least not in the peak of the heat. ";
}
?>

<h4>
    2. Assign colour red to a variable name $color and check to print one the following responses. 
</h4> 
<?php
$color = 'Red';
if ($color == 'Red'){
    echo "The color is red. ";
    }
else{
    echo "The color is not red.";
}
?>

<h4>
    3. Write a program to grade students based on their total score for a subject. Use variable to hold the total score.  
</h4> 
<?php
$score = 100;
if ($score > 80){
    echo "Excellent ";
    }
elseif ($score > 70){
    echo "Great ";
    }
elseif ($score > 60){
    echo "Good ";
    }  
elseif ($score > 50){
    echo "Pass ";
    }  
elseif ($score < 50){
    echo "Fail";
}
?>

<h4>
    4. Write a program to get inputs (age and name) from the user and based on their age, decide if he/she is eligible for voting  
</h4> 
<form  method = "post" >
Name : <input type="text" name = "name" required class="form-control" placeholder="Enter Your name">
Age : <input type="text" name = "age" required class="form-control" placeholder="Enter Your Age">
<input type ="submit" value ="submit"> 
</form>

<?php
$name = $_POST['name'];
$age = $_POST['age'];
if ($_POST['age'] < 18){
    echo ("$name, You are $age year old and not eligible for voting.");
}
else {
    echo ("$name, You are $age year old and eligible for voting.");
} 
?>

<h4>
    5. In task 5, you used $_SERVER['HTTP_USER_AGENT']; to get the browser name. Use Switch statement with strops function to print the name of the browser as below: If someone is using Chrome it should print, you are using Goolge Chrome…. 
</h4> 


<?php
$user_agent = $_SERVER['HTTP_USER_AGENT'];
if (strpos($user_agent,'Chrome') == true){
    echo ("You are using Chrome browser.");
}
elseif (strpos($user_agent,'Edg') == true){
    echo ("You are using Edge browser.");
}
elseif (strpos($user_agent,'Safari') == true){
    echo ("You are using Safari browser.");
}
elseif (strpos($user_agent,'Firefox') == true){
    echo ("You are using Firefox browser.");
}
else{
    echo ("Your browser cannot be identified.");
}
?>


<?php include "footer.php" ?> 