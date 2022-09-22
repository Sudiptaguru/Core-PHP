<?php
include "connect.php";
$sql = mysqli_query($conn, "SELECT * FROM user");

if (isset($_REQUEST['admin']) && $_REQUEST['admin'] == 1) {
	echo "<font color='green'>Admin Login Successfull</font>";
}

?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style type="text/css">
	.odd td {
		background-color: #1aff1a;
	}

	.even td {
		backgorund-color: #F6F6F6;
	}
</style>
<div class="container">
	<div class="table-wrapper">
		<div class="table-title">
			<div class="row">
				<div class="col-sm-6">
					<h2>Manage Users</h2>
				</div>
			</div>
		</div>
		<a href="registration.php" class="btn btn-primary">Add New</a>
		<br><br>
		<table border="1">
			<tr>
				<th>Name</th>
				<th>Email</th>
				<th>Phone</th>
				<th>Address</th>
				<th>Created Time</th>
				<th>Action</th>
				<th>Status</th>
			</tr>
			<?php
			?>
			<?php
			$current_date = strtotime(date('Y-m-d H:i:s'));

			$end = date('Y-m-d H:i:s', strtotime('-5 years', $current_date));
			while ($data = mysqli_fetch_array($sql)) {
				if (($data["created_at"] < $end) and ($data["status"] == 1)) {
					$tr = 'odd';
				} else {
					$tr = 'even';
				}
			?>
				<tr class="<?php echo $tr; ?>">
					<td><?php echo $data['name']; ?></td>
					<td><?php echo $data['email']; ?></td>
					<td><?php echo $data['phone']; ?></td>
					<td><?php echo $data['address']; ?></td>
					<td><?php echo $data['created_at']; ?></td>
					<td><a href="edit.php?id=<?php echo $data['id']; ?>">Edit</a> ||
						<a href="delete.php?id=<?php echo $data['id']; ?>">Delete</a>
					</td>
					<td><a onclick="return confirm('Are you sure')" href="active_deactive.php?id=<?php echo $data['id']; ?>">
							<?php
							if ($data['status'] == 1) {
								echo "Active";
							} else {
								echo "Inactive";
							}
							?></a></td>

				</tr>
			<?php
			}
			?>


		</table>
	</div>
</div>
