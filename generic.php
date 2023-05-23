<?php
define ("GALAXY1_NAME", 'Brown Bobby');
define ("GALAXY2_NAME", 'Fried Egg (Dev)');
define ("GALAXY3_NAME", 'Forge');

define ("GALAXY1_IMG", 'gfx/ngc7742.jpg');
define ("GALAXY2_IMG", 'gfx/m64.jpg');
define ("GALAXY3_IMG", 'gfx/m64.jpg');

define ("GALAXY1_BG", 'gfx/ngc7742bg.jpg');
define ("GALAXY2_BG", 'gfx/m64bg.jpg');
define ("GALAXY3_BG", 'gfx/m64bg.jpg');

define('GAME_EXE', 'index.php');

include('locale.php');
include('game/include/global.php');
include('game/include/sql.php');
include('game/include/functions.php');

$db_name = '';
$db_user = '';
$db_password = '';

error_reporting(E_ALL);

function display_message($header,$message,$bg) {
    global $main_html;
    $main_html .= '
<table align="center" border="0" cellpadding="2" cellspacing="2" width="500" class="border_grey" style=" background-color:#000000; background-position:left; background-repeat:no-repeat;">
  <tr>
    <td width="100%">
      <center><span class="sub_caption">'.$header.'</span></center>
      <table width="100%" border="0" cellpadding="0" cellspacing="0" style=" background-image:url(\''.$bg.'\'); background-position:left; background-repeat:yes;">
        <tr>
          <td width="100%" valign="top"><span class="sub_caption2"><br>'.$message.'<br><br></span></td>
        </tr>
      </table>
    </td>
  </tr>
</table>';
}

function send_mail($myname, $myemail, $contactname, $contactemail, $subject, $message) {
    $headers = 'MIME-Version: 1.0'.NL.
               'Content-type: text/plain; charset=iso-8859-1'.NL.
               'X-Priority: 1'.NL.
               'X-MSMail-Priority: High'.NL.
               'X-Mailer: php'.NL.
               'From: "'.$myname.'" <'.$myemail.'>'.NL;

    return mail('"'.$contactname.'" <'.$contactemail.'>', $subject, $message, $headers);
}


$db = new sql($config['server'].":".$config['port'], $config['game_database'], $config['user'], $config['password']); // create sql-object for db-connection

$action = htmlspecialchars((!empty($_GET['a'])) ? $_GET['a'] : 'home');

$title_html = 'Star Trek - Galaxy War';
$meta_descr = 'STGW is a free browser based multi-player game by playing the role of different races and peoples of the universe and rewrite history.';
$main_html = '';

if(strstr($action, '.')) {
    $main_html = '<br><br><center><span style="font-size: 20px;">Die ausgew&auml;hlte Seite "'.$action.'" existiert nicht.</span></center><br><br>';
}

if(!file_exists('pages/'.$action.'.php')) {
    $main_html = '<br><br><center><span style="font-size: 20px;">Die ausgew&auml;hlte Seite "'.$action.'" existiert nicht.</span></center><br><br>';
}
else
    include('pages/'.$action.'.php');

//News
$sql = ' SELECT *
         FROM page_news
         ORDER BY date DESC
         LIMIT 0, 2';

if(($q_news = $db->query($sql)) === false) {
    $news_html = $locale['nonews'].'<br><br><img src="./gfx/header_newsitem.jpg"><br><br>';
}
else {
    $news_html = '';

    while($news = $db->fetchrow($q_news)) {
        $news_day = (int)gmdate('d', $news['date']);
        $today = (int)gmdate('d', time());

        if($news_day == $today) {
            $date_str = $locale['today'].', '.gmdate('H:i', $news['date']);
        }
        elseif($news_day == ($today - 1)) {
            $date_str = $locale['yesterday'].', '.gmdate('H:i', $news['date']);
        }
        else {
            $date_str = gmdate('d.m.y', $news['date']);
        }

        $news_html .= '<span style="font-size: 10px;">'.$date_str.'</span><br><a href="index.php?a=news&show='.$news['id'].'"><b>'.$news['header'].'</b></a><br><br>';
    }
}
//Ende News

?>

<!DOCTYPE HTML>
<!--
	Stellar by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Star Trek &#149; Galaxy War</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<h1><a href="index.php">Star Trek &#149; Galaxy War</a></h1>
						<p>Forsche, treibe Handel oder führe Krieg!<br />
						Alles liegt in Deiner Hand.</p>
					</header>

				<!-- Main -->
					<div id="main">

						<!-- Content -->
							<section id="content" class="main">
								<!--<span class="image main"><img src="images/small_logo.png" alt="" /></span>-->
								<!--<h2>Magna feugiat lorem</h2>-->
								<p><?php echo $main_html; ?></p>
							</section>

					</div>

                               <!-- Footer -->
                                        <footer id="footer">
                                                <section>
                                                        <h2>FAQ/Hilfe</h2>
                                                        <p>Unter folgendem Link findest Du Hilfe bei allgemeinen Fragen zum Spiel
                                                        und eine FAQ Sammlung.</p>
                                                        <ul class="actions">
                                                                <li><a href="generic.php?a=faq" class="button">Hilf mir!</a></li>
                                                        </ul>
                                                </section>
                                                <section>
                                                        <h2>Impressum</h2>
                                                        <dl class="alt">
                                                                <dt>Name:</dt>
                                                                <dd>Tobias Mundinger</dd>
                                                                <dt>E-Mail:</dt>
                                                                <dd><a href="#">saboti@protonmail.com</a></dd>
                                                        </dl>
                                                        <!--<ul class="icons">
                                                                <li><a href="#" class="icon brands fa-twitter alt"><span class="label">Twitter</span></a></li>
                                                                <li><a href="#" class="icon brands fa-facebook-f alt"><span class="label">Facebook</span></a></li>
                                                                <li><a href="#" class="icon brands fa-instagram alt"><span class="label">Instagram</span></a></li>
                                                                <li><a href="#" class="icon brands fa-github alt"><span class="label">GitHub</span></a></li>
                                                                <li><a href="#" class="icon brands fa-dribbble alt"><span class="label">Dribbble</span></a></li>
                                                        </ul>-->
                                                </section>
                                                <p class="copyright">&copy; Saboti. Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
                                        </footer>

                        </div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
		<!-- STGW Scripts -->
			<script>
			document.addEventListener("touchstart", function() {},false);
			
					function contractall(){
					if (document.getElementById){
					var inc=0
					while (document.getElementById("dropmsg"+inc)){
					document.getElementById("dropmsg"+inc).style.display="none"
					inc++
					}
					}
					}
			
			
					function expandone(){
					if (document.getElementById){
					var selectedItem=document.register.user_race.selectedIndex
					contractall()
					document.getElementById("dropmsg"+selectedItem).style.display="block"
					}
					}
			
					if (window.addEventListener)
					window.addEventListener("load", expandone, false)
					else if (window.attachEvent)
					window.attachEvent("onload", expandone)
			
					function myFunction() {
					var x = document.getElementById("myTopnav");
					if (x.className === "topnav") {
						x.className += " responsive";
					} else {
						x.className = "topnav";
					}
					}
			</script>
			<script type="text/JavaScript" src="overlib.js"></script>

	</body>
</html>
