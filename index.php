<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <title>index.php</title>
</head>
<body>
  <?php
    require ('connect.php');

    if(isset($_POST['username']) and isset($_POST['password'])){ /* sset- проверить Если эти данные введены  */
      $username = $_POST['username'];// то в переменную вносим введенные данные
      $email = $_POST['email'];
      $password = md5($_POST['password']);

      $query = "INSERT INTO `users` (`username`,  `email`, `password`) VALUES ('$username', '$email', '$password')";
      // после в SQL   вносим данные
      $result = mysqli_query($connection, $query);
      // в переменную  result вводим запрос на + на соединение и ввод данных
      if($result){
        $smsg = "Регистрация ок";} // если result ок то 
        else{
          $fsmsg = "Ошбка"; // если нет, то//
      }}?>
  <div class="container">
  <form class="form-signin" method="POST">
    <h2>Registration</h2> 
    <?php if(isset($smsg)){?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div> <?php }?> 
        <?php if(isset($fsmsg)){?><div class="alert alert-danger" role="alert"> <?php echo $fsmsg; ?> </div> <?php }?>
        
    <input type="text" name="username" class="form-control" placeholder="Username" required>
    <input type="email" name="email" class="form-control" placeholder="Email" required>
    <input type="password" name="password" class="form-control" placeholder="Password" required>
    <button class="btn btn-lg btn-primary btn-block">Register</button> <br>
    <a href="login.php" class="btn btn-lg btn-primary btn-block">Login</a>



  </form>   <?php  mysqli_close($connection); ?></div>

</body>
</html>