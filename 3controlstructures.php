<html>
<head>
<meta charset="UDT-8" >
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<title>Bank transaction</title>
</head>
<body>
<h2>BANK TRANCTION</h2>
<hr>
<form method="post" action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>">
<label for = "initialBalance">Initial Balance :</label> 
<input type=number name="initialBalance"required><br><br>
<label for = "numTransactions">Number of tranctions : </label>
<input type=number name="numTransactions"required><br><br>
<label for = "transactionType">Type of Transaction :</label> 
<select name="transactionType"required>
<option value="deposit">Deposit</option>
<option value="withdraw">Withdraw</opion>
</select><br><br>
<label for = "amount">Amount :</label> 
<input type="number" name="amount"required><br><br>
<input type="submit" name="peform transaction">
<hr>
</form>
<?php 
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $ibalance=$_POST["initialBalance"];
    $numT=$_POST["numTransactions"];
    $tranType=$_POST["transactionType"];
    $amt=$_POST["amount"];
    echo "<h3>Transaction Resuts : </h3>";
    echo "<p>Initial Balance : $ibalance</p>";
    for($i = 1;$i<=$numT;$i++){
        echo "<p>Transaction $i :</p>";
        switch($tranType){
            case"deposit":
                $ibalance += $amt;
                echo "<p>Deposit : +$amt</p>";
                break;
            case"withdraw":
                if($amt <= $ibalance){
                    $ibalance -= $amt;
                    echo"<p>Withdrawal : -$amt</p>";
                }
                else{
                    echo"<p style = 'color:red;'>Insufficient funds for Withdrawal!</p>";
                }
                break;
            default:
                echo"<p style = 'color:red;'>Invalid Transaction type!</p>";
        }
    }
    echo "<p>final Balance : $ibalance</p>";
}?>
</body></html>
