<?PHP

$guide_html = '<span class="caption">Die Planeten</span>
<p align="justify">
In STGW stehen die Planeten im engeren Sinne im Mittelpunkt des Spiels. Tatsächlich produzieren sie Ressourcen
(<img src="'.$game->GFX_PATH.'menu_metal_small.gif"> Metalle, <img src="'.$game->GFX_PATH.'menu_mineral_small.gif"> Minerale
<img src="'.$game->GFX_PATH.'menu_latinum_small.gif"> Latinum) mit denen verschiedene Strukturen gemacht werden (Werften, Akademien, Forschungszentren
, Handelszentrum etc) und technologische Forschung.<br><br>
Die Planeten werden nach folgendem Schema katalogisiert, das unter der Datenbank <a href="'.parse_link('a=database').'">&quot;<span class="highlight_link">Allgemein</span>&quot;</a>
f&uuml;r alle Spieler verf&uuml;gbar ist.</p>
<p>
Grunds&auml;tzlich gibt es zwei Kategorien von Planeten::
<ul>
<li>Planeten der Katgorie &quot;<u>miniera</u>&quot;: Folgende Planeten geh&ouml;ren dazu
<img src="'.FIXED_GFX_PATH.'planet_type_a.png" width="20" height="20" border="0"> <a href="'.parse_link('a=database&planet_type=A#A').'">A</a>,
<img src="'.FIXED_GFX_PATH.'planet_type_b.png" width="20" height="20" border="0"> <a href="'.parse_link('a=database&planet_type=B#B').'">B</a>,
<img src="'.FIXED_GFX_PATH.'planet_type_g.png" width="20" height="20" border="0"> <a href="'.parse_link('a=database&planet_type=G#G').'">G</a>,
<img src="'.FIXED_GFX_PATH.'planet_type_i.png" width="20" height="20" border="0"> <a href="'.parse_link('a=database&planet_type=I#I').'">I</a>,
<img src="'.FIXED_GFX_PATH.'planet_type_j.png" width="20" height="20" border="0"> <a href="'.parse_link('a=database&planet_type=J#J').'">J</a>,
<img src="'.FIXED_GFX_PATH.'planet_type_l.png" width="20" height="20" border="0"> <a href="'.parse_link('a=database&planet_type=L#L').'">L</a> und
<img src="'.FIXED_GFX_PATH.'planet_type_y.png" width="20" height="20" border="0"> <a href="'.parse_link('a=database&planet_type=Y#Y').'">Y</a>;</li><br>
<li>Planeten der Kategorie &quot;<u>lavoratori</u>&quot;: Zu dieser Kategorie gehört erdähnliche Planeten, also vor allem die Klassen
<img src="'.FIXED_GFX_PATH.'planet_type_m.png" width="20" height="20" border="0"> <a href="'.parse_link('a=database&planet_type=M#M').'">M</a> ed
<img src="'.FIXED_GFX_PATH.'planet_type_n.png" width="20" height="20" border="0"> <a href="'.parse_link('a=database&planet_type=N#N').'">N</a> gefolgt
von den Klassen <img src="'.FIXED_GFX_PATH.'planet_type_e.png" width="20" height="20" border="0"> <a href="'.parse_link('a=database&planet_type=E#E').'">E</a>,
<img src="'.FIXED_GFX_PATH.'planet_type_f.png" width="20" height="20" border="0"> <a href="'.parse_link('a=database&planet_type=F#F').'">F</a>,
<img src="'.FIXED_GFX_PATH.'planet_type_k.png" width="20" height="20" border="0"> <a href="'.parse_link('a=database&planet_type=K#K').'">K</a>,
<img src="'.FIXED_GFX_PATH.'planet_type_h.png" width="20" height="20" border="0"> <a href="'.parse_link('a=database&planet_type=H#H').'">H</a> e
in geringem Ma&szlig;e auch die Klassen
<img src="'.FIXED_GFX_PATH.'planet_type_c.png" width="20" height="20" border="0"> <a href="'.parse_link('a=database&planet_type=C#C').'">C</a> und
<img src="'.FIXED_GFX_PATH.'planet_type_d.png" width="20" height="20" border="0"> <a href="'.parse_link('a=database&planet_type=D#D').'">D</a>;
Diese Planeten haben Minen, die eine große Menge liefern. Durchschnittliche Ressourcen, aber erlauben, eine große Anzahl von zu erhalten
<img src ="'.$game->GFX_PATH.'menu_worker_small.gif"> vor allem Arbeiter
se &quot;terraformati&quot; (si discuter&agrave; pi&ugrave; avanti di cosa sia il &quot;terraforming&quot;;</li>
</ul>
</p>
<p align="justify">
I pianeti &quot;lavoratori&quot; costituiscono un buon compromesso tra le risorse ottenute ed il tempo impiegato per ottenerle (anche se le classi
C e D sono piuttosto lenti nel progredire, ossia nel costruire strutture e ricercare sviluppi tecnologici), tuttavia da soli non sono in grado di
produrre le ingenti quantit&agrave; di risorse necessarie a sviluppare le tecnologie migliori o le navi pi&ugrave; potenti in breve tempo.<br>
Per questo &egrave; bene ricorrere ai pianeti &quot;miniera&quot;, molto lenti nello sviluppare tecnologie e strutture ma fenomenali nel produrre
un determinato tipo di risorsa (ad eccezione della classe Y che fornisce una grande quantit&agrave; di tutte le risorse, anche se &egrave;
la pi&ugrave; lenta a svilupparsi).</p>
<p align="justify">
I pianeti &quot;miniera&quot; solitamente producono pochissimi lavoratori, il che rende necessario nelle prime
fasi di sviluppo l&#146;apporto di lavoratori da altri pianeti.</p>';

?>
