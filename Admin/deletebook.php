<?php
        $connection= mysqli_connect("localhost","root","");
        $db=mysqli_select_db($connection,"lms");
        $query="delete from books where Book_no=$_GET[bn] ";
        $query_run=mysqli_query($connection,$query);
?>
<script type="text/javascript">
    alert("book deleted");
    window.location.href="managebook.php";
</script>