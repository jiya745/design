
<?php
$server="localhost";
    $user="root";
    $password="";
    $db="polymath";
$connection=mysqli_connect($server,$user,$password,$db);
if($connection)
{
    echo"connection successful ";
}
    else
    {
        echo"connection failed";
    }
?>
