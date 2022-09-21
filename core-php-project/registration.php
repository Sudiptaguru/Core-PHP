<?php
if (isset($_REQUEST['reg']) && $_REQUEST['reg'] == 0) {
    echo "<font color='red'>Registration unsuccessful</font>";
}
if (isset($_REQUEST['reg']) && $_REQUEST['reg'] == 2) {
    echo "<font color='red'>Email Already Exists</font>";
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
        <form action="registration_action.php" method="POST" enctype="multipart/form-data">
            Name:<input type="text" id="user" name='user'><br><br><br>

            Email:<input type="text" id="email" name='email'><br><br><br>

            Address:<textarea name='address'></textarea><br><br><br>

            Number:<input type="number" id="nmbr" name='phone'><br><br><br>
            <input type="submit" class="btn btn-success" value='Submit'>
        </form>
    </div>
</div>