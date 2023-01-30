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
                    <a class="nav-link " aria-current="page" href="Admin/index.php">Admin Login</a>
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
                <h3>LogIn</h3>
            </Center>
            <form method="post">
                
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" name="Email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="Password" class="form-control" id="exampleInputPassword1"required>
                </div>
                
                <button type="submit" name="login" class="btn btn-primary ">Login</button>
            </form>
        


    <?php
        session_start();
        if(isset($_POST['login']))
        {
            $connection= mysqli_connect("localhost","root","");
            $db=mysqli_select_db($connection,"lms");
            $query="select * from users where Email='$_POST[Email]'";
            $query_run=mysqli_query($connection,$query);
            while($row=mysqli_fetch_assoc($query_run))
            {
                if($row['Email']==$_POST['Email'])
                {
                    if($row['Password']==$_POST['Password'])
                    {
                        $_SESSION['Name']=$row['Name'];
                        $_SESSION['Email']=$row['Email'];
                        $_SESSION['Id']=$row['User_id'];
                        echo"session variable start";
                        header("Location:user_dashboard.php");
                    }
                    else
                    {
                        ?>
                        <br><br><br>
                        <center><span class="alert-danger">Wrong Password!!!</span></center>
                        <?php
                    }
                }
                else
                    {
                        ?>
                        <br><br><br>
                        <center><span class="alert-danger">Wrong Email!!!</span></center>
                        <?php
                    }
            }
        }
    ?>

    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>

</html>