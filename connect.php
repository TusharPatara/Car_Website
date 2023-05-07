<?php
$servername="localhost";
$username="root";
$password="";
$database_name="database123";

$conn=mysqli_connect($servername,$username,$password,$database_name);
//now check the connection
if(!$conn)
{
    die("Connection Failed:" . mysqli_connect_error());

}

if(isset($_POST['save']))
{
    $FirstName = $_POST['FirstName'];
    $LastName = $_POST['LastName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $Repassword = $_POST['Repassword'];
    $number = $_POST['number'];

    $sql_query = "INSERT INTO entry_details(FirstName,LastName,email,password,Repassword,number)
    VALUES ('$FirstName', '$LastName', '$email', '$password', '$Repassword', '$number')";

    if (mysqli_query($conn, $sql_query))
    {   
        echo '<script>alert("Data inserted Successfully")</script>';
        header('location: loginform.php');
        
    }
    else
    {
        echo "Error: " . $sql . "" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>