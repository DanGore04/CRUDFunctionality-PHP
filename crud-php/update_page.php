
<?php include('assignment-04.php'); ?><!-- includes database connection code -->
<!DOCTYPE html>
<html lang='en'>
    <head>
        <title>Home page</title>
        <!-- stylesheet for custom and bootstrap -->
        <link rel='stylesheet' type='text/css' href='assignment-04.css'>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class='background'>
</div>
    <h1 id='pageTitle'>USERS</h1>

<?php

// gets id from url
if(isset($_GET['id'])){
    $id = ($_GET['id']);

    //3 querys connecting to each table 
            $query1 = "SELECT * FROM `personal_details` WHERE ID = '$id'";
            $result1 = mysqli_query($connection, $query1);

            if(!$result1){
                die("Query failed".mysqli_error());
            }
            else{
                $row1 = mysqli_fetch_assoc($result1);
            }

            $query2 = "SELECT * FROM `home_address` WHERE ID = '$id'";
            $result2 = mysqli_query($connection, $query2);

            if(!$result2){
                die("Query failed".mysqli_error());
            }
            else{
                $row2 = mysqli_fetch_assoc($result2);
            }

            $query3 = "SELECT * FROM `shipping_address` WHERE ID = '$id'";
            $result3 = mysqli_query($connection, $query3);

            if(!$result3){
                die("Query failed".mysqli_error());
            }
            else{
                $row3 = mysqli_fetch_assoc($result3);
            }
}
?>


<?php
//new id from url
if(isset($_POST['update_user'])){
    if(isset($_GET['id_new'])){
        $idnew = $_GET['id_new'];
    }

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
//update sql for each table
    $Uquery1 = "UPDATE `personal_details` SET `Title`='$title',`Firstname`='$fname',`Surname`='$lname',`Mobile`='$mobile',`Email`='$email' WHERE ID = '$idnew'";
    $Uresult1 = mysqli_query($connection, $Uquery1);

            if(!$Uresult1){
                die("Query failed".mysqli_error());
            }

    $Uquery2 = "UPDATE `home_address` SET `Address1`='$homeadd1',`Address2`='$homeadd2',`City`='$homecity',`County`='$homecounty',`Eircode`='$homeEircode' WHERE ID = '$idnew'";
    $Uresult2 = mysqli_query($connection, $Uquery2);
        
            if(!$Uresult1){
                die("Query failed".mysqli_error());
            }
    $Uquery3 = "UPDATE `shipping_address` SET `Address1`='$shipadd1',`Address2`='$shipadd2',`City`='$shipcity',`County`='$shipcounty',`Eircode`='$shipEircode' WHERE ID = '$idnew'";
    $Uresult3 = mysqli_query($connection, $Uquery3);
                
            if(!$Uresult3){
            die("Query failed".mysqli_error());
            }
            else{
            header('location:index.php?update_msg=Updated User');
            }
}

?>


<form class="formcont" action="update_page.php?id_new=<?php echo $id; ?>" method="post">
<!-- Personal Details Section of form -->
<h6>Personal Details</h6>
        <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" value="<?php echo $row1['Title'] ?>">
            </div>
            <div class="form-group">
                <label for="fname">First Name</label>
                <input type="text" name="fname" class="form-control" value="<?php echo $row1['Firstname'] ?>">
            </div>
            <div class="form-group">
                <label for="lname">Surname</label>
                <input type="text" name="lname" class="form-control" value="<?php echo $row1['Surname'] ?>">
            </div>
            <div class="form-group">
                <label for="mobile">Mobile</label>
                <input type="text" name="mobile" class="form-control" value="<?php echo $row1['Mobile'] ?>">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" class="form-control" value="<?php echo $row1['Email'] ?>">
            </div>

            <!-- Home Address Section of form -->
            <h6><br>Home Address</h6>
        <div class="form-group">
                <label for="homeadd1">Address 1</label>
                <input type="text" name="homeadd1" class="form-control" value="<?php echo $row2['Address1'] ?>">
            </div>
            <div class="form-group">
                <label for="homeadd2">Address 2</label>
                <input type="text" name="homeadd2" class="form-control" value="<?php echo $row2['Address2'] ?>">
            </div>
            <div class="form-group">
                <label for="homecity">City</label>
                <input type="text" name="homecity" class="form-control" value="<?php echo $row2['City'] ?>">
            </div>
            <div class="form-group">
                <label for="homecounty">County</label>
                <input type="text" name="homecounty" class="form-control" value="<?php echo $row2['County'] ?>">
            </div>
            <div class="form-group">
                <label for="homeEircode">Eircode</label>
                <input type="text" name="homeEircode" class="form-control" value="<?php echo $row2['Eircode'] ?>">
            </div>

            <!-- Shipping Address Section of form -->
            <h6><br>Shipping Address</h6>
        <div class="form-group">
                <label for="shipadd1">Address 1</label>
                <input type="text" name="shipadd1" class="form-control" value="<?php echo $row3['Address1'] ?>">
            </div>
            <div class="form-group">
                <label for="shipadd2">Address 2</label>
                <input type="text" name="shipadd2" class="form-control" value="<?php echo $row3['Address2'] ?>">
            </div>
            <div class="form-group">
                <label for="shipcity">City</label>
                <input type="text" name="shipcity" class="form-control" value="<?php echo $row3['City'] ?>">
            </div>
            <div class="form-group">
                <label for="shipcounty">County</label>
                <input type="text" name="shipcounty" class="form-control" value="<?php echo $row3['County'] ?>">
            </div>
            <div class="form-group">
                <label for="shipEircode">Eircode</label>
                <input type="text" name="shipEircode" class="form-control" value="<?php echo $row3['Eircode'] ?>">
            </div>
            <br>
            <input type="submit" class="btn btn-success" name="update_user" value="UPDATE USER">
</form>

<!-- java for bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>