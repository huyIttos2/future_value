
<!DOCTYPE HTML>
<html>
<style type="text/css">

    .login {
        height:180px; width:230px;
        margin:0;
        padding:10px;
        border:1px #CCC solid;
    }
    .login input {
        padding:5px; margin:5px
    }
</style>
<body>
<div id="content">
    <h1>Future Value Calculator</h1>

    <label>Investment Amount: </label><?php echo $_POST["number1"];?>
    <span></span> <br>

    <label>Yearly Interest Rate: </label><?php echo $_POST["number2"]?>
    <span> </span> <br>

    <label>Number of Years: </label><?php echo $_POST["number3"]?>
    <span></span> <br>


    <label>Future Value: </label><?php echo $_POST["number1"] * pow(1+($_POST["number2"]/100), $_POST["number3"]);?>
    <span></span> <br>
</div>

</body>
</html>