<!-- Quesion 1 -->
<?php
for ($i = 5; $i <= 15; $i++) {
  echo $i . " ";
}
?>

<!-- Question 2 -->
<?php
$greeting = "Hello World";
echo $greeting;
?>

<!-- Question 3 -->
<?php
$marks = 75;

if ($marks >= 90) {
  echo "Grade A";
} elseif ($marks >= 80) {
  echo "Grade B";
} elseif ($marks >= 70) {
  echo "Grade C";
} elseif ($marks >= 60) {
  echo "Grade D";
} else {
  echo "Grade F";
}
?>

<!-- Question 4 -->
<?php
$num = 5;
$factorial = 1;

for ($i = 1; $i <= $num; $i++) {
  $factorial *= $i;
}

echo "The factorial of $num is $factorial.";
?>

<!-- Question 5 -->
<?php
for ($i = 1; $i <= 5; $i++) {
  for ($j = 1; $j <= $i; $j++) {
    echo "* ";
  }
  echo "<br>";
}
?>

<!-- Question 6 -->
<?php
$list = array(
  "Italy"=>"Rome", 
  "Luxembourg"=>"Luxembourg", 
  "Belgium"=> "Brussels", 
  "Denmark"=>"Copenhagen", 
  "Finland"=>"Helsinki", 
  "France" => "Paris", 
  "Slovakia"=>"Bratislava", 
  "Slovenia"=>"Ljubljana", 
  "Germany" => "Berlin", 
  "Greece" => "Athens", 
  "Ireland"=>"Dublin", 
  "Netherlands"=>"Amsterdam", 
  "Portugal"=>"Lisbon", 
  "Spain"=>"Madrid", 
  "Sweden"=>"Stockholm", 
  "United Kingdom"=>"London", 
  "Cyprus"=>"Nicosia", 
  "Lithuania"=>"Vilnius", 
  "Czech Republic"=>"Prague", 
  "Estonia"=>"Tallin", 
  "Hungary"=>"Budapest", 
  "Latvia"=>"Riga", 
  "Malta"=>"Valetta", 
  "Austria" => "Vienna", 
  "Poland"=>"Warsaw"
);

asort($list);

foreach ($list as $capital => $country) {
  echo "The capital of $country is $capital.<br>";
}
?>

<!-- Question 7 -->
<?php
function isPalindrome($str) {
  $str = strtolower(preg_replace('/[^A-Za-z0-9]/','',$str)); // remove non-alphanumeric characters and convert to lowercase
  $reverseStr = strrev($str); // reverse the string
  if ($str == $reverseStr) {
    return true; // if the original string is the same as the reversed string, it's a palindrome
  } else {
    return false; // otherwise, it's not a palindrome
  }
}

// example usage
echo isPalindrome("racecar"); // true
echo isPalindrome("hello"); // false
?>

<!-- Question 8 -->
<?php
$a = 1;
$b = 2;

$temp = $a;
$a = $b;
$b = $temp;

echo "a = $a, b = $b"; // output: a = 2, b = 1
?>


<!-- Question 9 -->
<?php
define('a', 5);

for ($i = 1; $i <= 10; $i++) {
  echo a * $i . "<br>"; // output each multiple of 5 on a new line
}
?>


<!-- Question 10 -->
<?php

// Function to check whether a number is Armstrong or not
function isArmstrong($num){
    $sum = 0;
    $temp = $num;
    $len = strlen($num);
    while($temp > 0){
        $digit = $temp % 10;
        $sum += pow($digit, $len);
        $temp = (int)($temp / 10);
    }
    if($sum == $num){
        return "Armstrong Number";
    }
    else{
        return "Not an Armstrong Number";
    }
}

// Example usage
$number = 153;
echo isArmstrong($number); // Output: Armstrong Number
?>

