<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculator</title>
</head>
<body>
    <table>
        <form method="GET" action="switch_method.php">
            <tr><td>First Number : </td>
            <td><input type="number" name="fno" placeholder="Enter first number" value="<?php echo @$_GET['a']; ?>"></td></tr>
            <tr><td>Second Number : </td>
            <td><input type="number" name="sno" placeholder="Enter second number" value="<?php echo @$_GET['b']; ?>"></td></tr>
            <tr><td>Result : </td>
            <td><input type="number"  readonly="readonly" name="read"  value="<?php echo @$_GET['r']; ?>"></td></tr>
            <tr><td>Operation : </td>
            <td>
            <input type="radio" name="add" value="add" <?php if(@$_GET['o']=='add') { ?> checked <?php } ?> >Add <br>
            <input type="radio" name="add" value="sub" <?php if(@$_GET['o']=='sub') { ?> checked <?php } ?> >Subtract <br>
            <input type="radio" name="add" value="multiply" <?php if(@$_GET['o']=='multiply') { ?> checked <?php } ?> >Multiply <br>
            <input type="radio" name="add" value="divide" <?php if(@$_GET['o']=='divide') { ?> checked <?php } ?> >Divide
            </td>
            </tr>
            <tr><td><input type="submit"></td></tr>
        </form>
    </table>
</body>
</html>