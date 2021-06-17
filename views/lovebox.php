<?php
echo "<!DOCTYPE html>";
echo "<html lang=\"en\">";
echo "<head>";
echo "<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\"";
echo "integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">";
echo "<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.css\">";
echo "<link rel=\"stylesheet\" href=\"../css/lovebox.css\">";
echo "<link rel=\"stylesheet\" href=\"../css/style.css\">";
echo "<meta charset=\"UTF-8\">";
echo "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">";
echo "<title>Lovebox - Elemini 2021</title>";
echo "</head>";
echo "<body>";
include 'menubar.php';
/*
echo "<!-- nav bar by Shreya -->";
echo "<ul id=\"header\">";
echo "<li><a href=\"#home\">";
echo "<img id=\"logo\" src=\"../images/uvsase_darkbg_logomark-e1503005399285.png\" alt=\"UVSASE Logo\"width=25>";
echo "</a></li>";
echo "<li><a class=\"navHeader\" href=\"#home\">ELEMINI</a></li>";
echo "<li style=\"float:right\"><a  href=\"sign_in.html\">Register</a></li>";
echo "<li style=\"float:right\"><a class=\"active\" href=\"login.html\">Login</a></li>";
echo "</ul>";*/
echo "<div class=\"top\">";
echo "<!-- Title -->";
echo "<h1 class=\"pageHeader\">Lovebox Confessions</h1>";
echo "<!-- Input Form -->";
echo "<form>";
echo "<div class=\"form-row\">";
echo "<div class=\"col\">";
echo "<label>To:</label>";
echo "<input type=\"text\" class=\"form-control\" placeholder=\"Who is this for?\" required>";
echo "</div>";
echo "<div class=\"col\">";
echo "<label>From:</label>";
echo "<input type=\"text\" class=\"form-control\" placeholder=\"What is your name?\" required>";
echo "</div>";
echo "</div>";
echo "<div class=\"form-group\">";
echo "<label>Message</label>";
echo "<textarea class=\"form-control\" rows=\"4\" placeholder=\"Your heartfelt message that\"s probably about feet...\" required></textarea>";
echo "</div>";
echo "</form>";
echo "<img class=\"grass\" src=\"../images/grasswsign.png\" alt=\"grass\">";
echo "</div>";

echo "<div class=\"bottom\">";
echo "<!-- Card Masonry-like Body -->";
echo "<!-- Plan: dynamicaly add new cards based on table -->";
echo "<div id=\"masonry\" class=\"card-columns\">";
echo "<div class=\"card text-center\">";
echo "<div class=\"card-body\">";
echo "<h5 class=\"card-title\">To: Arrurr</h5>";
echo "<p class=\"card-text\">ggnore</p>";
echo "<p class=\"card-text\">";
echo "<small class=\"text-muted\">From: Arieeees</small>";
echo "<i class=\"far fa-heart\"></i>";
echo "</p>";
echo "</div>";
echo "</div>";

echo "<div class=\"card text-center\">";
echo "<div class=\"card-body\">";
echo "<h5 class=\"card-title\">To: Card title1</h5>";
echo "<p class=\"card-text\">“You lift me up and hold me down, you make me smile when I’m feeling down. You bring me peace, you bring me gifts, you’re the person I’m most happy to share my life with. I love you now until the end of time. I hope you’ll appreciate my attempted rhyme.”</p>";
echo "<p class=\"card-text\"><small class=\"text-muted\">From: 2cute4u</small></p>";
echo "</div>";
echo "</div>";

echo "<div class=\"card text-center\">";
echo "<div class=\"card-body\">";
echo "<h5 class=\"card-title\">To: Card title</h5>";
echo "<p class=\"card-text\">This card has supporting text below as a natural lead-in to additional content.</p>";
echo "<p class=\"card-text\"><small class=\"text-muted\">From: bb baby</small></p>";
echo "</div>";
echo "</div>";

echo "<div class=\"card text-center\">";
echo "<div class=\"card-body\">";
echo "<h5 class=\"card-title\">To: Arrurr</h5>";
echo "<p class=\"card-text\">Get gud ggnore</p>";
echo "<p class=\"card-text\"><small class=\"text-muted\">From: Arieeees</small></p>";
echo "</div>";
echo "</div>";

echo "<div class=\"card text-center\">";
echo "<div class=\"card-body\">";
echo "<h5 class=\"card-title\">To: Test Name</h5>";
echo "<p class=\"card-text\">“The minute I heard my first love story, I started looking for you, not knowing how blind that was. Lovers don’t finally meet somewhere. They’re in each other all along.” – Rumi</p>";
echo "<p class=\"card-text\"><small class=\"text-muted\">From: Test Name 2</small></p>";
echo "</div>";
echo "</div>";
echo "<div class=\"card text-center\">";
echo "<div class=\"card-body\">";
echo "<h5 class=\"card-title\">To: Card title</h5>";
echo "<p class=\"card-text\">This card has supporting text below as a natural lead-in to additional content.</p>";
echo "<p class=\"card-text\"><small class=\"text-muted\">From: pp baby</small></p>";
echo "</div>";
echo "</div>";

echo "<div class=\"card text-center\">";
echo "<div class=\"card-body\">";
echo "<h5 class=\"card-title\">To: Card title1</h5>";
echo "<p class=\"card-text\">“I can’t sing, but your love makes me want to get up on the rooftop and belt it to the world how much you mean to me.”</p>";
echo "<p class=\"card-text\"><small class=\"text-muted\">From: 2cute4u</small></p>";
echo "</div>";
echo "</div>";

echo "<div class=\"card text-center\">";
echo "<div class=\"card-body\">";
echo "<h5 class=\"card-title\">To: Card title1</h5>";
echo "<p class=\"card-text\">“You lift me up and hold me down, you make me smile when I’m feeling down. You bring me peace, you bring me gifts, you’re the person I’m most happy to share my life with. I love you now until the end of time. I hope you’ll appreciate my attempted rhyme.”</p>";
echo "<p class=\"card-text\"><small class=\"text-muted\">From: 2cute4u</small></p>";
echo "</div>";
echo "</div>";

echo "<div class=\"card text-center\">";
echo "<div class=\"card-body\">";
echo "<h5 class=\"card-title\">To: Card title</h5>";
echo "<p class=\"card-text\">“I can’t sing, but your love makes me want to get up on the rooftop and belt it to the world how much you mean to me.”</p>";
echo "<p class=\"card-text\"><small class=\"text-muted\">From: bb baby</small></p>";
echo "</div>";
echo "</div>";

echo "<div class=\"card text-center\">";
echo "<div class=\"card-body\">";
echo "<h5 class=\"card-title\">To: Test Name</h5>";
echo "<p class=\"card-text\">“The minute I heard my first love story, I started looking for you, not knowing how blind that was. Lovers don’t finally meet somewhere. They’re in each other all along.” – Rumi</p>";
echo "<p class=\"card-text\"><small class=\"text-muted\">From: Test Name 2</small></p>";
echo "</div>";
echo "</div>";
echo "</div>";
echo "</div>";

echo "<!-- End of Masonry-like Body -->";
echo "</body>";
echo "</html>";
?>