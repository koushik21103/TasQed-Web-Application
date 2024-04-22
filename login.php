<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
    <!-- Link to Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- Link to your custom stylesheet -->
    
</head>
<body class="bg-light" style="background:url('19948906_6162956.jpg'); background-size: cover;">
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
        <div class="card mx-auto shadow-lg" style="max-width: 400px;">
            <div class="card-header bg-light text-black text-center">
                <h5 class="card-title h2">Login</h5>
            </div>
            <div class="card-body">
                <form action="login_process.php" method="post">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block">Log In</button>
                </form>
                
            </div>
        </div>
    </div>

    <!-- Link to Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <div class="h-100 d-flex align-items-center justify-content-center">
    <?php
    session_start();
    if(isset($_SESSION['error']))
        echo "<div class='alert alert-danger col-md-4 text-center'><p class='error'>" . $_SESSION['error'] . '</p><div>';
    unset($_SESSION['error']);

    if(isset($_SESSION['user']))
        header('Location: taskpage.php');
    ?>
    </div>

</body>
</html>

