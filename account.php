<?php
$con=new mysqli("localhost","root","");

if($con->connect_error)
{
  die("can't connect ".$con->connect_error);
}
//creating data bases
$sql="CREATE DATABASE IF NOT EXISTS user_details";
if($con->query($sql)!==TRUE)
{
  echo "<br>Error creating database : ",$con->error;
}

$con=new mysqli("localhost","root","","user_details");

$sql="CREATE TABLE user_details.details(
  name VARCHAR(120),
  email VARCHAR(120),
  password VARCHAR(30)
)";

// if($con->query($sql)!=TRUE)
// {
//     echo "<br>Error creating table : ",$con->error;
// }
// if(isset($_POST['signup']) && isset($_POST['confpassword']) && isset($_POST['password']))
// {
//   $password=$_POST['password'];
//   $confpassword=$_POST['confpassword'];
  // if($password!=$confpassword)
  // {
  //  echo '<script style=color:"red";></script>';
  //   header("Location: signup-1.php");
  // }
// }

if(isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['signup']))
{
    $username=func($con,'username');
    $email=func($con,'email');
    $pass=func($con,'password');
    if(!empty($username) && !empty($email) && !empty($pass))
    {
      $sql="INSERT INTO user_details.details VALUES('".$username."','".$email."','".$pass."')";
      if ($result=$con->query($sql)!=TRUE)
      {
          echo "Insertion failed<br/>";
      }
      echo "<script>
      alert('SIGNUP SUCCESSFUL');
      window.location.href='login-1.php';
      </script>";
    }
}
if(isset($_POST['Login']) && isset($_POST['mail']) && isset($_POST['pass']))
{
  $emailid=func($con,'mail');
  $passw=func($con,'pass');
  $sql="SELECT password FROM user_details.details WHERE email LIKE '$emailid'";
  $result = $con->query($sql);
  $row = $result->fetch_assoc();
  if($row["password"]==$passw)
  {
    echo "<script>
    alert('LOGIN SUCCESSFUL');
    window.location.href='homepage.html';
    </script>";
  }
  else
  {
    echo "<script>
    alert('LOGIN NOT SUCCESSFUL');
    window.location.href='login-1.php';
    </script>";
  }
}
function func($con, $var)
{
	  //To make data safe before sending a query to MySQL
    return $con->real_escape_string($_POST[$var]);
}
?>
