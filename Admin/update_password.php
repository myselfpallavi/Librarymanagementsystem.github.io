<?php
            session_start();
            $connection= mysqli_connect("localhost","root","");
            $db=mysqli_select_db($connection,"lms");
            $Password="";
            $query="select * from admin where Email='$_SESSION[Email]' ";
            $query_run=mysqli_query($connection,$query);
            while($row=mysqli_fetch_assoc($query_run))
            {
                $Password=$row['Password'];
            }
            if($Password==$_POST['Password'])
            {
                $query="update admin set Password='$_POST[New_Password]' 
                            where Email='$_SESSION[Email]'";
                $query_run=mysqli_query($connection,$query);
            }

        ?>

        <script type="text/javascript">
            alert("Update Password successfully ........");
            window.location.href="admin_dashboard.php";
        </script>
