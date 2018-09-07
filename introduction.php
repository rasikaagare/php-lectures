<h1>1. Basic program</h1>
<?php
echo "Hello world";

// ... more code

echo "Last statement";
// the script ends here with no PHP closing tag
?>


<h1>2. Escaping from html</h1>
<p>This is going to be ignored by PHP and displayed by the browser.</p>
<?php echo 'While this is going to be parsed.'; ?>
<p>This will also be ignored by PHP and displayed by the browser.</p>


<h1>3. Termination of php expression</h1>

<?php
    echo 'This is a test';
?>

<?php echo 'This is a test' ?>

<?php echo 'We omitted the last closing tag'; ?>

<h1>4. Comments in php</h1>
<?php
    echo 'This is a test'; // This is a one-line c++ style comment
    /* This is a multi line comment
       yet another line of comment */
    echo 'This is yet another test';
    echo 'One Final Test'; # This is a one-line shell-style comment
?>

