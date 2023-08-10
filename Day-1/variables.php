<?php
// Variable
$firstName = "Adrite";
$lastName = "Adhikary";
$age = 7;
$isStudent = true;
$marks = array(95, 99, 98);
$fullName = "{$firstName} {$lastName}";
$text = "My name is {$fullName}";

// Constants
define("PI", 3.14159);

// Output
echo $fullName;
echo "\n";
echo PI;
echo "\n";
echo $text;
echo "\n";

// Variable Variables
$varName = "message";
$$varName = "Hello, dynamic variable!";
echo $message;
echo "\n";

// Variable information
var_dump($firstName);

// Escaping
$doubleQuoted = "She said, \"Hello!\"";
$singleQuoted = 'He shouted, \'Wow!\'';
echo ($doubleQuoted);
echo "\n";
echo ($singleQuoted);
echo "\n";

// printf (placeholder)
printf("Her %s name is %s %s", "full", $firstName, $lastName);
