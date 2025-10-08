<?php
define("GREETING", "Welcome to PHP Programming!");
echo "<br>";
define('STRINGS', 'String Function!');
echo "<br>";
$firstName = "AYOBAMI";
$lastName = 'AYOKUNLE DOLAPO';
$fullName = $firstName . " " . $lastName;
echo $fullName;
echo "<br>";
// echo strlen($fullName); // length of string
echo "<br>";
// echo strtoupper($fullName); // to upper case
// echo "<br>";
// echo strtolower($fullName); // to lower case
// echo "<br>";
// echo str_replace("Doe", "Smith", $fullName); // replace Doe with Smith
// echo "<br>";
// echo substr($fullName, 0, 4); // get first 4 characters
// echo "<br>";
// echo strpos($fullName, "Doe"); // position of Doe in string
// echo "<br>";// echo strrev($fullName); // reverse string
// echo "<br>";
// echo htmlspecialchars("<h1>Hello World!</h1>"); // convert special characters to HTML entities 
// echo "<br>";
// echo nl2br("Hello\nWorld!"); // convert newlines to <br> tags
// echo "<br>";
// echo strcmp("apple", "banana"); // compare two strings
// echo "<br>";
// echo strcasecmp("apple", "Apple"); // case-insensitive string comparison
// echo "<br>";
// echo ucwords("hello world"); // capitalize first letter of each word
// echo "<br>";
// echo wordwrap("This is a long string that needs to be wrapped.", 10); // wrap text to a certain width
// echo "<br>";
// echo md5($fullName); // generate MD5 hash of string
// echo "<br>";
// echo sha1($fullName); // generate SHA1 hash of string
// echo "<br>";
// echo base64_encode($fullName); // encode string to base64
// echo "<br>";
// echo base64_decode(base64_encode($fullName)); // decode base64 string
// echo "<br>";
// echo str_shuffle($fullName); // shuffle string characters
// echo "<br>";
// echo addslashes("O'Reilly"); // add slashes to escape special characters
// echo "<br>";
// echo stripslashes("O\'Reilly"); // remove slashes
// echo "<br>";

// echo trim("  Hello World!  "); // remove whitespace from both sides
// echo "<br>";
// echo ltrim("  Hello World!  "); // remove whitespace from left side
// echo "<br>";
// echo rtrim("  Hello World!  "); // remove whitespace from right side
// echo "<br>";
// echo str_repeat($fullName . " ", 3); // repeat string 3 times
// echo "<br>";
// echo chr(65); // get character from ASCII value
// echo "<br>";
// echo ord("A"); // get ASCII value of character
// echo "<br>";
// echo number_format(1234567.89, 2); // format number with grouped thousands
// echo "<br>";
// echo sprintf("Hello, %s!", $fisrtName); // formatted string
// echo "<br>";
// echo printf("Hello, %s!", $fisrtName); // formatted string with output
// echo "<br>";
// echo str_pad($fisrtName, 10, "*", STR_PAD_BOTH); // pad string to a certain length
// echo "<br>";
// echo strstr($fullName, "Doe"); // get part of string from first occurrence of substring
// echo "<br>";
// echo stristr($fullName, "doe"); // case-insensitive version of strstr
// echo "<br>";
// echo explode(" ", $fullName)[0]; // split string into array and get first element
// echo "<br>";
// echo implode("-", [$fisrtName, $lastName]); // join array elements into string with separator
// echo "<br>";
// echo htmlspecialchars_decode(htmlspecialchars("<h1>Hello World!</h1>")); // decode HTML entities
// echo "<br>";
// echo setlocale(LC_ALL, 'en_US.UTF-8'); // set locale
// echo "<br>";
// echo localeconv()['decimal_point']; // get locale information
// echo "<br>";
// echo strcspn($fullName, "aeiou"); // get length of initial segment not containing any of the specified characters
// echo "<br>";
// echo strspn($fullName, "John"); // get length of initial segment containing only the specified characters
// echo "<br>";
// echo wordcount("Hello World! This is a test."); // count words in string
// echo "<br>";
// echo similar_text("Hello World", "Hello PHP", $percent); // calculate similarity between two strings
// echo " Similarity: $percent%";  // output similarity percentage
// echo "<br>";
// echo preg_match("/World/", $fullName); // perform a regular expression match
// echo "<br>";
// echo preg_replace("/Doe/", "Smith", $fullName); // perform a regular expression search and replace
// echo "<br>";
// echo preg_split("/\s+/", $fullName)[0]; // split string by regular expression and get first element
// echo "<br>";
// echo filter_var($fullName, FILTER_SANITIZE_STRING); // sanitize string
// echo "<br>";
// // $profilePic = $_FILES('file');
//     $lastName = $_POST('lastName'). FILTER_SANITIZE_FULL_SPECIAL_CHARS;
    // $phoneNumber = $_POST('phoneNumber'). FILTER_SANITIZE_NUMBER_INT;

    if (empty($lastName) && !is_string($lastName)) {
        $_SESSION['error'] = "Fields cannot be empty";
    }
    if (isset($_SESSION['error'])) {
        # code...
    }
    if(!is_numeric($phoneNumber)){
        $_SESSION['number'] = "Input Number Only";
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo GREETING; ?></title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #6f9aebff;
            color: #333;
        }

        .string {
            max-width: 1200px;
            text-align: center;
            margin-top: 50px;
        }

        input {
            border: none;
            margin: 10px;
            padding: 10px;
            font-size: 16px;
        }

        .result {
            margin: 10px;
            padding: 5px;
            font-size: 18px;
        }
    </style>
</head>

<body>
    <div class="string">
        <h1><?php echo GREETING; ?></h1>
        <h2><?php echo STRINGS; ?></h2>
        <input type="text" name="firstName" id="" value="<?php echo $firstName; ?>">
        <input type="text" name="lastName" id="" value="<?php echo $lastName; ?>">
        <input type="text" name="fullName" id="" value="<?php echo $fullName; ?>"> <br>
    </div>
    <div class="result">
        <label for="strlength">The length of the of the <b>FULLNAME</b> is :</label>
        <input type="text" name="" id="" value="<?php echo strlen($fullName); ?>">
    </div>
    <div class="result">
        <label for="">Upper-case of the <b>FULLNAME</b></label>
        <input type="text" name="" id="" value="<?php echo strtoupper($fullName); ?>">
    </div>
    <div class="result">
        <label for="">Lower-case of the <b>FULLNAME</b></label>
        <input type="text" name="" id="" value="<?php echo strtolower($fullName); ?>">
    </div>
    <div class="result">
        <label for="">Get First 4 Characters in the <b>FULLNAME</b></label>
        <input type="text" name="" id="" value="<?php echo substr($fullName, 0, 3); ?>">
    </div>
    <div class="result">
        <label for="">String replacement in the <b>FULLNAME</b></label>
        <input type="text" name="" id="" value="<?php echo str_replace("DOLAPO", "SQI", $fullName);  ?>">
    </div>
    <div class="result">
        <label for="">String position in the <b>FULLNAME</b></label>
        <input type="text" name="" id="" value="<?php echo strpos($fullName, "AYOKUNLE");  ?>">
    </div>
    <div class="result">
        <label for="">Capitalise first letter in the <b>FULLNAME</b></label>
        <input type="text" name="" id="" value="<?php echo ucwords($fullName);  ?>">
    </div>
    <div class="result">
        <label for="">String position in the <b>FULLNAME</b></label>
        <input type="text" name="" id="" value="<?php echo strpos($fullName, "AYOKUNLE");  ?>">
    </div>
    <div class="result">
        <label for="">String position in the <b>FULLNAME</b></label>
        <input type="text" name="" id="" value="<?php echo strpos($fullName, "AYOKUNLE");  ?>">
    </div>
    <div class="result">
        <label for="">Uploading of files with super globals <b>FILE UPLOAD</b></label>
        <input type="file" name="file">
        <input type="number" name="phoneNumber" id="">
    </div>
    <p id="display"></p>
        <script>
            let name = document.getElementById('name').value
            const date = document.getElementsByName('date').value
            let lastName = document.getElementById('lastName').value

            for(let i=2; i<=12; i++){
                document.getElementById('display').innerText = `Multiplication Table for ${i}`;
                for (let j = 1; j<=12; j++) {
                    `${i} * ${j}` += `${i*j}`                   
                }
            }
        </script>
</body>

</html>