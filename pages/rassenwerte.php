<?PHP

$title_html = 'Rassenwerte';
$meta_descr = 'Uebersicht über alle Planeten';
$main_html='
<style type="text/css">
<!-- A:link {FONT-SIZE: 11px; COLOR: #c0c0c0; FONT-FAMILY: Arial, Luxi Sans; TEXT-DECORATION: none}
A:visited {FONT-SIZE: 11px; COLOR: #c0c0c0; FONT-FAMILY: Arial, Luxi Sans; TEXT-DECORATION: none}
A:hover {FONT-SIZE: 11px; COLOR: #ffd700; FONT-FAMILY: Arial, Luxi Sans; TEXT-DECORATION: none}
A:active {FONT-SIZE: 11px; COLOR: #ffd700; FONT-FAMILY: Arial, Luxi Sans; TEXT-DECORATION: none}
A.nav:link {FONT-WEIGHT: bold; FONT-SIZE: 10px}
A.nav:visited {FONT-WEIGHT: bold; FONT-SIZE: 10px}
A.nav:hover {FONT-WEIGHT: bold; FONT-SIZE: 10px}
A.nav:active {FONT-WEIGHT: bold; FONT-SIZE: 10px}
TD {FONT-SIZE: 11px; FONT-FAMILY: Arial, Luxi Sans; COLOR: #c0c0c0;  bgcolor=#cccccc}
input[type=checkbox] { border-style: none;}
INPUT[type=submit], INPUT[type=text], INPUT[type=password] {BORDER-RIGHT: #959595 1px solid; BORDER-TOP: #959595 1px solid; FONT-SIZE: 11px; BORDER-LEFT: #959595 1px solid; COLOR: #959595; BORDER-BOTTOM: #959595 1px solid; FONT-FAMILY: Verdana; BACKGROUND-COLOR: #000000}
TEXTAREA {BORDER-RIGHT: #959595 1px solid; BORDER-TOP: #959595 1px solid; FONT-SIZE: 11px; BORDER-LEFT: #959595 1px solid; COLOR: #959595; BORDER-BOTTOM: #959595 1px solid; FONT-FAMILY: Verdana; BACKGROUND-COLOR: #000000}
SELECT {BORDER-RIGHT: #959595 1px solid; BORDER-TOP: #959595 1px solid; FONT-SIZE: 11px; BORDER-LEFT: #959595 1px solid; COLOR: #959595; BORDER-BOTTOM: #959595 1px solid; FONT-FAMILY: Verdana; BACKGROUND-COLOR: #000000}
SPAN.caption {FONT-WEIGHT: bold; FONT-SIZE: 19pt; COLOR: #c0c0c0; FONT-FAMILY: Arial, Luxi Sans}
SPAN.sub_caption {FONT-WEIGHT: bold; FONT-SIZE: 15pt; COLOR: #c0c0c0; FONT-FAMILY: Arial, Luxi Sans}
SPAN.sub_caption2 {FONT-WEIGHT: bold; FONT-SIZE: 11pt; COLOR: #c0c0c0; FONT-FAMILY: Arial, Luxi Sans}
SPAN.text_large {FONT-WEIGHT: bold; FONT-SIZE: 9pt; COLOR: #c0c0c0; FONT-FAMILY: Arial, Luxi Sans}
SPAN.text_medium {FONT-WEIGHT: bold; FONT-SIZE: 8pt; COLOR: #c0c0c0; FONT-FAMILY: Arial, Luxi Sans}
SPAN.highlight { color: #FFFF00; font-weight: bold; text-decoration: none; }
SPAN.highlight_link { color: #FFFF00; font-weight: bold; text-decoration: underline; }
BODY {MARGIN: 0px; SCROLLBAR-ARROW-COLOR: #ccccff; SCROLLBAR-BASE-COLOR: #131c46; PADDING-RIGHT: 0px; PADDING-LEFT: 0px; PADDING-BOTTOM: 0px; PADDING-TOP: 0px; }
TEXTAREA {PADDING-RIGHT: 0px; PADDING-LEFT: 0px; PADDING-BOTTOM: 0px; MARGIN: 0px; SCROLLBAR-ARROW-COLOR: #ccccff; PADDING-TOP: 0px; SCROLLBAR-BASE-COLOR: #131c46;}

input.button, input.button_nosize, input.field, input.field_nosize, textarea, select
                          { color: #959595; font-family: Arial, Luxi Sans, Helvetica, sans-serif; font-size: 11px; background-color: #000000; border: 1px solid #959595; }
body, textarea {
      scrollbar-base-color:#000000;
      scrollbar-3dlight-color:#000000;
      scrollbar-arrow-color:#D8D8D8;
      scrollbar-darkshadow-color:#000000;
      scrollbar-face-color:#000000;
      scrollbar-highlight-color:#000000;
      scrollbar-shadow-color:#000000;
      scrollbar-track-color:#2C2C2C;
  }

table.border_grey         { border: 1px solid #000000; }
table.border_grey2        { border-top: 1px solid 000000; border-right: 1px solid 000000; border-bottom: 1px solid #000000; }
table.border_blue         { border: 1px solid #000000; }
table.style_inner         { border: 1px solid #000000; background-color:#131c47;}
table.style_outer         { border: 1px solid #000000; background-color:#283359;}

td.style_msgunread         { border: 0px; background-color:#ff3359;}
td.style_msgread            { border: 0px; background-color:#131c47;}

fieldset { border: 1px solid #c0c0c0; }
hr { border: 1px solid #c0c0c0; }

-->

</style>
<!-- Middle -->
<table cellspacing="0" cellpadding="0" width="650" align="center" border="0">
<tbody>
<tr>
<td width="650"><br>
<center></center>
<br>
<center>[<a href="index.php?a=faq">FAQ</a>]&nbsp;&nbsp;[<a href="index.php?a=planeten">Planeten Datenbank</a>]&nbsp;&nbsp;[<b>Rassenwerte</b>]&nbsp;&nbsp;
<br><br>
    <table width="400" align="center" border="0" cellpadding="2" cellspacing="2" class="style_outer">
    <tr>
        <td align="center"><span class="sub_caption">Die Rassenwerte von STGW</span></td>
    </tr>
    

    <tr><td>
    <table width="400" align="center" border="0" cellpadding="3" cellspacing="3" class="style_inner">

    <tr>
        <td>Name der Rasse</td><td width="60" align="center"><a name="0">F&ouml;deration</a></td>
    </tr>
            

    <tr>
        <td>Bauzeit (Geb&auml;ude)</td><td width="60" align="center">110 %</td>
    </tr>
            

    <tr>
        <td>Bauzeit (Einheiten)</td><td width="60" align="center">115 %</td>
    </tr>
            

    <tr>
        <td>Bauzeit (Schiffe)</td><td width="60" align="center">100 %</td>
    </tr>
            

    <tr>
        <td>Forschungszeit</td><td width="60" align="center">700 %</td>
    </tr>
            

    <tr>
        <td>Baukosten (Geb&auml;ude)</td><td width="60" align="center">110 %</td>
    </tr>
            

    <tr>
        <td>Baukosten (Einheiten)</td><td width="60" align="center">110 %</td>
    </tr>
            

    <tr>
        <td>Baukosten (Schiffe)</td><td width="60" align="center">100 %</td>
    </tr>
            

    <tr>
        <td>Forschungskosten</td><td width="60" align="center">100 %</td>
    </tr>
            

    <tr>
        <td>Metallminenausbeute</td><td width="60" align="center">90 %</td>
    </tr>
            

    <tr>
        <td>Mineralienminenausbeute</td><td width="60" align="center">90 %</td>
    </tr>
            

    <tr>
        <td>Latinumraffinerieausbeute</td><td width="60" align="center">90 %</td>
    </tr>
            

    <tr>
        <td>Arbeiterausbeute</td><td width="60" align="center">100 %</td>
    </tr>
            

    <tr>
        <td>Schiffsangriff</td><td width="60" align="center">100 %</td>
    </tr>
            

    <tr>
        <td>Einheitenangriff</td><td width="60" align="center">100 %</td>
    </tr>
            

    <tr>
        <td>Schiffsverteidigung</td><td width="60" align="center">100 %</td>
    </tr>
            

    <tr>
        <td>Einheitenverteidigung</td><td width="60" align="center">100 %</td>
    </tr>
            

    <tr>
        <td>Geb&auml;udeverteidigung</td><td width="60" align="center">100 %</td>
    </tr>
            

    <tr>
        <td>Schiffsgeschwindigkeit</td><td width="60" align="center">100 %</td>
    </tr>
            

    <tr>
        <td>Sensorenreichweite</td><td width="60" align="center">100 %</td>
    </tr>
            

    <tr>
        <td>Technologieausnutzung</td><td width="60" align="center">110 %</td>
    </tr>
            

    <tr>
        <td>Kampfkraft der Arbeiter</td><td width="60" align="center">3</td>
    </tr>
            

    <tr>
        <td>Spielbar</td><td width="60" align="center">Ja</td>
    </tr>
            

    <tr>
        <td>Metkostenfaktor f&uuml;r Geb&auml;ude</td><td width="60" align="center">100 %</td>
    </tr>
            

    <tr>
        <td>Minkostenfaktor f&uuml;r Geb&auml;ude</td><td width="60" align="center">100 %</td>
    </tr>
            

    <tr>
        <td>Latkostenfaktor f&uuml;r Geb&auml;ude</td><td width="60" align="center">80 %</td>
    </tr>
            

    <tr>
        <td>Metkostenfaktor f&uuml;r Forschungen</td><td width="60" align="center">90 %</td>
    </tr>
            

    <tr>
        <td>Minkostenfaktor f&uuml;r Forschungen</td><td width="60" align="center">90 %</td>
    </tr>
            

    <tr>
        <td>Latkostenfaktor f&uuml;r Forschungen</td><td width="60" align="center">125 %</td>
    </tr>
            

    <tr>
        <td>Exportierbare Technologien</td><td width="60" align="center">Umwelt<br>Medizinisch<br>Automatisierung<br></td>
    </tr>
            

    <tr>
        <td>Unabh&auml;ngige Kolonie erstellen</td><td width="60" align="center">Ja</td>
    </tr>
            

    <tr>
        <td>Kolonisations beginn</td><td width="60" align="center">60</td>
    </tr>
            

    </table>
    </td></tr>

    <tr><td>
    <table width="400" align="center" border="0" cellpadding="3" cellspacing="3" class="style_inner">

    <tr>
        <td>Name der Rasse</td><td width="60" align="center"><a name="1">Romulaner</a></td>
    </tr>
            

    <tr>
        <td>Bauzeit (Geb&auml;ude)</td><td width="60" align="center">110 %</td>
    </tr>
            

    <tr>
        <td>Bauzeit (Einheiten)</td><td width="60" align="center">95 %</td>
    </tr>
            

    <tr>
        <td>Bauzeit (Schiffe)</td><td width="60" align="center">90 %</td>
    </tr>
            

    <tr>
        <td>Forschungszeit</td><td width="60" align="center">700 %</td>
    </tr>
            

    <tr>
        <td>Baukosten (Geb&auml;ude)</td><td width="60" align="center">110 %</td>
    </tr>
            

    <tr>
        <td>Baukosten (Einheiten)</td><td width="60" align="center">110 %</td>
    </tr>
            

    <tr>
        <td>Baukosten (Schiffe)</td><td width="60" align="center">95 %</td>
    </tr>
            

    <tr>
        <td>Forschungskosten</td><td width="60" align="center">100 %</td>
    </tr>
            

    <tr>
        <td>Metallminenausbeute</td><td width="60" align="center">95 %</td>
    </tr>
            

    <tr>
        <td>Mineralienminenausbeute</td><td width="60" align="center">95 %</td>
    </tr>
            

    <tr>
        <td>Latinumraffinerieausbeute</td><td width="60" align="center">95 %</td>
    </tr>
            

    <tr>
        <td>Arbeiterausbeute</td><td width="60" align="center">90 %</td>
    </tr>
            

    <tr>
        <td>Schiffsangriff</td><td width="60" align="center">90 %</td>
    </tr>
            

    <tr>
        <td>Einheitenangriff</td><td width="60" align="center">100 %</td>
    </tr>
            

    <tr>
        <td>Schiffsverteidigung</td><td width="60" align="center">95 %</td>
    </tr>
            

    <tr>
        <td>Einheitenverteidigung</td><td width="60" align="center">85 %</td>
    </tr>
            

    <tr>
        <td>Geb&auml;udeverteidigung</td><td width="60" align="center">95 %</td>
    </tr>
            

    <tr>
        <td>Schiffsgeschwindigkeit</td><td width="60" align="center">75 %</td>
    </tr>
            

    <tr>
        <td>Sensorenreichweite</td><td width="60" align="center">90 %</td>
    </tr>
            

    <tr>
        <td>Technologieausnutzung</td><td width="60" align="center">115 %</td>
    </tr>
            

    <tr>
        <td>Kampfkraft der Arbeiter</td><td width="60" align="center">3.5</td>
    </tr>
            

    <tr>
        <td>Spielbar</td><td width="60" align="center">Ja</td>
    </tr>
            

    <tr>
        <td>Metkostenfaktor f&uuml;r Geb&auml;ude</td><td width="60" align="center">115 %</td>
    </tr>
            

    <tr>
        <td>Minkostenfaktor f&uuml;r Geb&auml;ude</td><td width="60" align="center">100 %</td>
    </tr>
            

    <tr>
        <td>Latkostenfaktor f&uuml;r Geb&auml;ude</td><td width="60" align="center">100 %</td>
    </tr>
            

    <tr>
        <td>Metkostenfaktor f&uuml;r Forschungen</td><td width="60" align="center">100 %</td>
    </tr>
            

    <tr>
        <td>Minkostenfaktor f&uuml;r Forschungen</td><td width="60" align="center">60 %</td>
    </tr>
            

    <tr>
        <td>Latkostenfaktor f&uuml;r Forschungen</td><td width="60" align="center">130 %</td>
    </tr>
            

    <tr>
        <td>Exportierbare Technologien</td><td width="60" align="center">Umwelt<br>Medizinisch<br>Automatisierung<br></td>
    </tr>
            

    <tr>
        <td>Unabh&auml;ngige Kolonie erstellen</td><td width="60" align="center">Ja</td>
    </tr>
            

    <tr>
        <td>Kolonisations beginn</td><td width="60" align="center">60</td>
    </tr>
            

    </table>
    </td></tr>

    <tr><td>
    <table width="400" align="center" border="0" cellpadding="3" cellspacing="3" class="style_inner">

    <tr>
        <td>Name der Rasse</td><td width="60" align="center"><a name="2">Klingonen</a></td>
    </tr>
            

    <tr>
        <td>Bauzeit (Geb&auml;ude)</td><td width="60" align="center">100 %</td>
    </tr>
            

    <tr>
        <td>Bauzeit (Einheiten)</td><td width="60" align="center">120 %</td>
    </tr>
            

    <tr>
        <td>Bauzeit (Schiffe)</td><td width="60" align="center">110 %</td>
    </tr>
            

    <tr>
        <td>Forschungszeit</td><td width="60" align="center">800 %</td>
    </tr>
            

    <tr>
        <td>Baukosten (Geb&auml;ude)</td><td width="60" align="center">100 %</td>
    </tr>
            

    <tr>
        <td>Baukosten (Einheiten)</td><td width="60" align="center">100 %</td>
    </tr>
            

    <tr>
        <td>Baukosten (Schiffe)</td><td width="60" align="center">105 %</td>
    </tr>
            

    <tr>
        <td>Forschungskosten</td><td width="60" align="center">100 %</td>
    </tr>
            

    <tr>
        <td>Metallminenausbeute</td><td width="60" align="center">110 %</td>
    </tr>
            

    <tr>
        <td>Mineralienminenausbeute</td><td width="60" align="center">110 %</td>
    </tr>
            

    <tr>
        <td>Latinumraffinerieausbeute</td><td width="60" align="center">110 %</td>
    </tr>
            

    <tr>
        <td>Arbeiterausbeute</td><td width="60" align="center">105 %</td>
    </tr>
            

    <tr>
        <td>Schiffsangriff</td><td width="60" align="center">140 %</td>
    </tr>
            

    <tr>
        <td>Einheitenangriff</td><td width="60" align="center">150 %</td>
    </tr>
            

    <tr>
        <td>Schiffsverteidigung</td><td width="60" align="center">120 %</td>
    </tr>
            

    <tr>
        <td>Einheitenverteidigung</td><td width="60" align="center">120 %</td>
    </tr>
            

    <tr>
        <td>Geb&auml;udeverteidigung</td><td width="60" align="center">105 %</td>
    </tr>
            

    <tr>
        <td>Schiffsgeschwindigkeit</td><td width="60" align="center">85 %</td>
    </tr>
            

    <tr>
        <td>Sensorenreichweite</td><td width="60" align="center">70 %</td>
    </tr>
            

    <tr>
        <td>Technologieausnutzung</td><td width="60" align="center">100 %</td>
    </tr>
            

    <tr>
        <td>Kampfkraft der Arbeiter</td><td width="60" align="center">6</td>
    </tr>
            

    <tr>
        <td>Spielbar</td><td width="60" align="center">Ja</td>
    </tr>
            

    <tr>
        <td>Metkostenfaktor f&uuml;r Geb&auml;ude</td><td width="60" align="center">80 %</td>
    </tr>
            

    <tr>
        <td>Minkostenfaktor f&uuml;r Geb&auml;ude</td><td width="60" align="center">80 %</td>
    </tr>
            

    <tr>
        <td>Latkostenfaktor f&uuml;r Geb&auml;ude</td><td width="60" align="center">60 %</td>
    </tr>
            

    <tr>
        <td>Metkostenfaktor f&uuml;r Forschungen</td><td width="60" align="center">60 %</td>
    </tr>
            

    <tr>
        <td>Minkostenfaktor f&uuml;r Forschungen</td><td width="60" align="center">60 %</td>
    </tr>
            

    <tr>
        <td>Latkostenfaktor f&uuml;r Forschungen</td><td width="60" align="center">105 %</td>
    </tr>
            

    <tr>
        <td>Exportierbare Technologien</td><td width="60" align="center">Umwelt<br>Medizinisch<br>Bergbau</td>
    </tr>
            

    <tr>
        <td>Unabh&auml;ngige Kolonie erstellen</td><td width="60" align="center">Ja</td>
    </tr>
            

    <tr>
        <td>Kolonisations beginn</td><td width="60" align="center">45</td>
    </tr>
            

    </table>
    </td></tr>

    <tr><td>
    <table width="400" align="center" border="0" cellpadding="3" cellspacing="3" class="style_inner">

    <tr>
        <td>Name der Rasse</td><td width="60" align="center"><a name="3">Cardassianer</a></td>
    </tr>
            

    <tr>
        <td>Bauzeit (Geb&auml;ude)</td><td width="60" align="center">100 %</td>
    </tr>
            

    <tr>
        <td>Bauzeit (Einheiten)</td><td width="60" align="center">95 %</td>
    </tr>
            

    <tr>
        <td>Bauzeit (Schiffe)</td><td width="60" align="center">105 %</td>
    </tr>
            

    <tr>
        <td>Forschungszeit</td><td width="60" align="center">800 %</td>
    </tr>
            

    <tr>
        <td>Baukosten (Geb&auml;ude)</td><td width="60" align="center">100 %</td>
    </tr>
            

    <tr>
        <td>Baukosten (Einheiten)</td><td width="60" align="center">100 %</td>
    </tr>
            

    <tr>
        <td>Baukosten (Schiffe)</td><td width="60" align="center">90 %</td>
    </tr>
            

    <tr>
        <td>Forschungskosten</td><td width="60" align="center">100 %</td>
    </tr>
            

    <tr>
        <td>Metallminenausbeute</td><td width="60" align="center">115 %</td>
    </tr>
            

    <tr>
        <td>Mineralienminenausbeute</td><td width="60" align="center">115 %</td>
    </tr>
            

    <tr>
        <td>Latinumraffinerieausbeute</td><td width="60" align="center">115 %</td>
    </tr>
            

    <tr>
        <td>Arbeiterausbeute</td><td width="60" align="center">110 %</td>
    </tr>
            

    <tr>
        <td>Schiffsangriff</td><td width="60" align="center">110 %</td>
    </tr>
            

    <tr>
        <td>Einheitenangriff</td><td width="60" align="center">110 %</td>
    </tr>
            

    <tr>
        <td>Schiffsverteidigung</td><td width="60" align="center">95 %</td>
    </tr>
            

    <tr>
        <td>Einheitenverteidigung</td><td width="60" align="center">105 %</td>
    </tr>
            

    <tr>
        <td>Geb&auml;udeverteidigung</td><td width="60" align="center">100 %</td>
    </tr>
            

    <tr>
        <td>Schiffsgeschwindigkeit</td><td width="60" align="center">90 %</td>
    </tr>
            

    <tr>
        <td>Sensorenreichweite</td><td width="60" align="center">100 %</td>
    </tr>
            

    <tr>
        <td>Technologieausnutzung</td><td width="60" align="center">105 %</td>
    </tr>
            

    <tr>
        <td>Kampfkraft der Arbeiter</td><td width="60" align="center">3</td>
    </tr>
            

    <tr>
        <td>Spielbar</td><td width="60" align="center">Ja</td>
    </tr>
            

    <tr>
        <td>Metkostenfaktor f&uuml;r Geb&auml;ude</td><td width="60" align="center">80 %</td>
    </tr>
            

    <tr>
        <td>Minkostenfaktor f&uuml;r Geb&auml;ude</td><td width="60" align="center">80 %</td>
    </tr>
            

    <tr>
        <td>Latkostenfaktor f&uuml;r Geb&auml;ude</td><td width="60" align="center">60 %</td>
    </tr>
            

    <tr>
        <td>Metkostenfaktor f&uuml;r Forschungen</td><td width="60" align="center">60 %</td>
    </tr>
            

    <tr>
        <td>Minkostenfaktor f&uuml;r Forschungen</td><td width="60" align="center">60 %</td>
    </tr>
            

    <tr>
        <td>Latkostenfaktor f&uuml;r Forschungen</td><td width="60" align="center">110 %</td>
    </tr>
            

    <tr>
        <td>Exportierbare Technologien</td><td width="60" align="center">Umwelt<br>Medizinisch<br>Bergbau</td>
    </tr>
            

    <tr>
        <td>Unabh&auml;ngige Kolonie erstellen</td><td width="60" align="center">Ja</td>
    </tr>
            

    <tr>
        <td>Kolonisations beginn</td><td width="60" align="center">45</td>
    </tr>
            

    </table>
    </td></tr>

    <tr><td>
    <table width="400" align="center" border="0" cellpadding="3" cellspacing="3" class="style_inner">

    <tr>
        <td>Name der Rasse</td><td width="60" align="center"><a name="4">Dominion</a></td>
    </tr>
            

    <tr>
        <td>Bauzeit (Geb&auml;ude)</td><td width="60" align="center">120 %</td>
    </tr>
            

    <tr>
        <td>Bauzeit (Einheiten)</td><td width="60" align="center">95 %</td>
    </tr>
            

    <tr>
        <td>Bauzeit (Schiffe)</td><td width="60" align="center">105 %</td>
    </tr>
            

    <tr>
        <td>Forschungszeit</td><td width="60" align="center">600 %</td>
    </tr>
            

    <tr>
        <td>Baukosten (Geb&auml;ude)</td><td width="60" align="center">120 %</td>
    </tr>
            

    <tr>
        <td>Baukosten (Einheiten)</td><td width="60" align="center">120 %</td>
    </tr>
            

    <tr>
        <td>Baukosten (Schiffe)</td><td width="60" align="center">115 %</td>
    </tr>
            

    <tr>
        <td>Forschungskosten</td><td width="60" align="center">115 %</td>
    </tr>
            

    <tr>
        <td>Metallminenausbeute</td><td width="60" align="center">115 %</td>
    </tr>
            

    <tr>
        <td>Mineralienminenausbeute</td><td width="60" align="center">115 %</td>
    </tr>
            

    <tr>
        <td>Latinumraffinerieausbeute</td><td width="60" align="center">115 %</td>
    </tr>
            

    <tr>
        <td>Arbeiterausbeute</td><td width="60" align="center">90 %</td>
    </tr>
            

    <tr>
        <td>Schiffsangriff</td><td width="60" align="center">135 %</td>
    </tr>
            

    <tr>
        <td>Einheitenangriff</td><td width="60" align="center">115 %</td>
    </tr>
            

    <tr>
        <td>Schiffsverteidigung</td><td width="60" align="center">115 %</td>
    </tr>
            

    <tr>
        <td>Einheitenverteidigung</td><td width="60" align="center">125 %</td>
    </tr>
            

    <tr>
        <td>Geb&auml;udeverteidigung</td><td width="60" align="center">95 %</td>
    </tr>
            

    <tr>
        <td>Schiffsgeschwindigkeit</td><td width="60" align="center">105 %</td>
    </tr>
            

    <tr>
        <td>Sensorenreichweite</td><td width="60" align="center">100 %</td>
    </tr>
            

    <tr>
        <td>Technologieausnutzung</td><td width="60" align="center">125 %</td>
    </tr>
            

    <tr>
        <td>Kampfkraft der Arbeiter</td><td width="60" align="center">2</td>
    </tr>
            

    <tr>
        <td>Spielbar</td><td width="60" align="center">Ja</td>
    </tr>
            

    <tr>
        <td>Metkostenfaktor f&uuml;r Geb&auml;ude</td><td width="60" align="center">115 %</td>
    </tr>
            

    <tr>
        <td>Minkostenfaktor f&uuml;r Geb&auml;ude</td><td width="60" align="center">115 %</td>
    </tr>
            

    <tr>
        <td>Latkostenfaktor f&uuml;r Geb&auml;ude</td><td width="60" align="center">100 %</td>
    </tr>
            

    <tr>
        <td>Metkostenfaktor f&uuml;r Forschungen</td><td width="60" align="center">100 %</td>
    </tr>
            

    <tr>
        <td>Minkostenfaktor f&uuml;r Forschungen</td><td width="60" align="center">100 %</td>
    </tr>
            

    <tr>
        <td>Latkostenfaktor f&uuml;r Forschungen</td><td width="60" align="center">130 %</td>
    </tr>
            

    <tr>
        <td>Exportierbare Technologien</td><td width="60" align="center">Umwelt<br>Medizinisch<br>Automatisierung<br>Bergbau</td>
    </tr>
            

    <tr>
        <td>Unabh&auml;ngige Kolonie erstellen</td><td width="60" align="center">Nein</td>
    </tr>
            

    <tr>
        <td>Kolonisations beginn</td><td width="60" align="center">80</td>
    </tr>
            

    </table>
    </td></tr>

    <tr><td>
    <table width="400" align="center" border="0" cellpadding="3" cellspacing="3" class="style_inner">

    <tr>
        <td>Name der Rasse</td><td width="60" align="center"><a name="9">Hirogen</a></td>
    </tr>
            

    <tr>
        <td>Bauzeit (Geb&auml;ude)</td><td width="60" align="center">120 %</td>
    </tr>
            

    <tr>
        <td>Bauzeit (Einheiten)</td><td width="60" align="center">110 %</td>
    </tr>
            

    <tr>
        <td>Bauzeit (Schiffe)</td><td width="60" align="center">110 %</td>
    </tr>
            

    <tr>
        <td>Forschungszeit</td><td width="60" align="center">600 %</td>
    </tr>
            

    <tr>
        <td>Baukosten (Geb&auml;ude)</td><td width="60" align="center">120 %</td>
    </tr>
            

    <tr>
        <td>Baukosten (Einheiten)</td><td width="60" align="center">120 %</td>
    </tr>
            

    <tr>
        <td>Baukosten (Schiffe)</td><td width="60" align="center">105 %</td>
    </tr>
            

    <tr>
        <td>Forschungskosten</td><td width="60" align="center">100 %</td>
    </tr>
            

    <tr>
        <td>Metallminenausbeute</td><td width="60" align="center">110 %</td>
    </tr>
            

    <tr>
        <td>Mineralienminenausbeute</td><td width="60" align="center">110 %</td>
    </tr>
            

    <tr>
        <td>Latinumraffinerieausbeute</td><td width="60" align="center">110 %</td>
    </tr>
            

    <tr>
        <td>Arbeiterausbeute</td><td width="60" align="center">90 %</td>
    </tr>
            

    <tr>
        <td>Schiffsangriff</td><td width="60" align="center">120 %</td>
    </tr>
            

    <tr>
        <td>Einheitenangriff</td><td width="60" align="center">120 %</td>
    </tr>
            

    <tr>
        <td>Schiffsverteidigung</td><td width="60" align="center">120 %</td>
    </tr>
            

    <tr>
        <td>Einheitenverteidigung</td><td width="60" align="center">130 %</td>
    </tr>
            

    <tr>
        <td>Geb&auml;udeverteidigung</td><td width="60" align="center">80 %</td>
    </tr>
            

    <tr>
        <td>Schiffsgeschwindigkeit</td><td width="60" align="center">95 %</td>
    </tr>
            

    <tr>
        <td>Sensorenreichweite</td><td width="60" align="center">115 %</td>
    </tr>
            

    <tr>
        <td>Technologieausnutzung</td><td width="60" align="center">120 %</td>
    </tr>
            

    <tr>
        <td>Kampfkraft der Arbeiter</td><td width="60" align="center">5</td>
    </tr>
            

    <tr>
        <td>Spielbar</td><td width="60" align="center">Ja</td>
    </tr>
            

    <tr>
        <td>Metkostenfaktor f&uuml;r Geb&auml;ude</td><td width="60" align="center">115 %</td>
    </tr>
            

    <tr>
        <td>Minkostenfaktor f&uuml;r Geb&auml;ude</td><td width="60" align="center">110 %</td>
    </tr>
            

    <tr>
        <td>Latkostenfaktor f&uuml;r Geb&auml;ude</td><td width="60" align="center">105 %</td>
    </tr>
            

    <tr>
        <td>Metkostenfaktor f&uuml;r Forschungen</td><td width="60" align="center">100 %</td>
    </tr>
            

    <tr>
        <td>Minkostenfaktor f&uuml;r Forschungen</td><td width="60" align="center">120 %</td>
    </tr>
            

    <tr>
        <td>Latkostenfaktor f&uuml;r Forschungen</td><td width="60" align="center">145 %</td>
    </tr>
            

    <tr>
        <td>Exportierbare Technologien</td><td width="60" align="center">Verteidigung<br>Automatisierung<br>Bergbau</td>
    </tr>
            

    <tr>
        <td>Unabh&auml;ngige Kolonie erstellen</td><td width="60" align="center">Nein</td>
    </tr>
            

    <tr>
        <td>Kolonisations beginn</td><td width="60" align="center">80</td>
    </tr>
            

    </table>
    </td></tr>

    <tr><td>
    <table width="400" align="center" border="0" cellpadding="3" cellspacing="3" class="style_inner">

    <tr>
        <td>Name der Rasse</td><td width="60" align="center"><a name="11">Kazon</a></td>
    </tr>
            

    <tr>
        <td>Bauzeit (Geb&auml;ude)</td><td width="60" align="center">90 %</td>
    </tr>
            

    <tr>
        <td>Bauzeit (Einheiten)</td><td width="60" align="center">60 %</td>
    </tr>
            

    <tr>
        <td>Bauzeit (Schiffe)</td><td width="60" align="center">105 %</td>
    </tr>
            

    <tr>
        <td>Forschungszeit</td><td width="60" align="center">900 %</td>
    </tr>
            

    <tr>
        <td>Baukosten (Geb&auml;ude)</td><td width="60" align="center">90 %</td>
    </tr>
            

    <tr>
        <td>Baukosten (Einheiten)</td><td width="60" align="center">90 %</td>
    </tr>
            

    <tr>
        <td>Baukosten (Schiffe)</td><td width="60" align="center">100 %</td>
    </tr>
            

    <tr>
        <td>Forschungskosten</td><td width="60" align="center">100 %</td>
    </tr>
            

    <tr>
        <td>Metallminenausbeute</td><td width="60" align="center">80 %</td>
    </tr>
            

    <tr>
        <td>Mineralienminenausbeute</td><td width="60" align="center">80 %</td>
    </tr>
            

    <tr>
        <td>Latinumraffinerieausbeute</td><td width="60" align="center">80 %</td>
    </tr>
            

    <tr>
        <td>Arbeiterausbeute</td><td width="60" align="center">120 %</td>
    </tr>
            

    <tr>
        <td>Schiffsangriff</td><td width="60" align="center">110 %</td>
    </tr>
            

    <tr>
        <td>Einheitenangriff</td><td width="60" align="center">135 %</td>
    </tr>
            

    <tr>
        <td>Schiffsverteidigung</td><td width="60" align="center">90 %</td>
    </tr>
            

    <tr>
        <td>Einheitenverteidigung</td><td width="60" align="center">115 %</td>
    </tr>
            

    <tr>
        <td>Geb&auml;udeverteidigung</td><td width="60" align="center">80 %</td>
    </tr>
            

    <tr>
        <td>Schiffsgeschwindigkeit</td><td width="60" align="center">120 %</td>
    </tr>
            

    <tr>
        <td>Sensorenreichweite</td><td width="60" align="center">70 %</td>
    </tr>
            

    <tr>
        <td>Technologieausnutzung</td><td width="60" align="center">90 %</td>
    </tr>
            

    <tr>
        <td>Kampfkraft der Arbeiter</td><td width="60" align="center">4</td>
    </tr>
            

    <tr>
        <td>Spielbar</td><td width="60" align="center">Ja</td>
    </tr>
            

    <tr>
        <td>Metkostenfaktor f&uuml;r Geb&auml;ude</td><td width="60" align="center">60 %</td>
    </tr>
            

    <tr>
        <td>Minkostenfaktor f&uuml;r Geb&auml;ude</td><td width="60" align="center">60 %</td>
    </tr>
            

    <tr>
        <td>Latkostenfaktor f&uuml;r Geb&auml;ude</td><td width="60" align="center">40 %</td>
    </tr>
            

    <tr>
        <td>Metkostenfaktor f&uuml;r Forschungen</td><td width="60" align="center">40 %</td>
    </tr>
            

    <tr>
        <td>Minkostenfaktor f&uuml;r Forschungen</td><td width="60" align="center">40 %</td>
    </tr>
            

    <tr>
        <td>Latkostenfaktor f&uuml;r Forschungen</td><td width="60" align="center">65 %</td>
    </tr>
            

    <tr>
        <td>Exportierbare Technologien</td><td width="60" align="center">Verteidigung<br>Automatisierung<br>Bergbau</td>
    </tr>
            

    <tr>
        <td>Unabh&auml;ngige Kolonie erstellen</td><td width="60" align="center">Nein</td>
    </tr>
            

    <tr>
        <td>Kolonisations beginn</td><td width="60" align="center">45</td>
    </tr>
            

    </table>
    </td></tr>

    <tr><td>
    <table width="400" align="center" border="0" cellpadding="3" cellspacing="3" class="style_inner">

    <tr>
        <td>Name der Rasse</td><td width="60" align="center"><a name="13">Siedler</a></td>
    </tr>
            

    <tr>
        <td>Bauzeit (Geb&auml;ude)</td><td width="60" align="center">100 %</td>
    </tr>
            

    <tr>
        <td>Bauzeit (Einheiten)</td><td width="60" align="center">50 %</td>
    </tr>
            

    <tr>
        <td>Bauzeit (Schiffe)</td><td width="60" align="center">100 %</td>
    </tr>
            

    <tr>
        <td>Forschungszeit</td><td width="60" align="center">800 %</td>
    </tr>
            

    <tr>
        <td>Baukosten (Geb&auml;ude)</td><td width="60" align="center">100 %</td>
    </tr>
            

    <tr>
        <td>Baukosten (Einheiten)</td><td width="60" align="center">100 %</td>
    </tr>
            

    <tr>
        <td>Baukosten (Schiffe)</td><td width="60" align="center">100 %</td>
    </tr>
            

    <tr>
        <td>Forschungskosten</td><td width="60" align="center">100 %</td>
    </tr>
            

    <tr>
        <td>Metallminenausbeute</td><td width="60" align="center">150 %</td>
    </tr>
            

    <tr>
        <td>Mineralienminenausbeute</td><td width="60" align="center">150 %</td>
    </tr>
            

    <tr>
        <td>Latinumraffinerieausbeute</td><td width="60" align="center">150 %</td>
    </tr>
            

    <tr>
        <td>Arbeiterausbeute</td><td width="60" align="center">150 %</td>
    </tr>
            

    <tr>
        <td>Schiffsangriff</td><td width="60" align="center">100 %</td>
    </tr>
            

    <tr>
        <td>Einheitenangriff</td><td width="60" align="center">100 %</td>
    </tr>
            

    <tr>
        <td>Schiffsverteidigung</td><td width="60" align="center">100 %</td>
    </tr>
            

    <tr>
        <td>Einheitenverteidigung</td><td width="60" align="center">100 %</td>
    </tr>
            

    <tr>
        <td>Geb&auml;udeverteidigung</td><td width="60" align="center">100 %</td>
    </tr>
            

    <tr>
        <td>Schiffsgeschwindigkeit</td><td width="60" align="center">100 %</td>
    </tr>
            

    <tr>
        <td>Sensorenreichweite</td><td width="60" align="center">75 %</td>
    </tr>
            

    <tr>
        <td>Technologieausnutzung</td><td width="60" align="center">110 %</td>
    </tr>
            

    <tr>
        <td>Kampfkraft der Arbeiter</td><td width="60" align="center">3</td>
    </tr>
            

    <tr>
        <td>Spielbar</td><td width="60" align="center">Nein</td>
    </tr>
            

    <tr>
        <td>Metkostenfaktor f&uuml;r Geb&auml;ude</td><td width="60" align="center">100 %</td>
    </tr>
            

    <tr>
        <td>Minkostenfaktor f&uuml;r Geb&auml;ude</td><td width="60" align="center">100 %</td>
    </tr>
            

    <tr>
        <td>Latkostenfaktor f&uuml;r Geb&auml;ude</td><td width="60" align="center">100 %</td>
    </tr>
            

    <tr>
        <td>Metkostenfaktor f&uuml;r Forschungen</td><td width="60" align="center">100 %</td>
    </tr>
            

    <tr>
        <td>Minkostenfaktor f&uuml;r Forschungen</td><td width="60" align="center">100 %</td>
    </tr>
            

    <tr>
        <td>Latkostenfaktor f&uuml;r Forschungen</td><td width="60" align="center">100 %</td>
    </tr>
            

    <tr>
        <td>Exportierbare Technologien</td><td width="60" align="center">Keiner</td>
    </tr>
            

    <tr>
        <td>Unabh&auml;ngige Kolonie erstellen</td><td width="60" align="center">Ja</td>
    </tr>
            

    <tr>
        <td>Kolonisations beginn</td><td width="60" align="center">Keiner</td>
    </tr>


    </table>
    </td></tr>
</table>
</center>
</td>
</tr>
</table>

<!-- Middle End -->
';
?>

