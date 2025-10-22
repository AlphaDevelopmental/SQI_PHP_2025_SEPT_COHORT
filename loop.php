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
foreach ($students as $student) {
    foreach ($student as $key => $value) {
        echo "$key: $value ";
    }
    echo "<br>";
}

echo "</br>";

// Complex Nested Arrays
$inventory = [
    "laptop" => ["price" => 999.99, "stock" => 15, "category" => "Electronics"],
    "book" => ["price" => 29.99, "stock" => 100, "category" => "Education"],
    "chair" => ["price" => 149.50, "stock" => 8, "category" => "Furniture"],
    "phone" => ["price" => 699.99, "stock" => 25, "category" => "Electronics"],
    "desk" => ["price" => 299.99, "stock" => 5, "category" => "Furniture"]
];

echo "<h3>Inventory Report:</h3>";
$total_amount = 0;
$low_stock_items = [];

foreach ($inventory as $product => $details) {
    $item_amount = $details["price"] * $details["stock"];
    $total_amount += $item_amount;
    
    echo "<div style='border: 5px solid #ddd; margin: 10px; padding: 10px;'>";
    echo "<h4>" . ucfirst($product) . "</h4>";
    
    foreach ($details as $attribute => $value) {
        if ($attribute == "price") {
            echo "Price: $" . number_format($value, 2) . "<br>";
        } else {
            echo ucfirst($attribute) . ": $value<br>";
        }
    }
    
    echo "Total Value: $" . number_format($item_amount, 2) . "<br>";
    
    // Check for low stock
    if ($details["stock"] < 10) {
        $low_stock_items[] = $product;
        echo "<span style='color: red; font-weight: bold;'>⚠️ LOW STOCK!</span><br>";
    }
    
    echo "</div>";
}

echo "<h3>Summary:</h3>";
echo "Total Inventory Value: $" . number_format($total_amount, 2) . "<br>";
echo "Low Stock Items: " . (count($low_stock_items) > 0 ? implode(", ", $low_stock_items) : "None") . "<br>";

$gradeBook = [
    "Math" => [85, 92, 78, 96, 88],
    "Science" => [88, 94, 82, 89, 91],
    "English" => [79, 88, 91, 85, 82],
    "History" => [92, 87, 90, 94, 89],
    "Art" => [95, 93, 89, 91, 97]
];

echo "<h3>Subject Grade Analysis:</h3>";
$subject_averages = [];

foreach ($gradeBook as $subject => $grades) {
    echo "<h4>$subject</h4>";
    
    // Display individual grades
    echo "Grades: ";
    foreach ($grades as $index => $grade) {
        echo "Student " . ($index + 1) . ": $grade";
        if ($index < count($grades) - 1) echo ", ";
    }
    echo "<br>";
    
    // Calculate statistics
    $total = 0;
    $highest = 0;
    $lowest = 100;
    
    foreach ($grades as $grade) {
        $total += $grade;
        if ($grade > $highest) $highest = $grade;
        if ($grade < $lowest) $lowest = $grade;
    }
    
    $average = $total / count($grades);
    $subject_averages[$subject] = $average;
    
    echo "Average: " . round($average, 2) . "<br>";
    echo "Highest: $highest<br>";
    echo "Lowest: $lowest<br>";
    echo "Range: " . ($highest - $lowest) . "<br><br>";
}

// Overall analysis
echo "<h3>Overall Analysis:</h3>";
$best_subject = "";
$best_average = 0;

foreach ($subject_averages as $subject => $average) {
    echo "$subject Average: " . round($average, 2) . "<br>";
    if ($average > $best_average) {
        $best_average = $average;
        $best_subject = $subject;
    }
}

echo "<br><strong>Best performing subject: $best_subject (" . round($best_average, 2) . ")</strong>";


// Multi-dimensional foreach loop
$employees = [
    "EMP001" => [
        "name" => "Alice Johnson",
        "department" => "IT",
        "salary" => 75000,
        "skills" => ["PHP", "JavaScript", "MySQL", "Python"],
        "projects" => [
            "Project A" => ["status" => "completed", "hours" => 120],
            "Project B" => ["status" => "in_progress", "hours" => 80],
            "Project C" => ["status" => "planning", "hours" => 0]
        ]
    ],
    "EMP002" => [
        "name" => "Bob Smith",
        "department" => "Marketing",
        "salary" => 65000,
        "skills" => ["SEO", "Content Writing", "Social Media", "Analytics"],
        "projects" => [
            "Campaign X" => ["status" => "completed", "hours" => 200],
            "Campaign Y" => ["status" => "in_progress", "hours" => 150]
        ]
    ],
    "EMP003" => [
        "name" => "Carol Davis",
        "department" => "IT",
        "salary" => 80000,
        "skills" => ["Java", "Spring", "Docker", "AWS"],
        "projects" => [
            "System Upgrade" => ["status" => "completed", "hours" => 300],
            "API Development" => ["status" => "in_progress", "hours" => 120]
        ]
    ]
];

echo "<h2>Employee Directory</h2>";

foreach ($employees as $emp_id => $employee) {
    echo "<div style='border: 2px solid #333; margin: 20px; padding: 15px; background: #f9f9f9;'>";
    echo "<h3>{$employee['name']} ($emp_id)</h3>";
    echo "<p><strong>Department:</strong> {$employee['department']}</p>";
    echo "<p><strong>Salary:</strong> $" . number_format($employee['salary']) . "</p>";
    
    // Display skills
    echo "<p><strong>Skills:</strong> ";
    foreach ($employee['skills'] as $index => $skill) {
        echo $skill;
        if ($index < count($employee['skills']) - 1) echo ", ";
    }
    echo "</p>";
    
    // Display projects
    echo "<h4>Projects:</h4>";
    $total_hours = 0;
    foreach ($employee['projects'] as $project_name => $project_info) {
        $status_color = ($project_info['status'] == 'completed') ? 'green' : 
                       (($project_info['status'] == 'in_progress') ? 'orange' : 'red');
        
        echo "<div style='margin-left: 20px;'>";
        echo "<strong>$project_name:</strong> ";
        echo "<span style='color: $status_color;'>" . ucwords(str_replace('_', ' ', $project_info['status'])) . "</span>";
        echo " ({$project_info['hours']} hours)<br>";
        echo "</div>";
        
        $total_hours += $project_info['hours'];
    }
    
    echo "<p><strong>Total Project Hours:</strong> $total_hours</p>";
    echo "</div>";
}

// Department-wise analysis
echo "<h2>Department Analysis</h2>";
$departments = [];

foreach ($employees as $emp_id => $employee) {
    $dept = $employee['department'];
    if (!isset($departments[$dept])) {
        $departments[$dept] = [
            'employees' => [],
            'total_salary' => 0,
            'all_skills' => []
        ];
    }
    
    $departments[$dept]['employees'][] = $employee['name'];
    $departments[$dept]['total_salary'] += $employee['salary'];
    
    foreach ($employee['skills'] as $skill) {
        if (!in_array($skill, $departments[$dept]['all_skills'])) {
            $departments[$dept]['all_skills'][] = $skill;
        }
    }
}

foreach ($departments as $dept_name => $dept_info) {
    echo "<h3>$dept_name Department</h3>";
    echo "<p><strong>Employees:</strong> " . implode(", ", $dept_info['employees']) . "</p>";
    echo "<p><strong>Total Salary Budget:</strong> $" . number_format($dept_info['total_salary']) . "</p>";
    echo "<p><strong>Available Skills:</strong> " . implode(", ", $dept_info['all_skills']) . "</p>";
    echo "<hr>";
}

// Exercise 4.2: Data Processing and Reports
$school_data = [
    "Grade_9" => [
        "students" => [
            "Alice" => ["math" => 85, "science" => 92, "english" => 78],
            "Bob" => ["math" => 78, "science" => 85, "english" => 82],
            "Charlie" => ["math" => 92, "science" => 89, "english" => 91]
        ],
        "teacher" => "Ms. Johnson"
    ],
    "Grade_10" => [
        "students" => [
            "Diana" => ["math" => 94, "science" => 88, "english" => 89],
            "Eve" => ["math" => 87, "science" => 91, "english" => 85],
            "Frank" => ["math" => 82, "science" => 86, "english" => 90]
        ],
        "teacher" => "Mr. Smith"
    ],
    "Grade_11" => [
        "students" => [
            "Grace" => ["math" => 96, "science" => 94, "english" => 88],
            "Henry" => ["math" => 89, "science" => 87, "english" => 92],
            "Ivy" => ["math" => 91, "science" => 93, "english" => 89]
        ],
        "teacher" => "Dr. Brown"
    ]
];

echo "<h2>School Grade Report</h2>";

$all_subject_totals = ["math" => 0, "science" => 0, "english" => 0];
$all_subject_counts = ["math" => 0, "science" => 0, "english" => 0];

foreach ($school_data as $grade => $grade_info) {
    $grade_display = str_replace("_", " ", $grade);
    echo "<div style='border: 1px solid #ccc; margin: 15px; padding: 15px;'>";
    echo "<h3>$grade_display - Teacher: {$grade_info['teacher']}</h3>";
    
    $grade_subject_totals = ["math" => 0, "science" => 0, "english" => 0];
    $student_count = count($grade_info['students']);
    
    // Process each student
    foreach ($grade_info['students'] as $student_name => $subjects) {
        echo "<h4>$student_name</h4>";
        $student_total = 0;
        
        foreach ($subjects as $subject => $grade) {
            echo "$subject: $grade<br>";
            $student_total += $grade;
            $grade_subject_totals[$subject] += $grade;
            $all_subject_totals[$subject] += $grade;
            $all_subject_counts[$subject]++;
        }
        
        $student_average = $student_total / count($subjects);
        echo "<strong>Average: " . round($student_average, 2) . "</strong><br><br>";
    }
    
    // Grade-level averages
    echo "<h4>Grade Averages:</h4>";
    foreach ($grade_subject_totals as $subject => $total) {
        $avg = $total / $student_count;
        echo ucfirst($subject) . ": " . round($avg, 2) . "<br>";
    }
    
    echo "</div>";
}

// School-wide averages
echo "<h2>School-wide Subject Averages</h2>";
foreach ($all_subject_totals as $subject => $total) {
    $school_avg = $total / $all_subject_counts[$subject];
    echo "<p><strong>" . ucfirst($subject) . ":</strong> " . round($school_avg, 2) . "</p>";
}



//Practice Set 4: Advanced foreach Techniques
//Exercise 4.1: Array Filtering and Transformation

$products = [
    ["name" => "Laptop", "price" => 999.99, "category" => "Electronics", "rating" => 4.5],
    ["name" => "Book", "price" => 19.99, "category" => "Education", "rating" => 4.2],
    ["name" => "Chair", "price" => 149.99, "category" => "Furniture", "rating" => 3.8],
    ["name" => "Phone", "price" => 699.99, "category" => "Electronics", "rating" => 4.7],
    ["name" => "Table", "price" => 299.99, "category" => "Furniture", "rating" => 4.1],
    ["name" => "Tablet", "price" => 399.99, "category" => "Electronics", "rating" => 4.3]
];

// Filter products by category
$electronics = [];
$furniture = [];
$education = [];

foreach ($products as $product) {
    switch ($product['category']) {
        case 'Electronics':
            $electronics[] = $product;
            break;
        case 'Furniture':
            $furniture[] = $product;
            break;
        case 'Education':
            $education[] = $product;
            break;
    }
}

echo "<h3>Products by Category</h3>";

$categories = [
    'Electronics' => $electronics,
    'Furniture' => $furniture,
    'Education' => $education
];

foreach ($categories as $category_name => $category_products) {
    if (count($category_products) > 0) {
        echo "<h4>$category_name</h4>";
        $total_value = 0;
        $avg_rating = 0;
        
        foreach ($category_products as $product) {
            echo "- {$product['name']}: $" . number_format($product['price'], 2) . 
                 " (Rating: {$product['rating']}/5)<br>";
            $total_value += $product['price'];
            $avg_rating += $product['rating'];
        }
        
        $avg_rating = $avg_rating / count($category_products);
        echo "<em>Total Value: $" . number_format($total_value, 2) . 
             " | Average Rating: " . round($avg_rating, 2) . "</em><br><br>";
    }
}

// Find high-rated and expensive products
$premium_products = [];
foreach ($products as $product) {
    if ($product['price'] > 200 && $product['rating'] >= 4.0) {
        $premium_products[] = $product;
    }
}

echo "<h3>Premium Products (Price > $200 & Rating ≥ 4.0)</h3>";
foreach ($premium_products as $product) {
    echo "🏆 {$product['name']} - $" . number_format($product['price'], 2) . 
         " (Rating: {$product['rating']}/5)<br>";
}
?>

Exercise 4.2: Data Processing and Reports
<?php
$sales_data = [
    "January" => [
        "week1" => ["online" => 1200, "store" => 800, "mobile" => 400],
        "week2" => ["online" => 1500, "store" => 900, "mobile" => 600],
        "week3" => ["online" => 1800, "store" => 1000, "mobile" => 700],
        "week4" => ["online" => 2000, "store" => 1200, "mobile" => 800]
    ],
    "February" => [
        "week1" => ["online" => 1300, "store" => 850, "mobile" => 450],
        "week2" => ["online" => 1600, "store" => 950, "mobile" => 650],
        "week3" => ["online" => 1900, "store" => 1100, "mobile" => 750],
        "week4" => ["online" => 2100, "store" => 1300, "mobile" => 850]
    ],
    "March" => [
        "week1" => ["online" => 1400, "store" => 900, "mobile" => 500],
        "week2" => ["online" => 1700, "store" => 1000, "mobile" => 700],
        "week3" => ["online" => 2000, "store" => 1150, "mobile" => 800],
        "week4" => ["online" => 2200, "store" => 1400, "mobile" => 900]
    ]
];

echo "<h2>Sales Performance Report</h2>";

$monthly_totals = [];
$channel_totals = ["online" => 0, "store" => 0, "mobile" => 0];
$grand_total = 0;

// Process each month
foreach ($sales_data as $month => $weeks) {
    echo "<h3>$month Sales</h3>";
    
    $month_total = 0;
    $month_channels = ["online" => 0, "store" => 0, "mobile" => 0];
    
    // Process each week
    foreach ($weeks as $week => $channels) {
        $week_total = 0;
        echo "<strong>" . ucfirst($week) . ":</strong> ";
        
        // Process each channel
        foreach ($channels as $channel => $amount) {
            echo "$channel: $" . number_format($amount) . " | ";
            $week_total += $amount;
            $month_channels[$channel] += $amount;
            $channel_totals[$channel] += $amount;
        }
        
        echo "<em>Week Total: $" . number_format($week_total) . "</em><br>";
        $month_total += $week_total;
    }
    
    echo "<div style='background: #f0f0f0; padding: 10px; margin: 10px 0;'>";
    echo "<strong>$month Summary:</strong><br>";
    foreach ($month_channels as $channel => $total) {
        $percentage = ($total / $month_total) * 100;
        echo ucfirst($channel) . ": $" . number_format($total) . 
             " (" . round($percentage, 1) . "%)<br>";
    }
    echo "<strong>Month Total: $" . number_format($month_total) . "</strong>";
    echo "</div>";
    
    $monthly_totals[$month] = $month_total;
    $grand_total += $month_total;
}

// Overall summary
echo "<h2>Quarterly Summary</h2>";
echo "<div style='border: 2px solid #333; padding: 15px; background: #e8f4f8;'>";

echo "<h3>Monthly Performance:</h3>";
foreach ($monthly_totals as $month => $total) {
    $percentage = ($total / $grand_total) * 100;
    echo "$month: $" . number_format($total) . " (" . round($percentage, 1) . "%)<br>";
}

echo "<h3>Channel Performance:</h3>";
foreach ($channel_totals as $channel => $total) {
    $percentage = ($total / $grand_total) * 100;
    echo ucfirst($channel) . ": $" . number_format($total) . " (" . round($percentage, 1) . "%)<br>";
}

echo "<h3>Grand Total: $" . number_format($grand_total) . "</h3>";
echo "</div>";

// Find best performing periods
$best_week_amount = 0;
$best_week_info = "";

foreach ($sales_data as $month => $weeks) {
    foreach ($weeks as $week => $channels) {
        $week_total = array_sum($channels);
        if ($week_total > $best_week_amount) {
            $best_week_amount = $week_total;
            $best_week_info = "$month - $week";
        }
    }
}

echo "<p><strong>🏆 Best Week:</strong> $best_week_info with $" . number_format($best_week_amount) . "</p>";



//Challenge 1: Complex Data Analysis

// Student performance across multiple semesters
$student_records = [
    "John_Doe" => [
        "Fall_2023" => [
            "courses" => [
                "Math_101" => ["grade" => 85, "credits" => 3, "attendance" => 95],
                "English_101" => ["grade" => 88, "credits" => 3, "attendance" => 92],
                "History_101" => ["grade" => 82, "credits" => 3, "attendance" => 88]
            ]
        ],
        "Spring_2024" => [
            "courses" => [
                "Math_102" => ["grade" => 90, "credits" => 3, "attendance" => 98],
                "English_102" => ["grade" => 85, "credits" => 3, "attendance" => 90],
                "Science_101" => ["grade" => 92, "credits" => 4, "attendance" => 95]
            ]
        ]
    ],
    "Jane_Smith" => [
        "Fall_2023" => [
            "courses" => [
                "Math_101" => ["grade" => 92, "credits" => 3, "attendance" => 98],
                "English_101" => ["grade" => 89, "credits" => 3, "attendance" => 94],
                "Art_101" => ["grade" => 95, "credits" => 2, "attendance" => 96]
            ]
        ],
        "Spring_2024" => [
            "courses" => [
                "Math_102" => ["grade" => 88, "credits" => 3, "attendance" => 92],
                "English_102" => ["grade" => 91, "credits" => 3, "attendance" => 95],
                "Art_102" => ["grade" => 97, "credits" => 2, "attendance" => 99]
            ]
        ]
    ]
];

// Challenge: Calculate comprehensive student analytics
foreach ($student_records as $student_name => $semesters) {
    $display_name = str_replace("_", " ", $student_name);
    echo "<div style='border: 2px solid #333; margin: 20px; padding: 15px;'>";
    echo "<h2>$display_name - Academic Report</h2>";
    
    $total_grade_points = 0;
    $total_credits = 0;
    $total_attendance_sum = 0;
    $total_courses = 0;
    $semester_gpas = [];
    
    foreach ($semesters as $semester => $semester_data) {
        $semester_display = str_replace("_", " ", $semester);
        echo "<h3>$semester_display</h3>";
        
        $semester_grade_points = 0;
        $semester_credits = 0;
        $semester_attendance_sum = 0;
        $semester_courses = 0;
        
        foreach ($semester_data['courses'] as $course => $details) {
            $course_display = str_replace("_", " ", $course);
            echo "<div style='margin-left: 20px;'>";
            echo "<strong>$course_display:</strong><br>";
            echo "Grade: {$details['grade']}% | ";
            echo "Credits: {$details['credits']} | ";
            echo "Attendance: {$details['attendance']}%<br>";
            echo "</div>";
            
            // Calculate weighted grade points
            $grade_point = ($details['grade'] / 100) * 4.0; // Convert to 4.0 scale
            $semester_grade_points += ($grade_point * $details['credits']);
            $semester_credits += $details['credits'];
            $semester_attendance_sum += $details['attendance'];
            $semester_courses++;
        }
        
        $semester_gpa = $semester_credits > 0 ? $semester_grade_points / $semester_credits : 0;
        $semester_avg_attendance = $semester_courses > 0 ? $semester_attendance_sum / $semester_courses : 0;
        $semester_gpas[] = $semester_gpa;
        
        echo "<div style='background: #f0f0f0; padding: 10px; margin: 10px 0;'>";
        echo "<strong>Semester Summary:</strong><br>";
        echo "GPA: " . round($semester_gpa, 2) . "<br>";
        echo "Credits: $semester_credits<br>";
        echo "Average Attendance: " . round($semester_avg_attendance, 1) . "%<br>";
        echo "</div>";
        
        $total_grade_points += $semester_grade_points;
        $total_credits += $semester_credits;
        $total_attendance_sum += $semester_attendance_sum;
        $total_courses += $semester_courses;
    }
    
    // Calculate overall statistics
    $cumulative_gpa = $total_credits > 0 ? $total_grade_points / $total_credits : 0;
    $overall_attendance = $total_courses > 0 ? $total_attendance_sum / $total_courses : 0;
    $gpa_trend = count($semester_gpas) >= 2 ? 
        ($semester_gpas[count($semester_gpas) - 1] - $semester_gpas[0]) : 0;
    
    echo "<div style='background: #d4edda; border: 1px solid #c3e6cb; padding: 15px;'>";
    echo "<h3>Overall Performance Summary</h3>";
    echo "<strong>Cumulative GPA:</strong> " . round($cumulative_gpa, 2) . "<br>";
    echo "<strong>Total Credits:</strong> $total_credits<br>";
    echo "<strong>Overall Attendance:</strong> " . round($overall_attendance, 1) . "%<br>";
    echo "<strong>GPA Trend:</strong> " . 
         ($gpa_trend > 0 ? "📈 Improving (+" . round($gpa_trend, 2) . ")" : 
          ($gpa_trend < 0 ? "📉 Declining (" . round($gpa_trend, 2) . ")" : "➡️ Stable")) . "<br>";
    
    // Performance indicators
    if ($cumulative_gpa >= 3.5) echo "🏆 <strong>Dean's List Candidate</strong><br>";
    if ($overall_attendance >= 95) echo "🎯 <strong>Perfect Attendance</strong><br>";
    if ($overall_attendance < 85) echo "⚠️ <strong>Attendance Warning</strong><br>";
    
    echo "</div>";
    echo "</div>";
}


//Challenge 2: E-commerce Order Processing

$order_system = [
    "ORD_001" => [
        "customer" => "Alice Johnson",
        "date" => "2024-01-15",
        "status" => "delivered",
        "items" => [
            ["product" => "Laptop", "quantity" => 1, "price" => 999.99, "category" => "Electronics"],
            ["product" => "Mouse", "quantity" => 2, "price" => 25.99, "category" => "Electronics"],
            ["product" => "Keyboard", "quantity" => 1, "price" => 79.99, "category" => "Electronics"]
        ],
        "shipping" => 15.99,
        "discount" => 50.00
    ],
    "ORD_002" => [
        "customer" => "Bob Smith",
        "date" => "2024-01-16",
        "status" => "processing",
        "items" => [
            ["product" => "Book", "quantity" => 3, "price" => 19.99, "category" => "Education"],
            ["product" => "Notebook", "quantity" => 5, "price" => 4.99, "category" => "Stationery"]
        ],
        "shipping" => 8.99,
        "discount" => 0.00
    ],
    "ORD_003" => [
        "customer" => "Carol Davis",
        "date" => "2024-01-17",
        "status" => "shipped",
        "items" => [
            ["product" => "Chair", "quantity" => 1, "price" => 149.99, "category" => "Furniture"],
            ["product" => "Desk Lamp", "quantity" => 1, "price" => 39.99, "category" => "Furniture"],
            ["product" => "Plant", "quantity" => 2, "price" => 15.99, "category" => "Home & Garden"]
        ],
        "shipping" => 25.00,
        "discount" => 20.00
    ]
];

echo "<h2>Order Management Dashboard</h2>";

$total_revenue = 0;
$total_orders = 0;
$status_counts = [];
$category_sales = [];
$customer_orders = [];

foreach ($order_system as $order_id => $order) {
    echo "<div style='border: 1px solid #ccc; margin: 15px; padding: 15px; background: #fafafa;'>";
    echo "<h3>Order: $order_id</h3>";
    echo "<p><strong>Customer:</strong> {$order['customer']}</p>";
    echo "<p><strong>Date:</strong> {$order['date']}</p>";
    
    $status_color = match($order['status']) {
        'delivered' => 'green',
        'shipped' => 'blue',
        'processing' => 'orange',
        'cancelled' => 'red',
        default => 'black'
    };
    
    echo "<p><strong>Status:</strong> <span style='color: $status_color; font-weight: bold;'>" . 
         ucfirst($order['status']) . "</span></p>";
    
    // Count status for analytics
    $status_counts[$order['status']] = ($status_counts[$order['status']] ?? 0) + 1;
    
    // Process items
    $subtotal = 0;
    echo "<h4>Items:</h4>";
    echo "<table border='1' cellpadding='5' style='width: 100%; border-collapse: collapse;'>";
    echo "<tr><th>Product</th><th>Category</th><th>Quantity</th><th>Unit Price</th><th>Total</th></tr>";
    
    foreach ($order['items'] as $item) {
        $item_total = $item['quantity'] * $item['price'];
        $subtotal += $item_total;
        
        echo "<tr>";
        echo "<td>{$item['product']}</td>";
        echo "<td>{$item['category']}</td>";
        echo "<td>{$item['quantity']}</td>";
        echo "<td>$" . number_format($item['price'], 2) . "</td>";
        echo "<td>$" . number_format($item_total, 2) . "</td>";
        echo "</tr>";
        
        // Track category sales
        $category_sales[$item['category']] = ($category_sales[$item['category']] ?? 0) + $item_total;
    }
    
    echo "</table>";
    
    // Calculate order totals
    $order_total = $subtotal + $order['shipping'] - $order['discount'];
    
    echo "<div style='background: #e8f4f8; padding: 10px; margin: 10px 0;'>";
    echo "<p><strong>Subtotal:</strong> $" . number_format($subtotal, 2) . "</p>";
    echo "<p><strong>Shipping:</strong> $" . number_format($order['shipping'], 2) . "</p>";
    echo "<p><strong>Discount:</strong> -$" . number_format($order['discount'], 2) . "</p>";
    echo "<p><strong>Order Total:</strong> $" . number_format($order_total, 2) . "</p>";
    echo "</div>";
    
    echo "</div>";
    
    // Update analytics
    $total_revenue += $order_total;
    $total_orders++;
    
    // Track customer order count
    $customer_orders[$order['customer']] = ($customer_orders[$order['customer']] ?? 0) + 1;
}

// Generate comprehensive analytics
echo "<div style='border: 3px solid #333; margin: 20px; padding: 20px; background: #f0f8ff;'>";
echo "<h2>📊 Business Analytics Dashboard</h2>";

echo "<div style='display: flex; flex-wrap: wrap;'>";

// Revenue Analytics
echo "<div style='flex: 1; min-width: 300px; margin: 10px; padding: 15px; border: 1px solid #ddd;'>";
echo "<h3>💰 Revenue Summary</h3>";
echo "<p><strong>Total Revenue:</strong> $" . number_format($total_revenue, 2) . "</p>";
echo "<p><strong>Total Orders:</strong> $total_orders</p>";
echo "<p><strong>Average Order Value:</strong> $" . number_format($total_revenue / $total_orders, 2) . "</p>";
echo "</div>";

// Order Status Analytics
echo "<div style='flex: 1; min-width: 300px; margin: 10px; padding: 15px; border: 1px solid #ddd;'>";
echo "<h3>📋 Order Status Distribution</h3>";
foreach ($status_counts as $status => $count) {
    $percentage = ($count / $total_orders) * 100;
    echo "<p><strong>" . ucfirst($status) . ":</strong> $count orders (" . round($percentage, 1) . "%)</p>";
}
echo "</div>";

// Category Performance
echo "<div style='flex: 1; min-width: 300px; margin: 10px; padding: 15px; border: 1px solid #ddd;'>";
echo "<h3>🏷️ Category Performance</h3>";
arsort($category_sales); // Sort by sales descending
foreach ($category_sales as $category => $sales) {
    $percentage = ($sales / $total_revenue) * 100;
    echo "<p><strong>$category:</strong> $" . number_format($sales, 2) . " (" . round($percentage, 1) . "%)</p>";
}
echo "</div>";

// Customer Analytics
echo "<div style='flex: 1; min-width: 300px; margin: 10px; padding: 15px; border: 1px solid #ddd;'>";
echo "<h3>👥 Customer Insights</h3>";
arsort($customer_orders);
foreach ($customer_orders as $customer => $order_count) {
    $customer_type = $order_count > 1 ? "🌟 Repeat Customer" : "🆕 New Customer";
    echo "<p><strong>$customer:</strong> $order_count orders $customer_type</p>";
}
echo "</div>";

echo "</div>"; // Close flex container

// Top performing metrics
$top_category = array_key_first($category_sales);
$top_customer = array_key_first($customer_orders);

echo "<div style='background: #d1ecf1; padding: 15px; margin: 15px 0; border-left: 5px solid #bee5eb;'>";
echo "<h3>🏆 Key Highlights</h3>";
echo "<p>🥇 <strong>Top Category:</strong> $top_category ($" . number_format($category_sales[$top_category], 2) . ")</p>";
echo "<p>🥇 <strong>Most Active Customer:</strong> $top_customer ({$customer_orders[$top_customer]} orders)</p>";
echo "<p>📈 <strong>Fulfillment Rate:</strong> " . 
     round((($status_counts['delivered'] ?? 0) / $total_orders) * 100, 1) . "%</p>";
echo "</div>";

echo "</div>"; // Close analytics dashboard

//Challenge 3: Advanced Data Mining and Reporting
// Website analytics data
$website_analytics = [
    "2024-01-01" => [
        "visitors" => [
            "desktop" => ["new" => 150, "returning" => 300],
            "mobile" => ["new" => 200, "returning" => 400],
            "tablet" => ["new" => 50, "returning" => 100]
        ],
        "pages" => [
            "homepage" => 500,
            "products" => 300,
            "about" => 150,
            "contact" => 100,
            "blog" => 250
        ],
        "conversions" => [
            "purchases" => 45,
            "signups" => 80,
            "downloads" => 120
        ]
    ],
    "2024-01-02" => [
        "visitors" => [
            "desktop" => ["new" => 180, "returning" => 320],
            "mobile" => ["new" => 250, "returning" => 450],
            "tablet" => ["new" => 60, "returning" => 110]
        ],
        "pages" => [
            "homepage" => 600,
            "products" => 380,
            "about" => 180,
            "contact" => 120,
            "blog" => 300
        ],
        "conversions" => [
            "purchases" => 52,
            "signups" => 95,
            "downloads" => 140
        ]
    ],
    "2024-01-03" => [
        "visitors" => [
            "desktop" => ["new" => 160, "returning" => 280],
            "mobile" => ["new" => 230, "returning" => 420],
            "tablet" => ["new" => 45, "returning" => 90]
        ],
        "pages" => [
            "homepage" => 550,
            "products" => 340,
            "about" => 160,
            "contact" => 110,
            "blog" => 280
        ],
        "conversions" => [
            "purchases" => 48,
            "signups" => 88,
            "downloads" => 135
        ]
    ]
];

echo "<h1>📊 Website Analytics Deep Dive</h1>";

// Initialize tracking variables
$total_daily_visitors = [];
$device_totals = ["desktop" => 0, "mobile" => 0, "tablet" => 0];
$visitor_type_totals = ["new" => 0, "returning" => 0];
$page_totals = [];
$conversion_totals = [];
$daily_conversion_rates = [];

// Process each day's data
foreach ($website_analytics as $date => $daily_data) {
    echo "<div style='border: 2px solid #007bff; margin: 20px; padding: 20px; border-radius: 10px;'>";
    echo "<h2>📅 Analytics for $date</h2>";
    
    // Process visitor data
    $daily_visitor_count = 0;
    $daily_new = 0;
    $daily_returning = 0;
    
    echo "<h3>👥 Visitor Breakdown</h3>";
    echo "<table border='1' cellpadding='8' style='border-collapse: collapse; width: 100%;'>";
    echo "<tr style='background: #f8f9fa;'><th>Device</th><th>New Visitors</th><th>Returning Visitors</th><th>Total</th><th>% of Daily Traffic</th></tr>";
    
    foreach ($daily_data['visitors'] as $device => $visitor_types) {
        $device_total = $visitor_types['new'] + $visitor_types['returning'];
        $daily_visitor_count += $device_total;
        $daily_new += $visitor_types['new'];
        $daily_returning += $visitor_types['returning'];
        
        // Update running totals
        $device_totals[$device] += $device_total;
        $visitor_type_totals['new'] += $visitor_types['new'];
        $visitor_type_totals['returning'] += $visitor_types['returning'];
    }
    
    // Display device breakdown with percentages
    foreach ($daily_data['visitors'] as $device => $visitor_types) {
        $device_total = $visitor_types['new'] + $visitor_types['returning'];
        $percentage = ($device_total / $daily_visitor_count) * 100;
        
        echo "<tr>";
        echo "<td><strong>" . ucfirst($device) . "</strong></td>";
        echo "<td>{$visitor_types['new']}</td>";
        echo "<td>{$visitor_types['returning']}</td>";
        echo "<td><strong>$device_total</strong></td>";
        echo "<td>" . round($percentage, 1) . "%</td>";
        echo "</tr>";
    }
    
    echo "</table>";
    
    $total_daily_visitors[] = $daily_visitor_count;
    $new_visitor_rate = ($daily_new / $daily_visitor_count) * 100;
    
    echo "<div style='background: #e3f2fd; padding: 10px; margin: 10px 0; border-radius: 5px;'>";
    echo "<p><strong>📈 Daily Visitor Summary:</strong></p>";
    echo "<p>Total Visitors: <strong>$daily_visitor_count</strong></p>";
    echo "<p>New vs Returning: <strong>$daily_new</strong> new (" . round($new_visitor_rate, 1) . "%) | ";
    echo "<strong>$daily_returning</strong> returning (" . round(100 - $new_visitor_rate, 1) . "%)</p>";
    echo "</div>";
    
    // Process page views
    echo "<h3>📄 Page Performance</h3>";
    $daily_page_views = array_sum($daily_data['pages']);
    
    echo "<div style='display: flex; flex-wrap: wrap; gap: 10px;'>";
    foreach ($daily_data['pages'] as $page => $views) {
        $page_percentage = ($views / $daily_page_views) * 100;
        $page_totals[$page] = ($page_totals[$page] ?? 0) + $views;
        
        $color = match($page) {
            'homepage' => '#28a745',
            'products' => '#007bff',
            'blog' => '#ffc107',
            'about' => '#6c757d',
            'contact' => '#dc3545',
            default => '#17a2b8'
        };
        
        echo "<div style='background: $color; color: white; padding: 10px; border-radius: 5px; min-width: 120px; text-align: center;'>";
        echo "<strong>" . ucfirst($page) . "</strong><br>";
        echo "$views views<br>";
        echo "(" . round($page_percentage, 1) . "%)";
        echo "</div>";
    }
    echo "</div>";
    
    // Process conversions
    echo "<h3>🎯 Conversion Analysis</h3>";
    $daily_conversions = array_sum($daily_data['conversions']);
    $conversion_rate = ($daily_conversions / $daily_visitor_count) * 100;
    $daily_conversion_rates[] = $conversion_rate;
    
    echo "<table border='1' cellpadding='8' style='border-collapse: collapse; width: 100%;'>";
    echo "<tr style='background: #f8f9fa;'><th>Conversion Type</th><th>Count</th><th>Rate (% of visitors)</th></tr>";
    
    foreach ($daily_data['conversions'] as $type => $count) {
        $individual_rate = ($count / $daily_visitor_count) * 100;
        $conversion_totals[$type] = ($conversion_totals[$type] ?? 0) + $count;
        
        echo "<tr>";
        echo "<td><strong>" . ucfirst($type) . "</strong></td>";
        echo "<td>$count</td>";
        echo "<td>" . round($individual_rate, 2) . "%</td>";
        echo "</tr>";
    }
    
    echo "</table>";
    
    echo "<div style='background: #d4edda; padding: 10px; margin: 10px 0; border-radius: 5px;'>";
    echo "<p><strong>🎯 Daily Conversion Summary:</strong></p>";
    echo "<p>Total Conversions: <strong>$daily_conversions</strong></p>";
    echo "<p>Overall Conversion Rate: <strong>" . round($conversion_rate, 2) . "%</strong></p>";
    echo "</div>";
    
    echo "</div>"; // Close daily report
}

// Generate comprehensive period summary
echo "<div style='border: 3px solid #28a745; margin: 30px; padding: 25px; background: #f8fff8; border-radius: 15px;'>";
echo "<h1>🏆 Period Summary & Insights</h1>";

$total_visitors = array_sum($total_daily_visitors);
$avg_daily_visitors = $total_visitors / count($total_daily_visitors);
$total_conversions = array_sum($conversion_totals);
$avg_conversion_rate = array_sum($daily_conversion_rates) / count($daily_conversion_rates);

echo "<div style='display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px;'>";

// Visitor Insights
echo "<div style='background: white; padding: 15px; border-radius: 10px; box-shadow: 0 2px 5px rgba(0,0,0,0.1);'>";
echo "<h3>👥 Visitor Insights</h3>";
echo "<p><strong>Total Visitors:</strong> " . number_format($total_visitors) . "</p>";
echo "<p><strong>Daily Average:</strong> " . number_format($avg_daily_visitors, 0) . "</p>";
echo "<p><strong>Peak Day:</strong> " . number_format(max($total_daily_visitors)) . " visitors</p>";
echo "<p><strong>Growth Trend:</strong> " . 
     (end($total_daily_visitors) > $total_daily_visitors[0] ? "📈 Increasing" : "📉 Decreasing") . "</p>";
echo "</div>";

// Device Distribution
echo "<div style='background: white; padding: 15px; border-radius: 10px; box-shadow: 0 2px 5px rgba(0,0,0,0.1);'>";
echo "<h3>📱 Device Distribution</h3>";
arsort($device_totals);
foreach ($device_totals as $device => $total) {
    $percentage = ($total / $total_visitors) * 100;
    echo "<p><strong>" . ucfirst($device) . ":</strong> " . number_format($total) . " (" . round($percentage, 1) . "%)</p>";
}
echo "</div>";

// Page Performance
echo "<div style='background: white; padding: 15px; border-radius: 10px; box-shadow: 0 2px 5px rgba(0,0,0,0.1);'>";
echo "<h3>📄 Page Performance</h3>";
arsort($page_totals);
$total_page_views = array_sum($page_totals);
$top_pages = array_slice($page_totals, 0, 3, true);

foreach ($top_pages as $page => $views) {
    $percentage = ($views / $total_page_views) * 100;
    $rank = array_search($page, array_keys($page_totals)) + 1;
    echo "<p><strong>#$rank " . ucfirst($page) . ":</strong> " . number_format($views) . " views (" . round($percentage, 1) . "%)</p>";
}
echo "</div>";

// Conversion Performance  
echo "<div style='background: white; padding: 15px; border-radius: 10px; box-shadow: 0 2px 5px rgba(0,0,0,0.1);'>";
echo "<h3>🎯 Conversion Performance</h3>";
echo "<p><strong>Total Conversions:</strong> " . number_format($total_conversions) . "</p>";
echo "<p><strong>Average Rate:</strong> " . round($avg_conversion_rate, 2) . "%</p>";

arsort($conversion_totals);
foreach ($conversion_totals as $type => $count) {
    $rate = ($count / $total_visitors) * 100;
    echo "<p><strong>" . ucfirst($type) . ":</strong> " . number_format($count) . " (" . round($rate, 2) . "%)</p>";
}
echo "</div>";

echo "</div>"; // Close grid

// Key recommendations
echo "<div style='background: #fff3cd; border: 1px solid #ffeaa7; padding: 15px; margin: 15px 0; border-radius: 5px;'>";
echo "<h3>💡 Key Recommendations</h3>";

$mobile_percentage = ($device_totals['mobile'] / $total_visitors) * 100;
if ($mobile_percentage > 50) {
    echo "<p>🔥 <strong>Mobile First:</strong> {$mobile_percentage}% of traffic is mobile - prioritize mobile optimization!</p>";
}

$top_page = array_key_first($page_totals);
echo "<p>⭐ <strong>Content Strategy:</strong> '$top_page' is your top performer - consider similar content!</p>";

$best_conversion = array_key_first($conversion_totals);
echo "<p>🚀 <strong>Conversion Focus:</strong> '$best_conversion' shows best results - optimize this funnel!</p>";

if ($avg_conversion_rate < 5) {
    echo "<p>📈 <strong>Opportunity:</strong> Conversion rate is " . round($avg_conversion_rate, 2) . "% - consider A/B testing CTAs!</p>";
}

echo "</div>";

echo "</div>"; // Close period summary



/*
Quick foreach Reference & Best Practices
Essential foreach Patterns
// Basic patterns you'll use daily:

// 1. Simple value iteration
foreach ($array as $value) { }

// 2. Key-value iteration  
foreach ($array as $key => $value) { }

// 3. Reference modification (use with caution)
foreach ($array as &$value) { 
    $value = $value * 2; // Modifies original array
}
unset($value); // Good practice to unset reference

// 4. Nested iteration
foreach ($outer_array as $inner_array) {
    foreach ($inner_array as $item) { }
}

// 5. Conditional processing
foreach ($array as $item) {
    if ($condition) continue;    // Skip this iteration
    if ($other_condition) break; // Exit the loop
}

Performance Tips
// ✅ Good practices:
foreach ($large_array as $item) {
    // Process $item - foreach is memory efficient
}

// ❌ Avoid in foreach:
foreach ($array as $key => $value) {
    count($array);        // Don't recalculate on every iteration
    $array[] = $new_item; // Don't modify array being iterated
}

// ✅ Better approach:
$count = count($array);
foreach ($array as $key => $value) {
    // Use $count here
}

Common foreach Use Cases
Data Display - Show lists, tables, reports
Data Processing - Calculate totals, averages, statistics
Data Filtering - Find specific items, create subsets
Data Transformation - Convert formats, modify structures
Data Validation - Check conditions across datasets
Report Generation - Create summaries and analytics
🎯 Practice Exercises Summary
Basic Level: Simple arrays, calculations, string processing
Intermediate Level: Associative arrays, multi-dimensional structures
Advanced Level: Complex data analysis, nested iterations
Expert Level: Real-world applications, performance optimization
Remember: foreach is your best friend for array manipulation in PHP. Practice these patterns until they become second nature!
*/
?>