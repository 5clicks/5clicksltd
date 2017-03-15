<?php
function curPageURL() {
 $pageURL = 'http';
 //if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
 $pageURL .= "://";
 if ($_SERVER["SERVER_PORT"] != "80") {
  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
 } else {
  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
 }
 return $pageURL;
}
$currentPage = curPageURL();
$filename = basename($_SERVER['REQUEST_URI']);
$web = 'http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']);
?>

<!-- Header
    ======================================================================== -->
    <div id="header" class="container">

        <!-- Logo -->
        <a href="index.php" id="logo"><img src="images/logo2.png"></a>

        <!-- Navigation -->
        <ul id="navigation">
            <li <?php $myWeb = $web."/index.php"; if($currentPage == $myWeb) {echo "class='current'";}else{ echo "";} ?>>
                <a href="index.php">Home</a>
            </li>
            <li <?php $myWeb = $web."/about.php"; if($currentPage == $myWeb) {echo "class='current'";}else{ echo "";} ?>>
                <a href="about.php">About Us</a>
            </li>
            <li <?php $myWeb = $web."/services.php"; if($currentPage == $myWeb) {echo "class='current'";}else{ echo "";} ?>>
                <a href="services.php">Services</a>
                <ul>
                    <li<?php $myWeb = $web."/services.php"; if($currentPage == $myWeb) {echo "class='current'";}else{ echo "";} ?>>
                        <a href="services.php">All Services</a>
                    </li>
                    <li<?php $myWeb = $web."/services.php"; if($currentPage == $myWeb) {echo "class='current'";}else{ echo "";} ?>>
                        <a href="hosting.php">Web Hosting</a>
                    </li>
                </ul>
            </li>
            <li <?php $myWeb = $web."/portfolio.php"; if($currentPage == $myWeb) {echo "class='current'";}else{ echo "";} ?>>
                <a href="portfolio.php">Portfolio</a>
            </li>
            <li <?php $myWeb = $web."/contact.php"; if($currentPage == $myWeb) {echo "class='current'";}else{ echo "";} ?>>
                <a href="contact.php">Contact Us</a>
            </li>
        </ul>
        <!-- Navigation / End -->
        
    </div>
    <!-- Header / End -->