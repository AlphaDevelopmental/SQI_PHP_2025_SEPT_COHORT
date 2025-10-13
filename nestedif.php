<?php
// Nested if/else statement
$age = 18;
$jambScore = 200;
$creditInWaecResult = 4;
$postUtme = 50;

if ($age >= 18) {
    // Age is okay, check JAMB score
    if ($jambScore >= 200) {
        // JAMB okay, check WAEC credits
        if ($creditInWaecResult >= 5) {
            // WAEC okay, check Post UTME
            if ($postUtme >= 50) {
                echo "✅ You are eligible for this admission as your age is $age, your JAMB score is $jambScore, you have $creditInWaecResult credits in your WAEC/NECO result, and your Post-UTME score is $postUtme.";
            } else {
                echo "⚠️ Your Post-UTME score is too low for admission.";
            }
        } else {
            echo "⚠️ You do not have enough credits in your WAEC/NECO result.";
        }
    } else {
        echo "⚠️ Your JAMB score is too low to be considered for admission.";
    }
} else {
    echo "⚠️ You are underage to be considered for this admission.";
}

// if/else if/else statement
$temperature = 25;
if ($temperature > 30) {
    echo "It's hot outside!";
} elseif ($temperature >= 20 && $temperature <= 30) {
    echo "The weather is pleasant.";
} else {
    echo "It's cold outside!";
}


// switch statement
$day = 'Friday';
switch ($day) {
    case 'Monday':
        echo "It's Monday, the start of the work week.";
        break;
    case 'Wednesday':
        echo "It's Wednesday, we're halfway through the week.";
        break;
    case 'Friday':
        echo "It's Friday, the weekend is near!";
        break;
    default:
        echo "It's just another day.";
        break;
}
//         echo "It's midweek.";
//         break;
//     case 'Thursday':
//         echo "It's almost the weekend.";
//         break;
//     case 'Friday':
//         echo "It's Friday, the weekend is near!";
//         break;
//     case 'Saturday':
//     case 'Sunday':
//         echo "It's the weekend! Enjoy!";
//         break;
//     default:
//         echo "It's just another day.";
//         break;

// recharge card
echo "</br>";
echo "</br>";
echo "\n";
$amount = 200;
$balance = 1200;
function generatePin($length = 16) {
    $pin = '';
    for ($i = 0; $i < $length; $i++) {
        $pin .= rand(0, 9);
    }
    return implode('-', str_split($pin, 4));;
}

echo "</br>";
echo "</br>";
$digits = generatePin();
echo "</br>";
echo "Generated PIN: " . $digits . "\n";
echo "</br>";
// echo $digits . "\n";
// echo "</br>";
// echo "</br>";

// if ($amount == 50) {
//     echo "You have recharged N50. Your new balance is N50.";
// } elseif ($amount == 100) {
//     echo "You have recharged N100. Your new balance is N100.";
// } elseif ($amount == 200) {
//     echo "You have recharged N200. Your new balance is N200.";
// } elseif ($amount == 500) {
//     echo "You have recharged N500. Your new balance is N500.";
// } else {
//     echo "Invalid recharge amount.";
// }
// echo "</br>";
// echo "</br>";
// switch ($amount) {
//     case 50:
//         echo "You have recharged N50. Your new balance is N50.";
//         break;
//     case 100:
//         echo "You have recharged N100. Your new balance is N100.";
//         break;
//     case 200:
//         echo "You have recharged N200. Your new balance is N200.";
//         break;
//     case 500:
//         echo "You have recharged N500. Your new balance is N500.";
//         break;
//     default:
//         echo "Invalid recharge amount.";
//         break;
// }

switch ($amount & $digits & $balance) {
    case ($amount === 50 && strlen(str_replace('-', '', $digits)) == 16):
        echo "</br>";
        echo "Your recharge card digits is: " . $digits . "\n" . "Dial *311* $digits # to recharge your card.";
        echo "</br>";
        echo "</br>";
        $newBalance = $balance + $amount;
        echo "You have recharged $amount Your new balance is: $newBalance";
        break;
    case ($amount === 100 && strlen(str_replace('-', '', $digits)) == 16):
        echo "</br>";
        echo "Your recharge card digits is: " . $digits . "\n" . "Dial *311* $digits # to recharge your card.";
        echo "</br>";
        echo "</br>";
        $newBalance = $balance + $amount;
        echo "You have recharged $amount Your new balance is: $newBalance";
        break;
    case ($amount == 200 && strlen(str_replace('-', '', $digits)) == 16):
        echo "</br>";
        echo "Your recharge card digits is: " . $digits . "\n" . "Dial *311* $digits # to recharge your card.";
        echo "</br>";
        echo "</br>";
        $newBalance = $balance + $amount;
        echo "You have recharged $amount Your new balance is: $newBalance";
        break;
    case ($amount == 500 && strlen(str_replace('-', '', $digits)) == 16):
        echo "</br>";
        echo "Your recharge card digits is: " . $digits . "\n" . "Dial *311* $digits # to recharge your card.";
        echo "</br>";
        echo "</br>";
        $newBalance = $balance + $amount;
        echo "You have recharged $amount Your new balance is: $newBalance";
        break;
    default:
        echo "Invalid recharge amount or PIN.";
        break;
}

echo "</br>";
echo "</br>";
// calculator with switch statement
$num1 = 10;
$num2 = 5;
$operator = '+';
switch ($operator) {
    case '+':
        echo $num1 + $num2;
        break;
    case '-':
        echo $num1 - $num2;
        break;
    case '*':
    case 'x':
        echo $num1 * $num2;
        break;
    case '/':
        if ($num2 != 0) {
            echo $num1 / $num2;
        } else {
            echo "Error: Division by zero.";
        }
        break;
    default:
        echo "Invalid operator.";
        break;
}
?>
