<?PHP

function building_max_lev($planet) {
	global $game,$BUILDING_NAME,$MAX_BUILDING_LVL;
	$building_level = '<ul>';
	for($blt = 0;$blt < 13;$blt++)
	{
		if($blt < 9)
		{
			$building_level .= '<li>'.$BUILDING_NAME[$game->player['user_race']][$blt].' = <b>'.$MAX_BUILDING_LVL[$planet][$blt].'</b></li>';
		}
		else if ($blt == 9)
		{
			$building_level .= '<li>'.$BUILDING_NAME[$game->player['user_race']][12].' = <b>'.$MAX_BUILDING_LVL[$planet][12].'</b></li>';
		}
		else
		{
			$building_level .= '<li>'.$BUILDING_NAME[$game->player['user_race']][$blt-1].' = <b>'.$MAX_BUILDING_LVL[$planet][$blt-1].'</b></li>';
		}
	}
	$building_level .= '</ul>';
	return $building_level;
}


$guide_html ='<span class="caption"><u>GEBÄUDE:</u></span>

<p align="left">
In STGW sind die erbauten Geb&auml;ude und Strukturen auf einem Planeten der beste Weg, um schnell viele Koloniepunkte zu erhalten.<br>
Es gibt haupts&auml;chlich f&uuml;nf Arten von Geb&auml;uden:
<ul>
<li><u>1. Das Hauptgeb&auml;ude</u><br>
<a href="'.parse_link('a=headquarter').'"><span class="highlight_link">'.$BUILDING_NAME[$game->player['user_race']][0].'</span></a>: Dieses Geb&auml;ude stellt auf einem Planeten das Hauptkontrollgeb&auml;ude f&uuml;r alle nachfolgenden Bauten dar. Es ist notwendig, damit alle nachfolgenden Geb&auml;ude &uuml;berhaupt verbessert werden k&ouml;nnen.</li><br>

<li><u>2. Der Abbau von Rohstoffen:</u><br> 

Das umfasst die drei Rohstoffe ('.$BUILDING_NAME[$game->player['user_race']][1].',
'.$BUILDING_NAME[$game->player['user_race']][2].' e '.$BUILDING_NAME[$game->player['user_race']][3].') welche Ressourcen produzieren:

<ul>
<li><img src="'.$game->GFX_PATH.'menu_metal_small.gif"> Metalle, </li>
<li><img src="'.$game->GFX_PATH.'menu_mineral_small.gif"> Mineralien und </li>
<li><img src="'.$game->GFX_PATH.'menu_latinum_small.gif"> Dilithium</li>
</ul>

Ihre Spielstufe ingame bestimmt die Menge der max. f&ouml;rderbaren Ressourcen und die Anzahl der max. m&ouml;glichen <img src ="'.$game->GFX_PATH.'menu_worker_small.gif"> Arbeiter. 
Arbeiter k&ouml;nnen in je 100ter Einheiten zugewiesen werden. Die Menge der max. f&ouml;rderbaren Ressourcen variiert aber je nach Planetentyp erheblich.</li><br>

<li><u>3. Produktion:</u><br>

In diesem Geb&auml;udetyp sind alle Bauten enthalten, welche f&uuml;r den Bau von Raumschiffen oder f&uuml;r die Personalausbildung unabdingbar sind;
<a href="'.parse_link('a=shipyard').'"><span class="highlight_link">'.$BUILDING_NAME[$game->player['user_race']][7].'</span></a> und
<a href="'.parse_link('a=academy').'"><span class="highlight_link">'.$BUILDING_NAME[$game->player['user_race']][5].'</span></a>. Dazu
sp&auml;ter mehr, denn der Bau eines Raumschiffes erfordert widerum die Erstellung einer Blaupause - &quot;Schiffstemplate&quot; genannt.</li><br>

<li><u>4. Unterst&uuml;tzung:</u>
<br>
<ul>
<li>Zu dieser Geb&auml;udeart geh&ouml;rt das <span class="highlight">'.$BUILDING_NAME[$game->player['user_race']][4].'</span>, welches f&uuml;r alle anderen Bauten zur Energieerzeugung wichtig ist.</li>
<li>Dann: <a href="'.parse_link('a=researchlabs').'"><span class="highlight_link">'.$BUILDING_NAME[$game->player['user_race']][8].'</span></a> etc, wo Technologien f&uuml;r den Einsatz in 
Schiffsprojekten oder Planetentechnologien entwickelt werden k&ouml;nnen. Diese Planetentechnologien k&ouml;nnen auch Punkte liefern, die die einzelnen F&auml;higkeiten des Planeten selbst zus&auml;tzlich 
verbessern.</li>
<li><span class="highlight">'.$BUILDING_NAME[$game->player['user_race']][11].'</span> geh&ouml;ren ebenso zu dieser Geb&auml;udeart. Sie sorgen daf&uuml;r, dass eine gr&ouml;&szlig;ere Anzahl von Ressourcen auf einem Planeten 
gelagert werden kann </li>
<li><a href="'.parse_link('a=spacedock').'"><span class="highlight_link">'.$BUILDING_NAME[$game->player['user_race']][6].'</span></a> sorgen f&uuml;r die notwendige Infrastruktur, um den Aufbau von Flotten,
die Reparatur von Schiffen oder die Versetzung von Schiffsbesatzungen durchf&uuml;hren zu k&ouml;nnen.</li>
<li><a href="'.parse_link('a=trade').'"><span class="highlight_link">'.$BUILDING_NAME[$game->player['user_race']][10].'</span></a>, sind die Geb&auml;ude, die auf das ingame Handelszentrum gen. &quot;Ursa Minor&quot;
zugreifen zu k&ouml;nnen oder den ebenfalls vom System verwalteten Ferengi-Transportservice zu nutzen;</li>
</ul> 
</li>
<br>
<li><u>5. Verteidigung:</u>: 
<br>
Dieser Geb&auml;udetyp umfasst alle &quot;Planetaren Verteidigungseinrichtungen&quot; Das sind kleine oder gro&szlig;e Orbitalplattformen, die bewaffnet sind, 
um die Planeten zu verteidigen. Sie werden gebaut in der Umlaufbahn des Planeten, um feindliche Raumschiffe fr&uuml;hzeitig abzuwehren. Sie m&uuml;ssen nicht eingeschaltet werden und 
sind immer verf&uuml;gbar, sobald Sie gebaut sind. Bei Bedarf werden Sie automatisch aktiviert. </li>
</p>

<p align="justify">
Alle Geb&auml;ude sind in Spiellevel eingeteilt, je h&ouml;her das Level, desto gr&ouml;&szlig;er ist logischerweise der Nutzen des Geb&auml;udes.
Die Spielstufen / level sind folgenderma&szlig;en ingame gleich festgelegt:

<table width="100%">
<tr><td>'.building_max_lev(1).'</td><td>'.building_max_lev(0).'</td></tr>
<tr><td>AM HAUPTPLANETEN</td><td>AUF JEDER WEITEREN KOLONIE<br></td></tr>
</table>
Einzige Ausnahme in diesem Schema bilden die Orbitalplattformen, f&uuml;r die das Limit durch die Erforschung der &quot;Orbital Defense&quot;-Technologie &uuml;berwunden werden.
</p>
<p align="justify">
<b>Wie werden nun Geb&auml;ude gebaut?</b><br>
Nach dem Öffen des Men&uuml;s <a href="'.parse_link('a=building').'">&quot;<span class="highlight_link">Geb&auml;ude</span>&quot;</a> werden alle m&ouml;glichen Bauten angezeigt,
wenn gen&uuml;gend Ressourcen f&uuml;r den Bau vorhanden sind. Deneben steht der Name des Bauwerks, die Kosten an Ressourcen stehen daneben, dahinter steht der ben&ouml;tigte Zeit
aufwand f&uuml;r den Bau. 
Direkt daneben finden Sie einen <span style="color: green">GRÜNFARBIGEN LINK</span>, mittels dem man einen Bau in die Bauwarteschlange stellen kann. Maximal sechs 
Bauwerke k&ouml;nnen in diese Bauwarteschlange gestellt werden. Entweder beginnt der Bau sofort oder wird in der Reihenfolge entsprechend sp&auml;ter durchgef&uuml;hrt</p>
';

?>
