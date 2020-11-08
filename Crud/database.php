<?php
class database
{
    public $host = DB_HOST;
    public $user = DB_USER;
    public $password = DB_PASSWORD;
    public $dbName = DB_NAME;

    public $link;
    public $error;

    public function __construct()
    {
        $this->connectDB();
    }

    private function connectDB()
    {
        $this->link = new mysqli($this->host, $this->user, $this->password, $this->dbName);


        if (!$this->link) {
            $this->error = "Connection Failed" . $this->link->connect_error;
            return false;
        }
    }

    //select or read data
    public function select($query)
    {
        $result = $this->link->query($query) or die($this->link->error . __LINE__);
        if ($result->num_rows >0) {
            return $result;
        } else {
            return false;
        }
    }
    //creating a insert method/ Inserting data
    public function insert($query)
    {
        $insert_row = $this->link->query($query) or die($this->link->error . __LINE__);

        if ($insert_row) {
            header("Location: index.php?msg=" . urlencode('Data inserted successfully.'));
            exit();
        } else {
            die("Error : (" . $this->link->errno . ")" . $this->link->error);
        }
    }

    //creating a update method/Updating data
    public function update($query)
    {
        $update_row = $this->link->query($query) or die($this->link->error . __LINE__);

        if ($update_row) {
            header("Location: index.php?msg=" . urlencode('Data updated successfully.'));
            exit();
        } else {
            die("Error : (" . $this->link->errno . ")" . $this->link->error);
        }
    }

     //delete data
     public function delete($query)
     {
         $delete_row = $this->link->query($query) or die($this->link->error . __LINE__);
 
         if ($delete_row) {
             header("Location: index.php?msg=" . urlencode('Data deleted successfully!'));
             exit();
         } else {
             die("Error : (" . $this->link->errno . ")" . $this->link->error);
         }
     }
}
