<!DOCTYPE html>
<html>
<head>
    <title>Bmw Login</title>`
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="login.css">
</head>
<body> 
    <div>
    <?php
        if(isset($_POST['create'])){
            $SignUp = $_POST['SignUp'];
            $Login = $_POST['Login'];
            $AlreadyHaveAnAccount = $_POST['AlreadyHaveAnAccount'];
            $RememberMe = $_POST['RememberMe'];
            $ForgetPassword = $_POST['ForgetPassword']; 
            $LOGIN = $_POST['LOGIN'];
            $CreateNewAccount = $_POST['CreateNewAccount'];
            $Signup = $_POST['Signup'];

            echo $SignUp - "" - $LogIn - "" -  $AlreadyHaveAnAccount - "" -$RememberMe - "" - $ForgetPassword - "" -$LOGIN - "" - $CreateNewAccount -"" -$Signup;
        }

        ?>
    </div>
     <div class="wrapper">
         <div class="headline">
             <h1>BMW for you</h1>
         </div>
         <form class="form" method="post" action="#">
            <div class="signup">
                <div class="form-group">
                    <input type="text" placeholder="Full name" required="">
                </div>
                <div class="form-group">
                    <input type="email" placeholder="Email" required="">
                </div>
                <div class="form-group">
                    <input type="password" placeholder="Password" required="">
                </div>
                <button type="submit" class="btn">SIGN UP</button>
                <div class="account-exist">
                    Already have an account? <a href="#" id="login">Login</a>
                </div>
            </div>
            <div class="signin"> 
                <div class="form-group">
                    <input type="email" placeholder="Email" required="">
                </div>
                <div class="form-group">
                    <input type="password" placeholder="Password" required="">
                </div>
                <div class="forget-password">
                    <div class="check-box">
                        <input type="checkbox" id="checkbox">
                        <label for="checkbox">Remember me</label>
                    </div>
                    <a href="#">Forget password?</a>
                </div>
                <button type="submit" class="btn">LOGIN</button>
                <div class="account-exist">
                    Create New a account? <a href="#" id="signup">Signup</a>
                </div>
            </div>
         </form>
     </div>


</body>
</html>