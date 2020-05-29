<?php
class Post{

    function __construct()
    {
        echo "This is a constructor";
    }

    function __destruct()
    {
        echo "This is a destructor";
    }
}
$post1 = new Post();
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