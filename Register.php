<?php
    $connection= mysqli_connect("localhost","root","");
    $db=mysqli_select_db($connection,"lms");
    $query="INSERT INTO users VALUES('$_POST[Name]','$_POST[Email]'
                ,'$_POST[Password]','$_POST[Mobile_Number]','$_POST[Address]')";

    $query_run=mysqli_query($connection,$query);

?>
<script type="text/javascript">
    alert("Registration successfully .......  you may login now.");
    window.location.href="index.php";
</script>