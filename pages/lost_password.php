<?php
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



function generate_random_string($n_chars) {
    $chars = range('a', 'z');

    list($usec, $sec) = explode(' ', microtime());
    mt_srand($sec * $usec);

    $max_chars = count($chars) - 1;
    $rand_str = '';

    for($i = 0; $i < $n_chars; ++$i) {
        $rand_str .= $chars[mt_rand(0, $max_chars)];
    }

    return $rand_str;
}

$title_html = $locale['lost_password_title'];
$meta_descr = $locale['lost_password_descr'];

if (isset($_POST['galaxy']))
{
    $error = false;

    $sql = 'SELECT user_id, user_email, user_name FROM user WHERE user_name="'.htmlspecialchars($_POST['user_name']).'" AND user_loginname="'.htmlspecialchars($_POST['user_loginname']).'"';

    /* 26/08/08 - AC: Check which galaxy the user has selected */
    if($_POST['galaxy'] == 0)
        $player = $db->queryrow($sql);
    else if($_POST['galaxy'] == 1)
        $player = $db2->queryrow($sql);
    /* */

    if($player === false)
    {
        message(DATABASE_ERROR, 'Could not query user data');
        exit();
    }

    if (!isset($player['user_id'])) {
        $message = $locale['error_wrong_name_or_login'];
        $error = true;
    }
    else if (strcmp(strtolower($_POST['user_email']),strtolower($player['user_email']))!=0) {
        $message = $locale['error_wrong_email'];
        $error = true;
    }

    if (!$error)
    {
        $newpassword = generate_random_string(10);
        $query='UPDATE user SET user_password="'.md5($newpassword).'" WHERE user_name= "'.htmlspecialchars($_REQUEST['user_name']).'"';

        /* 26/08/08 - AC: Check which galaxy the user has selected */
        if($_POST['galaxy'] == 0)
            if(($db->query($query)) === false) {message(DATABASE_ERROR, 'Could not update user data'); exit();}
        else if($_POST['galaxy'] == 1)
            if(($db2->query($query)) === false) {message(DATABASE_ERROR, 'Could not update user data'); exit();}
        /* */

        $mail_message  = $_POST['user_name'].','.NL;
        $mail_message .= $locale['mail_message_lp1'].NL;
        $mail_message .= $locale['mail_message_lp2'].NL;
        $mail_message .= $newpassword.NL.NL;
        $mail_message .= $locale['mail_message_lp3'].NL.NL;
        $mail_message .= $locale['mail_message_sig_line1'].NL.$locale['mail_message_sig_line2'].NL.NL;
        $mail_message .= 'Credits: https://st-gw.de/generic.php?a=imprint';

        send_mail('STGW Mailer', 'noreply@st-gw.de', $_POST['user_name'], $player['user_email'], $locale['mail_subject_lp'], $mail_message);

        $message = $locale['password_recovered'];
    }
}

$player_online = $db->queryrow('SELECT COUNT(user_id) AS num FROM user WHERE last_active > '.(time() - 60 * 20));

$user_name = (!empty($_POST['user_name'])) ? $_POST['user_name'] : '';
$user_loginname = (!empty($_POST['user_loginname'])) ? $_POST['user_loginname'] : '';
$user_email = (!empty($_POST['user_email'])) ? $_POST['user_email'] : '';

$main_html .= '
        <header>
                <h1>'.$locale['password_recovery'].'</h1>
        </header>
	<p>
		<form method="post" action="generic.php?a=lost_password">
		<b>'.$locale['lost_password_warning'].'</b>
		<br>
		<br>
		<table class="lcars-table scanning lcars-husk-color">
			<tr><td>'.$locale['player_name'].'</td><td><input type="text" name="user_name" class="lcars-text-input decorated lcars-husk-color" value="'.$user_name.'"/></td><td></td></tr>
			<tr><td>'.$locale['login'].'</td><td><input type="text" name="user_loginname" class="lcars-text-input decorated lcars-husk-color" value="'.$user_loginname.'"/></td><td></td></tr>
			<tr><td>'.$locale['email'].'</td><td><input type="text" name="user_email" class="lcars-text-input decorated lcars-husk-color" value="'.$user_email.'"/></td><td></td></tr>
			<tr><td>'.$locale['galaxy'].'</td><td><select name="galaxy"><option value="0">'.GALAXY1_NAME.' ['.$player_online['num'].' online]</option></td><td></td></tr>
		</table>
		<br>
		[ <a href="generic.php?a=login">'.$locale['back_to_login'].'</a> ]<br><br>
		<input class="lcars-element rounded lcars-u-2-1" type="submit" name="stgc_password" value="'.$locale['password_request'].'">
		</form>
';

?>
