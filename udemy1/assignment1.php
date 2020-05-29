<?php
class Student{
    public $name;
    public $mark;
    public $subject;

    function examResult(){
        if($this->mark<35){
            echo "$this->name has failed in $this->subject by $this->mark marks.";
            return;
        }

        if($this->mark>35 && $this->mark == 100){
            echo "$this->name has passed in $this->subject by $this->mark marks.";
        return;
        }
      

    }
}
$student1= new Student();
$student1->name = "Majid Mia";
$student1->subject= "bangla";
$student1->mark = 34;
$student1->examResult();

echo "<br>";

$student2= new Student();
$student2->name = "kabila";
$student2->subject= "English";
$student2->mark = 65;
$student2->examResult();
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