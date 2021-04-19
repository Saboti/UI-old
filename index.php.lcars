<?php
/*    
	This file is part of STFC.
	Copyright 2006-2007 by Michael Krauss (info@stfc2.de) and Tobias Gafner
		
	STFC is based on STGC,
	Copyright 2003-2007 by Florian Brede (florian_brede@hotmail.com) and Philipp Schmidt
	
    STFC is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 3 of the License, or
    (at your option) any later version.

    STFC is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/

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

<!-- alt

	<iframe src="https://discord.com/widget?id=825439267249324043&theme=dark" width="250" height="350" allowtransparency="true" frameborder="0" sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"></iframe>
        <li class="icon solid fa-link"><a href="https://www.stuniverse.de">Star Trek Universe</a></li>
-->

<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name=viewport content="width=device-width, initial-scale=0.7">
  <title><?php echo $title_html; ?></title>
  <link rel="stylesheet" href="css/lcars.css">
  <style>
  p, h1, h2, h3 {
    margin-top: 1em;
  }

  pre {
    display: inline;
    white-space: pre-line;
    word-wrap: break-word;
  }

  table.localCustomFunWithCaptions caption {
    margin-left: -.5em;
    margin-bottom: .5em;
    text-align: right;
    border-right: .8em solid;
    border-left: 32rem solid;
    border-radius: .5em;
    padding-right: .33em;
    padding-bottom: -.15em;
  }
  #audio_class_summary {
	  font-size:.9rem;
  }
  </style>
  <style type="text/css">
    .dropcontent{display:none;}
  </style>
</head>
<body>
	<div class="lcars-app-container">

		<!-- HEADER ==================================================== -->

		<div id="header" class="lcars-row header">

			<!-- ELBOW -->
			<div class="lcars-elbow left-bottom lcars-golden-tanoi-bg"></div>

			<!-- BAR WITH TITLE -->
			<div class="lcars-bar horizontal">
				<div class="lcars-title right">Star Trek - Galaxy War</div>
			</div>

			<!-- ROUNDED EDGE DECORATED -->
			<div class="lcars-bar horizontal right-end decorated"></div>
		</div>

		<!-- SIDE MENU ================================================= -->

		<div id="left-menu" class="lcars-column start-space lcars-u-1" style="text-transform: uppercase;">
			<a href="<?php echo parse_link() ?>"><div class="lcars-element button lcars-chestnut-rose-bg">Home</div></a>
			<a href="<?php echo parse_link('a=login') ?>"><div class="lcars-element button lcars-pale-canary-bg">Einloggen</div></a>
			<a href="<?php echo parse_link('a=register') ?>"><div class="lcars-element button lcars-mariner-bg">Anmelden</div></a>
			<a href="<?php echo parse_link('a=stats') ?>"><div class="lcars-element button">Statistiken</div></a>
			<a href="<?php echo parse_link('a=faq') ?>"><div class="lcars-element button lcars-danub-bg">FAQ/Hilfe</div></a>
			<a href="https://st-gw.de/forum/" target="_blank"><div class="lcars-element button lcars-pale-canary-bg">Forum</div></a>
			<a href="<?php echo parse_link('a=imprint') ?>"><div class="lcars-element button lcars-melrose-bg">Impressum</div></a>
			<a href="https://github.com/saboti" target="_blank"><div class="lcars-element button">Developer</div></a>
			<!-- FILLER -->
			<div class="lcars-bar lcars-u-1"></div>
		</div>

		<!-- FOOTER ==================================================== -->

		<div id="footer" class="lcars-row ">
			<!-- ELBOW -->
			<div class="lcars-elbow left-top lcars-golden-tanoi-bg"></div>
			<!-- BAR -->
			<div class="lcars-bar horizontal both-divider bottom"></div>
			<!-- ROUNDED EDGE -->
			<div class="lcars-bar horizontal right-end left-divider bottom"></div>
		</div>

		<!-- MAIN CONTAINER -->
		<div id="container">
			<!-- COLUMN LAYOUT -->
			<div class="lcars-column lcars-u-5">

				<?php echo $main_html; ?>
			</div>
		</div>
	</div>

<audio id="audDummy"/><!--Just leave this here, just needed to enable automatic query canplay in the initialization code to load compatible media types -->
<script src="js/lcars_audio.js"></script>

<script>
        //All "booted" up notification.
        //Many browsers won't play this next sound because the user hasn't "blessed" the action with a UI click yet.
        document.addEventListener("DOMContentLoaded", function(event) {
                lcarsAudio.Ready();
        });

        //Cosmetic-ish behavior: scroll to gets hidden by top row body frame, so we need to scroll back slighly to have the actual heading element for each section visible after an in-page navigation.
        function locationHashChanged() {
                if (location.hash.substr(-8) == "_section") {
                        console.info("in-page nav detected.");
                        setTimeout(function(){window.scrollBy(0,-100)}, 100);
                }
        }
        window.onhashchange = locationHashChanged;

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

</script>
<script type="text/JavaScript" src="overlib.js"></script>

</body>
</html>

