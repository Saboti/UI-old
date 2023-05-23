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

// Stats
for ($t=0; $t<13; $t++)
{
    $r_tmp = $db->queryrow('SELECT COUNT(user_id) AS num FROM user WHERE user_race='.$t.' AND user_auth_level=1');
    $race['racecount_'.$t]=$r_tmp['num'];
}

$t_percent = $db->queryrow('SELECT COUNT(user_id) AS num FROM user WHERE user_auth_level=1');


for ($t=0; $t<13; $t++)
{
    $race['racepercent_'.$t]=round(100/($t_percent['num'])*$race['racecount_'.$t],0);
}

for ($t=0; $t<13; $t++)
{
    $p_tmp = $db->queryrow('SELECT COUNT(planet_id) AS num FROM planets, user WHERE planets.planet_owner = user.user_id AND user.user_auth_level = 1 AND user.user_race='.$t);
    $planet['planetcount_'.$t]=$p_tmp['num'];
}

$p_percent = $db->queryrow('SELECT COUNT(planet_id) AS num FROM planets, user WHERE planet_owner <> 0 AND planets.planet_owner = user.user_id AND user.user_auth_level = 1');

for ($t=0; $t<13; $t++)
{
    $planet['planetpercent_'.$t]=round(100/($p_percent['num'])*$planet['planetcount_'.$t],0);
}

$player_count = $db->queryrow('SELECT COUNT(user_id) AS num FROM user WHERE user_active=1 AND user_auth_level=1');
$player_newreg = $db->queryrow('SELECT new_register AS num FROM config');
$player_online = $db->queryrow('SELECT COUNT(user_id) AS num FROM user WHERE last_active > '.(time() - 60 * 20).' AND user_auth_level=1');
$systems_ingame = $db->queryrow('SELECT COUNT(system_id) AS num FROM starsystems');
$planets_ingame = $db->queryrow('SELECT COUNT(planet_id) AS num, SUM(planet_points) AS points_sum FROM planets');
$alliance_ingame = $db->queryrow('SELECT COUNT(alliance_id) AS num FROM alliance');
$pp_ingame = $db->queryrow('SELECT COUNT(ud_id) AS num FROM user_diplomacy WHERE accepted=1');
$pa_ingame = $db->queryrow('SELECT COUNT(ad_id) AS num FROM alliance_diplomacy');
$points_per_player = round($planets_ingame['points_sum'] / $player_count['num'], 2);

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
					<header id="header" class="alt">
						<span class="image"><img src="images/kelvin.png" alt="" /></span>
						<h1>Star Trek &#149; Galaxy War</h1>
						<p>Forsche, treibe Handel oder führe Krieg!<br />
						Alles liegt in Deiner Hand.</p>
					</header>

				<!-- Nav -->
					<nav id="nav">
						<ul>
							<li><a href="#intro" class="active">Einführung</a></li>
							<li><a href="#first">Highlights</a></li>
							<li><a href="#second">Statistiken</a></li>
							<li><a href="#cta">Mitspielen</a></li>
						</ul>
					</nav>

				<!-- Main -->
					<div id="main">

						<!-- Einführung -->
							<section id="intro" class="main">
								<div class="spotlight">
									<div class="content">
										<header class="major">
											<h2>Über das Spiel</h2>
										</header>
										<p>Wähle aus verschiedenen Rassen wie: Föderation, Romulaner, Klingonen, Cardassianern und vielen mehr.
										Nachdem deine Welt erstellt wurde, baue diese aus und kolonisiere weitere neue Welten um deine Macht zu steigern.
										Baue Handelsschiffe und Kampfschiffe um das Universum mit anderen Spielern in einer Allianz zu erkunden oder diese zu bekämpfen.
										Ernkunde Bereiche im Universum die nie ein Mench zuvor gesehen hat!</p>
										<ul class="actions">
											<li><a href="#cta" class="button">Mitspielen</a></li>
										</ul>
									</div>
									<span class="image"><img src="images/small_logo.png" alt="" /></span>
								</div>
							</section>

						<!-- First Section -->
							<section id="first" class="main special">
								<header class="major">
									<h2>Highlights</h2>
								</header>
								<ul class="features">
									<li>
										<span class="image"><img src="images/uhura_s_earpiece.png" alt="" /></span>
										<h3>Verschiedene Rassen</h3>
										<p>Wähle aus 10 verschiedenen Rassen. Alle mit verschiedenen Vor-/Nachteilen und individiuellen typtischen Raumschiffen</p>
									</li>
									<li>
										<span class="image"><img src="images/enterprise.png" alt="" /></span>
										<h3>Schifftemplates</h3>
										<p>Verbessere Deine Raumschiffe mit erforschbaren Schifftemplates.</p>
									</li>
									<li>
										<span class="image"><img src="images/tricorder.png" alt="" /></span>
										<h3>Forschung</h3>
										<p>Erforsche spannende neue Technologien und verbessere Deine Raumschiffe damit!</p>
									</li>
								</ul>
								<!--<footer class="major">
									<ul class="actions special">
										<li><a href="generic.html" class="button">Learn More</a></li>
									</ul>
								</footer>-->
							</section>

						<!-- Second Section -->
							<section id="second" class="main special">
								<header class="major">
									<h2>Statistiken</h2>
									<!--<p>Donec imperdiet consequat consequat. Suspendisse feugiat congue<br />
									posuere. Nulla massa urna, fermentum eget quam aliquet.</p>-->
								</header>
								<ul class="statistics">
									<li class="style1">
										<span class="icon solid fa-calendar"></span>
										<strong>01.03.2023</strong> Runde gestartet
									</li>
									<li class="style2">
										<span class="icon solid fa-male"></span>
										<strong><?php echo $player_count['num']; ?></strong> Aktive Spieler
									</li>
									<li class="style3">
										<span class="icon solid fa-code-branch"></span>
										<strong><?php echo $alliance_ingame['num']; ?></strong> Allianzen
									</li>
									<li class="style4">
										<span class="icon solid fa-signal"></span>
										<strong><?php echo $points_per_player; ?></strong> ø per Spieler
									</li>
								</ul>
								<!--<p class="content">Nam elementum nisl et mi a commodo porttitor. Morbi sit amet nisl eu arcu faucibus hendrerit vel a risus. Nam a orci mi, elementum ac arcu sit amet, fermentum pellentesque et purus. Integer maximus varius lorem, sed convallis diam accumsan sed. Etiam porttitor placerat sapien, sed eleifend a enim pulvinar faucibus semper quis ut arcu. Ut non nisl a mollis est efficitur vestibulum. Integer eget purus nec nulla mattis et accumsan ut magna libero. Morbi auctor iaculis porttitor. Sed ut magna ac risus et hendrerit scelerisque. Praesent eleifend lacus in lectus aliquam porta. Cras eu ornare dui curabitur lacinia.</p>-->
								<footer class="major">
									<ul class="actions special">
										<li><a href="generic.php?a=stats" class="button">Statistik</a></li>
									</ul>
								</footer>
							</section>

						<!-- Get Started -->
							<section id="cta" class="main special">
								<!--<header class="major">
									<h2>Congue imperdiet</h2>
									<p>Donec imperdiet consequat consequat. Suspendisse feugiat congue<br />
									posuere. Nulla massa urna, fermentum eget quam aliquet.</p>
								</header>-->
								<footer class="major">
									<ul class="actions special">
										<li><a href="generic.php?a=login" class="button primary">Login</a></li>
										<li><a href="generic.php?a=register" class="button">Registrieren</a></li>
									</ul>
								</footer>
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

	</body>
</html>
