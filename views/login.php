<?php
<<<<<<< HEAD
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

=======
echo "<!doctype html>\n";
echo "<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1\" crossorigin=\"anonymous\">\n";
echo "<link href='https://fonts.googleapis.com/css?family=Roboto Slab' rel='stylesheet'>\n";
echo "<html lang=\"en\">\n";
echo "    <head>\n";
echo "        <link rel=\"stylesheet\" href=\"../css/style.css\">\n";
echo "        <meta charset=\"utf-8\">\n";
echo "        <title>Elemini</title>\n";
echo "        \n";
echo "        <link rel=\"shortcut icon\" href=\"favicon.ico\">\n";
echo "        <script src = \"Registration and Login Check.js\"></script>\n";
echo "    </head>\n";
echo "    <body>\n";
include 'menubar.php';
/*
echo "        <ul>\n";
echo "            <li><a href=\"#home\">\n";
echo "                <img id=\"logo\" src=\"../images/uvsase_darkbg_logomark-e1503005399285.png\" alt=\"UVSASE Logo\"width=25>\n";
echo "            </a></li>\n";
echo "            <li><a href=\"#home\">ELEMINI</a></li>\n";
echo "            <li style=\"float:right\"><a  href=\"sign_in.html\">Register</a></li>\n";
echo "            <li style=\"float:right\"><a class=\"active\" href=\"login.html\">Login</a></li>\n";
echo "        </ul>\n";*/
echo "    \n";
echo "        <div class=\"container\">\n";
echo "            <div class=\"container-child\">\n";
echo "                <form>\n";
echo "                    <fieldset>\n";
echo "                        <legend>Login</legend>\n";
echo "                        <label for=\"email\"><b>Email: </b><span >*</span></label><br>\n";
echo "                        <input type=\"text\" placeholder=\"Enter Email\" name=\"email\" id=\"email\" class=\"general-input\"required><br>\n";
echo "                        <label for=\"psw\"><b>Password: </b><span >*</span></label><br>\n";
echo "                        <input type=\"password\" placeholder=\"Enter Password\" name=\"psw\" id=\"psw\" class=\"general-input\" required><br>\n";
echo "                        <button type=\"submit\" id=\"checks\" class=\"but\">Login</button><br>\n";
echo "                        <!--<label for=\"checkbox\"class=\"login\">\n";
echo "                            <input type=\"checkbox\" checked=\"checked\" name=\"remember\">Remember me\n";
echo "                        </label>-->\n";
echo "                        <p style= \"margin-top:7%; margin-bottom:25%;\">Don't have an account? <a href=\"sign_in.php\">Register</a>.</p>\n";
echo "                    </fieldset>\n";
echo "                    \n";
echo "            </div>\n";
echo "    \n";
echo "            </form>\n";
echo "            <div class=\"container-child\">\n";
echo "                <img id=\"poster\" src=\"../images/elemini_poster.png\" alt=\"Elemini poster\" width=\"100%\" height=\"480px\" >\n";
echo "            </div> \n";
echo "        </div>   \n";
echo "        \n";
echo "        \n";
echo "          \n";
echo "    </body>\n";
echo "</html>";

?>
>>>>>>> 7594cbd3922fd626a125c1473e428d68d7c36952
