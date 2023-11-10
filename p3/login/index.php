<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="css/micss.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  </head>
  <body>
    
    <div class="wrapper fadeInDown">
      <div id="formContent">
        <!-- Icon -->
        <div class="fadeIn first">
          <i class="far fa-user fa-5x" style="color: blue;"></i>
        </div>

        <!-- Login Form -->
        <form method="get" action="http://172.18.160.212/servicios/consultas.php">
          <input type="text" class="fadeIn second" name="user" placeholder="user">
          <input type="text" class="fadeIn third" name="pass" placeholder="password">
          <input type="submit" class="fadeIn fourth" value="Log In">
        </form>

        <!-- Remind Passowrd -->
        <div id="formFooter">
          <a class="underlineHover" href="#">Forgot Password?</a>
        </div>

      </div>
    </div>
      
  </body>
</html>
