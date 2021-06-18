<?PHP

$guide_html = '<span class="caption">Die RAUMFLOTTEN</span><br>
<span class="sub_caption2">Teil 2: Flottenmen&uuml;</span>

<p align="justify">
<br>Es gibt mehrere M&ouml;glichkeiten, Flotten auf eine Mission zu schicken. Eine davon ist die Nutzung des Men&uuml;s"<a href="'.parse_link('a=ship_fleets_display').'"><span class="highlight_link">Flotte</span></a>"</br>

<br>In diesem Men&uuml;  erh&auml;lt man eine Liste aller eigenen Flotten, egal wo Sie sich befinden.</br>
</p>

<p align="justify">
<b><u>Die Flotten Position Karte</u></b>

<br> S&auml;mtliche Koordinaten im Spiel haben das Format : <b>SEKTOR:SYSTEM:PLANETENNUMMER</b>, z. B. O10:F8:4.</br>

<br>Im oberen Bereich ist eine kleine Karte der Galaxis. Rotmarkierte Punkte zweigen die Standorte der eigenen Flotten auf. Durch Anklicken der Karte an einer rotmarkierten Stelle wird die Galaxiekarte gro&szlig; aufgerufen. Sie befinden sich dann in dem System, in dem die Flotte gerade verweilt.</br>
</p>

<p align="justify">

<b><u>Anzeigebereich allgemein</u></b>
<br>Darunter befindet sich der Anzeigebereich; durch Filtern und Sortieren kann er geordnet werden.</br>

<br>Die Filterung steht voreingestellt auf "-alle Flotten -" Eine Filterung ist auch m&ouml;glich nach:  

<ul>
<li> "-stationiert -"en Flotten an einem Planeten </li>
<li> Flotten die sich "- in Bewegung -" befinden </li>
<li> Sie funktioniert auch mit einzelnen Schiffen direkt</li>
</ul>

<br>Durch einen Klick auf Überschriften k&ouml;nnen die Flotten in aufsteigender oder absteigender Reihenfolge sortiert werden nach:</br>

<ul>
<li>"Flotte" (einzelne Flotte ausw&auml;hlen</li>
<li>"Aufenthaltsort" (System, in dem die Flotte steht) </li>
<li>"Alarmstatus" (gr&uuml;n, gelb, rot) </li>
<li>"#" (: Anzahl der Schiffe in einer Flotte) </li>
<li>"Heimathafen" (soweit eingetragen) </li>
</ul>

</p>

<p align="justify">
<b><u>Anzeigebereich im Detail</u></b>
<br>Hier k&ouml;nnen andere Aufgaben durchgef&uuml;hrt werden. Wie :</br>

<ul>

<li>die Flottendetails einblenden</li>
<br>unterhalb der Spalte "Flotte" auf einen Flottennamen klicken, dann &ouml;ffnet sich die "Flotten&uuml;bersicht", die weiter unten nochmal ausf&uuml;hrlicher behandelt wird.</br>

<li>den Aufenthaltsort jeder Flotte ermitteln</li>
<br>unterhalb der Spalte "Aufenthaltsort" auf eine Koordinate klicken und dieses System aufrufen.</br>

<li>die Anzahl der Schiffe in einer Flotte abfragen</li>
<br>Spalte daneben "#" (ist nur auf/absteigend sortierbar, nicht anklickbar) </br>

<li>den Alarmstatus" der Flotte sortieren zu lassen</li>
<br> (<font color=#00FF00>Gr&uuml;n</font>ohne Abwehr,<font color=#FFFF00>Gelb</font>Schilde an, oder <font color=#FF0000>Rot</font>)Schilde und Waffen an;</br>
 
<li> Zusammenfassung von Flotten durchgef&uuml;hrt werden<li>
<br>siehe auch ("<a href="'.parse_link('a=spacedock').'"><span class="highlight_link">'.$BUILDING_NAME[$game->player['user_race']][6].'</span></a>") - wahrscheinlich die einfachere M&ouml;glichkeit.</br> 
<br>Flotten die zusammengefasst werden sollen, k&ouml;nnen mit dem Ankreuzfeld vor der Spalte "Flotte" einzeln ausgew&auml;hlt werden.</br> 

<br>Logischerweise m&uuml;ssen diese aber dann auch denselben "Aufenthaltsort" aufweisen. Mit einem Klick unterhalb des Anzeigenbereichts auf <input class="button_nosize" type="submit" value ="Flotten zusammenfgen">, kann das erledigt werden.</br>

<li>den "Heimathafen" (auch Rendezvouspunkt) f&uuml;r alle Flotten anzeigen<li>
<br> Flotten k&ouml;nnen hier nur &uuml;berpr&uuml;ft werden. Eine Änderung des Heimathafens ist nur in der "Flotten&uuml;bersicht" f&uuml;r einzelne Flotten m&ouml;glich.</br>

</ul>
</p>

<p align="justify">
<b><u>Wie man eine Flotte losschickt</u></b>

<br>Flotte anklicken . Unter <input class="button_nosize" type="submit" value ="Kolonien / Memo"></br> ist eine Liste aller besiedelten Planeten, die als Zielpunkt ausgew&auml;hlt werden kann. </br>

<br>Es kann auch eine "Memo" eingegeben werden. Das ist ein Wegpunkt als Koordinate, die &uuml;ber "<a href="'.parse_link('a=tactical_cartography').'"><span class="highlight_link">Taktik</span></a>" aufgerufen wird als Zielort. Es gibt max. 15 dieser Wegpunkte, die einspeicherbar sind.</br>

<br>Dr&uuml;cken Sie nach der Auswahl die Schaltfl&auml;che <input style="width: 130px;" class="button" type="submit" value="Flotte losschicken"> rechts daneben, um die Flotte durch die Galaxis fliegen zu lassen. Mit der Schaltfl&auml;che <input style="width: 130px;" class="button" type="submit" value="Kurs nach Hause"> kann eine oben angekreuzte Flotte auch zum Heimathafen geschickt werden.</br>
</p>

<p align="justify">
<b><u>Flotten&uuml;bersicht</u></b>

<br>Die Flottendetails f&uuml;r jede Einzelflotte wird angeziegt, wenn man unterhalb der Spalte "Flotte" auf einen Flottennamen klickt, &ouml;ffnet sich "Flotten&uuml;bersicht".</br>

<br>Hier werden Informationen &uuml;ber Einzelflotten aufgerufen. Hier wird nicht mehr weiter darauf eingegangen, sondern diese M&ouml;glichkeiten nur zusammenfassend nochmal erw&auml;hnt.</br>

<ul>
<li> Umbenennen von Flotten</li>
<li> Standortbestimmung </li>
<li> Alarmstatus f&uuml;r die einzelne Flotte &auml;ndern</li>
<li> Flotten an Kolonien be- und entladen.</li>
<li> Den Status der Flotte abfragen</li>
<li> Die Einzelschiffe innerhalb der Flotte werden dargestellt</li>
<li> Detailansicht der Schiffe </li>
<li> Flottenbefehle und Einstellungen erteilen</li>
</ul>
</p>

<p align="justify">
<br>Erg&auml;nzend dazu gibt es nur noch ZWEI besondere Optionen, die nirgends erw&auml;hnt werden:</br>

<b><u>Sortierung der Einzelschiffe innerhalb der Flotte nach Kriterien:</u></b>
<br>Sortieren nach: Schiffs-Typ, Rumpf-Typ, Erfahrung der Mannschaft, Baudatum des Schiffes, Warpkapazit&auml;t oder Auf/absteigend nach Namen</br>

<b><u> Handelsroute einrichten</u></b>

<br>Auf diese M&ouml;glichkeit m&ouml;chte ich besonders eingehen. </br>

<br>Ein Transporter kann eine maximale Menge an Waren pro Schiff von a nach b transportieren. Mehrere Transporter in einer Flotte k&ouml;nnen nat&uuml;rlich mehr Waren transportieren, aber diese Lieferungen k&ouml;nnen auch automatisiert werden. </br>

<br>Dazu werden alle Schiffe einer Flotte markiert, unter <input style="width: 130px;" class="button" type="submit" value="Kolonien/Memo"> wird eine Kolonie aufgerufen und diese mit Klick auf <input style="width: 130px;" class="button" type="submit" value="Handelsroute"> als solche eingerichtet. </br>

<br>Das nachfolgende Men&uuml; fr&auml;gt, ob die Route einmalig oder als Dauertransport bis zum Abbruch eingerichtet werden soll und ob Logbucheintr&auml;ge erfolgen sollen, die diese Lieferungen protokollieren. </br>

<br>Danach kommt das Men&uuml; f&uuml;r "Startplaneten" - Der Startpunkt ist eine eigene Kolonie, an der die Flotte gerade steht. Hier k&ouml;nnen Sie &auml;hnlich Handelsrouten aus anderen Spielen bestimmen, welche Ressourcen, Truppen und Besatzungsmitglieder am Startpunkt aufgenommen oder entladen werden. 
<br>Mit einem Klick auf <input class="button_nosize" type="submit" value ="Weiter >>"> wird dasselbe nochmal f&uuml;r den Zielplaneten eingerichtet. Danach fliegt die Flotte los.</br>
 
';
?>
