<?php
    $connection= mysqli_connect("localhost","root","");
    $db=mysqli_select_db($connection,"lms");
    $query="update admin set Name='$_POST[Name]',Email='$_POST[Email]',
            Mobile_Number='$_POST[Mobile_Number]' where Email='$_SESSION[Email]'";
    $query_run=mysqli_query($connection,$query);
?>

<script type="text/javascript">
    alert("Update successfully ........");
    window.location.href="admin_dashboard.php";
</script>