<?php
print_r("Welcome to smart calculator\n");
print_r("=====================================\n");

$firstValue = readline("Enter value first value");
 
if(is_numeric($firstValue) === false) {
        print_r("Please enter an integer as first value\n");
        return;
}   

$operator = readline("Enter value operator ");


//*+-/
switch ($operator) {
    case in_array($operator, ['/', '*', '+', '-']);
        break;
    default:
        print_r("Invalid Operator\n");
        return;
}
$secondValue = readline("Enter value of second number ");
$result;
 if(is_numeric($secondValue) === false){
        print_r("Please enter an integer as second value\n");
        return;}

if ($operator === '*') $result = $firstValue * $secondValue;
if ($operator === '-') $result = $firstValue - $secondValue;
if ($operator === '+') $result = $firstValue + $secondValue;
if ($operator === '/') {
    switch ($secondValue) {
        case ($secondValue === 0):
            print_r("Numbers are not divisible by zero");
            return;
            break;
        case $secondValue !== 0:
            $result = $firstValue / $secondValue;
    }
}
print_r("The result is $result \n");

 
?>