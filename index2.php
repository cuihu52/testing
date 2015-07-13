<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php object</title>
</head>
<body>
    <?php 
        
        class Car{
        
            function Car(){
                $this->ball = "VW";
            }
        
        }
     
     $herbie = new Car();

    echo $herbie->ball;
    echo "<br>";
    define ("php","welcome to the php");
    echo php;
    echo "<br>";
//define constant to echo out the value of php1
   define ("php1","Another Welcome to the php ");
    function car(){
     echo php1;
       
    }
    car();
car();
    echo "<br>";

$t = date("H");
  if ($t <"20"){
        echo "Have a good day";
  }

echo "<br>";

    $favcolor = "red";

switch ($favcolor){
    case "red":
        echo "Your favorite color is red ";
        break;
    case "blue":
        echo "Your favorite color is blue";
        break;
    case "yellow":
        echo "Your favorite color is yello ";
        break;
    case "white":
        echo "Your favorite color is white";
        break;
    default:
        echo "Your favorite color is  nothing";

}

echo "<br>";
$x = 1;

while ($x <= 5 ){
    echo "The number is: $x <br>";
    $x++;
}


/*
    the foreach loop works only on arrays, and is used to loop through each key/value pair in an array.
  foreach ($array as $value) {
  
    code to be executed;
  }
*/


echo "<br>";

$color = array("red","green","blue","yellow");
   foreach ($color as $value) {
    echo "$value <br>";
   }
echo "<br>";

$person = array("old man","young man","pretty man","strong man");

foreach ($person as $value) {

        echo "$value <br>";
}


/*

Create a user defined funciton

syntax

function functionName() {
    code to be executed;
}
*/
echo "<br><h3>User Defined function:</h3>";
function writeMsg() {
    echo "Hello world!";
} 
writeMsg();

echo "<h3> PHP Function Arguments</h3>";

function familyName($fname) {
    echo "$fname Refsnes.<br>";
    
}

familyName("Jani");
familyName("Hege");
familyName("Stale");
familyName("kai Jim");
familyName("Borge");



echo "<h3>PHP function with two arguments</h3>";
    
    function family($fname,$year) {
            echo "$fname Refsnes. Born in $year <br>";
    }

    family("Hege","1975");
    family("Stale","1978");
    family("Kai Jim","1983");


echo "<h3>PHP default argument value</h3>";
   
    function setHeight($minHeight = 50) {
    
        echo "The height is: $minHeight <br>";
    }

   setHeight(350);
   setHeight();
   setHeight(135);
   setHeight(80);

    

echo "<h3>php returning values of function</h3>";

function sum($x,$y) {

        $z = $x + $y;
     return $z;
}
    
    echo "5 + 10 = ". sum(5,10) ."<br>";
    echo "7 + 13 = ". sum(7,13) ."<br>";
    echo "2 + 4 = ". sum(2,4) ."<br>";

    echo "<h3>
        an Array stores multiple values in one single variable;
    </h3>";
    
   $car = array("Volvo","BMW","Toyota");
   echo "I like " . $car[0] ." , " . $car[1] . " and " . $car[2] . ".";
   
  /*
  What is Array ?  
   An array is a special variable, which can holdmore than one value at a time.
   
   if you have a list of items(a list of car names,for example), storing the cars in single variables.
  
  */

echo "<br>";
$car = array("Volvo","BMW","Toyota");
echo  count($car) . "<br>";
    
$arr_length = count($car);
for ($x = 0;$x<$arr_length;$x++) {


        echo $car[$x];
        echo "<br>";
}
    
    

echo "################<br>";
    
    echo  "<h3>Sorting Array</h3>";

$car = array("volvo","BMW","Toyota");
echo " before sort the array:<br>";
foreach ($car as $value) {
    echo "$value <br>";
    
}
echo "After sort the array:<br>";
sort($car);
foreach ($car as $value) {
    echo "$value <br>";
    
}

// PHP 5 gloabl Variables
/*

    $GLOABLS
    $_SERVER
    $_REQUEST
    $_POST
    $_GET
    $_FILES
    $_ENV
    $_COOKIE
    $_SESSION

*/


echo "php global";

$x = 75;
$y = 25;

function addition() {
        $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}
  addition();
  echo "<br>". $z;
   
    
    

/*
    $_SERVER*/
    

echo "######################";
echo "<br>";
echo $_SERVER['PHP_SELF'];    
    echo "<br>";
echo $_SERVER['GATEWAY_INTERFACE'];
    echo "<br>";
echo $_SERVER['SERVER_ADDR'];
    echo "<br>";

echo $_SERVER['SERVER_NAME'];
    echo "<br>";
echo $_SERVER['SERVER_SOFTWARE'];
    echo "<br>";
echo $_SERVER['SERVER_PROTOCOL'];    
    echo "<br>";
/*

    PHP $_REQUEST
*/ 

  echo "<br><br>";
    ?>
    
     <form method = "post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
        Name:<input type="text" name = "fname">
        <input type="submit">
        
    </form>
    <?php
   if ($_SERVER["REQUEST_METHOD"] == "POST"){
       //collect value of input field
    $name = $_REQUEST['fname'];
       if (empty($name)){
        echo "Name is Empty";
       }
       else {
        echo $name;
       }
   }
?>
    
          

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
</body>
</html>