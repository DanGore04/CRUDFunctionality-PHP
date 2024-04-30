<?php
include 'assignment-04.php';

if(isset($_POST['add_user'])){
    //pulls all inputs from form
    $title = $_POST['title'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];

    $homeadd1 = $_POST['homeadd1'];
    $homeadd2 = $_POST['homeadd2'];
    $homecity = $_POST['homecity'];
    $homecounty = $_POST['homecounty'];
    $homeEircode = $_POST['homeEircode'];

    $shipadd1 = $_POST['shipadd1'];
    $shipadd2 = $_POST['shipadd2'];
    $shipcity = $_POST['shipcity'];
    $shipcounty = $_POST['shipcounty'];
    $shipEircode = $_POST['shipEircode'];

    if(    //personal details filled in
        empty($fname) 
        || empty($title) 
        || empty($lname) 
        || empty($mobile) 
        || empty($email)
        
        //home address filled in
        || empty($homeadd1) 
        || empty($homecity) 
        || empty($homecounty)
        || empty($homeEircode)
        
        //shipping address filled in
        || empty($shipadd1) 
        || empty($shipcity) 
        || empty($shipcounty)
        || empty($shipEircode))
        {
            header('location:index.php?message=Please Fill All Fields');
    }

    else{

        $query1 = "INSERT INTO `personal_details`(`Title`, `Firstname`, `Surname`, `Mobile`, `Email`) values ('$title','$fname','$lname','$mobile','$email')";
        $query2 = "INSERT INTO `home_address`(`Address1`, `Address2`, `City`, `County`, `Eircode`) values ('$homeadd1','$homeadd2','$homecity','$homecounty','$homeEircode')";
        $query3 = "INSERT INTO `shipping_address`(`Address1`, `Address2`, `City`, `County`, `Eircode`) values ('$shipadd1','$shipadd2','$shipcity','$shipcounty','$shipEircode')";

        $result1 = mysqli_query($connection,$query1);
        $result2 = mysqli_query($connection,$query2);
        $result3 = mysqli_query($connection,$query3);

        if(!$result1){
            die("Query1 Failed".mysqli_error());
        }
        if(!$result2){
            die("Query2 Failed".mysqli_error());
        }
        if(!$result3){
            die("Query3 Failed".mysqli_error());
        }

        else{
            header('location:index.php?insert_msg=User has been added');
        }
    }
}

?>