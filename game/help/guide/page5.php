<?PHP

$guide_html = '<span class="caption">DIE RAUMSCHIFFE</span>
<p align="justify">
Raumschiffe sind daf&uuml;r da, die Galaxie zu erforschen, Expertisen &uuml;ber geologische Vorkommen auf Planeten (z.B. vor einer m&ouml;glichen Besiedlung) durchzuf&uuml;hren, Kolonien effektiver zu sch&uuml;tzen, seine Kolonien zu Verteidigen oder Angriffe auf Gegner durchzuf&uuml;hren. Planeten und deren Orbitalabwehr allein reichen im Spiel n&auml;mlich nicht aus, um seine Planeten effektiv zu sch&uuml;tzen. </p>

<p align="justify">
Raumschiffe werden je nach Rolle in VIER unterschiedlichen Grundtypen unterteilt:
<ul>

<li><u>1. ERKUNDUNGSSCHIFFE</u>: 
Diese Raumschiffe sind wie Pfadfinder. Sie werden relativ billig hergestellt, auch in Bezug auf Zeitaufwand und eingesetzte Ressourcen. Sie sind entbehrlich, k&ouml;nnen aber gut zur Erforschung fremder Sonnensysteme genutzt werden. Mit minimaler Besatzung von 2 Crew sind sie nicht erweiterbar. <br>Sie tragen KEINE WAFFEN.</li>

<li><u>2. TRANSPORTSCHIFFE</u>: 
Das sind einfache Frachter, die schwach bewaffnet sind, nicht ausbauf&auml;hig, aber mit der nicht zu untersch&auml;tzenden Gabe Ressourcen und Truppen von einem Planeten zum anderen transportieren zu k&ouml;nnen. Ein Schiff kann max. 4000 Fracht laden und 400 Mann Truppen aufnehmen. <br>Sie tragen MINIMALE WAFFEN.</li>

<li><u>3. KAMPFSCHIFFE</u>:sind f&uuml;r Angriff und Verteidigung konzipiert. Basierend auf der Rumpfgr&ouml;&szlig;e und Tonnage werden Sie weiter in drei Unterklassen aufgeteilt:

<ul>
<li>LEICHTE</li>
<li>MITTLERE</li>
<li>SCHWERE</li>
</ul>

</li>
Die Bezeichnung dieser Schiffsunterklassen variiert von Spielrasse zu Spielrasse. Aber es sind immer drei m&ouml;gliche Schiffstypen. Ihre Aufgabe ist es Kolonien zu sch&uuml;tzen und nat&uuml;rlich auch um Angriffe auf Feinde durchf&uuml;hren zu k&ouml;nnen.
</ul>
</p>

<p align="justify">
Raumschiffe sind komplexe Maschinen und ben&ouml;tigen eine ebenso kompetente und geschulte Besatzung, damit Sie Ihre Aufgabe richtig erf&uuml;llen k&ouml;nnen. Die Anforderungen variieren von Schiffstyp zu Schiffstyp und gro&szlig;ere Schiffe ben&ouml;giten logischerweise mehr Besatzung als Kleinere.</p>

<p align="justify">
Ein weiterer Aspekt bei Raumschiffen, sind die verbauten Komponenten, die auf ihnen installiert werden k&ouml;nnen. Tats&auml;chlich ist es m&ouml;glich, verschiedene Varianten derselben Schiffsklasse zu bauen.</p>

<p align="justify">
<b>WIE BAUT MAN RAUMSCHIFFE IM SPIEL?</b><br>
1. Um eigene Raumschiffe bauen zu k&ouml;nnen, wird ein "<a href="'.parse_link('a=spacedock').'"><span class="highlight_link">'.$BUILDING_NAME[$game->player['user_race']][6].'</span></a>" f&uuml;r die Infrastruktur ben&ouml;tigt. 

2. Dazu braucht man zum Bauen nat&uuml;rlich eine "<a href="'.parse_link('a=shipyard').'"><span class="highlight_link">'.$BUILDING_NAME[$game->player['user_race']][7].'</span></a>".

<br>3. Sobald beide Bauwerke auf einem Planeten vorhanden sind, kann mittels eines "<a href="'.parse_link('a=ship_template').'"><span class="highlight_link">Schiffstemplates</span></a>" ein Schiffsprojekt erstellt werden. 

.<br>4. Alle verf&uuml;gbaren Schiffstemplates werden dann im "<a href="'.parse_link('a=shipyard').'"><span class="highlight_link">'.$BUILDING_NAME[$game->player['user_race']][7].'</span></a>" angezeigt. Schiffe werden solange produziert, wie alle Voraussetzungen an einem Planeten erf&uuml;llt sind. (Ressourcen, Anforderungen, Forschung etc.)
</p>
';
?>

