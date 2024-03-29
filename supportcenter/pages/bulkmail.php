<?PHP
/*    
	This file is part of STFC.
	Copyright 2006-2007 by Michael Krauss (info@stfc2.de) and Tobias Gafner
		
	STFC is based on STGC,
	Copyright 2003-2007 by Florian Brede (florian_brede@hotmail.com) and Philipp Schmidt
	
    STFC is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 3 of the License, or
    (at your option) any later version.

    STFC is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/

function send_mail($myname, $myemail, $contactname, $contactemail, $subject, $message) {
  $headers = "MIME-Version: 1.0\n";
  $headers .= "Content-type: text/plain; charset=iso-8859-1\n";
  $headers .= "X-Priority: 1\n";
  $headers .= "X-MSMail-Priority: High\n";
  $headers .= "X-Mailer: php\n";
  $headers .= "From: \"".$myname."\" <".$myemail.">\n";
  return(mail("\"".$contactname."\" <".$contactemail.">", $subject, $message, $headers));
}

if ($user['right']==1) {include('forbidden.php'); return 1;}

$main_html .= '<span class=header>Massen E-Mail</span><br>';


if(isset($_POST['submit'])) {

    if ($_POST['user_name'] != "ALL")
    {
        $contact = $db->queryrow('SELECT user_email FROM user WHERE user_name="'.htmlspecialchars($_POST['user_name']).'"');

        send_mail("STFC Mailer",$config['admin_email'],$_POST['user_name'],$contact['user_email'],$_POST['title'],$_POST['text']);

        log_action('Massen E-Mail mit dem Titel "'.$_POST['title'].'" versendet');

        $main_html .= '<span class=header3><font color=green>E-Mail versendet</font></span><br>';
    }

    // Se e` stata richiesta una copia via messaggio
    else {
        $mes_qry = $db->query('SELECT user_name,user_email FROM user WHERE user_auth_level < 2');

        $emails = 0;
        while ($contact=$db->fetchrow($mes_qry))
        {
            send_mail("STFC Mailer",$config['admin_email'],$contact['user_name'],$contact['user_email'],$_POST['title'],$_POST['text']);
            $emails++;

            // Aspetta 10 secondi ogni 50 email
            if($emails >= 50) {
                $emails = 0;
                sleep(5);
            }
        }

        log_action('E-Mail mit dem titel "'.$_POST['title'].'" an alle Benutzer gesendet');

        $main_html .= '<span class=header3><font color=green>Die E-Mail ist wurde gesendet</font></span><br>';
    }
}


$id=0;
$message='';
$header='';


$main_html .= '<span class=header3><font color=blue>Neue Nachricht verfassen</font></span><br>

<br>
Achtung: Die E-Mail wird im HTML Format geschrieben, ein &#8249;br&#8250 steht <br> für eine neue Zeile (NICHT die Enter Taste benutzen), <br> Links werden mit den Standard &#8249;a&#8250; Tags eingef&uuml;gt.

<form method="post" action="index.php?p=bulkmail">

<br>

Empf&auml;nger *:&nbsp;<input type="text" name="user_name" value="'.$user_name.'" class="field"> * Verwenden Sie ALL, um an alle Benutzer zu senden.

<br><br>

Titel:&nbsp;<input type="text" name="title" value="'.$header.'" class="field">

<br><br>

Text:<br><textarea name="text" rows="15" cols="60">'.$message.'</textarea>

<br><br>

<input type=hidden name="id" value="'.$id.'">

<input class="button" type="submit" name="submit" value="senden">


</form>

';

