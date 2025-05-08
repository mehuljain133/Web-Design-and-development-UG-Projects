<?php
// Introduction to PHP
echo "<h1>Introduction to PHP</h1>";
echo "<p>PHP (Hypertext Preprocessor) is a server-side scripting language used to develop dynamic websites. Unlike static HTML, PHP can interact with databases, create dynamic content, and much more.</p>";
echo "<p>PHP is often compared to technologies like JSP (JavaServer Pages) and ASP (Active Server Pages). However, PHP is generally simpler, more widely used, and has better integration with web technologies like HTML, CSS, and JavaScript.</p>";

// PHP Programming Techniques
echo "<h2>PHP Programming Techniques</h2>";

// 1. Data Types
echo "<h3>1. Data Types</h3>";
$integer = 42;
$float = 3.14;
$string = "Hello, PHP!";
$boolean = true;
echo "<p>Integer: $integer</p>";
echo "<p>Float: $float</p>";
echo "<p>String: $string</p>";
echo "<p>Boolean: $boolean</p>";

// 2. Operators
echo "<h3>2. Operators</h3>";
$num1 = 10;
$num2 = 5;
$sum = $num1 + $num2;
$difference = $num1 - $num2;
$product = $num1 * $num2;
$quotient = $num1 / $num2;
echo "<p>Sum: $sum</p>";
echo "<p>Difference: $difference</p>";
echo "<p>Product: $product</p>";
echo "<p>Quotient: $quotient</p>";

// 3. Arrays
echo "<h3>3. Arrays</h3>";
// Indexed array
$fruits = array("Apple", "Banana", "Cherry");
echo "<p>Fruits: </p>";
echo "<ul>";
foreach ($fruits as $fruit) {
    echo "<li>$fruit</li>";
}
echo "</ul>";

// Associative array
$person = array("name" => "John", "age" => 30, "city" => "New York");
echo "<p>Person Details:</p>";
echo "<ul>";
foreach ($person as $key => $value) {
    echo "<li>$key: $value</li>";
}
echo "</ul>";

// 4. Loops
echo "<h3>4. Loops</h3>";
echo "<p>For Loop Example:</p>";
for ($i = 1; $i <= 5; $i++) {
    echo "<p>Iteration $i</p>";
}

echo "<p>While Loop Example:</p>";
$i = 1;
while ($i <= 3) {
    echo "<p>Iteration $i</p>";
    $i++;
}

echo "<p>Foreach Loop Example (Associative Array):</p>";
foreach ($person as $key => $value) {
    echo "<p>$key: $value</p>";
}

// 5. Conditional Statements
echo "<h3>5. Conditional Statements</h3>";
$number = 15;
echo "<p>Checking if the number is even or odd:</p>";
if ($number % 2 == 0) {
    echo "<p>$number is even.</p>";
} else {
    echo "<p>$number is odd.</p>";
}

echo "<p>Switch Case Example:</p>";
$day = "Monday";
switch ($day) {
    case "Monday":
        echo "<p>Today is Monday.</p>";
        break;
    case "Tuesday":
        echo "<p>Today is Tuesday.</p>";
        break;
    default:
        echo "<p>Invalid day.</p>";
        break;
}

// 6. Functions
echo "<h3>6. Functions</h3>";
function greet($name) {
    return "Hello, $name!";
}
echo "<p>" . greet("John") . "</p>";

// 7. Regular Expressions
echo "<h3>7. Regular Expressions</h3>";
$email = "example@domain.com";
if (preg_match("/^([a-zA-Z0-9]+@[a-zA-Z0-9]+\.[a-zA-Z]{2,3})$/", $email)) {
    echo "<p>The email '$email' is valid.</p>";
} else {
    echo "<p>The email '$email' is invalid.</p>";
}
?>
