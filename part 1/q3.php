<?php 
$result = "";
class calculator
{
    var$a;
    var$b;

    function makeOp($operation)
    {
        switch($operation)
        {
            case '+':
            return $this->a + $this->b;
            break;

            case '-':
            return $this->a - $this->b;
            break;

            case '*':
            return $this->a * $this->b;
            break;

            case '/':
            return $this->a / $this->b;
            break;

            default:
            return "Sorry No command found";
        }   
    }
    function getResult($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        return $this->makeOp($c);
    }
}

$cal = new calculator();
if(isset($_REQUEST['submit']))
{   
    $result = $cal->getResult($_REQUEST['n1'],$_REQUEST['n2'],$_REQUEST['op']);
}
?>

<form action="q3.php" method="post">
<table align="center">
    <tr>
        <td><strong><?php echo $result; ?><strong></td>
    </tr>
    <tr>
        <td>Enter 1st Number</td>
        <td><input type="text" name="n1"></td>
    </tr>

    <tr>
        <td>Enter 2nd Number</td>
        <td><input type="text" name="n2"></td>
    </tr>

    <tr>
        <td>Select process</td>
        <td><select name="op">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select></td>
    </tr>

    <tr>
        <td></td>
        <td><input type="submit" name="submit" value="   calculate     "></td>
    </tr>

</table>
</form>