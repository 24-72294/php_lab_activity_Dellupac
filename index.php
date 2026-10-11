<?php
 include 'dbcon.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
	<style>
		label {width:400px;}
	</style>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<h1 style="text-align: center;">User Management System</h1>
<div class="container">
	<div class="row">
		<div class="col-md-6">
		<div class="card" style="">
			<header style="background-color: skyblue;">
			<h2 class="card-title">Add New User</h2>
			<h1></h1>
			</header>
			<div class="card-body">
			<form method="post">
				<label>Full Name</label><br>
				<input type="text" class="form-control" name="flname" placeholder="Enter Full Name" required><br> 
				<label>Email Address</label><br>
				<input type="email" class="form-control" name="ename" placeholder="Enter Email Address" required><br>
				<button class="btn btn-primary" name="submitbtn" type="submit" style="">Submit</button>
			</form>
			</div>
		</div>
		</div>
		<div class="col-md-6">
		<div class="card" style="">
			<header>
			<h2 class="card-title">Registered Users</h2>
			</header>
			<div class="card-body">
				<table class="table table-bordered table-stripes">
					<tr>
						<th></th>
						<th></th>
						<th></th>
						<th><button></th>
					</tr>
				</table>
			</div>
		</div>
		</div>
	</div>
</div>
<?php
if (isset($_POST['flname'])) {
	$name_add = $_POST['flname'];
 	$email_add = $_POST['ename'];

 	$query = $conn->query("INSERT INTO users(Name,Email) VALUES('$name_add','$email_add')");

 	if ($query) {
 		echo "<script>
 				alert('Successfully Added');
 				window.location.href = 'index.php'
 			</script>";
 	}else{"<script>
 				alert('Error');
 				window.location.href = 'index.php'
 			</script>";
 	}
}
?>
</body>
</html>