<?php
    require_once 'db_con.php';
	$sql = "SELECT * from user";

	$run = mysqli_query($dbc, $sql);

	$i=1;
?>	
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP CRUD Operation</title>
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>

	<section style="padding-top:100px;">
		<div class="container">
			<div class="row">
				<h1>PHP CRUD Operation</h1>
				<div class="col-md-12">
					<table class="table table-striped">
						<thead>
							<th>#</th>
							<th>Username</th>
							<th>Useremail</th>
							<th>Userphone</th>
							<th>Action</th>
						</thead>
						<tbody>
							<?php 

								while ($row = mysqli_fetch_assoc($run)) {
									
									$id = $row['id'];
									$username = $row['username'];
									$useremail = $row['useremail'];
									$userphone = $row['userphone'];
								

							 ?>
							<tr>
								<td><?=$i;?></td>
								<td><?=$username?></td>
								<td><?=$useremail?></td>
								<td><?=$userphone?></td>
								<td>
									<a href="edit.php?id=<?=$id?>" class="btn btn-success">Update</a>
									<a href="delete.php?id=<?=$id?>" class="btn btn-danger">Delete</a>
								</td>
							</tr>
							<?php $i++; } ?>
						</tbody>
					</table><br>

					<a href="create.php" class="btn btn-primary btn-lg">Add New Record</a>

				</div>
			</div>
		</div>
	</section>		

</body>
</html>