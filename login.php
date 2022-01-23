<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <title>login.php</title>
</head>
<body>
 

    
      

  <div class="container">
  <form class="form-signin" method="POST">
    <h2>Login</h2> 
    <input type="text" name="username" class="form-control" placeholder="Username" required>
    <input type="password" name="password" class="form-control" placeholder="Password" required>
    <button class="btn btn-lg btn-primary btn-block">Login</button> <br>
    <a href="index.php" class="btn btn-lg btn-primary btn-block">Registration</a>
  </form>   </div>

  <?php
  session_start();
    require ('connect.php');

    if(isset($_POST['username']) and isset($_POST['password'])){ /* isset- проверить Если эти данные введены  */
      $username = $_POST['username'];// то в переменную вносим введенные данные
      $password = md5($_POST['password']);
      $query = "SELECT* FROM `users` WHERE `username`='$username' and `password`='$password' ";
      $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
      $count= mysqli_num_rows($result);
      if ($count == 1) {
        $_SESSION ['username'] = $username;
        }else{
          $fmsg  = "Ошибка";
        }}
        if (isset($_SESSION['username'])){
          $username = $_SESSION['username'];
          echo "Hello " . $username . "";
          echo "Вы вошли";
          echo "<a href='logout.php' class='btn, btn-lg btn-prymary'> Logout </a>";
        }
  ?>

</body>
</html>