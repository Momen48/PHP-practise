<?php

class Files{
    function displayContent($fileName){
        if(!file_exists($fileName))
        {
            echo "$fileName doesn't exist.";
            return;
        }
        echo file_get_contents($fileName);
        echo "<br>";

    }

    function getContent($fileName): string {
        if (!file_exists($fileName)){
            echo "$fileName doesnot exist";
            return "";
        }

        $content = file_get_contents($fileName);
        return $content;


    }
}

$file1 = new Files(); 
$file1->displayContent("text.txt");
echo "Here is file content : ". $file1->getContent("text.txt");

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