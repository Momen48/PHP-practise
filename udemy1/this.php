<?php
 class Car{
   public  $name ="";

   //getter method

   function getName():string{
       return $this->name;

   }

   //setter method
   function setName($name){
       $this->name = $name;
   }
 }
$car1= new Car();

$car1->setName("BMW");
echo $car1->getName();

//change properties outside 

$car1->name= "Ferrari";



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