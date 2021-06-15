<?PHP

include('include/static/static_components.php');
$filename = 'include/static/static_components_'.$game->player['language'].'.php';
if (file_exists($filename)) include($filename);

function available_ships() {
	global $game,$SHIP_TORSO,$MAX_RESEARCH_LVL;
	$avail_ships = '<ul>';
	for ($t=0; $t<count($SHIP_TORSO[$game->player['user_race']]); $t++)
	{
		// Skip disabled ships
		if($SHIP_TORSO[$game->player['user_race']][$t][0] == 100000000)
			continue;

		$avail_ships .= '<li>'.$SHIP_TORSO[$game->player['user_race']][$t][29].'</li>';
	}
	$avail_ships .= '</ul>';
	return $avail_ships;
}

function components_categories() {
	global $game, $ship_components;
	$avail_cat = '<ul>';
	for ($c=0; $c < count($ship_components[$game->player['user_race']]); $c++)
	{
		$avail_cat .= '<li>'.$ship_components[$game->player['user_race']][$c]['name'].'</li>';
	}
	$avail_cat .= '</ul>';
	return $avail_cat;
}

$guide_html = '<span class="caption">SCHIFFSTEMPLATES</span>
<p align="justify">
<br>Über das entsprechende Men&uuml; k&ouml;nnen Schiffsvorlagen als Templates erstellt werden, die man dann im "<a href="'.parse_link('a=shipyard').'"><span class="highlight_link">'.$BUILDING_NAME[$game->player['user_race']][7].'</span></a>" bauen kann.</br>

<br>Das allererste Schiff ist der Scout. In der Templateliste erscheinen nur diejenigen Schiffe oder Bauten, die der ausgew&auml;hlte Planet je nach Punktzahl &uuml;berhaupt bauen kann. Auch die Verteidigungseinrichtungen k&ouml;nnen erforscht werden, daher sind Sie hier mit aufgef&uuml;hrt, obwohl Sie kein Schiff sind.</br>
<br>Insgesamt gibt es auch nur die folgenden Schiffstypen / Verteidigungseinrichtungen im Spiel (die abh&auml;ngig von der Rasse sind: ):
'.available_ships().'
</p>

<p align="justify">
<br>Im Untermen&uuml; von "<a href="'.parse_link('a=ship_template').'"><span class="highlight_link">Schiffstemplates</span></a>" sind drei Punkte zur Auswahl :</br>
<ul>
<li>&Uuml;bersicht</li> 
zeigt eine Liste der bereits vorhandenen Schiffstemplates</br><br>
<li>Template erstellen</li> 
erstellt wie gesagt ein neues Schiffstemplate als Vorlage f&uuml;r sp&auml;tere Schiffe</br><br>
<li>Templates vergleichen</li> 
vergleicht zwei der vorhandenen Templates untereinander im Detail. </br><br>
</ul>
<b>HINWEIS:</b><br> Schiffbaupl&auml;ne/Templates k&ouml;nnen in der og. Liste nur erstellt werden, wenn ausreichend globale und lokale Punkte vorhanden sind und die Forschung f&uuml;r die Schiffe grunds&auml;tzlich &uuml;berhaupt auf dem entsprechenden Planeten schon vorhanden ist. Alle erf&uuml;llten Voraussetzungen werden <span style="color: lightgreen">GRÜN</span> angezeigt.</p>
<p align="justify">
Wenn Sie dazu den Punkt "<a href="'.parse_link('a=ship_template&view=create').'"><span class="highlight_link">Template erstellen</span></a>" im Koloniemen&uuml; auf der Hauptseite anklicken, k&ouml;nnen Sie den  den entsprechenden Schiffstyp ausw&auml;hlen. Danach auf <input class="button_nosize" type="submit" value ="(2/3) Weiter...">. klicken.</br>

<br>Danach geht es weiter im Untermen&uuml; "Komponenten w&auml;hlen". Dieser wird auf der n&auml;chsten Seite ausf&uuml;hrlichst behandelt.</br>
</p>

';
?>
