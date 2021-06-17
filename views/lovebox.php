<?php
echo "<!DOCTYPE html>\n";
echo "<html lang=\"en\">\n";
echo "<head>\n";
echo "    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\"\n";
echo "    integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">\n";
echo "    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.css\">\n";
echo "    <link rel=\"stylesheet\" href=\"../css/lovebox.css\">\n";
echo "    <link rel=\"stylesheet\" href=\"../css/style.css\">\n";
echo "\n";
echo "    <meta charset=\"UTF-8\">\n";
echo "    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\n";
echo "\n";
echo "    <title>Lovebox - Elemini 2021</title>\n";
echo "</head>\n";
echo "<body>\n";
include 'menubar.php';
/*
echo "    <!-- nav bar by Shreya -->\n";
echo "    <ul id=\"header\">\n";
echo "        <li><a href=\"#home\">\n";
echo "            <img id=\"logo\" src=\"../images/uvsase_darkbg_logomark-e1503005399285.png\" alt=\"UVSASE Logo\"width=25>\n";
echo "        </a></li>\n";
echo "        <li><a class=\"navHeader\" href=\"#home\">ELEMINI</a></li>\n";
echo "        <li style=\"float:right\"><a  href=\"sign_in.html\">Register</a></li>\n";
echo "        <li style=\"float:right\"><a class=\"active\" href=\"login.html\">Login</a></li>\n";
echo "    </ul>\n";*/
echo "\n";
echo "    <div class=\"top\">\n";
echo "    <!-- Title -->\n";
echo "    <h1 class=\"pageHeader\">Lovebox Confessions</h1>\n";
echo "\n";
echo "    <!-- Input Form -->\n";
echo "    <form>\n";
echo "        <div class=\"form-row\">\n";
echo "          <div class=\"col\">\n";
echo "            <label>To:</label>\n";
echo "            <input type=\"text\" class=\"form-control\" placeholder=\"Who is this for?\" required>\n";
echo "          </div>\n";
echo "          <div class=\"col\">\n";
echo "            <label>From:</label>\n";
echo "            <input type=\"text\" class=\"form-control\" placeholder=\"What is your name?\" required>\n";
echo "          </div>\n";
echo "        </div>\n";
echo "        <div class=\"form-group\">\n";
echo "            <label>Message</label>\n";
echo "            <textarea class=\"form-control\" rows=\"4\" placeholder=\"Your heartfelt message that's probably about feet...\" required>
?>