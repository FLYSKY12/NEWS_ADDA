<?php
/*if((!isset($_POST['signup_submit'])) and (!isset($_POST['login_submit'])))
{
  die("bhak saale");
}*/
if(isset($_POST['signup_submit']))
{
    	/*echo "Data Received...";*/
    	print_r($_POST);
    	/*echo '<hr color="red">';
    	echo '<hr color="red">';
    	print_r($_POST);*/
        require("connection.php");
      $con = connect("news_adda");
      //echo con;
     // $_POST = validate($con,$_POST);
      $name = test_input($_POST["user_name"]);
      $password = test_input($_POST["password"]);
      $Email = test_input($_POST["email"]);
      $First = test_input($_POST["first_name"]);
      $Last = test_input($_POST["last_name"]);
      $query = "SELECT * FROM user_signup where username='$name' or email = '$Email'";
      $res=mysqli_query($con,$query);
      if(mysqli_num_rows($res) > 0)
      {
            die ("username already exists or email already exists");
      }
      else
      {
          $query = "INSERT INTO user_signup VALUES ('$name','$Email','$password','$First','$Last')";
          if(mysqli_query($con,$query))
          {
              echo "succesfull";
              session_start();

              $_SESSION['user_name'] = $name;
              $_SESSION['password']=$password;
              $_SESSION['email'] = $Email;
               $_SESSION['first_name'] = $First;
                $_SESSION['last_name'] = $Last;
              print_r($_SESSION);
              header("Location:home.php");
          }
          else
          {
              die("not successful");
          }
      }
}
else if(isset($_POST['submit'])){
    print_r($_POST);
    echo "cool";
      require("connection.php");
        $con = connect("news_adda");
        $name = test_input($_POST["user_name"]);
      $password = test_input($_POST["pwd"]);
          $query = "SELECT * from user_signup WHERE username = '$name' and password = '$password' ";
            $res = mysqli_query($con,$query);
          if(mysqli_num_rows($res)>0)
          {
              session_start();
              $_SESSION['user_name'] = $name;
              $_SESSION['password']=$password;
              header("Location:home.php");
              print_r($_SESSION);
          }
            else {
            echo mysqli_num_rows($res);
              die("Invalid username or password . Try again");
            }

}





function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  if($data == ""){
    die("invalid credentials");
  }
  return $data;
}
?>