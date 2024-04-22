<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration Form</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Your custom stylesheet -->
    
</head>
<body class="bg-light" style="background:url('19948906_6162956.jpg'); background-size: cover;" >
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
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8"> <!-- Increased width here -->
            <div class="card shadow">
                <div class="card-header text-center">
                    <h3>Register to get TasQed!</h3>
                </div>
                <div class="card-body">
                    <form action="register_process.php" method="post">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" name="username" required pattern="\S+" title="Spaces are not allowed.">
                        </div>
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div> 
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required pattern="\S+" title="Spaces are not allowed." minlength="6">
                        </div>
                        <div class="form-group">
                            <label for="confirm_password">Confirm Password</label>
                            <input type="password" class="form-control" id="confirm_password" name="confirm_password" required>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Sign Up</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS and dependencies (popper.js, jQuery) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>

<?php
    session_start();
?>
<div class="h-100 d-flex align-items-center justify-content-center">
    <?php
    if(isset($_SESSION['error']))
            echo "<div class='alert alert-danger col-md-4 text-center'><p class='error'>" . $_SESSION['error'] . '</p><div>';
    unset($_SESSION['error']);

    if(isset($_SESSION['success']))
            echo "<div class='alert alert-success col-md-4 text-center'><p class='success'>" . $_SESSION['success'] . '</p><div>';
    unset($_SESSION['success']);

    if(isset($_SESSION['user']))
        header('Location: index.php');
    ?>
</div>
