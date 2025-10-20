<?php
// // for loop
// for ($i = 1; $i <= 5; $i++) {
//     echo "Iteration $i: Hello, Makanjuola!<br>";
// }
// echo "<br>";

// for($i=0; $i<=10; $i+=2){
//     echo "Even number: $i <br>";
// }
// echo "<br>";
// // count-backwards
// for($i=10; $i>=0; $i-=2){
//     echo "Countdown: $i <br>";
// }
// echo "<br>";

// // multiple of loops
// for($i=0; $i<=50; $i++){
//     if($i % 3 == 0 && $i % 5 == 0){
//         echo "$i is a multiple of both 3 and 5 <br>";
//     } elseif ($i % 3 == 0) {
//         echo "$i is a multiple of 3 <br>";
//     } elseif ($i % 5 == 0) {
//         echo "$i is a multiple of 5 <br>";
//     } else {
//         echo "$i is neither a multiple of 3 nor 5 <br>";
//     }
// }
// echo "<br>";
// // multiples of variables in loop
// // for($i=1, $j=10; $i<=$j; $i++, $j+=2){
// //     // echo "i: $i, j: $j <br>";
// //     echo "<br>";
// //     // echo "The product of $i and $j is: " . ($i * $j) . "<br>";
// //     echo "<br>";
// //     // echo "The sum of $i and $j is: " . ($i + $j) . "<br>";
// //     echo "<br>";
// //     // echo "The difference of $j and $i is: " . ($j - $i) . "<br>";
// //     echo "<br>";
// //     // echo "The quotient of $j divided by $i is: " . ($j / $i) . "<br>";
// //     echo "<br>";
// //     // echo "The modulus of $j and $i is: " . ($j % $i) . "<br>";
// //     echo "<br>";
// //     // echo "-------------------------<br>";
// //     echo "<br>";
// // }
// echo "<br>";
// // multiplication table
// echo ".....MULTIPLICATION TABLE..... <br>";
// for($i=2; $i<=12; $i+=2){
//     for($j=1; $j<=12; $j++){
//         $product = $i * $j;
//         echo "$i x $j = $product <br>";
//     }
//     echo "<br>";
// }

// // addition table
// echo "..... ADDITION TABLE..... <br>";
// for($i=2; $i<=10; $i+=2){
//     for($j=1; $j<=12; $j++){
//         $product = $i + $j;
//         echo "$i + $j = $product <br>";
//     }
//     echo "<br>";
// }

// // while loop : The while loop executes a block of code as long as the specified condition is true.
// $a = 1;
// while ($a <= 10) {
//     echo "Number: $a  </br>";
//     $a+=2;
// }

// // Reading file line by line
// // $file = fopen("data.txt", "r");
// // while (!feof($file)) {
// //     $line = fgets($file);
// //     echo $line;
// // }
// // fclose($file);

// // User input validation
// // $password = "";
// // while (strlen($password) < 8) {
// //     $password = readline("Enter password (min 8 chars): ");
// // }
// // Do-while loop :The do-while loop executes the code block at least once, then repeats as long as the condition is true.
// echo "</br>";
// $i = 1;
// do {
//     echo "Number: $i <br>";
//     $i++;
// } while ($i <= 5);

// echo "</br>";

// //menu system
// do {
//     echo "1. Add item\n";
//     echo "2. Remove item\n";
//     echo "3. Exit\n";
//     $choice = readline("Choose option: ");
    
//     switch ($choice) {
//         case 1:
//             echo "Adding item...\n";
//             break;
//         case 2:
//             echo "Removing item...\n";
//             break;
//     }
// } while ($choice != 3);

// Generate random number until condition met
// do {
//     $number = rand(1, 100);
//     echo "Generated: $number\n";
// } while ($number != 50);

// foreach loop : The foreach loop is used to iterate over arrays or collections.
$fruits = ["Apple", "Banana", "Cherry", "Date"];
foreach ($fruits as $fruit) {
    echo "Fruit: $fruit <br>";
}

echo "</br>";
$ages = ["Alice" => 25, "Bob" => 30, "Charlie" => 35];
foreach ($ages as $name => $age) {
    echo "$name is $age years old. <br>";
}
echo "</br>" ;
// echo $fruits[2];

echo "</br>" ;
//Foreach with Keys
$person = [
    "name" => "John",
    "age" => 30,
    "city" => "New York",
    "subject" => "HTML"
];

foreach ($person as $key => $value) {
    echo "$key: $value <br>";
}
echo "</br>";
echo "</br>";
$subject = [
    "HTML" => 23,
    "CSS" => 24,
    "PHP" => 34
];
foreach ($subject as $key => $value) {
    var_dump ("$key: $value </br>" );
    echo "</br>";
    echo "</br>";
    echo "</br>";
    printf("$key:$value </br>");
}
echo "</br>";
echo "</br>";

//Nested Arrays
$students = [
    ["name" => "Alice", "grade" => 85],
    ["name" => "Bob", "grade" => 92],
    ["name" => "Charlie", "grade" => 78]
];
echo "</br>";
echo $students[2]['name']; // Outputs: Bob
echo "</br>";
foreach ($students as $student) {
    foreach ($student as $key => $value) {
        echo "$key: $value ";
    }
    echo "<br>";
}

echo "</br>";
//Break and Continue Statements
for ($i = 1; $i <= 10; $i++) {
    if ($i == 5) {
        break; // Exit the loop when i is 5
    }
    echo "Number: $i <br>";
} echo "Hello World<br>";
?>