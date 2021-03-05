<?php
declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// === Exercise 1 ===

echo "Exercise 1 starts here:";

function new_exercise($x)
{
    $block = "<br/><hr/><br/><br/>Exercise $x starts here:<br/>";
    echo $block;

}

new_exercise(2);
// === Exercise 2 ===

$week = ["monday", "tuesday", "wednesday", "thursday", "friday", "saturday", "sunday"];
$monday = $week[0];

echo $monday;


new_exercise(3);
// === Exercise 3 ===

$str = 'Debugged ! Also very fun';
echo substr($str, 0, 10);

new_exercise(4);
// === Exercise 4 ===

foreach ($week as &$day)
{
    $day = substr($day, 0, strlen($day) - 3); // -3
}

unset($day);
print_r($week);

new_exercise(5);
// === Exercise 5 ===

$arr = [];
for ($letter = 'a'; $letter !== 'aa'; $letter++)
{
    $arr[] = $letter;
}

print_r($arr); // Array ([0] => a, [1] => b, [2] => c, ...) a-z alphabetical array

new_exercise(6);
// === Final exercise ===

$arr = [];

function combineNames($str1 = "", $str2 = "")
{
    $params = [$str1, $str2];
    foreach ($params as &$param) {
        if ($param === "") {
            $param = randomHeroName();
        }
    }
    unset($param);
    return implode(" - ", $params);
}

function randomGenerate($arr, $amount)
{
    for ($i = $amount; $i > 0; $i--) {
        array_push($arr, randomHeroName()); //$arr[]= randomHeroName();
    }

    return $amount;
}

function randomHeroName(): string
{
    $hero_firstnames = ["captain", "doctor", "iron", "Hank", "ant", "Wasp", "the", "Hawk", "Spider", "Black", "Carol"];
    $hero_lastnames = ["America", "Strange", "man", "Pym", "girl", "hulk", "eye", "widow", "panther", "daredevil", "marvel"];
    $heroes = [$hero_firstnames, $hero_lastnames];

    return $heroes[random_int(0, 1)][random_int(0, 10)];
}

echo "Here is the name: " . combineNames();

new_exercise(7);


function copyright(string $year)
{
    echo "&copy; $year BeCode";
}

//print the copyright
copyright(date('Y'));

new_exercise(8);
function login(string $email, string $password): string
{
    if ($email === 'john@example.be' && $password === 'pocahontas') {
        return 'Welcome John Smith';
    }
    return 'No access';
}

//do not change anything below
//should greet the user with his full name (John Smith)
echo login('john@example.be', 'pocahontas');
//no access
echo login('john@example.be', 'dfgidfgdfg');
//no access
echo login('wrong@example.be', 'wrong');
//you can change things again!

new_exercise(9);
function isLinkValid(string $link)
{
    $unacceptables = array('https:', '.doc', '.pdf', '.jpg', '.jpeg', '.gif', '.bmp', '.png');

    foreach ($unacceptables as $unacceptable) {
        if (strpos($link, $unacceptable) !== false) { //str_contains($link, $unacceptable)
            echo 'Unacceptable Found<br />';
            return;
        }
    }
    echo 'Acceptable<br />';
}

//invalid link
isLinkValid('http://www.google.com/hack.pdf');
//invalid link
isLinkValid('https://google.com');
//VALID link
isLinkValid('http://google.com');
//VALID link
isLinkValid('http://google.com/test.txt');

new_exercise(10);

//Filter the array $areTheseFruits to only contain valid fruits
//do not change the arrays itself
$areTheseFruits = ['apple', 'bear', 'beef', 'banana', 'cherry', 'tomato', 'car'];
$validFruits = ['apple', 'pear', 'banana', 'cherry', 'tomato'];
//from here on you can change the code
for ($i = 0, $iMax = count($areTheseFruits); $i < $iMax; $i++) {

    if (!in_array($areTheseFruits[$i], $validFruits)) {
        unset($areTheseFruits[$i]);
    }
}
var_dump($areTheseFruits);//do not change this