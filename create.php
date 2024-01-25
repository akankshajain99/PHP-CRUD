<?php 
require_once 'db_con.php';
if (isset($_POST['add_new'])) {
	
	$username = $_POST['username'];
	$useremail = $_POST['useremail'];
	$userphone = $_POST['userphone'];

	$sql = "INSERT into user (username, useremail, userphone) values ('$username', '$useremail', '$userphone')";
	if(mysqli_query($dbc, $sql)){

		echo "Data Inserted";
		echo("<script>location.href = 'index.php' ;</script>");
	}else{

		echo "Error";
	}
}
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
				<div class="col-md-8">
					<h1>PHP CRUD Operation</h1>
					<form method="post" action="">
						<div class="form-group">
							<input type="text" name="username" placeholder="UserName" class="form-control">
						</div><br>
						<div class="form-group">
							<input type="email" name="useremail" placeholder="UserEmail" class="form-control">
						</div><br>
						<div class="form-group">
							<input type="text" name="userphone" placeholder="UserPhone" class="form-control">
						</div><br>
						<div class="form-group">
							<button name="add_new" type="submit" class="btn btn-primary">Add New</button>
						</div>
						
					</form>
				</div>
			</div>
		</div>
	</section>

</body>
</html>