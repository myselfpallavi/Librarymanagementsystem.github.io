<?php
require('functions.php');
session_start();
$connection= mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection,"lms");
$Name="";
$Email="";
$Mobile="";
$Address="";
$Password="";
$query="select * from users";
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
                <a class="navbar-brand" href="admin_dashboard.php">Library Management System(LMS)</a>
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
    </nav>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color:#e3f2fd">
  <div class="container-fluid">
    <a class="navbar-brand" href="admin_dashboard.php">Dashboard</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <button class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            Book
          </button>
          <ul class="dropdown-menu dropdown-menu">
            <li><a class="dropdown-item" href="#">Add Book</a></li>
            <li><a class="dropdown-item" href="#">Manage Book</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <button class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            Category
          </button>
          <ul class="dropdown-menu dropdown-menu">
            <li><a class="dropdown-item" href="#">Add Category</a></li>
            <li><a class="dropdown-item" href="#">Manage Category</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <button class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            Author
          </button>
          <ul class="dropdown-menu dropdown-menu">
            <li><a class="dropdown-item" href="#">Add Author</a></li>
            <li><a class="dropdown-item" href="#">Manage Author</a></li>
          </ul>
        </li>
        <a class="navbar-brand" href="#">Issue Book</a>
      </ul>
    </div>
  </div>
</nav>   
    </nav>
    <br>

    <span>
        <marquee style="font-size: large;" class="text-danger-emphasis">This is Library Management System online open in
            8:00am and closed in 8:00pm</marquee>
    </span>
    <br><br>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <form>
                <table class="table-bordered" width="900px" style="text-align:center" >
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Address</th>
                    </tr>
                    <?php
                         
                         $query_run=mysqli_query($connection,$query);
                         while($row=mysqli_fetch_assoc($query_run))
                         {
                            $Name=$row['Name'];
                            $Email=$row['Email'];
                            $Mobile=$row['Mobile_Number'];
                            $Address=$row['Address'];
                            ?>
                            <tr>
                                <td><?php echo $Name;?></td>
                                <td><?php echo $Email;?></td>
                                <td><?php echo $Mobile;?></td>
                                <td><?php echo $Address;?></td>
                            </tr>
                            <?php
                         }
                    ?>
                </table>
            </form>
        </div>
        <div class="col-md-2"></div>
    </div> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>

</html>