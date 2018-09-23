<? php 
  include('server.php'); 
  include ('includes/head.php');
  include ('includes/navigation.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link href="css/login.css" type="text/css" rel="stylesheet">
</head>
<title>Login</title>
<body>

    <div class="wrapper">
        <form class="form-signin" method="login.php">       
          <h2 class="form-signin-heading">Login Here.</h2>
          <? php include('errors.php')?>
          <input type="text" class="form-control" name="username" placeholder="Email Address" required="" autofocus="" />
          <br>
          <input type="password" class="form-control" name="password" placeholder="Password" required=""/>      
          <label class="checkbox">
            <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Remember me
          </label>
            <input type="submit" value="login" name="login">
          <p> <a href="#">Forgot Password?</a> Don't have an account ? <a href="Registration.php">Register. </a> </p> 
        </form>
    </div>
</body>
</html>