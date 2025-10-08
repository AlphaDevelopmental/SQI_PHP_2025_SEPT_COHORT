<!-- <?php
$int = 2;
$string = "23";
// $boolean = true/false;
$arr = [1,2,3,4,5,6];
$float = 2.43;
$result = $int + $string;
echo $result;
echo "<br>";


$str = "123.45";
$output = (int)$str;
echo $output;
echo "<br>";


$value = "42";
$int = intval($value);
$float = floatval($value);
echo $int;

isset($value);
empty($name)|| empty($password);
is_numeric($value);

echo "<br>";
$x = 23;

function myFunction(){
    echo $GLOBALS['x'];
}
myFunction();
echo "<br>";
$film = "Terminator";
$name = "Arnold";

function getFilmName(){
    global $film;
    echo $film;
}
getFilmName();
echo "<br>";
function filmName(){
    echo $GLOBALS['film'] . ' ' . $GLOBALS['name'];
}

filmName();

function call(){
    // echo $film; This will not run on the browser bcos its a variable with global scope
} 

/*
Element/Code 	Description
$_SERVER['PHP_SELF'] 	Returns the filename of the currently executing script
$_SERVER['GATEWAY_INTERFACE'] 	Returns the version of the Common Gateway Interface (CGI) the server is using
$_SERVER['SERVER_ADDR'] 	Returns the IP address of the host server
$_SERVER['SERVER_NAME'] 	Returns the name of the host server (such as www.w3schools.com)
$_SERVER['SERVER_SOFTWARE'] 	Returns the server identification string (such as Apache/2.2.24)
$_SERVER['SERVER_PROTOCOL'] 	Returns the name and revision of the information protocol (such as HTTP/1.1)
$_SERVER['REQUEST_METHOD'] 	Returns the request method used to access the page (such as POST)
$_SERVER['REQUEST_TIME'] 	Returns the timestamp of the start of the request (such as 1377687496)
$_SERVER['QUERY_STRING'] 	Returns the query string if the page is accessed via a query string
$_SERVER['HTTP_ACCEPT'] 	Returns the Accept header from the current request
$_SERVER['HTTP_ACCEPT_CHARSET'] 	Returns the Accept_Charset header from the current request (such as utf-8,ISO-8859-1)
$_SERVER['HTTP_HOST'] 	Returns the Host header from the current request
$_SERVER['HTTP_REFERER'] 	Returns the complete URL of the current page (not reliable because not all user-agents support it)
$_SERVER['HTTPS'] 	Is the script queried through a secure HTTP protocol
$_SERVER['REMOTE_ADDR'] 	Returns the IP address from where the user is viewing the current page
$_SERVER['REMOTE_HOST'] 	Returns the Host name from where the user is viewing the current page
$_SERVER['REMOTE_PORT'] 	Returns the port being used on the user's machine to communicate with the web server
$_SERVER['SCRIPT_FILENAME'] 	Returns the absolute pathname of the currently executing script
$_SERVER['SERVER_ADMIN'] 	Returns the value given to the SERVER_ADMIN directive in the web server configuration file (if your script runs on a virtual host, it will be the value defined for that virtual host) (such as someone@w3schools.com)
$_SERVER['SERVER_PORT'] 	Returns the port on the server machine being used by the web server for communication (such as 80)
$_SERVER['SERVER_SIGNATURE'] 	Returns the server version and virtual host name which are added to server-generated pages
$_SERVER['PATH_TRANSLATED'] 	Returns the file system based path to the current script
$_SERVER['SCRIPT_NAME'] 	Returns the path of the current script
$_SERVER['SCRIPT_URI'] 	Returns the URI of the current page
*/
if(!isset($_SESSION)){
    session_start();
}
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_SESSION['submit'])){
    $name = $_REQUEST['name'];
    $password = $_REQUEST['password'];
    // $date = $_REQUEST['date'];
    $date = date('H:i:s');  // Current time in "14:30:45" format





}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset> 
        <legend style="margin-left: 8rem; color: red; font-size: 3rem;"><b><i>Personal Information</i></b></legend>
        <form action="index.php" method="post">
            <input type="text" name="name" id="">
            <input type="password" name="password" id="">
            <input type="datetime" name="date" id="">
            <input type="submit" value="Submit">
        </form>
    </fieldset>
</body>
</html> -->

<?php
// Always start the session at the top
session_start();

// Generate CSRF token if it doesn't exist
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    // Validate CSRF token
    if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
        die("CSRF token validation failed.");
    }

    // Sanitize and validate inputs
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $password = $_POST['password'] ?? '';  // Never sanitize passwords (hash them)
    $datetime = $_POST['datetime'] ?? date('Y-m-d H:i:s');  // Fallback to current time

    // Validate required fields
    $errors = [];
    if (empty($name)) $errors[] = "Name is required.";
    if (empty($password)) $errors[] = "Password is required.";
    if (empty($datetime)) $errors[] = "Date/time is required.";

    // Hash password (NEVER store plaintext)
    if (empty($errors) && !empty($password)) {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $_SESSION['user'] = [
            'name' => $name,
            'password_hash' => $hashedPassword,
            'submitted_at' => $datetime
        ];
        // Regenerate session ID to prevent fixation
        session_regenerate_id(true);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secure Form</title>
    <style>
        .error { color: red; }
        fieldset { margin: 2rem auto; width: 50%; }
        legend { margin-left: 8rem; color: red; font-size: 3rem; }
        label { display: block; margin-top: 1rem; }
        input[type="submit"] { margin-top: 1rem; }
    </style>
</head>
<body>
    <fieldset>
        <legend><b><i>Personal Information</i></b></legend>
        <form action="index.php" method="post">
            <!-- CSRF Token -->
            <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token'] ?>">

            <!-- Name -->
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" required value="<?= isset($name) ? htmlspecialchars($name) : '' ?>">

            <!-- Password -->
            <label for="password">Password:</label>
            <input type="text" name="password" id="password" required>

            <!-- Datetime -->
            <label for="datetime">Date/Time:</label>
            <input type="datetime-local" name="datetime" id="datetime" value="<?= isset($datetime) ? htmlspecialchars($datetime) : '' ?>">
            <input type="datetime" name="date" id="date">
            <input type="submit" name="submit" value="Submit">
        </form>
    </fieldset>

    <?php if (!empty($errors)): ?>
        <div class="error">
            <?php foreach ($errors as $error): ?>
                <p><?= htmlspecialchars($error, ENT_QUOTES, 'UTF-8') ?></p>
            <?php endforeach; ?>
        </div>
    <?php elseif (isset($_SESSION['user'])): ?>
        <div class="success">
            <p>Thank you, <?= htmlspecialchars($_SESSION['user']['name']) ?>!</p>
            <p>Your data was submitted at: <?= htmlspecialchars($_SESSION['user']['submitted_at']) ?></p>
        </div>
    <?php endif; ?>
</body>
</html>
