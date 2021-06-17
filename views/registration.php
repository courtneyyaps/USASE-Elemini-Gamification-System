<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "elemini");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security
$firstName = mysqli_real_escape_string($link, $_REQUEST['firstName']);
$lastName = mysqli_real_escape_string($link, $_REQUEST['lastName']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$psw = mysqli_real_escape_string($link, $_REQUEST['psw']);



// Attempt insert query execution
$sql = "INSERT INTO users (firstName, lastName, email, password) VALUES ('$firstName', '$lastName', '$email', '$psw')";


if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 include('registration.php');
// Close connection
mysqli_close($link);



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
            <li style="float:right"><a class="active" href="sign_up">Register</a></li>
            <li style="float:right"><a  href="login.html">Login</a></li>
        </ul>
    
        <div class="container">
            <div class="container-child">
                <form action="registration.php" method="post">
                    <fieldset>
                        <legend>Register</legend>
                        <label for="text"><b>First Name: </b><span >*</span></label>
                        <label for="text" style="margin-left:26%"><b>Last Name: </b><span >*</span></label><br>
                        <input type="text" placeholder="First Name" name="firstName" id="firstName" class="name-input"required>
                        
                        <input type="text" placeholder="Last Name" name="lastName" id="lastName" class="name-input"required><br>
                        <label for="email"><b>Email: </b><span >*</span></label><br>
                        <input type="text" placeholder="Enter Email" name="email" id="email" class="general-input"required><br>
                        <label for="psw"><b>Password: </b><span >*</span></label><br>
                        <input type="password" placeholder="Enter Password" name="psw" id="psw" class="general-input" required><br>
                        <button type="submit" id="checks" class="but">Sign Up</button><br>
                        <!--<label for="checkbox"class="login">
                            <input type="checkbox" checked="checked" name="remember">Remember me
                        </label>-->
                        <p style= "margin-top:7%; margin-bottom:10%;">Already have an account? <a href="login.html">Login</a>.</p>
                    </fieldset>
                    
            </div>
    
            </form>
            <div class="container-child">
                <img id="poster" src="../images/elemini_poster.png" alt="Elemini poster" width="100%" height="480px" >
            </div> 
        </div>   
        
        
          
    </body>
</html>