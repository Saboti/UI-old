<?PHP

function spacedock_max_ships($planet) {
	global $game,$TECH_NAME,$MAX_BUILDING_LVL,$MAX_SPACEDOCK_SHIPS;
	$ships_level = '<ul>';
	for($lvl = 1;$lvl <= $MAX_BUILDING_LVL[$planet][6];$lvl++)
	{
		$ships_level .= '<li>Stufe '.$lvl.' = <b>'.$MAX_SPACEDOCK_SHIPS[$lvl].'</b></li>';
	}
	$ships_level .= '</ul>';
	return $ships_level;
}

$guide_html = '<span class="caption">Die RAUMFLOTTEN</span><br>
<span class="sub_caption2"><u>Teil 1: "<a href="'.parse_link('a=spacedock').'"><span class="highlight_link">'.$BUILDING_NAME[$game->player['user_race']][6].'</u></span></a>" </span>

<p align="justify">

<br>Wenn ein Schiff fertiggebaut worden ist im "<a href="'.parse_link('a=spacedock').'"><span class="highlight_link">'.$BUILDING_NAME[$game->player['user_race']][7].'</span></a>" dann wird es automatisch zum "<a href="'.parse_link('a=spacedock').'"><span class="highlight_link">'.$BUILDING_NAME[$game->player['user_race']][6].'</span></a>" des Planeten &uuml;berf&uuml;hrt. JEDES Schiff wird danach im Trockendock aufgef&uuml;hrt. Es muss danach aber zwingend einer Flotte zugewiesen werden, damit es &uuml;berhaupt losfliegen kann.</br>

</p>

<p align="justify">
<br>Die folgende nach Stufen maximale Anzahl an Schiffe kann theoretisch beim "<a href="'.parse_link('a=spacedock').'"><span class="highlight_link">'.$BUILDING_NAME[$game->player['user_race']][6].'</span></a>" angedockt sein:</br>

<table width="100%">
<tr>
  <td valign="top">'.spacedock_max_ships(1).'</td>
  <td valign="top">'.spacedock_max_ships(0).'</td>
</tr>

<tr><td>AM HAUPTPLANETEN</td><td>AUF JEDER WEITEREN KOLONIE</td></tr>
</table>
</p>

<p align="justify">
<b><u>Das Erstellen einer Flotte</u></b>

<br>W&auml;hlen sie unter Kolonie >> "<a href="'.parse_link('a=spacedock').'"><span class="highlight_link">'.$BUILDING_NAME[$game->player['user_race']][6].'</span></a>" im Bereich der Scrollbalken, diejenigen "Schiffe im Trockendock" aus, die zur Flotte hingef&uuml;gt / zu einer Flotte gemacht werden sollen. Es ist auch m&ouml;glich, nur ein einziges Schiff als eine Flotte zu bestimmen. </br>

<br>Klicken Sie diese(s) Schiff(e) an. Der Bereich unterhalb wo "Schiff Auswahl" steht, interessiert uns noch nicht. Er wird hier gleich noch ausf&uuml;hrlicher erkl&auml;rt, da dort s&auml;mtliche Wartungsarbeiten f&uuml;r die Schiffe durchf&uuml;hrbar sind. </br>

<br>Geben Sie danach, etwa auf der H&ouml;he bei "In Dienst stellen:" rechts daneben einen freiw&auml;hlbaren Namen f&uuml;r Ihre Flotte an.  Dr&uuml;cken sie die Taste rechts daneben, dort wo steht: <input class="button_nosize" type="submit" value ="Neue Flotte gr&uuml;nden">. Die Flotte ist damit erstellt.</br>
</p>

<p align="justify">
<b><u>Wartungsarbeiten an einer Flotte - "Schiff Auswahl:"</u></b>

<br>Das Men&uuml; "<a href="'.parse_link('a=spacedock').'"><span class="highlight_link">'.$BUILDING_NAME[$game->player['user_race']][6].'</span></a>" ist auch das Men&uuml; f&uuml;r die Wartungsarbeiten der Flotte, das hier genannt wird "Schiff Auswahl:".</br>
<br> Im weiteren handelt es um acht Schaltfl&auml;chen, wo jeweils vier Schaltfl&auml;chen in einer Reihe unterhalb der Flotten/Schiffswahl stehen. </br>
</p>

<p align="justify">
<b><u>Die ersten vier Schaltfl&auml;chen filtern die Schiffe je nach Zustand oder w&auml;hlen diese aus: </u></b>

<ul>
<li>Ausw&auml;hlen besch&auml;digter oder unbesch&auml;digter Schiffe</li>
<br>mit den Schalttasten <input class="button_nosize" type="submit" value ="besch&auml;digt"> oder <input class="button_nosize" type="submit" value ="unbesch&auml;digt"> selbsterkl&auml;rend</br>

<li>Ausw&auml;hlen aller oder keiner Schiffe</li>
<br>mit den Schalttasten <input class="button_nosize" type="submit" value ="alle"> oder <input class="button_nosize" type="submit" value ="keine"> selbsterkl&auml;rend</br>

</ul>
</p>

<p align="justify">

<b><u>Die n&auml;chsten vier Schalttasten sind f&uuml;r die eigentliche Wartung vorgesehen:</u></b>

<ul>
<li>Reparieren von Schiffen</li>
<br>"Schiffe im Trockendock" welche besch&auml;digt sind, k&ouml;nnen wie oben beschrieben ausgew&auml;hlt werden oder einzeln angeklickt werden. Durch das Anklicken von <input class="button_nosize" type="submit" value ="Reparieren"> werden diese Schiffe innerhalb k&uuml;rzester Zeit instandgesetzt.</br>
 
<li>Bemannen oder entlassen der Schiffsbesatzung</li>
<br>Klicke ein einzelnes "Schiff(e) im Trockendock" an und danach auf <input class="button_nosize" type="submit" value ="Bemannen"> dadurch wird das zugeh&ouml;rige Unternem&uuml; aufgerufen. Durch das Verringern oder Erh&ouml;hen der Besatzungszahl per Hand werden die Einheiten abgebaut oder ausgef&uuml;llt.</br>
 
<li>Demontieren/Verschrotten von Schiffen</li>
<br>Klicke ein einzelnes "Schiff(e) im Trockendock" an und danach auf <input class="button_nosize" type="submit" value ="Verschrotten">. Dadurch wird das zugeh&ouml;rige Unternem&uuml; aufgerufen. </br>

<br>Durch das nochmalige Klicken auf <input class="button_nosize" type="submit" value ="Verschrotten"> wird das Schiff demontiert und man sieht gleichzeitig wieviel Besatzung in den Ruhestand geschickt wird und welche Ressourcen recycled werden. (Zur&uuml;ck nur mit Browser "Seite zur&uuml;ck" m&ouml;glich) </br>

<li>Überpr&uuml;fen von Schiffsdetails im eigenen Untermen&uuml;</li>

<br>Klicke ein einzelnes "Schiff(e) im Trockendock" an und danach auf <input class="button_nosize" type="submit" value ="Details">. Dadurch wird das zugeh&ouml;rige Unternem&uuml; aufgerufen, in der z.B. die Besatzung, der Zustand des Schiffes, diverse Specs oder eine Liste der im Schiff verbauten Komponenten / Bauteile angezeigt wird. (Zur&uuml;ck nur mit Browser "Seite zur&uuml;ck" m&ouml;glich) </br>
</p>

<p align="justify">
<b><u>weitere M&ouml;glichkeiten im Men&uuml;:</u></b>

<li>Hinzuf&uuml;gen eines neugebauten Schiffs zu einer bestehenden, angedockten Flotte</li> 
<br>Klicke auf ein einzelnes "Schiff(e) im Trockendock.". Sind andere Flotten am Planeten vorhanden, so erscheinen diese in der 2. Zeile bei "In Dienst stellen". Durch das Klicken auf <input class="button_nosize" type="submit" value ="Flotte anschlie&szlig;en"> wird das Schiff der bereits vorhandenen Flotte angeschlossen.</br>

<li>Zuweisen/Umbenennen von Schiffsnamen</li> 
<br>Klicke auf ein einzelnes "Schiff(e) im Trockendock." Bei "Name" kann das Schiff einen Schiffsnamen erhalten oder umbenannt werden. Klicke danach auf <input class="button_nosize" type="submit" value ="Umbenennen"> </br>

<li>Zuweisen/Umbenennen eines Contract Codes</li> 
<br>Klicke auf ein einzelnes "Schiff(e) im Trockendock." Unter "Contract Code" erh&auml;lt ein Schiff eine Kennung wie z.B NCC 1701-A. Ansonsten ist das Zuweisen aber nur ein nettes Gimmick. Klicke danach auf <input class="button_nosize" type="submit" value ="Assign"> </br>
</ul>

</br>
</p>


';
?>
