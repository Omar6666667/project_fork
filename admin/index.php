<?php

session_start();


?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lumino - Login</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>

<body>

	<?php

	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		// echo "<pre>";
		// print_r($_SERVER);
		// print_r($_POST);
		$user = $_POST['user'] /* ?? "" */;
		$password = $_POST['password'] /* @ */;

		include("fun/connect.php");

		$select = "SELECT * FROM users WHERE username = '$user' && password = '$password'";

		$result = $conn->query($select);

		$num = $result->num_rows;

		$row = $result->fetch_assoc();

		if ($num > 0 && $row['pr'] == '1') {
			$_SESSION['login'] = $user;
			header("location:dashboard.php");
		}
	}



	?>
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Log in</div>
				<div class="panel-body">
					<form role="form" action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="Username" name="user" type="text" autofocus="">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Password" name="password" type="password">
							</div>

							<?php

							if ($_SERVER['REQUEST_METHOD'] === 'POST') {


								if ($num > 0 && $row['pr'] == '2') {
									$username = $row['username'];
									echo "<div class='alert alert-warning'>Welcome $username you are admin and not allow to enter this page</div>";
								} elseif ($num > 0 && $row['pr'] == '3') {
									$username = $row['username'];
									echo "<div class='alert alert-warning'>Welcome $username you are supervisor and not allow to enter this page</div>";
								} elseif ($num == 0) {
									echo "<div class='alert alert-danger'>Wrong data</div>";
								}
							}


							?>

							<button type="submit" class="btn btn-primary">Login</button>

						</fieldset>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->


	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>

</html>