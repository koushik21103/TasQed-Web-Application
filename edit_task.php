<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Edit Task</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<style>
		/* Add any additional styles here */
		body {
			background-color: #f8f9fa;
		}

		.container {
			margin-top: 50px;
		}
	</style>
</head>
<body style="background:url('19948906_6162956.jpg'); background-size: cover;">
<!-- Bootstrap Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-transparent">
    <a href="index.php">
        <div>
            <h4 class="navbar-brand">TasQed</h4>
            <img src="Checklist-PNG-Image.png" style="display:inline; width: 30px;height: 30px; position:absolute;top: 13px;">
        </div>
    </a>
    <button class="navbar-toggler bg-light shadow-sm" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="login.php">
                    <button type="button" class="btn btn-light btn-outline-primary">Log in</button>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="register.php">
                    <button type="button" class="btn btn-light btn-outline-success">Sign up</button>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="logout.php">
                    <button type="button" class="btn btn-light btn-outline-danger">Log out</button>
                </a>
            </li>
        </ul>
    </div>
</nav>
<div class="container">
	<div class="card shadow">
		<div class="card-body">
			<form action="edit_task_process.php" method='post'>
				<h3 class="card-title">Edit Task</h3>
				<div class="form-group">
					<label for="description">Task Description</label>
					<input type="text" class="form-control" value='<?php echo $_SESSION["description"] ?>' name='description' required>
				</div>
				<button type="submit" class="btn btn-primary">Save</button>
				<a href="edit_task.php?cancel=1" class="btn btn-secondary">Cancel</a>
			</form>
		</div>
	</div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>

<?php
if (!isset(($_SESSION['edit_task'])))
	header('Location: taskpage.php');

if (isset($_GET['cancel']) == 1) {
	unset($_SESSION['edit_task']);
	header('Location: taskpage.php');	
}
?>
