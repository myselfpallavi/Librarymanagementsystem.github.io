<?php
        $connection= mysqli_connect("localhost","root","");
        $db=mysqli_select_db($connection,"lms");
        $query="delete from author where Author_Id=$_GET[nm] ";
        $query_run=mysqli_query($connection,$query);
?>
<script type="text/javascript">
    alert("category deleted");
    window.location.href="manageauthor.php";
</script>