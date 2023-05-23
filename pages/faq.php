<?PHP

$title_html = 'FAQ';
$meta_descr = 'Heufige Fragen';
$main_html='
<h1>FAQ</h1>
[<b>FAQ</b>]&nbsp;&nbsp;[<a href="generic.php?a=planeten">Planeten Datenbank</a>]&nbsp;&nbsp;[<a href="generic.php?a=rassenwerte">Rassenwerte</a>]&nbsp;&nbsp;<br><br>
<table width="100%" cellpadding="5" cellspacing="5">
<tr>
	<td align="justify">
		Hier sind die Antworten auf die am meisten gestellten Fragen. Dieser Bereich kann st&auml;ndig aktualisiert werden.<br>
		Wenn Du weitere Anregungen hast schaue bitte in unser <a href="https://st-gw.de/forum/" target="blank"><b><u>Forum</u></b></a>, und gebe 
		dort Deine Anregungen zur Erweiterung weiter. Vielen Dank.
	</td>
</tr>
</table>
<table border=0 cellpadding=2 cellspacing=2 width="100%">
<tr><td>
	<table class="style_inner" width="100%" align="center" border="1" cellpadding="5" cellspacing="5">
	<tr>
	<td width="50%"><font size="3"><b>Fragen</b></font></td>
	<td width="50%"><font size="3"><b>Antworten</b></font></td>
	</tr>
	<tr>
		<td valign="top" align="justify"><b> Was passiert mit Planeten nach einem Angriff? Kann man die Ressourcen pl&uuml;ndern? Was kann nach einem Angriff auf dem Planeten verloren gehen? 
		(Strukturen, Verteidigungen, Truppen)</b></td>
		<td valign="top" align="justify">Du kannst einem Planeten nach einem Angriff &uuml;bernehmen wenn Du den Kampf gewonnen hast. Das Pl&uuml;ndern von Ressourcen ist nicht m&ouml;glich. 
		W&auml;rend einer Schlacht k&ouml;nnen Strukturen auf dem Planeten nur zerst&ouml;rt werden, wenn der Angreifer die Oberfl&auml;che des Planeten bombardiert.</td>
	</tr>
	<tr>
		<td valign="top" align="justify"><b>Wie kann ich unbewohnte Planeten kolonisieren und warum ist diese Funktion deaktiviert?</b></td>
		<td valign="top" align="justify">Ab 200 Punkten (einige Rassen wie die Ferengi ben&ouml;tigen 250 Punkte) hast Du die M&ouml;glichkeit ein Template fÃ¼r ein Kolonisationsschiff zu erstellen. 
		Damit kannst Du dann Planeten kolonisieren.<br>
		<b><u>TIPP: Es ist ratsam einen Scout voraus zu schicken um sicher zu stellen, dass in der Umlaufbahn des Zielplaneten keine feindlichen Schiffe sind.</u></b></td>
	</tr>
	<tr>
		<td valign="top" align="justify"><b>Wie kann ich einen bewohnten Planeten erobern?</b></td>
		<td valign="top" align="justify">Um einen fremden, bewohnten, Planeten zu erobern musst Du zuerst die m&ouml;gliche vorhandene Planetare Verteidigung ausschalten. 
		Diese kann aus kleinen und grossen Orbitalgesch&uuml;tzen und ebenso Kampfschiffen bestehen. Danach kannst Du mit der Bombardierung der Planetenoberfl&auml;che fortfahren um eine weitere Schw&auml;chung 
		der Abwehr auf dem Boden zu erreichen. Bedenke dabei, dass nicht nur Truppen und Arbeiter auf dem Planeten get&ouml;tet werden sondern auch Geb&auml;udestrukturen zerst&ouml;rt werden die Du m&uuml;hsam 
		wieder aufbauen musst. Alternativ kannst Du ohne Bombardierung den Planeten &uuml;bernehmen. HierfÃ¼r solltest Du ausreichend Truppen mitnehmen und Dich auf einen erbitterten Bodenkampf einstellen.</td>
	</tr>
	<tr>
		<td valign="top" align="justify"><b>Ich habe einen Raumhafen und die Schiffswerft, Templates habe ich mir auch erstellt aber ich kann keine Schiffe bauen, warum?</b></td>
		<td valign="top" align="justify">Folgende Gr&uuml;nde kommen daf&uuml;r in Frage:<br><br>
		<li>der Planet hat noch nicht ausreichend Punkte zum Bau dieses Schiffes (Link "Start" erscheint in Rot)</li>
		<li>im Forschungszentrum sind ben&ouml;tigte Komponenten des Schiffes noch nicht erforscht (Link "Start" erscheint in Rot)</li>
		<li>es fehlen f&uuml;r den Bau ben&ouml;tigte Ressourcen oder Truppen (Link "Start" erscheint in Gelb), halte den Mousezeiger auf den Link "Start" und Du siehst was f&uuml;r den Bau fehlt.</li></td>
	</tr>
	<tr>
		<td valign="top" align="justify"><b>Welchem Zweck dient die Erfahrung von Schiffen?</b></td>
		<td valign="top" align="justify">Nach jeden gewonnen Kampf ver&auml;ndert sich die Erfahrung von Schiffen. Diese hat Einfluss auf die n&auml;chsten K&auml;mpfe und stellt somit einen Bonus bei Schiffsk&auml;mpfen dar.</td>
	</tr>
	<tr>
		<td valign="top" align="justify"><b>Hilfe! Ich kann auf einem Planeten nichts mehr machen?</b></td>
		<td valign="top" align="justify">Auf diesem Planeten fehlen die ben&ouml;tigten Sicherheitstruppen. Dadurch wird die Produktion in der Akademie eingestellt und alle Bau und Forschungsvorhaben angehalten. 
		Um wieder die Kontrolle &uuml;ber den Planeten zu erhalten muss die Sicherheit auf dem Planeten zu 70% wiederhergestellt sein. Du musst also weitere Sicherheitskr&auml;fte auf den Planeten schaffen 
		um Aufst&auml;nde zu verhindern. Solltest Du diesen Zustand der planetaren Aufst&auml;nde nicht beheben wirst Du den Planeten verlieren.</td>
	</tr>
	<tr>
		<td valign="top" align="justify"><b>Kann ich auf einem Planeten, der viele Sicherheitskr&auml;fte ben&ouml;tigt, weitere Truppen produzieren?</b></td>
		<td valign="top" align="justify">Ja, aber daf&uuml;r ist es erforderlich, dass Du in der Planetaren Forschung das Terraforming erforscht um das Bev&ouml;lkerungslimit zu erh&ouml;hen.</td>
	</tr>
	<tr>
		<td valign="top" align="justify"><b>Welcher Unterschied besteht zwischen den Vertr&auml;gen eines Nichtangriffspakts und einem B&uuml;ndnis?</b></td>
		<td valign="top" align="justify">Dies macht sich in Schiffsbewegungen deutlich. Bei einem B&uuml;ndnis werden Flotten die auf "rotem Alarm" stehen nicht angreifen. 
		So kann man beispielsweise Handelsrouten etablieren ohne das diese vom B&uuml;ndnispartner angegriffen werden. Mit einem reinen Nichtangriffspakt ist dies nicht m&ouml;glich.</td>
	</tr>
	<tr>
		<td valign="top" align="justify"><b>Kann man Truppen in Endlosschleifen produzieren?</b></td>
		<td valign="top" align="justify">Ja, daf&uuml;r setzt Du das H&auml;kchen im K&auml;stchen "Endlos". Dabei werden dann die angegebenen Mengen in einer Schleife produziert.<br>
		Beispiel:<br><br>
		<li>Techniker 45 endlos</li>
		<li>Mediziner 4 endlos</li>
		<li>Commander 12 endlos</li><br><br>
		So werden dann erst die 45 Techniker, 4 Mediziner und 12 Commander ausgebildet. Anschliessend geht es dann mit den 45 Technikern erneut weiter.</td>
	</tr>
	<tr>
		<td valign="top" align="justify"><b>Wie verwende ich den Ferengitransport um Truppen und Ressourcen von einem Planeten zum anderen zu transportieren?</u>?</b></td>
		<td valign="top" align="justify"><li>Klicke in der Planeten&uuml;bersicht auf den Namen des Zielplaneten</li>
		<li>im unteren Bereich der Taktik findest Du dann "Ferengi Handelsgilde" (wenn ausgeblendet klicke auf "wieder anzeigen")</li>
		<li>Nun kannst Du die Mengen eintragen welche Du transportieren willst und klickst dann auf "Lieferung starten"</li></td>
	</tr>
	<tr>
		<td valign="top" align="justify"><b>Sind Forschungen die auf dem Heimatplaneten durchgef&uuml;hrt wurden auf andere Planeten &uuml;bertragen werden?</b></td>
                <td valign="top" align="justify">Nein, aber auf anderen Planeten ist die Forschungszeit reduziert wenn Technologien bereis auf anderen Planeten erforscht wurden.</td>
<!--		<td valign="top" align="justify">Per farlo &egrave; necessario utilizzare uno o pi&ugrave; navi cargo, altrimenti, se sul pianeta &egrave; presente un "<b>Centro Commerciale</b>", &egrave; possibile acquistare truppe al <b>Centro Commerciale Galattico di Ursa Mirror</b> da inviare presso il pianeta o ancora usare i trasporti Ferengi tramite il tattico.</td>-->
	</tr>
	<tr>
<!--		<td valign="top" align="justify"><b>Come faccio ad inviare risorse ad un pianeta con i Ferengi?</b></td>-->
<!--		<td valign="top" align="justify">Nein, aber auf anderen Planeten ist die Forschungszeit reduziert wenn Technologien bereis auf anderen Planeten erforscht wurden.</td>-->
	</tr>
	<tr>
		<td valign="top" align="justify"><b>Welche Anforderungen haben die verschiedenen Truppen?</b></td>
		<td valign="top" align="justify">
			<li>Truppen Level 1 = Akademie Stufe 1</li>
			<li>Truppen Level 2 = Akademie Stufe 5</li>
			<li>Truppen Level 3 = Akademie Stufe 9 und Forschungszentrum.</li>
		</td>
	</tr>
	<tr>
		<td valign="top"><b>Erwirkt die Erh&ouml;hung der Besatzung eines Schiffes eine verbesserte Leistung?</b></td>
		<td valign="top" align="justify">Nein, die Erh&ouml;hung der Besatzung bedeutet,dass diese bei den Operationen zur Eroberung eines Planeten Gegner eingesetzt werden k&ouml;nnen.</td>
	</tr>
	</table>
</td>
</tr>
</tr>
	<td align="justify">
		Versione FAQ 1.2 - 31/03/21
	</td>
</tr>
</table>

</td>
</tr>
</table>

';
?>

