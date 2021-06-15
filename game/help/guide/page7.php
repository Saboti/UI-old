<?PHP

include('include/static/static_components.php');
$filename = 'include/static/static_components_'.$game->player['language'].'.php';
if (file_exists($filename)) include($filename);

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

$guide_html = '<span class="caption">DIE SCHIFFSKOMPONENTEN</span>

<p align="justify">
<b><u>Grunds&auml;tzliches:</b></u>

<br>Schiffskomponenten sind einzelne Module oder Schiffsbauteile. Sie dienen dazu die Leistung der vorhandenen Schiffstypen zu verbessern. Sie sind in Kategorien unterteilt, je nach Funktionsbereich, f&uuml;r den sie konzipiert wurden. </br>
<br><i>Vereinfacht ist das: <span style="color: brown">Antrieb, Bewaffnung, Verteidigung und Erg&auml;nzungssysteme.</span></i></br>
</p>

<p align="justify">
<b><u>Wie werden Schiffkomponenten entwickelt/erforscht?</u></b>

<br>Solange genug Ressourcen und alle Voraussetzungen auf dem jeweiligen Planeten vorhanden sind, werden im Men&uuml; Kolonie "<a href="'.parse_link('a=researchlabs').'"><span class="highlight_link">'.$BUILDING_NAME[$game->player['user_race']][8].'</span></a>" alle m&ouml;glichen Komponenten, die in ein Raumschiff eingebaut werden k&ouml;nnen, im oberen Teil der Seite angezeigt. Sobald eine Komponente baubar ist, wird Sie <span style="color: green">GR&Uuml;N</span> angezeigt. Jedoch ist in der entsprechenden Warteschleife nur max. EINE EINZIGE Forschung zeitgleich m&ouml;glich.</br>

<br>Sie m&uuml;ssen alle zun&auml;chst einzeln erforscht werden, bevor Sie in Schiffe eingebaut werden k&ouml;nnen. Deren Erforschung erfolgt &uuml;ber das Hauptmen&uuml;: "Kolonie -> <a href="'.parse_link('a=researchlabs').'"><span class="highlight_link">'.$BUILDING_NAME[$game->player['user_race']][8].'</span></a>". Diese Komponenten (Bauteile)) teilen sich in folgende Unterkategorien auf: </br>

'.components_categories().'
</p>

<p align="justify">

<b><u>Genaueres zur Template-Erstellung:</u></b>

<br>Nach der Auswahl des Schiffstypen kann im Template festgelegt werden, was f&uuml;r Komponenten beim Bau des Schiffes verbaut werden sollen. Jede Komponente ben&ouml;tigt eine unterschiedliche Menge an Baukosten (Ressourcen, Besatzung und Bauzeit) und nicht jede Komponente kann gleicherma&szlig;en auf jedem Schiffstyp eingesetzt werden.<br>

<br>Durch die Weiterforschung an einzelnen Komponenten kann die Leistung eines Schiffes laufend weiter erh&ouml;ht werden. Die folgenden Einstellungen eines Raumschiffes bestimmen deren grunds&auml;tzliche Leistung :</br>

<ul>
<li>Leichte Waffen</li>
<li>Schwere Waffen</li>
<li>Planetare Waffen</li>
<li>Schilde</li>
<li>Rumpfpunkte/H&uuml;lle (HP)</li>
<li>Reaktion</li>
<li>Bereitschaft</li>
<li>Beweglichkeit</li>
<li>Erfahrung</li>
<li>Warpleistung</li>
<li>Sensoren</li>
<li>Tarnung</li>
<li>Energieverbrauch</li>
</ul>

<br>In jeder dieser Kategorien kann nur jeweils <b>max. EINE!!!</b> Komponente ausgew&auml;hlt werden. Es ist nicht m&ouml;glich, alle Bauteile einer Komponentengruppe in ein Schiff einzubauen. Begrenzt wird die ganze Auswahl zus&auml;tzlich durch die max. erzeugbare Energie im Schiff.</br>
</p>
 
<p align="justify">
 
<b><u>Abschliessen der Template-Erstellung:</u></b>

<br>Wenn die Auswahl der Schiffskomponenten erfolgt ist, dr&uuml;cken Sie auf <input class="button_nosize" type="submit" value="(3/3) Weiter...">. Zum Schluss kann dem Template noch ein passender Name oder eine Beschreibung mitgegeben werden.
Dr&uuml;cken Sie zum Schlu&szlig; des ganzen Vorgangs auf <input class="button_nosize" type="submit" value="Abschlie&szlig;en">. Damit wird das entsprechende Schiffstemplate genau so in Zukunft &uuml;ber jedwede Werft auf all Ihren Planeten bauf&auml;hig sein.</br>
</p>
';
?>
