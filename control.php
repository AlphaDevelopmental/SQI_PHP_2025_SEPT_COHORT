<?php
$age = 18;
if ($age >= 18) {
    echo "You are an adult.";
}
?>
<?php
// if/else
echo "</br>";
$temperature = 25;
if ($temperature > 30) {
    echo "It's hot outside!";
} else {
    echo "The weather is pleasant.";
}
?>
<?php
echo "</br>";
// if/elseif/else Statement
$grade = 85;

if ($grade >= 90) {
    echo "Grade: A";
} elseif ($grade >= 80) {
    echo "Grade: B";
} elseif ($grade >= 70) {
    echo "Grade: C";
} elseif ($grade >= 60) {
    echo "Grade: D";
} else {
    echo "Grade: F";
}
?>
<?php
echo "</br>";
// Nested if Statements
$user = [
    'age' => 25,
    'hasLicense' => true,
    'hasInsurance' => true
];

if ($user['age'] >= 18) {
    if ($user['hasLicense']) {
        if ($user['hasInsurance']) {
            echo "You can drive!";
        } else {
            echo "You need insurance to drive.";
        }
    } else {
        echo "You need a license to drive.";
    }
} else {
    echo "You must be 18 or older to drive.";
}
?>
<?php
echo "</br>";
// Basic switch Statement
$day = 'Friday';

switch ($day) {
    case 'Monday':
        echo "Start of the work week";
        break;
    case 'Tuesday':
    case 'Wednesday':
    case 'Thursday':
        echo "Midweek";
        break;
    case 'Friday':
        echo "TGIF!";
        break;
    case 'Saturday':
    case 'Sunday':
        echo "Weekend!";
        break;
    default:
        echo "Invalid day";
        break;
}
?>
<?php
echo "</br>";
// switch vs if/elseif::::::Using switch - cleaner for multiple exact matches
$action = $_GET['action'] ?? 'rest';
function showHomePage(){
    echo "You are welcome to our home page";
}
function show404Page(){
    echo "<h1 style='color:red;'>";
    echo "YOu are not suppose to be here black man";
    echo  "</h1>";
}
switch ($action) {
    case 'home':
        showHomePage();
        break;
    case 'about':
        // showAboutPage();
        break;
    case 'contact':
        // showContactPage();
        break;
    case 'login':
        // showLoginPage();
        break;
    default:
        show404Page();
        break;
}
// Using if/elseif - better for complex conditions
$userRole = $_SESSION['role'] ?? 'admin';
$userAge = $_SESSION['age'] ?? 20;

if ($userRole === 'admin' && $userAge >= 21) {
    echo "Full admin access";
} elseif ($userRole === 'admin' && $userAge >= 18) {
    echo "Limited admin access";
} elseif ($userRole === 'user' && $userAge >= 18) {
    echo "User access";
} else {
    echo "Limited access";
}
/*do a simple calculator using switch statement with just the addition, 
subtraction, multiplication and division operator 

you have 10min*/
?>