<?php
// calculate employee salary
class Employee{
    public $id;
    public $name;
    public $workingHourPerDay=8;
    public $hourlyRate = 15;
    public $leaveTaken;
    public $totalWorkingDay;

    function getSalaryAmount($totalDays):int{
         $this->totalWorkingDay = $totalDays - $this->leaveTaken;

         $salary = $this->totalWorkingDay* $this->workingHourPerDay
          *$this->hourlyRate;
        
         return $salary;
    }
}

$emp1= new Employee();
$emp1->id = 101;
$emp1->name= "kabir singh";
$emp1->leaveTaken = 4;
$salary= $emp1->getSalaryAmount(25); 
echo "$emp1->name has worked for $emp1->totalWorkingDay and has 
taken total $emp1->leaveTaken leaves.". PHP_EOL;
echo "<br>";
echo "Salary of Mr. $emp1->name for this month is $salary USD.";

echo "<br>";

$emp1= new Employee();
$emp1->id = 102;
$emp1->name= "Mangal Pandey";
$emp1->leaveTaken = 8;
$salary= $emp1->getSalaryAmount(25); 
echo "$emp1->name has worked for $emp1->totalWorkingDay and has 
taken total $emp1->leaveTaken leaves.". PHP_EOL;
echo "<br>";
echo "Salary of Mr. $emp1->name for this month is $salary USD.";

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