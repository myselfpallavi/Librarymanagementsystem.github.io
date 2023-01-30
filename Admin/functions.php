<?php
    function get_user_count(){
        $connection= mysqli_connect("localhost","root","");
        $db=mysqli_select_db($connection,"lms");
        $user_count="";
        $query="select count(*) as user_count from users ";
        $query_run=mysqli_query($connection,$query);
        while($row=mysqli_fetch_assoc($query_run))
        {
            $user_count=$row['user_count'];
        }
        return($user_count);
    }
    function get_book_count(){
        $connection= mysqli_connect("localhost","root","");
        $db=mysqli_select_db($connection,"lms");
        $book_count="";
        $query="select count(*) as user_count from books ";
        $query_run=mysqli_query($connection,$query);
        while($row=mysqli_fetch_assoc($query_run))
        {
            $book_count=$row['user_count'];
        }
        return($book_count);
    }
    function get_cat_count(){
        $connection= mysqli_connect("localhost","root","");
        $db=mysqli_select_db($connection,"lms");
        $cat_count="";
        $query="select count(*) as cat_count from categories";
        $query_run=mysqli_query($connection,$query);
        while($row=mysqli_fetch_assoc($query_run))
        {
            $cat_count=$row['cat_count'];
        }
        return($cat_count);
    }
    function get_author_count(){
        $connection= mysqli_connect("localhost","root","");
        $db=mysqli_select_db($connection,"lms");
        $author_count="";
        $query="select count(*) as author_count from author";
        $query_run=mysqli_query($connection,$query);
        while($row=mysqli_fetch_assoc($query_run))
        {
            $author_count=$row['author_count'];
        }
        return($author_count);
    }
    function get_issuedbook_count(){
        $connection= mysqli_connect("localhost","root","");
        $db=mysqli_select_db($connection,"lms");
        $issue_count="";
        $query="select count(*) as issue_count from issuedbook";
        $query_run=mysqli_query($connection,$query);
        while($row=mysqli_fetch_assoc($query_run))
        {
            $issue_count=$row['issue_count'];
        }
        return($issue_count);
    }
?>