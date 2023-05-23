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


$value='';



$sql = ' SELECT *
         FROM page_news
         ORDER BY date DESC
         LIMIT 0, 3';

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

        $news_html .= '<span style="font-size: 10px;">'.$date_str.'</span><br><a href="index.php?a=news&show='.$news['id'].'"><b>'.$news['header'].'</b></a><br><br><img src="./gfx/header_newsitem.jpg"><br><br>';
    }
}

$sql = ' SELECT *
         FROM journal
         ORDER BY date DESC
         LIMIT 0, 2';

if(($q_journal = $db->query($sql)) === false) {
    $journal_html = $locale['noreports'].'<br><br><img src="./gfx/header_newsitem.jpg"><br><br>';
}
else {
    $journal_html = '';

    while($journal = $db->fetchrow($q_journal)) {
        $journal_day = (int)gmdate('d', $journal['date']);
        $today = (int)gmdate('d', time());

        if($journal_day == $today) {
            $date_str = $locale['today'].', '.gmdate('H:i', $journal['date']);
        }
        elseif($journal_day == ($today - 1)) {
            $date_str = $locale['yesterday'].', '.gmdate('H:i', $journal['date']);
        }
        else {
            $date_str = gmdate('d.m.y', $journal['date']);
        }

        $journal_html .= '<span style="font-size: 10px;">'.$date_str.'</span><br><a href="index.php?a=journal&show='.$journal['id'].'"><b>'.$journal['header'].'</b></a><br><br><img src="./gfx/header_newsitem.jpg"><br><br>';
    }
}

$main_html .= '
        <header>
		<h1>Star Trek &#149; Galaxy War<br /></h1>
                <p>Forsche, treibe Handel oder führe Krieg!<br />Alles liegt in Deiner Hand.</p>
        </header>
	<p>'.$locale['welcome'].'</p>
	<ul class="actions">
        	<li><a class="button" href="https://stgw.saboti.de/index.php?a=login">Login</a></li>
                <li><a class="button primary" href="https://stgw.saboti.de/index.php?a=register">Anmelden</a></li>
        </ul>
<!--	<br />
	<hr>
        <h1>News</h1>
	<p>'.$news_html.'</p>
	<br />
	<hr>
	<h1>Partner</h1>
	<a href="https://www.stuniverse.de"><img src="https://www.stuniverse.de/assets/main/banner.png" class="pics"></a> -->
';

?>

