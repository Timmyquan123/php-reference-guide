<?php
// ==========================================
// 📝 PHP Reference Guide
// Created by Timmy 🚀
// ==========================================

echo "Welcome to the PHP Reference Guide, created by Timmy 🚀\n"; // 👉 expected output: Welcome message



// 🎯 **Variables**
$place = "first";



// 🔁 **Switch Statement**
switch ($place) {
    case "first":
        echo "gold\n"; // 👉 expected output: gold
        break;
    case "second":
        echo "silver\n";
        break;
    default:
        echo "no medal\n";
}



// 💡 **If Statement**
$place2 = "first";
if ($place2 == "first") {
    echo "gold\n"; // 👉 expected output: gold
} elseif ($place2 == "second") {
    echo "silver\n";
} else {
    echo "no medal\n";
}


// 🔁 **For Loop**
$array = [1, 2, 3];
for ($i = 0; $i < count($array); $i++) {
    echo $array[$i] . "\n"; // 👉 expected output: 1, 2, 3 (one per line)
}


// 🔁 **While Loop**
$counter = 3;
while ($counter >= 0) {
    echo $counter . "\n"; // 👉 expected output: 3, 2, 1, 0 (one per line)
    $counter--;
}


// 💡 **Functions Without Parameters**
function addNumber() {
    $a = 10;
    $b = 20;
    echo $a + $b . "\n"; // 👉 expected output: 30
}
addNumber();


// 💡 **Functions With Parameters**
function addNumbers($a, $b) {
    echo $a + $b . "\n"; // 👉 expected output: 11
}
addNumbers(4, 7);


// 💡 **Return Values from Functions**
function getTotal($a, $b) {
    return $a + $b;
}
$total = getTotal(2, 3);
echo $total . "\n"; // 👉 expected output: 5



// 🔧 **Arrays**
$arr = ['tony', 'timi', 8];
print_r($arr); // 👉 expected output: Array ( [0] => tony [1] => timi [2] => 8 )


// 🛠 **Associative Arrays (Objects Equivalent)**
$house = [
    "rooms" => 4,
    "color" => "pink",
    "priceUSD" => 12345
];
print_r($house); // 👉 expected output: Array ( [rooms] => 4 [color] => pink [priceUSD] => 12345 )


// 🛠 **Loop Through Associative Array**
$drone = [
    "speed" => 100,
    "altitude" => 200,
    "color" => "red"
];
foreach ($drone as $key => $value) {
    echo "$key: $value\n"; // 👉 expected output: speed: 100, altitude: 200, color: red (one per line)
}


// 🛠 **Array Functions**
$fruits = [];
array_push($fruits, "apple", "pear");
array_pop($fruits);
print_r($fruits); // 👉 expected output: Array ( [0] => apple )


// 🛠 **Building Arrays with Functions**
function arrayBuilder($one, $two, $three) {
    return [$one, $two, $three];
}
print_r(arrayBuilder("apple", "pear", "plum")); // 👉 expected output: Array ( [0] => apple [1] => pear [2] => plum )


// 🛠 **Objects with Methods using Classes**
class Car {
    public $color;
    function __construct($color) {
        $this->color = $color;
    }

    function turnKey() {
        echo "The engine is running\n"; // 👉 expected output: The engine is running
    }

    function lightsOn() {
        echo "The lights are on\n"; // 👉 expected output: The lights are on
    }
}
$car = new Car("red");
echo $car->color . "\n"; // 👉 expected output: red
$car->turnKey();
$car->lightsOn();


// ⚠️ **Error Handling (Try-Catch Block)**
try {
    throw new Exception("Intentional error");
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "\n"; // 👉 expected output: Error: Intentional error
}
echo "My program does not stop\n"; // 👉 expected output: My program does not stop

// 💡 **Error Handling in Functions**
function addTwoNums($a, $b) {
    try {
        if (!is_numeric($a)) {
            throw new Exception("First argument is not a number");
        }
        if (!is_numeric($b)) {
            throw new Exception("Second argument is not a number");
        }
        echo $a + $b . "\n"; // 👉 expected output: if valid numbers, prints sum
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage() . "\n"; // 👉 expected output if error: Error: ...
    }
}
addTwoNums(5, "five"); // 👉 expected output: Error: Second argument is not a number
echo "It still works\n"; // 👉 expected output: It still works


// 🛠 **Functional Programming Style**
$shoes = 100;
$tax = 1.2;

function totalPrice($price, $tax) {
    return $price * $tax;
}
echo totalPrice($shoes, $tax) . "\n"; // 👉 expected output: 120


// 🛠 **Object-Oriented Programming (OOP)**
class Purchase {
    public $shoes;
    public $stateTax;
    function __construct($shoes, $stateTax) {
        $this->shoes = $shoes;
        $this->stateTax = $stateTax;
    }

    function totalPrice() {
        echo "Total price: " . ($this->shoes * $this->stateTax) . "\n"; // 👉 expected output: Total price: ...
    }
}
$p1 = new Purchase(100, 1.2);
$p1->totalPrice(); // 👉 expected output: Total price: 120
$p2 = new Purchase(500, 1.2);
$p2->totalPrice(); // 👉 expected output: Total price: 600


// 🎯 **String Interpolation**
$userName = "Alice";
$age = 25;
echo "Hello, $userName! You are $age years old.\n"; // 👉 expected output: Hello, Alice! You are 25 years old.


// ➡️ **Arrow Functions (PHP 7.4+)**
$multiply = fn($a, $b) => $a * $b;
echo $multiply(3, 4) . "\n"; // 👉 expected output: 12


// 🛠 **Destructuring with list()**
$carDetails = ["Toyota", 2022];
list($model, $year) = $carDetails;
echo "The car is a $year $model.\n"; // 👉 expected output: The car is a 2022 Toyota.


// 🛠 **Sets & Maps (via arrays)**
$uniqueNumbers = array_unique([1, 2, 3, 4, 4]);
print_r($uniqueNumbers); // 👉 expected output: Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 )

$userInfo = [
    "name" => "Tony",
    "age" => 30
];
echo $userInfo["name"] . "\n"; // 👉 expected output: Tony


// ⚙️ **Asynchronous Programming**
echo "PHP does not support native Promises like JS.\n"; // 👉 expected output: informational message
