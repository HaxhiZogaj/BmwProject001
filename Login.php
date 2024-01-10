<html>
<head>
    <title>Bmw Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="wrapper">
        <div class="headline">
            <h1>BMW for you</h1>
        </div>
        <form class="form" method="post" action="Login.php">
            <div class="signup">
                <div class="form-group">
                    <label for="Name">Name</label>
                    <input type="text" name="Name" placeholder="Full name" required="">
                </div>
                <div class="form-group">
                    <label for="Email">Email</label>
                    <input type="email" name="Email" placeholder="Email" required="">
                </div>
                <div class="form-group">
                    <label for="Password">Password</label>
                    <input type="password" name="Password" placeholder="Password" required="">
                </div>
                <button type="submit" name="create" class="btn">SIGN UP</button>
                <div class="account-exist">
                    Already have an account? <a href="#" id="login">Login</a>
                </div>
            </div>
            <div class="signin"> 
                <div class="form-group">
                    <label for="LoginEmail">Email</label>
                    <input type="email" name="LoginEmail" placeholder="Email" required="">
                </div>
                <div class="form-group">
                    <label for="LoginPassword">Password</label>
                    <input type="password" name="LoginPassword" placeholder="Password" required="">
                </div>
                <div class="forget-password">
                    <div class="check-box">
                        <input type="checkbox" id="checkbox">
                        <label for="checkbox">Remember me</label>
                    </div>
                    <a href="#">Forget password?</a>
                </div>
                <button type="submit" name="login" class="btn">LOGIN</button>
                <div class="account-exist">
                    Create New a account? <a href="#" id="signup">Signup</a>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
<?php
  
  if(isset($_POST['create'])){
    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $RememberMe = $_POST['RememberMe'];
    $Password = $_POST['Password'];

    echo "Name:  $Name <br>";
    echo "Email: $email <br>";
    echo "RememberMe: $RememberMe <br>";
    echo "Password: $Password <br>";
  }

  if(isset($_POST['login'])){
    $LoginEmail = $_Post['LoginEmail'];
    $LoginPassword = $_POST['LoginPassword'];


    echo "Login Email:  $LoginEmail <br>";
    echo "Login Password: $LoginPassword";
  }

?>
