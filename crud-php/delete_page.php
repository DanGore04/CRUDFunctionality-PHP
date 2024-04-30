<?php include('assignment-04.php'); ?>

<?php

if(isset($_GET['id'])){
    $id = $_GET['id'];
}

$query1 = "DELETE FROM `personal_details` WHERE ID = '$id'";
$result1 = mysqli_query($connection, $query1);

if(!$result1){
    die("Query Failed".mysqli_error());
}

$query2 = "DELETE FROM `home_address` WHERE ID = '$id'";
$result2 = mysqli_query($connection, $query2);

if(!$result2){
    die("Query Failed".mysqli_error());
}

$query3 = "DELETE FROM `shipping_address` WHERE ID = '$id'";
$result3 = mysqli_query($connection, $query3);

if(!$result3){
    die("Query Failed".mysqli_error());
}

else{
    header('location:index.php?delete_msg=User Deleted');
}

?>