<?php
class Calculator{
    public $a;
    public $b;
    public $result;

    
    function getFirstNumber():int{
        return $this->a;
    }
    function setFirstNumber($a){
        $this->a= $a;
    }
    function getSecondNumber():int{
        return $this->b;
    }
    function setScondNumber($b){
        $this->b= $b;
    }
    function adddNumber(){
        $this->result = $this->getSecondNumber()+ $this->getFirstNumber();
        return;
    }
    function getResult():int{
       echo $this->adddNumber();
    }


}
$cal1=new Calculator();
$cal1->setFirstNumber(12);
$cal1->setScondNumber(13);
$cal1->getResult();
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