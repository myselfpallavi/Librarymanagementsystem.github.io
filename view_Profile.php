<?php
session_start();

$connection= mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection,"lms");
$Name="";
$Email="";
$Address="";
$Mobile="";
$query="select * from users where Email='$_SESSION[Email]'";
$query_run=mysqli_query($connection,$query);
while($row=mysqli_fetch_assoc($query_run))
{
    $Name=$row['Name'];
    $Email=$row['Email'];
    $Address=$row['Address'];
    $Mobile=$row['Mobile_Number'];
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Dashboard</title>
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
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
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
        <div class="col-md-4" >
        </div>
        <div class="col-md-4" >
                <form>
                    <div class="form-group">
                        <lable>Name:</lable>
                        <input type="text" class="form-control" value="<?php echo $Name;?>" disabled>
                    </div>
                    <div class="form-group">
                        <lable>Email:</lable>
                        <input type="text" class="form-control" value="<?php echo $Email;?>" disabled>
                    </div>
                    <div class="form-group">
                        <lable>Mobile Number</lable>
                        <input  class="form-control" value="<?php echo $Mobile;?>" disabled>
                    </div>
                    <div class="form-group">
                        <lable>Address:</lable>
                        <textarea rows="3" cols="40" class="form-control" disabled><?php echo $Address;?></textarea>
                    </div>
                </form>
        </div>
        <div class="col-md-4" ></div>
    </div>
       
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>

</html>