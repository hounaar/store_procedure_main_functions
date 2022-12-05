<?php
$connection = new mysqli("localhost","","","") or die("can't connect to".$connection->connect_error);
$id = $_POST['id'];
$name_checker = "SELECT id FROM users WHERE id='$id'";
$res = $connection->query($name_checker);
if($res->num_rows>0){
    $query = " CALL `deletedata`('$id');";
    $results = $connection->query($query);
    if($results){
        echo "user deleted";
    } else {
        echo "Something went wrong. Please try again!";
    }
} else {
    echo "this name is not in system";
}

?>

