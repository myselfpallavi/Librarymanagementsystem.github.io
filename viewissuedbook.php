<?php
session_start();
$connection= mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection,"lms");
$Book_no="";
$Book_name="";
$Author="";
$query="select issuedbook.Book_no,issuedbook.Book_name,issuedbook.Book_author from
        issuedbook";
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
        <table class="table-bordered" width="900px" style="text-align:center" >
                    <tr>
                        <th>Book Name</th>
                        <th>Author</th>
                        <th>Book Number</th>
                        <th>Action</th>
                    </tr>
                    <?php
                         
                         $query_run=mysqli_query($connection,$query);
                         while($row=mysqli_fetch_assoc($query_run))
                         {
                            $Book_name=$row['Book_name'];
                            $Author=$row['Book_author'];
                            $Book_no=$row['Book_no'];
                            ?>
                            <tr>
                                <td><?php echo $Book_name;?></td>
                                <td><?php echo $Author;?></td>
                                <td><?php echo $Book_no;?></td>
                                <td><button class="btn" name=""><a href="editbook.php?bn=<?php echo $Book_no; ?>">Edit</a></button>
                                <button class="btn" name=""><a href="deletebook.php?bn=<?php echo $Book_no; ?>">Delete</a></button>
                                </td>
                         </tr>
                            <?php
                         }
                    ?>
                </table>
        </div>
        <div class="col-md-2"></div>

    </div>  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>


</html>