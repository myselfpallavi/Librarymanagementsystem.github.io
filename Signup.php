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
                <a class="navbar-brand" href="Signup.php">Library Management System(LMS)</a>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="Admin\admin_dashboard.php">Admin Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php">User Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Signup.php">Register</a>
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
        <div class="col-md-4" id="side_bar">
            <h5>Library Timing</h5>
            <ul>
                <li>Opening Time:8:00am</li>
                <li>Closing Time:8:00pm</li>
                <li>(Sunday Off)</li>
            </ul>
            <h5>What we provide?</h5>
            <ul>
                <li>Free Wifi</li>
                <li>Ro Water</li>
                <li>Discussion Room</li>
                <li>Peaceful Environment</li>
                <li>Newspaper</li>
            </ul>
        </div>
        <div class="col-md-8" id="maincontent">
            <Center>
                <h3>Registration Form</h3>
            </Center>
            <form action="Register.php" method="post">
                <div class="mb-3">
                    <label for="FullName" class="form-label">Full Name</label>
                    <input type="text" name="Name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" name="Email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="Password" class="form-control" id="exampleInputPassword1"required>
                </div>
                <div class="mb-3">
                    <label for="MobileNumber" class="form-label">Mobile Number</label>
                    <input type="text" name="Mobile_Number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>

                </div>
                <div class="mb-3">
                    <label for="Address" class="form-label">Address</label>
                    <textarea rows="3" cols="40" class="form-control" name="Address"></textarea>
                </div>
                <button type="submit" class="btn btn-primary ">Register</button>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>

</html>