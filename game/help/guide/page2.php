<?PHP

$guide_html = '<span class="caption"><u>Die Planeten</u></span>
<p align="justify">
In Star Trek Galaxy Wars stehen die Planeten im Mittelpunkt des Spiels, welche laufend Ressourcen produzieren.
<ul> Die drei Hauptressourcen: 

<li> (<img src="'.$game->GFX_PATH.'menu_metal_small.gif"> Metall, </li>
<li> <img src="'.$game->GFX_PATH.'menu_mineral_small.gif"> Mineral </li>
<li> <img src="'.$game->GFX_PATH.'menu_latinum_small.gif"> und Latinum </li>

</ul>

mit denen verschiedene Strukturen gebaut und technologische Errungenschaften erforscht werden k&ouml;nnen wie z.B. : 
Werften, Akademien, Forschungszentren, Handelszentren usw. <br><br>
Die Planeten werden nach folgendem Schema aufgeteilt, das unter der Datenbank <a href="'.parse_link('a=database').'">&quot;<span class="highlight_link">Allgemein</span>&quot;</a>
f&uuml;r alle Spieler verf&uuml;gbar ist.</p>

<p>
Grunds&auml;tzlich gibt es zwei unterschiedliche Kategorien von Planeten im Spiel:

<ul>1. Planeten der Katgorie &quot;<u>MINENKOLONIEN</u>&quot;: Dazu geh&ouml;ren :

<li><img src="'.FIXED_GFX_PATH.'planet_type_a.png" width="20" height="20" border="0"> <a href="'.parse_link('a=database&planet_type=A#A').'">A (Gas-Supergiganten)</a>,</li>

<li><img src="'.FIXED_GFX_PATH.'planet_type_b.png" width="20" height="20" border="0"> <a href="'.parse_link('a=database&planet_type=B#B').'">B (Gas-Giganten)</a>,</li>

<li><img src="'.FIXED_GFX_PATH.'planet_type_g.png" width="20" height="20" border="0"> <a href="'.parse_link('a=database&planet_type=G#G').'">G (Geokristallin)</a>,</li>

<li><img src="'.FIXED_GFX_PATH.'planet_type_i.png" width="20" height="20" border="0"> <a href="'.parse_link('a=database&planet_type=I#I').'">I (Gasf&ouml;rmige Überriesen)</a>,</li>

<li><img src="'.FIXED_GFX_PATH.'planet_type_j.png" width="20" height="20" border="0"> <a href="'.parse_link('a=database&planet_type=J#J').'">J (Gasf&ouml;rmige Riesen)</a>,</li>

<li><img src="'.FIXED_GFX_PATH.'planet_type_l.png" width="20" height="20" border="0"> <a href="'.parse_link('a=database&planet_type=L#L').'">L (Eiswelten)</a> und </li>

<li><img src="'.FIXED_GFX_PATH.'planet_type_y.png" width="20" height="20" border="0"> <a href="'.parse_link('a=database&planet_type=Y#Y').'">Y (D&auml;monplaneten)</a>;</li><br>
</ul>

<ul>2. Planeten der Kategorie &quot;<u>ARBEITSKOLONIEN</u>&quot;: Zu dieser Kategorie geh&ouml;rt erd&auml;hnliche Planeten, also vor allem die Klassen :

<li><img src="'.FIXED_GFX_PATH.'planet_type_m.png" width="20" height="20" border="0"> <a href="'.parse_link('a=database&planet_type=M#M').'">M (erd&auml;hnlich) </a> </li>

<li><img src="'.FIXED_GFX_PATH.'planet_type_n.png" width="20" height="20" border="0"> <a href="'.parse_link('a=database&planet_type=N#N').'">N (Planet im Verfall)</a> </li>
</ul>

<ul> 
<li>... gefolgt von den Klassen <img src="'.FIXED_GFX_PATH.'planet_type_e.png" width="20" height="20" border="0"> <a href="'.parse_link('a=database&planet_type=E#E').'">E (Geofr&uuml;hzeitlich)</a>,</li>

<li><img src="'.FIXED_GFX_PATH.'planet_type_f.png" width="20" height="20" border="0"> <a href="'.parse_link('a=database&planet_type=F#F').'">F (Geometallisch)</a>,</li>

<li><img src="'.FIXED_GFX_PATH.'planet_type_k.png" width="20" height="20" border="0"> <a href="'.parse_link('a=database&planet_type=K#K').'">K (Mars&auml;hnlich)</a>,</li>

<li><img src="'.FIXED_GFX_PATH.'planet_type_h.png" width="20" height="20" border="0"> <a href="'.parse_link('a=database&planet_type=H#H').'">H (W&uuml;stenplanet)</a> </li>

in geringem Ma&szlig;e auch die weiteren Planetenklassen:

<li><img src="'.FIXED_GFX_PATH.'planet_type_c.png" width="20" height="20" border="0"> <a href="'.parse_link('a=database&planet_type=C#C').'">C (Geoinaktiv)</a> und </li>

<li><img src="'.FIXED_GFX_PATH.'planet_type_d.png" width="20" height="20" border="0"> <a href="'.parse_link('a=database&planet_type=D#D').'">D (Mond&auml;hnlich)</a>; </li>

<li> Auf s&auml;mtlichen Planeten sind Minen vorhanden, die unterschiedlich entweder gr&ouml;ßere Mengen an Rohstoffen liefern k&ouml;nnen oder manchmal auch nur durchschnittliche Ressourcen erwirtschaften. 
Planeten erlauben, eine gro&szlig;e Anzahl von <img src ="'.$game->GFX_PATH.'menu_worker_small.gif"> Arbeitern einzusetzen, gerade wenn diese Planeten extra &quot;terrafromiert&quot; werden (dazu sp&auml;ter mehr)</li>

</ul>

</p>
<p align="justify">

ARBEITSKOLONIEN bieten einen guten Ausgleich zwischen den erhaltenen Ressourcen und der eingesetzten Zeit. 

Ausnahme stellen die Klassen C und D dar, welche eher langsam in der Entwicklung sind beim Bauen von Strukturen und der Erforschung technologischer Entwicklungen, 
denn Sie sind ohne entsprechende Zuwendung von aussen, allein nicht in der Lage die riesigen Mengen von Ressourcen zu produkzieren, die man f&uuml;r die besseren Schiffe 
ben&ouml;tigt.<br>

Darum ist es besser auf MINENKOLONIEN zur&uuml;ckzugreifen, welche zwar Technologien und Bauwerke langsamer aufbauen, aber &auml;usserst ergiebig in der Produktion sind, wenn 
es um die Ergiebigkeit von Ressourcen geht.

Auch hier gibt es eine Ausnahme: Der D&auml;monplanet Klasse Y stellt zwar eine riesige Menge an Ressourcen bei vollem Ausbau zur Verf&uuml;gung, jedoch entwickelt er sich am 
langsamsten von allen Kolonieklassen.</p>

<p align="justify">
Minenplaneten bringen auch weniger Arbeiter hervor. Daher ben&ouml;tigt man in den fr&uuml;hen Entwicklungsstadien der Kolonien notwendigerweise Arbeiter von anderen Planeten.</p>';

?>

