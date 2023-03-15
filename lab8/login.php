<?php
include("connect.php");
if(empty($_POST["username"]) || empty($_POST["password"]))
{
    echo"Both fields are required.";
}else
{
    //nect we assign local variable to the parameters passed in via the post
    $username=$_POST['username'];
    $password=$_POST['password'];

    $sql= "SELECT uid FROM users WHERE username='$username' and password= '$password'";

    // we now set up a vairable, result , to hold the result of these two lines run the quary 

    $sqp="SELECT uid FROM users WHERE username='$username' and password='$password'";

    // we now set up vairable, result, to hold the result of the quary. these two lines run the quary and return the result

    $result=mysqli_query($db,$sql);
    //Finally we check how big the results it.
    if(mysqli_num_rows($result)  == 1)
    {
        header("location: home.php");  //redirecting to another page
    }else
    {
        echo "Incorrect username or password.";
    }
}
?>