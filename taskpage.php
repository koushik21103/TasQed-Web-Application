<?php
include 'db.php';
session_start();

// Handle delete task
if (isset($_GET['del_task'])) {
    $query = $con->prepare('delete from tasks where task_id = ?');
    $query->execute(array($_GET['del_task']));
    header('Location: taskpage.php');
    exit(); // Ensure no further code execution after header redirect
}

// Handle edit task
if (isset($_GET['edit_task'])) {
    $_SESSION['edit_task'] = $_GET['edit_task'];

    // to fill the input text field with description to be edited
    $query = $con->prepare('select description from tasks where task_id = ?');
    $query->execute(array($_SESSION['edit_task']));
    $row = $query->fetch(PDO::FETCH_ASSOC);
    $_SESSION['description'] = $row['description'];
    header('Location: edit_task.php');
    exit(); // Ensure no further code execution after header redirect
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Task Management System</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Add your custom styles here */
        body {
            padding: 20px;
        }

        .task-container {
            margin-top: 10px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .task-actions {
            text-align: right;
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
<div class="container-md bg-light shadow" style="padding-block:18px; border-radius:8px;">
    <?php
    if (isset($_SESSION['user'])) { // logged in
        ?>
        <div class="mt-3">
            <h3 id="username"><?php echo $_SESSION['user']; ?></h3>
        </div>

        <form action="add_task.php" method='post' id='add_task_form' class="mt-3">
            <div class="form-group">
                <input type="text" name='description' class="form-control" placeholder='Task Description'
                       id='description' required>
            </div>
            <button type="submit" class="btn btn-primary">Add Task</button>
        </form>

        <?php
        $query = $con->prepare('select * from tasks, users where users.user_id = ? and tasks.user_id = users.user_id');
        $query->execute(array($_SESSION['user_id']));
        $result = $query->fetchAll();
        foreach ($result as $row) {
            ?>
            
            <div class='task-container'>
                <div class="row">
                    <div class="col-md-8">
                        <input type="text" class='form-control' value="<?php echo $row['description']; ?>"
                               placeholder='Description' readonly>
                    </div>
                    <div class="col-md-4 task-actions">
                        <a href="taskpage.php?del_task=<?php echo $row['task_id'] ?>" class="btn btn-danger">Delete</a>
                        <a href="taskpage.php?edit_task=<?php echo $row['task_id'] ?>" class="btn btn-warning">Edit</a>
                    </div>
                </div>
            </div>
            <?php
        }
    } else { // logged out
         // logged out ?>
        <script>
            document.querySelector('#login_btn').style.display = 'inline-block';
            document.querySelector('#signup_btn').style.display = 'inline-block';
            document.querySelector('#logout_btn').style.display = 'none';
        </script>
    <?php } 
    ?>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>