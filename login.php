<?php
include("connect.php")
?>
<html>
<head>
  <title>Login Page</title>
  <style>
  div {
   background-image: url('6.jpeg');
  }
  </style>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body background="6.jpeg">

    <div class="loginbox" style="max-width:500px">
    <img src="IMAGES/4.png" class="avatar">
    <h1>Login Here</h1>
    <form action="connect.php" method="POST" >
      <p>Username</p>
      <input type="text" name="username" placeholder="Enter Username" required>
      <p>Password</p>
      <input type="password" name="password" placeholder="Enter Password" required><br><br>
      <input type="submit" name="submit" value="Login">
      <a href="#">Lost your password ?</a><br>
      <a href="#">Dont have an account ?</a><br>
      <h6><span>------------Or login by------------</span></h6>
      <a href="#" class="fa fa-facebook"></a>
      <a href="#" class="fa fa-twitter"></a>
      <a href="#" class="fa fa-google"></a><br>
<span>
<?php echo "$error"; ?>
</span>

    </form>
  </div>
</body>
</html>
