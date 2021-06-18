<?PHP

$guide_html = '<span class="caption">Die RAUMFLOTTEN</span><br>
<span class="sub_caption2">Teil 3: Mit dem Taktik Men&uuml; arbeiten, Kolonisieren</span>

<p align="justify">
<br>Eine weitere M&ouml;glichkeit, eine Flotte loszuschicken, w&auml;re &uuml;ber das Men&uuml;;
"<a href="'.parse_link('a=tactical_cartography').'"><span class="highlight_link">Taktik</span></a>"m&ouml;glich. In der "Taktischen Zentrale" stehen mehrere Optionen zur Auswahl, die m&ouml;glichst genau besprochen werden:</br>
</p>

<p align="justify">
<b><u>Stellare Kartographie</u></b>
<br>Hier kommt ein Bild der gesamten Galaxie. Sie ist in vier Quadranten aufgeteilt, von oben links im Uhrzeigersinn.</br>

<ul>
     <li><a href="'.parse_link('a=tactical_cartography&quadrant_id=1').'"><span class="highlight_link">1 Gamma</span></a> in <span style="color: red">ROT angezeigt --> Sektoren A1-A9 : I1-I9</span>
     <li><a href="'.parse_link('a=tactical_cartography&quadrant_id=2').'"><span class="highlight_link">2 Delta</span></a> in <span style="color: blue">BLAU angezeigt --> Sektoren A10-A18 : I10-I18 </span>
     <li><a href="'.parse_link('a=tactical_cartography&quadrant_id=4').'"><span class="highlight_link">4 Beta</span></a> in <span style="color: yellow">GELB angezeigt --> Sektoren J1-J9 : R1-R9</span>
    <li><a href="'.parse_link('a=tactical_cartography&quadrant_id=3').'"><span class="highlight_link">3 Alpha</span></a> in <span style="color: lightgreen">GRÜN angezeigt --> Sektoren J10-J18 : R10-R18</span>
</ul>

<br>Jeder Quadrant hat 9 x 9 Sektoren - das sind 81 pro Quadrant. Jeder dieser 81 Sektoren kann beliebig viele Sonnensysteme beinhalten. In einem Sonnensystem k&ouml;nnen bis zu maximal 8 Planeten vorhanden sein.</br>

<br>Alle diese Planeten sind bereisbar, es k&ouml;nnen z.B. Expertisen &uuml;ber Bodenbeschaffenheit und die Menge an zu erwartenden Ressourcen abgefragt werden.</br> 

<br>Sobald Koordinaten eines Planeten bekannt werden, werden diese der Datenbank im Profil des Spielers hinzugef&uuml;gt; das ist z.B. f&uuml;r Rohstoffausbeute wichtig f&uuml;r eine sp&auml;tere Kolonisierung. Planeten k&ouml;nnen kartografiert, &uuml;berpr&uuml;ft, kolonisiert oder (soweit besiedelt auch) bek&auml;mpft werden.</br>

<br>Zur Stellaren Kartografie k&ouml;nnte man im Spiel z.B. auch gelangen, indem die Standortkoordinaten einer Flotte oder eines Schiffes aufgerufen werden.</br>

<br>Solche Koordinaten ( ohne Klammern ) k&ouml;nnten auch per Hand eingegeben werden, um die Karte auf einen anderen Standort in der Galaxis umzustellen oder eine Flotte dorthin zu schicken. </br>

<br><i>(Ein Beispiel f&uuml;r Koordinaten w&auml;re z.Bsp: <span style="color: orange">A9:B6:6 </span> ==>> (A9 Gamma-Quadrant, B6 Standort des Sonnensystems in der Sektorenkarte, 6 w&auml;re der 6. Planet) usw.</i></br>

</p>

<p align="justify">
<b><u>Weitere Einstellungen in der "taktischen Zentrale"</u></b>

<ul>
<li>Schiffsbewegungen</li>
<br>Liste aller gerade jetzt fliegenden Schiffe eines Spielers</br>

<li>Spieler Info</li>
<br>Kolonien des Spielers. Ein Klick auf die Karte vergr&ouml;&szlig;ert Sie, um Sonnensysteme abzufragen.</br>

<li>Kolonisierung</li>
<br>Die Ansicht aller m&ouml;glichen kolonisierbaren Systeme der Galaxis</br>

<li>Bekannte Systeme</li>
<br>Liste aller vom Spieler erforschten Sonnensysteme. Es werden nur Sonnensysteme angezeigt, die vollst&auml;ndig kartografiert wurden per Expertise/Bodenproben</br>

<li>Sensoren</li>
<br>Eine weitere M&ouml;glichkeit alle Schiffe und deren Ziel zu &uuml;berpr&uuml;fen. Zus&auml;tzlich werden auch Handelstransporte zu Ihnen oder Schiffe auf den Weg zu einer Spielerkolonie angezeigt.</br>

</ul>
</p>

<p align="justify">
<b><u>Wie verschickt man eine Flotte &uuml;ber das Men&uuml; Taktik?</u></b>

<br> Ähnlich wie bereits unter dem Men&uuml; "<a href="'.parse_link('a=ship_fleets_display').'"><span class="highlight_link">Flotte</span></a>" erl&auml;utert, gibt es &uuml;ber das Men&uuml; "<a href="'.parse_link('a=tactical_cartography').'"><span class="highlight_link">Taktik</span></a>" die M&ouml;glichkeit Flotten zu verschicken.</br>

<br>Dazu wird ein Zielplanet ausgew&auml;hlt. Dann kann die Flotte dorthin geschickt werden, indem eine der <b>"Flotten, zu diesem Planeten schicken"</b> ausgw&auml;hlt wird und die Schaltfl&auml;che <input type="submit" class="button" value="Weiter >>"> gedr&uuml;ckt wird.</br>

<br>Sind am Zielpunkt weitere Flotten vorhanden, k&ouml;nnen weitere Befehle angezeigt werden, die sp&auml;ter nochmal erl&auml;utert werden.</br>
</p>

<p align="justify">
<b><u>Das Kolonieschiff und die Kolonisierung von unbewohnten Planeten</u></b>

<br>F&uuml;r die Kolonisierung wird das zivile "Kolonieschiff" ben&ouml;tigt. Es wird gebaut mit einer riesigen Anzahl an Arbeitern, die sp&auml;ter zu Kolonisten werden. Diese Schiffe k&ouml;nnen zwar eine geringe Summe an Klasse 1 Truppen transportieren, aber Sie haben keinen gro&szlig;en Frachtraum, noch benutzbare Waffen an Bord. </br>

<br>Diese Schiffe werden &uuml;blicherweise an einen unbewohnten Planeten geschickt, der brauchbar f&uuml;r eine Kolonisierung erscheint. Beim Losschicken eines Kolonieschiffes wird die Zielmission um das Anklicken von "Kolonisieren" erweitert. Die Kolonisierung erfolgt automatisch am Zielpunkt.</br>

<br>Jede Planeten-Neubesiedlung wird weitere Frachtschiffe mit Sicherheitstruppen und ggf. Ressourcen zum Aufbau ben&ouml;tigen, um Aufst&auml;nde zu vermeiden. Daher ist nach der Kolonisierung dringend das Landen von Truppen notwendig. Die Anzahl an Mindest-Truppen, erh&ouml;ht sich bei jedem weiteren Planeten.</br>

<br> Die Liste der ben&ouml;tigten Sicherheit befindet sich unter dem Hauptmen&uuml; >> "Datenbank" >> "Allgemein" (der dritte Unterpunkt) >> z.B. "Sicherheitstruppen". </br>

<br>Denn wenn die Aufst&auml;nde drei Tage nicht beendet werden, wird der frischbesiedelte Planet selbstst&auml;ndig und damit der Kontrolle des Spielers entzogen.</br>
<br>Die Erh&ouml;hung der Anzahl der Sicherheitskr&auml;fte pro neubesiedelten Planeten ist erst ab dem 40. Planeten auf hohen Niveau gleichbleibend.</br> 
</p>

';
?>
