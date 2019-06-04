
<!DOCTYPE HTML>
<html>
<style type="text/css">
    .login {
        height:400px; width:230px;
        margin:0;
        padding:10px;
        border:1px #CCC solid;
    }
    .login input {
        padding:5px; margin:5px
    }
</style>
<body>
<form method="post" action="value.php">
    <div class="login">
        <h2>Simple Caculator</h2>
        Inventment Amount:<input type="number" name="number1" size="30"  placeholder="" />
        Yearly Interest Rate:<input type="number" name="number2" size="30"  placeholder="" />
        Number of Years:<input type="number" name="number3" size="30"  placeholder="" />
        <input type="submit" value="Caculator"/>

    </div>
</form>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $number1 =$_POST["number1"];
        $number2 =$_POST["number2"];
        $number3 =$_POST["number3"];
        $number4 = $number1 + $number1*$number2;
        echo  $number4;
    }
?>
</body>
</html>