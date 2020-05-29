<?php
class Student{

    public $name = "Momen";
    public $class = "BSc";

    //magic method  
    function __construct()
    {
        $this->name = "";
        $this->class= "";

        echo "Hello form constructor";
        echo "<br>";
    }

    function printDetails(){
        echo "$this->name is studying in $this->class.";
    }
}

$student = new Student();
$student ->printDetails();

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