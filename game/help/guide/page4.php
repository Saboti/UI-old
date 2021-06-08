<?PHP

function research_max_lev($planet) {
	global $game,$TECH_NAME,$MAX_RESEARCH_LVL;
	$research_level = '<ul>';
	for($rsc = 0;$rsc < 5;$rsc++)
	{
		$research_level .= '<li>'.$TECH_NAME[$game->player['user_race']][$rsc].' = <b>'.$MAX_RESEARCH_LVL[$planet][$rsc].'</b></li>';
	}
	$research_level .= '</ul>';
	return $research_level;
}

$guide_html = '<span class="caption">TECHNOLOGISCHE ERFORSCHUNG</span>
<p align="left">
Die zweite Methode, um Punkte Im Spiel zu sammeln, ist planetare technologische Forschung zu betreiben. Um auf diese Funktion zugreifen zu k&ouml;nnen
muss sich aber das Hauptgeb&auml;ude/Propaganda-Zentrum  dazu jedoch mindestens auf Spielstufe 9 (der maximal m&ouml;glichen auf Nebekolonien) befinden. Erst
dann kann ein Forschungszentrum &uuml;berhaupt gebaut werden. </p>

<p align="justify">
Es gibt f&uuml;nf Arten der Planetaren Forschung:
<ul>

<li><u>1. '.$TECH_NAME[$game->player['user_race']][0].'</u>: Damit ist das technologische Eingreifen auf einem Planeten gemeint, um diesen allgemein 
bewohnbarer und effektiver zu machen. Die Entwicklung dieser Technologie erh&ouml;ht die maximal m&ouml;gliche Anzahl von Arbeitern und Soldaten, die auf einem 
Planeten untergebracht werden k&ouml;nnen, und beeinflusst damit auch die Geschwindigkeit, mit der die arbeitende Bev&ouml;lkerung w&auml;chst.;</li>

<li><u>2. '.$TECH_NAME[$game->player['user_race']][1].'</u>: Hier wird zwar der Anstieg an arbeitender Bev&ouml;lkerung um das Doppelte pro Stufe erreicht, 
jedoch erh&ouml;ht sich damit nicht automatisch auch die maximale Kapazit&auml;t an Arbietern am Planeten.</li>

<li><u>3. '.$TECH_NAME[$game->player['user_race']][2].'</u>: erh&ouml;ht die max. Anzahl der planetaren Verteidigungsplattformen im Orbit, welche insgesamt 
verbaut werden k&ouml;nnen und reduziert dabei gleichzeitig deren Baukosten erheblich  </li>

<li><u>4. '.$TECH_NAME[$game->player['user_race']][3].'</u>: beschleunigt den Bau aller Geb&auml;ude auf dem Planeten - und ist damit f&uuml;r einige spezielle 
Bauwerke die wichtigsten Technologie von allen!</li>

<li><u>'.$TECH_NAME[$game->player['user_race']][4].'</u>: Diese Technologie erh&ouml;ht die Bergwerkseffineznz von Minen und Raffinierien . <b>WICHTIG!</b> 
Um Sie erfolgreich einsetzen zu k&ouml;nnen, m&uuml;ssen die Spielstufen aller drei Minen/Raffinerien mindestens auf Spielstufe FÜNF und die Spielstufe der 
zugeh&ouml;rigen Forschungseinrichtung mindestens auf DREI stehen.. </li>

</ul>

</p>
<p align="justify">Wie schon bei den Geb&auml;uden, so sind auch die Forschungen in Spielstufen eingeteilt. Je h&ouml;her die Spielstufe, desto gr&ouml;&szlig;er ist der Nutzen, 
der sich aus dem Geb&auml;ude erschlie&szlig;t.
Die max. Forschungsstufen sind wie folgt limitiert:

<table width="100%">
<tr><td>'.research_max_lev(1).'</td><td>'.research_max_lev(0).'</td></tr>

<tr><td>AM HAUPTPLANETEN</td><td>AUF JEDER WEITEREN KOLONIE<br></td></tr>
</table>
</p>

<p align="justify">
Technologien erweitern im Allgemeinen die Erstellungsm&ouml;glichkeiten von &quot;Schiffstemplates&quot; und sorgen damit daf&uuml;r, dass der Schiffsbau immer effektiver 
wird. Technologien erh&ouml;hen zwar auch die Kosten f&uuml;r Ressourcen und Schiffsbesatzungen, machen sie jedoch im Allgemeinen damit auch effizienter.</p>

<p align="justify">
<b>Wie setzt man diese Technologien nun im Spiel ein?</b><br>
Im Men&uuml; "<a href="'.parse_link('a=researchlabs').'"><span class="highlight_link">'.$BUILDING_NAME[$game->player['user_race']][8].'</span></a>" 
wird im weiteren OBEN angezeigt, welche Tecnologien man erforschen kann, um seine Raumschiffe zu erweitern, und UNTEN wird angezeigt, welche Technologien man zur
Verbesserung von Planeten erforschen kann.
Neben dem jeweiligen Namen/Bezeichnung der Forschung sind die jeweiligen Kosten in Resourcen aufgef&uuml;hrt. Eine Forschung ist nur m&ouml;glich, solange daf&uuml;r gen&uuml;gend Rohstoffe 
zur Verf&uuml;gung stehen. Daneben steht der erforderliche Zeitaufwand f&uuml;r diese Forschung. Widerum daneben finden sie einen <span style="color: green">GRÜNFARBIGEN LINK</span>, 
mit dem Sie die ausgew&auml;hlte Forschung in die Warteschlange stellen k&ouml;nnen. Es ist nur m&ouml;glich jeweils eine Schiffsforschung und eine Planetenforschung gleichzeitig zu 
betreiben.
';
?>

