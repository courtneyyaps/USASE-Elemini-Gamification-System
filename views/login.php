<?php
require('database.php');
$email=$_POST['email'];
$password=$_POST['password'];
//$check=$_POST['remember'];
$query="SELECT * FROM users WHERE email='$email' AND password='$password'";
$data=$db->query($query);
if($data->rowCount()>0){
    session_start();
    $_SESSION['email'] = $email;
    $_SESSION['flag']=TRUE;
    
    header('Location:Elemini.html');
    
    if($check=='1'){
        setcookie("mycookie", TRUE, time()+1000);
    }
}
else{
    $err = "Email or Password is incorrect.";
    include('login.php');
}
?>

<!doctype html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<link href='https://fonts.googleapis.com/css?family=Roboto Slab' rel='stylesheet'>
<html lang="en">
    <head>
        <link rel="stylesheet" href="../css/style.css">
        <meta charset="utf-8">
        <title>Elemini</title>
        
        <link rel="shortcut icon" href="favicon.ico">
        <script src = "Registration and Login Check.js"></script>
    </head>
    <body>
        <ul>
            <li><a href="#home">
                <img id="logo" src="../images/uvsase_darkbg_logomark-e1503005399285.png" alt="UVSASE Logo"width=25>
            </a></li>
            <li><a href="#home">ELEMINI</a></li>
            <li style="float:right"><a  href="sign_in.html">Register</a></li>
            <li style="float:right"><a class="active" href="login.html">Login</a></li>
        </ul>
    
        <div class="container">
            <div class="container-child">
                <form>
                    <fieldset>
                        <legend>Login</legend>
                        <label for="email"><b>Email: </b><span >*</span></label><br>
                        <input type="text" placeholder="Enter Email" name="email" id="email" class="general-input"required><br>
                        <label for="psw"><b>Password: </b><span >*</span></label><br>
                        <input type="password" placeholder="Enter Password" name="psw" id="psw" class="general-input" required><br>
                        <button type="submit" id="checks" class="but">Login</button><br>
                        <!--<label for="checkbox"class="login">
                            <input type="checkbox" checked="checked" name="remember">Remember me
                        </label>-->
                        <p style= "margin-top:7%; margin-bottom:25%;">Don't have an account? <a href="sign_in.html">Register</a>.</p>
                    </fieldset>
                    
            </div>
    
            </form>
            <div class="container-child">
                <img id="poster" src="../images/elemini_poster.png" alt="Elemini poster" width="100%" height="480px" >
            </div> 
        </div>   
        
        
          
    </body>
</html>