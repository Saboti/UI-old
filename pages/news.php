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

$sql = ' SELECT *
         FROM page_news
         ORDER BY date DESC
         LIMIT 0, 10';

if(($q_news = $db->query($sql)) === false) {
    $news_html = $locale['nonews'].'<br>';
}
else {
    $news_html = '';

    while($news = $db->fetchrow($q_news)) {
        $news_day = (int)gmdate('d', $news['date']);
        $today = (int)gmdate('d', time());

        if($news_day == $today) {
            $date_str = ''.$locale['today'].', '.gmdate('H:i', $news['date']);
        }
        elseif($news_day == ($today - 1)) {
            $date_str = ''.$locale['yesterday'].', '.gmdate('H:i', $news['date']);
        }
        else {
            $date_str = gmdate('d.m.y', $news['date']);
        }

        $news_html .= ''.$date_str.'</span> <b>'.$news['header'].'</b><br>'.$news['news'].'<br><br>';
    }
}

$main_html .= '
<section id="banner">
	<div class="content">
		<header>
			<h1>News</h1>
		</header>
		</ br>
		<p>'.$news_html.'</p></br >
	</div>
</section>
';

?>

