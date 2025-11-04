<?php
$connection = new mysqli('localhost', 'root', '201734', 'auth', 3306);
if ($connection->connect_error) {
    echo "there is an error in connecting to database";
    die();
}
echo "database is connected";



if($_SERVER['REQUEST_METHOD']=='GET'){
    if(isset($_GET['token']))
    {
        $usertoken=$_GET['token'];
        $sql="select * from users where token='$usertoken'";
        $result=mysqli_query($connection,$sql);
        if($result->num_rows==0)
        {
            echo "<script>alert('Token is invalid')</script>";
            exit();
        }
        while($dbtoken=mysqli_fetch_assoc($result))
        {
            $userdata=$dbtoken;
            $sql="update users set is_verified='1', token='null' where id={$userdata['id']}";
            $result=mysqli_query($connection,$sql);
            if($result)
            {
                echo "<script>alert('Email is verified!')</script>";
            }
        }
        
    }
    else{
        echo "<script>alert('You cannot access this file')</script>";
        header('Location:index.php');
    }
}
else
{
    header('Location:index.php');
}


?>