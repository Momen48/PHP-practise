<?php
 class Users {

    function fetchUser($id):bool{
        // $db =  new DataBase();
        // $db-> selectQuery($id,$tableName);

        $result = false;

        echo 'Query the DB : $id'. PHP_EOL;

        $result = true;

        echo 'Display the record for ID '. PHP_EOL;

        return $result;
    }

    function deleteUser($id){
        echo 'Deleting for query : $id'. PHP_EOL;

    }

 }
 $user1= new Users();
 $user1->fetchUser(101);
 $user1->fetchUser(102);
 $user1->deleteUser(101);
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