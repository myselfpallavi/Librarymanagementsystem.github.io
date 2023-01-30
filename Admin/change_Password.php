<?php
    session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Library Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        #side_bar {
            background-color: whitesmoke;
            padding: 50px;
            width: 300px;
            height: 450px;
        }
    </style>
</head>

<body>


    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="user_dashboard.php">Library Management System(LMS)</a>
            </div>
            <font style="color:white"><span><strong>Welcome: <?php print_r($_SESSION['Name']);?></strong></span></font>
            <font style="color:white"><span><strong>Email: <?php print_r($_SESSION['Email']);?></strong></span></font>
            <ul class="nav navbar-nav navbar-right">
                <li class="nav-item dropdown">
                <button class="btn btn-outline-light dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        My Profile
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="view_Profile.php">View Profile</a></li>
                        <li><a class="dropdown-item" href="edit_Profile.php">Edit Profile</a></li>
                        <li><a class="dropdown-item" href="change_Password.php">Change Password</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Logout.php">Logout</a>
                </li>
            </ul>
        </div>
    </nav><br>
    <span>
        <marquee style="font-size: large;" class="text-danger-emphasis">This is Library Management System online open in
            8:00am and closed in 8:00pm</marquee>
    </span>
    <br><br>
    <div class="row">
        <div class="col-md-4">
        </div>
        <div class="col-md-4">
            <form action="update_password.php" method="post">
                <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Enter Current Password</label>
                        <input type="password" name="Password" class="form-control" id="exampleInputPassword1"required>
                </div>
                <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Enter New Password</label>
                        <input type="password" name="New_Password" class="form-control" id="exampleInputPassword1"required>
                </div>
                <button type="submit" name="update" class="btn btn-success">Update Password</button>
            </form>
        </div>
        <div class="col-md-4">
        </div>
    </div>
    </body>
</html>
