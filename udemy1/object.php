<?php
class Car{
    public $name;
    public $color;
 
    function helloCar(){
        echo "Hello From Car Class.";
    }
}
$car1 = new Car();
$car1 -> name = "BMW";
$car1 -> color= 'Black';
$car1 ->helloCar();
echo '<br>';
echo "$car1->name is $car1->color in color. ";

$car2 = new Car();
$car2 -> name = "Toyota";
$car2 -> color= 'White';

echo '<br>';
echo "$car2->name is $car2->color in color. ";

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