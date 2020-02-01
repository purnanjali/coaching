<?php
  $error ='';
  if(isset($_POST['submit'])){
    if(empty($_POST['username']) || empty($_POST['password'])){
      $error="username or password should not be empty";

    }
    else{
      $user = $_POST['username'];
      $pass =$_POST['password'];
      //connection
$conn = mysqli_connect("localhost","root","");
$db = mysqli_select_db($conn, "register");
//query
$query=mysqli_query($conn," SELECT * from register Where password='$pass' AND username='$user'");
$rows =mysqli_num_rows($query);
if($rows==1){
  echo "1";

}
else{
  echo "2";

}
mysqli_close($conn);

}
}

?>
