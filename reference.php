<?php
// ==========================================
// 📝 PHP Reference Guide
// Created by Timmy 🚀
// ==========================================
//  TTTTT  III  M   M  M   M  Y   Y
//    T    I   MM MM  MM MM   Y Y
//    T    I   M M M  M M M    Y
//    T    I   M   M  M   M    Y
//    T   III  M   M  M   M    Y
// ==========================================

echo "Welcome to the PHP Reference Guide, created by Timmy 🚀\n";

// 🎯 **Variables**
$place = "first";

// 🔁 **Switch Statement**
switch ($place) {
    case "first":
        echo "gold\n";
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
    echo "gold\n";
} elseif ($place2 == "second") {
    echo "silver\n";
} else {
    echo "no medal\n";
}

// 🔁 **For Loop**
$array = [1, 2, 3];
for ($i = 0; $i < count($array); $i++) {
    echo $array[$i] . "\n";
}

// 🔁 **While Loop**
$counter = 3;
while ($counter >= 0) {
    echo $counter . "\n";
    $counter--;
}

// 💡 **Functions Without Parameters**
function addNumber() {
    $a = 10;
    $b = 20;
    $c = $a + $b;
    echo $c . "\n";
}
addNumber();

// 💡 **Functions With Parameters**
function addNumbers($a, $b) {
    $c = $a + $b;
    echo $c . "\n";
}
addNumbers(4, 7);

// 💡 **Return Values from Functions**
function getTotal($a, $b) {
    return $a + $b;
}
$total = getTotal(2, 3);
echo $total . "\n";

// 🔧 **Arrays**
$arr = ['tony', 'timi', 8];
print_r($arr);

// 🛠 **Associative Arrays (Objects Equivalent)**
$house = [
    "rooms" => 4,
    "color" => "pink",
    "priceUSD" => 12345
];
print_r($house);

// 🛠 **Loop Through Associative Array**
$drone = [
    "speed" => 100,
    "altitude" => 200,
    "color" => "red"
];
foreach ($drone as $key => $value) {
    echo "$key: $value\n";
}

// 🛠 **Array Functions**
$fruits = [];
array_push($fruits, "apple", "pear");
array_pop($fruits);
print_r($fruits);

// 🛠 **Building Arrays with Functions**
function arrayBuilder($one, $two, $three) {
    return [$one, $two, $three];
}
print_r(arrayBuilder("apple", "pear", "plum"));

// 🛠 **Objects with Methods using Classes**
class Car {
    public $color;

    function __construct($color) {
        $this->color = $color;
    }

    function turnKey() {
        echo "The engine is running\n";
    }

    function lightsOn() {
        echo "The lights are on\n";
    }
}
$car = new Car("red");
echo $car->color . "\n";
$car->turnKey();
$car->lightsOn();

// ⚠️ **Error Handling (Try-Catch Block)**
try {
    throw new Exception("This is an intentional error");
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
}
echo "My program does not stop\n";

// 🛠 **Error Handling in Functions**
function addTwoNums($a, $b) {
    try {
        if (!is_numeric($a)) {
            throw new Exception("First argument is not a number");
        }
        if (!is_numeric($b)) {
            throw new Exception("Second argument is not a number");
        }
        echo $a + $b . "\n";
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage() . "\n";
    }
}
addTwoNums(5, "five");
echo "It still works\n";

// 🛠 **Functional Programming Style**
$shoes = 100;
$tax = 1.2;
function totalPrice($price, $tax) {
    return $price * $tax;
}
echo totalPrice($shoes, $tax) . "\n";

// 🛠 **Object-Oriented Programming**
class Purchase {
    public $shoes;
    public $stateTax;

    function __construct($shoes, $stateTax) {
        $this->shoes = $shoes;
        $this->stateTax = $stateTax;
    }

    function totalPrice() {
        $total = $this->shoes * $this->stateTax;
        echo "Total price: $total\n";
    }
}
$p1 = new Purchase(100, 1.2);
$p1->totalPrice();
$p2 = new Purchase(500, 1.2);
$p2->totalPrice();

// 🎯 **String Interpolation with Double Quotes**
$userName = "Alice";
$age = 25;
echo "Hello, $userName! You are $age years old.\n";

// ➡️ **Arrow Functions (PHP 7.4+)**
$multiply = fn($a, $b) => $a * $b;
echo $multiply(3, 4) . "\n";

// 🛠 **Destructuring (Array unpacking with list)**
$carDetails = ["Toyota", 2022];
list($model, $year) = $carDetails;
echo "The car is a $year $model.\n";

// 🛠 **Sets & Maps (Using Arrays & SplObjectStorage / ArrayObject)**
$uniqueNumbers = array_unique([1, 2, 3, 4, 4]);
print_r($uniqueNumbers);

$userInfo = [
    "name" => "Tony",
    "age" => 30
];
echo $userInfo["name"] . "\n";

// 🛠 **Promises & Async (PHP doesn't have native Promises, simulate with Fibers in PHP 8.1+)**
// Note: Use Guzzle, ReactPHP, or Amp for real async behavior
echo "PHP does not support native Promises like JS.\n";
