<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv = "content-type" charset="UTF-8">
    <title>PHP web calculator</title>
</head>

<?php /* php web calculator, two input for input number , option for operation, result in one number */
if (!isset($_POST['submit'])){ } 
else { 
        $first = $_POST['first']; 
        $second = $_POST[ 'second']; 
        $opr = $_POST['opr']; 
} 
$res=0 ; 
    
    /*use switch calculate the operation*/

switch ($opr){
    case '+':
        $res = $first + $second;
        break;
    case '-':
        $res = $first - $second;
        break;
    case '*':
        $res = $first * $second;
        break;
    case '/':
        $res = $first / $second;
        break;
    case '%':
        $res = $first % $second;
        break;
    
}
    
    
    ?>

<body>
    <form method="POST" action="">
        <input type="text" name="first" size="5" value="<?php echo isset($first) ? $first : '';?>" />
        <select name="opr">

            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
            <option value="%">%</option>


        </select>
        <input type="text" name="second" size="5" value="<?php echo isset($second) ? $second : ''; ?>" />
        <span> = </span>
        <input type="text" readonly disabled size = "5" value = "<?php echo isset($res) ? $res : '';?>"/>
 
        <input type="submit" name = "submit" value = "submit">
          </form>
</body>

</html>