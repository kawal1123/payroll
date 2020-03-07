<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="css/style.css">
    
 
   

</head>


<body class="hold-transition login-page">
<?php
  require('db.php');
  session_start();
    // If form submitted, insert values into the database.
    if (isset($_POST['submit']))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $query = "SELECT * FROM `log` WHERE username='$username' and password='$password'";
        $result = mysqli_query($connection,$query);
        $rows = mysqli_num_rows($result);
        if($rows==1)
        {
          $_SESSION['username'] = $username;
          header("Location: index.php");
        }
            $query = "SELECT * FROM `staffinfo` WHERE username='$username' and password='$password'";
            $result = mysqli_query($connection,$query);
            $rows = mysqli_num_rows($result);
            if($rows==1)
            {
              $_SESSION['uname'] = $username;
              header("Location: userInfo.php");
            }
            else
            {
              ?>
              <script>
                alert('Invalid Keyword, please try again.');
                window.location.href='login.php';
              </script>
              <?php
            }
    }
    else
    {
?>


<div class="pen-title" style="margin-top:-100px;">
</div>
<div class="container">
  <div class="card"></div>
  <div class="card">
    <h1 class="title">Login</h1>
    <form method="POST">
      <div class="input-container">
        <input type="text" id="username" required="required" name="username"/>
        <label for="username">Username</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="password" id="password" required="required" name="password"/>
        <label for="password">Password</label>
        <div class="bar"></div>
      </div>
      <div class="button-container" >
        <button type="submit" name="submit"><span>Go</span></button>
      </div>
      <div class="footer">
        <!-- <a href="#">Forgot your password?</a> -->
      </div>
    </form>
  </div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    <script  src="js/index.js"></script>



<?php } ?>


  </body>
</html>