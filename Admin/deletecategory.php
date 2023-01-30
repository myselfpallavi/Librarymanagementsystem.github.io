<?php
        $connection= mysqli_connect("localhost","root","");
        $db=mysqli_select_db($connection,"lms");
        $query="delete from categories where Cat_id=$_GET[nm] ";
        $query_run=mysqli_query($connection,$query);
?>
<script type="text/javascript">
    alert("category deleted");
    window.location.href="managecategory.php";
</script>