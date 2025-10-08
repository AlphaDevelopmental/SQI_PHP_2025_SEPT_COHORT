
<?php
// Basic Arithmetic Operators
$a = 10;
$b = 3;

echo $a + $b;   // Addition: 13
echo "</br>";
echo $a - $b;   // Subtraction: 7
echo "</br>";
echo $a * $b;   // Multiplication: 30
echo "</br>";
echo $a / $b;   // Division: 3.333...
echo "</br>";
echo $a % $b;   // Modulus (remainder): 1
echo "</br>";
echo $a ** $b;  // Exponentiation: 1000 (PHP 5.6+)
echo "</br>";
?>


<?php
echo "</br>";
echo "</br>";
echo "</br>";
echo "</br>";
// String Concatenation
// PHP uses . (dot) for string concatenation, not +
echo "Hello" . " World";     // "Hello World"
echo "</br>";
echo "Number: " . 42;        // "Number: 42"
echo "</br>";
echo 5 . 3;                  // "53" (string concatenation)
echo "</br>";
// Type juggling in arithmetic
echo "10" + 5;    // 15 (converts string to number)
echo "</br>";
echo "10" * 2;    // 20 (converts string to number)
echo "</br>";
echo "10abc" + 5; // 15 (converts leading numeric part)
echo "</br>";

?>
<?php
echo "</br>";
echo "</br>";
echo "</br>";
echo "</br>";
echo 10 / 3;      // 3.3333333333333 (float)
echo "</br>";
echo intval(10/3); // 3 (integer division)
echo "</br>";
echo 10 % 3;      // 1 (remainder)
echo "</br>";

// Integer division operator (PHP 7+)
echo intdiv(10, 3); // 3
echo "</br>";
?>


<?php
echo "</br>";
echo "</br>";
echo "</br>";
echo "</br>";
$x = 5;
$y = 10;

var_dump($x == $y);   // Equal: bool(false)
echo "</br>";
var_dump($x != $y);   // Not equal: bool(true)
echo "</br>";
var_dump($x <> $y);   // Not equal (alternative): bool(true)
echo "</br>";
var_dump($x === $y);  // Identical (equal and same type): bool(false)
echo "</br>";
var_dump($x !== $y);  // Not identical: bool(true)
echo "</br>";
var_dump($x < $y);    // Less than: bool(true)
echo "</br>";
var_dump($x > $y);    // Greater than: bool(false)
echo "</br>";
var_dump($x <= $y);   // Less than or equal: bool(true)
echo "</br>";
var_dump($x >= $y);   // Greater than or equal: bool(false)
echo "</br>";
echo $x <=> $y;  // Spaceship operator (PHP 7+): -1
echo "</br>";
var_dump($x <=> $y);  // Spaceship operator (PHP 7+): int(-1)
echo "</br>";
print($x <=> $y);  // Spaceship operator (PHP 7+): -1
echo "</br>";
print_r($x <=> $y);  // Spaceship operator (PHP 7+): -1
echo "</br>";
printf($x <=> $y);  // Spaceship operator (PHP 7+): -1
echo "</br>";
?>


Strict vs Loose Comparison
<?php
echo "</br>";
echo "</br>";
echo "</br>";
echo "</br>";
// Loose comparison (==) - type juggling occurs
var_dump(5 == "5");        // bool(true)
echo "</br>";
var_dump(0 == false);      // bool(true)
echo "</br>";
var_dump("" == false);     // bool(true)
echo "</br>";
var_dump(null == false);   // bool(true)
echo "</br>";
echo "</br>";
// Strict comparison (===) - no type conversion
var_dump(5 === "5");       // bool(false)
echo "</br>";
var_dump(0 === false);     // bool(false)
echo "</br>";
var_dump("" === false);    // bool(false)
echo "</br>";
var_dump(null === false);  // bool(false)
echo "</br>";
// Strict inequality
var_dump(5 !== "5");       // bool(true)
echo "</br>";
?>


<?php
echo "</br>";
echo "</br>";
echo "</br>";
echo "</br>";
// Logical Operators
$t = true;
$f = false;
echo "</br>";
var_dump($t && $f);  // AND: bool(false)
echo "</br>";
var_dump($t and $f); // AND (lower precedence): bool(false)
echo "</br>";
var_dump($t || $f);  // OR: bool(true)
echo "</br>";
var_dump($t or $f);  // OR (lower precedence): bool(true)
echo "</br>";
var_dump(!$t);       // NOT: bool(false)
echo "</br>";   
var_dump(!$f);       // NOT: bool(true)
echo "</br>";
var_dump($t xor $f); // XOR: bool(true)
echo "</br>";
?>

<?php
// Setting default values
$username = $_GET['username'] ?? 'Anonymous';

// Conditional execution
// $isLoggedIn && redirectToDashboard();

// Guard clauses
isset($user) && isset($user['name']) ;// Proceed with $user['name']
?>



<?php
echo "</br>";
echo "</br>";
echo "</br>";
echo "</br>";
// Increment and Decrement Operators
$a = 5;
$b = 5;

// Pre-increment (++$variable)
echo ++$a;  // 6 (increment first, then return)
echo "</br>";
echo $a;    // 6
echo "</br>";
// Post-increment ($variable++)
echo $b++;  // 5 (return first, then increment)
echo "</br>";
echo $b;    // 6
echo "</br>";
echo "This is the new value: " . --$b;
echo "</br>";
?>


<?php
$x = 5;
$y = 5;

// Pre-decrement
echo --$x;  // 4 (decrement first, then return)
echo "</br>";
echo $x;    // 4
echo "</br>";
echo "This is now the new value of X: " . $x--;
echo "</br>";
var_dump($x-2);
echo "</br>";
// Post-decrement
echo $y--;  // 5 (return first, then decrement)
echo $y;    // 4
?>

<?php
// condition ? valueIfTrue : valueIfFalse
$age = 20;
$isLoggedIn = false;
$status = $age >= 18 ? "adult" : "minor";
echo $status;  // "adult"
if($age >= 20){
    echo "You are an adult at:" . $age;
} else{
    echo "You are not an adult at this age: " . $age ;
}

// $status = $age >= 20 ? "You are an adult" : "You are not an adult";
$log = $isLoggedIn== true ? "You are logged in" : "please log in first";
echo $log;
?>

<?php
// Setting values conditionally
$score = 85;
$grade = $score >= 90 ? "A" : 
         ($score >= 80 ? "B" : 
         ($score >= 70 ? "C" : "F"));

// Function parameters
function greet($name = null) {
    return "Hello, " . ($name ? $name : "stranger");
}

// Template rendering
$isLoggedIn = true;
$message = $isLoggedIn ? "Welcome back!" : "Please log in";

// Array access
$user = ['name' => 'John'];
$name = isset($user['name']) ? $user['name'] : 'Unknown';
?>

<?php
// Short ternary operator
$username = $_GET['user'] ?: 'guest';  // Equivalent to: $_GET['user'] ? $_GET['user'] : 'guest'

// But be careful with falsy values
$count = 0;
$display = $count ?: 'none';  // 'none' (0 is falsy)
$display = $count ?? 'none';  // 0 (using null coalescing)







/*

Quick Reference
Operator Precedence (High to Low)
() - Grouping
++, -- - Increment/Decrement
** - Exponentiation
*, /, % - Multiplication, Division, Modulus
+, -, . - Addition, Subtraction, Concatenation
<, <=, >, >=, <=> - Comparison
==, !=, ===, !==, <> - Equality
&& - Logical AND
|| - Logical OR
?? - Null Coalescing
? : - Ternary
=, +=, -=, .=, etc. - Assignment
PHP-Specific Notes
Use . for string concatenation, not +
and/or have lower precedence than &&/||
PHP has type juggling (automatic type conversion)
isset() checks if variable exists and is not null
empty() checks for empty values (null, false, 0, "", "0", [])
Spaceship operator <=> returns -1, 0, or 1
Null coalescing ?? only checks for null/undefined, not falsy values
Common Gotchas
== vs === - Always prefer strict comparison when possible
0, "0", "", [], null, false are all falsy
|| vs ?? - OR treats falsy values differently than null coalescing


*/
?>
