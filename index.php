<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to To-do List</title>
    <!-- Add Bootstrap CSS link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    
</head>

<body style="background:url('19948906_6162956.jpg'); background-size: cover;">
<!-- Bootstrap Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-transparent">
    <a href="index.php">
        <div>
            <h4 class="navbar-brand" style="font-family:">TasQed</h4>
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

   <!-- Bootstrap Jumbotron for Welcome Header with Logo -->
<div class="jumbotron text-center container-lg shadow">
    <!-- Add your logo image -->
    <a href="login.php"><img src="Checklist-PNG-Image.png" alt="Logo" class="img-fluid mb-3" width="100"></a>
    <h1 class="display-4">Welcome to TasQed</h1>
    <p class="lead">Organize your tasks and stay productive!</p>
    <hr class="my-4">
    <p>Click the button below to register your account</p>
    <a class="btn btn-primary btn-lg" href="register.php" role="button">Get Started</a>
</div>
    <!-- Your additional content goes here -->

    <!-- Add Bootstrap JS and Popper.js scripts (required for certain Bootstrap features) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>


