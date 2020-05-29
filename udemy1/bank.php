<?php
class Customer{
    public $accNo; 
    public $name;
    public $balance = 0;

    function depositAmount($amt){
        $this->balance = $this->balance+$amt;
        echo '<br>';

    }

    function deductAmount($amt){
        if ($this->balance<=0) {
            # code...
            echo "There is nothing left in the balance";
            echo "<br>";
            return;

        }
        if ($this->balance<$amt) {
            # code...
            echo "the asking amount is greater than your balance";
           echo '<br>';
            return;

        }
        $this->balance = $this->balance-$amt;


    }

    function checkBalance(){
        echo "Your current balance is $this->balance USD";
        
    }

}

$cmt1= new Customer();
$cmt1->name = "Jahangir Kobir";
$cmt1->accNo = 101;
$cmt1->balance =1000;

$cmt1->deductAmount(3000);
$cmt1->checkBalance();
$cmt1->deductAmount(300);

$cmt1->depositAmount(500);

$cmt1->checkBalance();

$cmt1->deductAmount(300);
echo '<br>';
$cmt1->checkBalance();
echo '<br>';
echo "Mr. $cmt1->name has a account , the acoount number is $cmt1->accNo";
echo '<br>';
echo " Mr. $cmt1->name has total amount of $cmt1->balance usd in his account.";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>