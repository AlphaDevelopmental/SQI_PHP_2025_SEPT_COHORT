<?php 
$name = "Aishat Titilopo";
$age = 20;
$height = 5.6;
$is_student = true;
$salary = 2500;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo "You are welcome to PHP Class $name ";?></h1>
    <p>Todays date is: <?php echo date('H.i.s')?> </p>
    <h1><?php echo "Student Details" ;?> </p>
    <p><?php echo "Name: " . $name  ;?></p>
    <p><?php echo "Her salary is: " . $salary ; ?></p>


</body>
</html>
<?php 
//Global variable.
$name = "SQI ";
function getName(){
    global $name; // Global variable is only accessible within a function by using the word GLOBAL
    echo $name;
}

//Local variables : These are variables within a function e.g

function school(){
    $school = "SQI College of ICT";
}
 
// static variable scope: local variables that retain their values between function calls

// function count(){
//     static $count = 0;
//     $count++;
//     echo $count;
// }


// Super Globals: Built-in variables available in all scopes without global keyword

// $_GET['name'];
// $_POST['submit'];
echo $name = $_POST['firstName'];
echo $password = $_POST['password'];
$_SESSION ['name'] = 'The name field must not be empty';
$_COOKIE;
$_FILES;
$_ENV;
$_SERVER;
$_GLOBAL;

?>