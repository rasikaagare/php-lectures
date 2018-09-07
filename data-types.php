<h1>Boolean data type</h1>
<?php
$foo = True; // assign the value TRUE to $foo
?>
<h1>integer data type</h1>

<?php
$a = 1234; // decimal number
$a = -123; // a negative number
$a = 0123; // octal number (equivalent to 83 decimal)
$a = 0x1A; // hexadecimal number (equivalent to 26 decimal)
$a = 0b11111111; // binary number (equivalent to 255 decimal)
?>

<h1>floating point number</h1>

<?php
$a = 1.234; 
$b = 1.2e3; 
$c = 7E-10;
?>

<h1>Strings</h1>

<?php
$expand = "expand";
$either = 124;
echo 'this is a simple string';

echo 'You can also have embedded newlines in 
strings this way as it is
okay to do';

// Outputs: Arnold once said: "I'll be back"
echo 'Arnold once said: "I\'ll be back"';

// Outputs: You deleted C:\*.*?
echo 'You deleted C:\\*.*?';

// Outputs: You deleted C:\*.*?
echo 'You deleted C:\*.*?';

// Outputs: This will not expand: \n a newline
echo 'This will not expand: \n a newline';

// Outputs: Variables do not $expand $either
echo "Variables display their values $expand $either";
?>

<h1>Arrays</h1>
<?php
$array = array(
    "foo" => "bar",
    "bar" => "foo",
);

// as of PHP 5.4
$array = [
    "foo" => "bar",
    "bar" => "foo",
];

var_dump($array);
?>
