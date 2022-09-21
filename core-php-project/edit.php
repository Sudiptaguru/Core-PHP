<?php

include "connect.php"; // Using database connection file here

$id = $_GET['id']; // get id through query string

$qry = mysqli_query($conn, "select * from user where id='$id'"); // select query

$data = mysqli_fetch_array($qry); // fetch data

if (isset($_POST['update'])) // when click on Update button
{
  // $id = $_POST['id'];
  $name = $_POST['name'];
  $email = $_POST['email'];
  $contact = $_REQUEST['phone'];
  $address = $_REQUEST['address'];
  $edit = mysqli_query($conn, "update user set name='$name', email='$email', phone='$contact', address='$address' where id='$id'");

  if ($edit) {
    mysqli_close($conn); // Close connection
    header("location:index.php"); // redirects to all records page
    exit;
  } else {
    echo mysqli_error();
  }
}
?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<div class="container">
  <div class="table-wrapper">
    <div class="table-title">
      <div class="row">
        <div class="col-sm-6">
          <h2>Add User</h2>
        </div>
      </div>
    </div>
    <form method="POST">
      <div class="card-body">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <input type="text" name="name" class="form-control" value="<?php echo $data['name'] ?>" placeholder="Name">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <input type="text" name="email" class="form-control" value="<?php echo $data['email'] ?>" placeholder="Email">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <input type="number" name="phone" class="form-control" value="<?php echo $data['phone'] ?>" placeholder="Contact Number">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <input type="text" name="address" class="form-control" value="<?php echo $data['address'] ?>" placeholder="Enter Address">
            </div>
          </div>
        </div>
        <div class="card-footer">
          <input type="submit" name="update" class="btn btn-primary" value="Update">
        </div>
    </form>
  </div>
</div>