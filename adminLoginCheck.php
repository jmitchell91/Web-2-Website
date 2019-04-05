<?php
//allows access to the database
include ('dbConnection.php');
session_start();

//populates the variables with information for querying authentication information
$user=$_POST['username'];
$password=$_POST['password'];

//Queries the database for matching authentication information
$query = "SELECT Username FROM Web2DB.Users WHERE Username = '$user' AND Password = '$password';";
$result = mysqli_query($connection,$query);

$count = mysqli_num_rows($result);

//checks if the query returned valid user information by counting returned rows
if($count == 1)
{
	//if successful direct to home page
	$_SESSION['login'] = $user;
	header("location: adminHomePage.php");
	exit;
}
else
{
	//else deny access and redirect user back to login
	header("location: adminLoginPage.php");
	exit;
}
?>