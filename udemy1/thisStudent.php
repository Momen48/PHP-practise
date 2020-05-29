<?php
class Student{
    public $name;
    public $class;

    //getter
    function getName():string {
        return $this->name;
    }
    function getClass():string{
        return $this->class;
    }

    //setter
    function setName($name) {
        $this->name= $name;
    }
    function setClass($class){
       $this->class = $class  ;
    }
    //print details
    function printDetails(){
        echo "$this->name is studying in class $this->class.";

        echo "<br>";

    }


}
$student1=new student();
$student2=new student();

$student1->setName("kashem");
$student1->setClass("Nine");

$student2->setName("Laboni");
$student2->setClass("Ten");

$student1->printDetails();
$student2->printDetails();

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