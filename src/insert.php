<?php
$connection = new mysqli("localhost","","","") or die("can't connect to".$connection->connect_error);
$id = $_POST['id'];
$name = $_POST['name'];
$username = $_POST['username'];
$email = $_POST['email'];
if(empty($id) && empty($name) && empty($username) && empty($email)){
    echo "all fields are required";
} else {
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        $query = " CALL `insertdata`('$id','$name','$username','$email');";
        $results = $connection->query($query);
        if($results){
            echo "inserted";
        } else {
            echo "Something went wrong";
        }
    } else {
        echo "email is not valid";
    }
}

?>
