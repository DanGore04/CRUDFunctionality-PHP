<!-- CRUD ref = https://www.youtube.com/playlist?list=PLbhHxQMrsDNjgwkb51IKA_BXoy4u5H3RH -->
<?php include('assignment-04.php'); ?>

<!DOCTYPE html>
<html lang='en'>
    <head>
        <title>Home page</title>
        <!-- custom and bootrsap stylesheets -->
        <link rel='stylesheet' type='text/css' href='assignment-04.css'>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class='background'>
</div>
    <h1 id='pageTitle'>USERS</h1>

    <!-- Table for personal details -->
    <div class='container1'>

    <!-- Pop-up Messages -->
<h5>
<?php
    if(isset($_GET['message'])){
        echo $_GET['message'];
    }
    if(isset($_GET['insert_msg'])){
        echo $_GET['insert_msg'];
    }
    if(isset($_GET['update_msg'])){
        echo $_GET['update_msg'];
    }
    if(isset($_GET['delete_msg'])){
        echo $_GET['delete_msg'];
    }

    ?>
    </h5>
    
    <!-- personal details table -->
    <div class="btncont">
    <h2>Personal Details</h2>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Add User</button>
</div>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>First Name</th>
                <th>Surname</th>
                <th>Mobile</th>
                <th>Email</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query1 = "SELECT * FROM `personal_details`";
            $result1 = mysqli_query($connection, $query1);

            if(!$result1){
                die("Query failed".mysqli_error());
            }
            else{
                while($row = mysqli_fetch_assoc($result1)){
                ?>
                <tr>
                    <td><?php echo $row['ID']; ?></td>
                    <td><?php echo $row['Title']; ?></td>
                    <td><?php echo $row['Firstname']; ?></td>
                    <td><?php echo $row['Surname']; ?></td>
                    <td><?php echo $row['Mobile']; ?></td>
                    <td><?php echo $row['Email']; ?></td>
                    <td><a href='update_page.php?id=<?php echo $row['ID']; ?>' class='btn btn-success'>Update</a></td>
                    <td><a href='delete_page.php?id=<?php echo $row['ID']; ?>' class='btn btn-danger'>Delete</a></td>
                </tr>  
                <?php
                }
            }
            ?>
        </tbody>
</table>

</div>

<!-- Table for home address -->
<div class='container2'>
    <h2>Home Address</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Address 1</th>
                <th>Address 2</th>
                <th>City</th>
                <th>County</th>
                <th>Eircode</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query2 = "SELECT * FROM `home_address`";
            $result2 = mysqli_query($connection, $query2);

            if(!$result2){
                die("Query failed".mysqli_error());
            }
            else{
                while($row = mysqli_fetch_assoc($result2)){
                ?>
                <tr>
                    <td><?php echo $row['ID']; ?></td>
                    <td><?php echo $row['Address1']; ?></td>
                    <td><?php echo $row['Address2']; ?></td>
                    <td><?php echo $row['City']; ?></td>
                    <td><?php echo $row['County']; ?></td>
                    <td><?php echo $row['Eircode']; ?></td>
                    <td><a href='update_page.php?id=<?php echo $row['ID']; ?>' class='btn btn-success'>Update</a></td>
                    <td><a href='delete_page.php?id=<?php echo $row['ID']; ?>' class='btn btn-danger'>Delete</a></td>
                </tr>  
                <?php
                }
            }
            ?>
        </tbody>
</table>
</div>

<!-- Table for shipping address -->
<div class='container3'>
    <h2>Shipping Address</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Address 1</th>
                <th>Address 2</th>
                <th>City</th>
                <th>County</th>
                <th>Eircode</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query3 = "SELECT * FROM `shipping_address`";
            $result3 = mysqli_query($connection, $query3);

            if(!$result3){
                die("Query failed".mysqli_error());
            }
            else{
                while($row = mysqli_fetch_assoc($result3)){
                ?>
                <tr>
                    <td><?php echo $row['ID']; ?></td>
                    <td><?php echo $row['Address1']; ?></td>
                    <td><?php echo $row['Address2']; ?></td>
                    <td><?php echo $row['City']; ?></td>
                    <td><?php echo $row['County']; ?></td>
                    <td><?php echo $row['Eircode']; ?></td>
                    <td><a href='update_page.php?id=<?php echo $row['ID']; ?>' class='btn btn-success'>Update</a></td>
                    <td><a href='delete_page.php?id=<?php echo $row['ID']; ?>' class='btn btn-danger'>Delete</a></td>
                </tr>  
                <?php
                }
            }
            ?>
        </tbody>
</table>
</div>

<!-- Modal Scrollable -->
<form action="create_user.php" method="post">
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
<!-- Personal Details Section of form -->
            <h6>Personal Details</h6>
        <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control">
            </div>
            <div class="form-group">
                <label for="fname">First Name</label>
                <input type="text" name="fname" class="form-control">
            </div>
            <div class="form-group">
                <label for="lname">Surname</label>
                <input type="text" name="lname" class="form-control">
            </div>
            <div class="form-group">
                <label for="mobile">Mobile</label>
                <input type="text" name="mobile" class="form-control">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" class="form-control">
            </div>

            <!-- Home Address Section of form -->
            <h6><br>Home Address</h6>
        <div class="form-group">
                <label for="homeadd1">Address 1</label>
                <input type="text" name="homeadd1" class="form-control">
            </div>
            <div class="form-group">
                <label for="homeadd2">Address 2</label>
                <input type="text" name="homeadd2" class="form-control">
            </div>
            <div class="form-group">
                <label for="homecity">City</label>
                <input type="text" name="homecity" class="form-control">
            </div>
            <div class="form-group">
                <label for="homecounty">County</label>
                <input type="text" name="homecounty" class="form-control">
            </div>
            <div class="form-group">
                <label for="homeEircode">Eircode</label>
                <input type="text" name="homeEircode" class="form-control">
            </div>

            <!-- Shipping Address Section of form -->
            <h6><br>Shipping Address</h6>
        <div class="form-group">
                <label for="shipadd1">Address 1</label>
                <input type="text" name="shipadd1" class="form-control">
            </div>
            <div class="form-group">
                <label for="shipadd2">Address 2</label>
                <input type="text" name="shipadd2" class="form-control">
            </div>
            <div class="form-group">
                <label for="shipcity">City</label>
                <input type="text" name="shipcity" class="form-control">
            </div>
            <div class="form-group">
                <label for="shipcounty">County</label>
                <input type="text" name="shipcounty" class="form-control">
            </div>
            <div class="form-group">
                <label for="shipEircode">Eircode</label>
                <input type="text" name="shipEircode" class="form-control">
            </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CLOSE</button>
        <input type="submit" class="btn btn-success" name="add_user" value="ADD USER">
      </div>
    </div>
  </div>
</div>
</form>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>