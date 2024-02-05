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
                        <input type="checkbox" id="rememberme" name=RememberMe>
                        <label for="rememberme">Remember me</label>
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
     $servername="host";
     $username="user";
      $password ="password";
      $dbname="name";

      $conn = new mysqli($servername, $username, $password, $dbname);

      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['create'])) {
            $Name = $_POST['Name'];
            $Email = $_POST['Email'];
            $RememberMe = isset($_POST['RememberMe']) ? $_POST['RememberMe'] : '';
            $Password = password_hash($_POST['Password'], PASSWORD_DEFAULT);
    
            $sql = "INSERT INTO users (Name, Email, RememberMe, Password) VALUES ('$Name', '$Email', '$RememberMe', '$Password')";
            if ($conn->query($sql) === TRUE) {
                echo "Useri u krye me sukses!";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }

        if (isset($_POST['login'])) {
            $LoginEmail = $_POST['LoginEmail'];
            $LoginPassword = $_POST['LoginPassword'];
            $RememberMe = isset($_POST['RememberMe']) ? $_POST['RememberMe'] : '';
    
            $sql = "SELECT * FROM users WHERE Email = '$LoginEmail'";
            $result = $conn->query($sql);
    
            if ($result->num_rows > 0) {
                $user = $result->fetch_assoc();
    
                if (password_verify($LoginPassword, $user['Password'])) {
                    echo "Login successful!";
    
                } else {
                    echo "Invalid password!";
                }
            } else {
                echo "User not found!";
            }
        }
    }
    
?>
