<?php
$connection = new mysqli("localhost","","","") or die("can't connect to".$connection->connect_error);
$id = $_POST['id'];
$name = $_POST['name'];
$username = $_POST['username'];
$email = $_POST['email'];
$id_checker = "SELECT id FROM users WHERE id ='$id'";
$res = $connection->query($id_checker);
if($res->num_rows>0){
    $query = " CALL `updator`('$id','$name','$username','$email');";
    $results = $connection->query($query);
    if($results){
        echo "updated";
    } else {
        echo "Something went wrong. Please try again!";
    }
} else {
    echo "this id is not in system";
}

?>
