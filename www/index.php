<?php
// this is a single line comment
# this is also a single line comment
/*
this is a mulineline
comment block
*/
?>

<head>
    <link rel="stylesheet" href="style.css">
</head>

<h1>PHP Practise</h1>

<p>
    <?php
    // Simple Echo statment
    echo "My First PHP Script"
    ?>
</p>

<p>
    <?php
    // varible names start with a $ sign 
    $color = "red";
    echo "the value of color is " . $color;
    ?>
</p>

<p>
    <?php
    echo "variable names are case-sensetive but keywords are not so 'echo' is the same as 'ECHO'";
    ?>
</p>

<h4>Rules for naming varibles</h4>
<ul>
    <li>A variable must start with the $ sign</li>
    <li>The name of the variable must start with either an underscore or a letter</li>
    <li>The name can't start with a number</li>
    <li>Variable Names are case sensetive</li>
</ul>

<h4>Interpolating Strings</h4>

<p>
    You can interpolate text directly into an echo statement using the $ sign, for example:
</p>

<p>
    <?php
    $text = "PHP";
    echo "I Love $text"
    ?>
</p>

<p>
    You can also use the dot operator to concatenate strings
</p>

<p>
    <?php
    $text = "PHP";
    echo "I love " . $text
    ?>
</p>

<h4>Loosely Typed Language</h4>

<p>
    Adding a string and an integer together.
    the string is "hello" and the integer is 7.
    this operation gives a fatal type error
</p>

<p>
    <?php
    $string = "hello";
    $integer = 7;
    // uncommenting this line will 
    // generae an error
    // echo $string + $integer;
    ?>
</p>

<h4>Varible Scopes</h4>

<h5>Gloal Scope</h5>
<p>
    You can reference a varible that's inside
    a different php tag inside another one
</p>

<?php
$test = "test619";
?>

<p>
    <?php
    echo $test
    ?>
</p>

<?php
// You can't reference a globally scoped
// varible inside a function
function testFunc()
{
    // this will give an undefinebd variblew
    // because $test is a global varible
    // that can't be accessed inside a function.
    //echo $test;
}
?>

<p>
    <?php
    testFunc()
    ?>
</p>

<h5>Local Scope</h5>

<p>
    Varibles declared inside a function
    can only be accessed from inside that
    function.
</p>

<h5>Global Keyword</h5>

<p>
    If you want to reference a global varible
    from inside a function, you can use the
    global keyword before the varible name.
</p>


<?php
function testFuncGlobal()
{
    // Declare the varible as gloal first
    // before using ittt.
    global $test;
    echo $test;
}
?>

<p>
    Here is the value of the global $test
    varible by invoking a function that
    declares it as a global varible first.
    <?php
    testFuncGlobal()
    ?>
</p>

<h5>Globals Array</h5>

<p>
    PHP keeps all global varibles inside a named
    array called $GLOBALS where you can access
    the value of a global varible using its name
    as a key for this named array
    for example, you can access the value of the varible X
    with <code>$GLOBALS['X']</code>
</p>

<p>
    accessing the test global varible by key:
    <?php
    echo $GLOBALS['test']
    ?>
</p>

<h5>Static Keyword</h5>

<p>
    If you want a varile to retain its value
    for each subsequent calls, you can use the
    <code>static</code> keyword.
    for example:
    we have a funcion called increment
    that declares a varible $x using the static
    keyword as follows: <code>static $x = 0</code>
    and then it echos the value of $x and finally
    increments it by 1 with <code>$x++</code>

    on initial call the value of x is set to 0, but on subsequent
    calls, the value of the varible doesn't reset to 0 again,
    that is, the varible's value is not redeclared, but instead
    it retains the value from the most recenet function call.
    Note that the varible is still local to the function.
</p>

<?php
// example static varible inside a function
// each call adds 1 to $x so if the function
// is called 3 times, on the third call the 
// value of $x will be 2, 0, 1, 2
function incrementStatic()
{
    static $x = 0;
    echo $x;
    $x++;
}
?>

<p>
    <?php
    incrementStatic();
    incrementStatic();
    incrementStatic();
    ?>
</p>

<p>
    <?php
    echo "This ", "string ", "was ", "made ", "with multiple parameters. <br/ >";
    echo "This " . "string " . "was " . "made ", "with multiple parameters.";
    ?>
</p>

<p>
    <?php
    $x = 5;
    $y = 2;
    echo "5 + 2 = " . $x + $y
    ?>
</p>

<h4>Data Types</h4>

<h5>Integer</h5>
<p>
    <?php
    $x = 5985;
    var_dump($x);
    ?>
</p>

<h5>Float</h5>
<p>
    <?php
    $x = 10.365;
    var_dump($x);
    ?>
</p>

<h5>Boolean</h5>
<p>
    <?php
    $x = true;
    $y = false;
    var_dump($x);
    echo "<br/>";
    var_dump($y);
    ?>
</p>

<h5>Array</h5>
<p>
    <?php
    $cars = array("Volvo", "BMW", "Toyota");
    $anime = ['Tokyo Ghoul', 'One Piece', "Attack On Titan"];
    var_dump($cars);
    echo "<br />";
    var_dump($anime);
    ?>
</p>

<h5>Classes and Objects</h5>
<p>
    <?php
    class Car
    {
        public $color;
        public $model;
        public function __construct($color, $model)
        {
            $this->color = $color;
            $this->model = $model;
        }
        public function message()
        {
            return "My car is a " . $this->color . " " . $this->model . "!";
        }
    }

    $myCar = new Car("black", "Volvo");
    echo $myCar->message();
    echo "<br>";
    $myCar = new Car("red", "Toyota");
    echo $myCar->message();
    ?>
</p>

<h5>NULL</h5>
<p>
    <?php
    // this just returns false, and is not assigned to NULL
    // You must explicitly assigned a varible to NULL if you
    // want it to have no value
    // Tip: NULL is case-insensetive, that is null === NULL
    $y;
    $x = "Hello world!";
    $x = NULL;
    var_dump($x);
    var_dump($y);
    ?>
</p>

<h4>String functions</h4>
<table>
    <tr>
        <th>strlen()</th>
        <td>returns the length of a string</td>
        <td><code>echo strlen("Hello world!");<br /> // outputs 12</code></td>
    </tr>
    <tr>
        <th>str_word_count()</th>
        <td>returns the number of words in a string</td>
        <td><code>echo str_word_count("Hello world!"); // outputs 2</code></td>
    </tr>
    <tr>
        <th>strrev()</th>
        <td>reverses a string</td>
        <td><code>echo strrev("Hello world!"); // outputs !dlrow olleH</code></td>
    </tr>
    <tr>
        <th>strpos()</th>
        <td>returns the index of a substring in a string, if no match is found, returns false</td>
        <td><code>echo strpos("Hello world!", "world"); // outputs 6</code></td>
        <td></td>
    </tr>
    <tr>
        <th>str_replace()</th>
        <td>replaces some characters with some other characters in a string.</td>
        <td><code>echo str_replace("world", "Dolly", "Hello world!"); // outputs Hello Dolly!</code></td>
    </tr>
</table>

<h4>Testing String functions</h4>

<p>
    <?php
    $pos = strpos("Example string", "string");
    $pos_not_found = strpos("Example String", "none");

    echo "pos = $pos";
    echo "<br />";
    echo "pos_not_found:";
    var_dump($pos_not_found)
    ?>
</p>

<p>
    <?php
    $original_string = "AABBCCDD";
    $string_to_replace = "A";
    $string_replace_to = "Z";

    $result_string = str_replace($string_to_replace, $string_replace_to, $original_string);
    echo "result_string = $result_string"
    ?>
</p>
<p>str_replace() replaces all instances of a string</p>


<h4>Numbers</h4>

<h5>Integers</h5>
<p>
    Any math operation on integers with a float returns a float.
    for example 4 * 2.5 which is 10, will still return a float, not an integer
</p>
<p>
    You can use the <code>is_int()</code> function to check if a number is an integer or not
</p>
<p>
    <?php
    $x = 5985;
    var_dump(is_int($x));

    $x = 59.85;
    var_dump(is_int($x));
    ?>
</p>

<h5>Floats</h5>
<p>You can use the <code>is_float()</code> function to check if a number is a float.</p>
<p>

    <?php
    $x = 10.365;
    var_dump(is_float($x));
    ?>
</p>

<h5>NAN</h5>
<p>NAN is the result of impossible math operations</p>
<p>
    <?php
    $x = acos(8);
    var_dump($x);
    ?>
</p>

<h5>is_numeric()</h5>
<p>The PHP is_numeric() function can be used to find whether a variable is numeric. The function returns true if the variable is a number or a numeric string, false otherwise.</p>
<p>
    <?php
    $x = 5985;
    var_dump(is_numeric($x)); // true

    $x = "5985";
    var_dump(is_numeric($x)); //true

    $x = "59.85" + 100; // true, the string is implicitly converted to a float
    echo "x = $x";
    var_dump(is_numeric($x));

    $x = "Hello";
    var_dump(is_numeric($x));
    ?>
</p>

<h4>PHP Casting Strings and Floats to Integers</h4>
<p>The (int), (integer), or intval() function are often used to convert a value to an integer.</p>
<?php
$a_float = 24.5;
$int_cast = (int)$a_float;
$int_cast_2 = intval($a_float);
?>
<p>
    <?php
    echo "a_float = $a_float";
    ?>
</p>
<p>
    <?php
    echo "int_cast = $int_cast";
    ?>
</p>
<p>
    <?php
    echo "int_cast_2 = $int_cast_2"
    ?>
</p>