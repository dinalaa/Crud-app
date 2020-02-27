<?php

class model{
    private $dsn = 'mysql:host=localhost;dbname=products';
    private $user = 'root';
    private $password = '';
    private $conn;
    public function __construct()
    {
      try{
          $this -> conn = new PDO($this->dsn, $this->user, $this->password);
      } catch(PDOException $e)  {
          echo 'failed ' . $e -> getMessage();
      }
    }
    public function insert(){
        if(isset($_POST['submit'])){
            if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['mobile']) && isset($_POST['address'])){
                if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['mobile']) && !empty($_POST['address'])){
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $mobile = $_POST['mobile'];
                    $address = $_POST['address'];
                    $sql = "INSERT INTO `items` (`name`, `email`, `mobile`, `address`) VALUES ('$name', '$email', '$mobile', '$address')";
                    if($this -> conn -> query($sql)){
                        echo "<script>alert('records added successfully');</script>";
                    }else{
                        echo "<script>alert('failed');</script>";
                    }
                } else {
                    echo "<script>alert('Empty');</script>";
                }
            }
        }
    }
    public function fetch(){
        $data = null;
        $sql = "SELECT * FROM 'items'";
        if($query = $this -> conn -> query($sql)){
            while($row = mysqli_fetch_assoc($query)){
                $data[] = $row;
            }
            
        }
        return $data;

    }
}
