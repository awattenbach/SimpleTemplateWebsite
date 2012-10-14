<div class="teaser_gradient" style="width: 583px; border-left: 1px solid white; border-bottom: 1px solid white; height: auto;"><h1>Kontakt</h1>
<?
global $post, $f_telefon, $f_vorname,$f_nachname,$f_email,$f_nachricht,$f_securecode,$valid_cap_code;
foreach($_POST as $key => $value) {
	if (!${$key}) ${$key}= $value;
	global ${$key};
}
if (!empty($_POST)) {
  if ($valid_cap_code != true) {
    unset($f_securecode);
  }
  if (!$f_vorname OR !$f_nachname OR !$f_securecode OR !$f_telefon OR !$f_nachricht OR !(ereg("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $f_email))) {
    unset($post);
    $error= 1;
  }
}
if (empty($_POST) AND !$error) {
?>
<p>Sie haben die Möglichkeit uns sehr schnell auf verscheidenen Wegen zu erreichen:</p>

<p><strong>per Telefon:</strong><br /> +49 (2224) 902343<br /> </p>

<p><strong>per Post:</strong><br />
Organisation2000<br />
Inh. Vera Wattenbach<br />
Ahornweg 23<br />
53604 Bad Honnef<br /></p>

<p><strong>per E-Mail:</strong><br /><a href="mailto:info@organisation2000.de">info@organisation2000.de</a></p>
<p><em>Oder direkt bequem über dieses Kontaktformular:</em></p>

<?
}
switch ($post) {
  default:

?>
<form action="<? echo Create_Link('de/Misc/Kontakt') ?>#form" method="post">
<?
if ($error) {
  echo '<div style="padding-left: 2px;"><p><strong>Fehler!</strong></p><p>Ihre Eingabe war leider fehlerhaft. Bitte überprüfen Sie die rot-makierten Felder.';
  echo '</p></div>';
}
?>
<p>
<div style="position: relative">
<table cellpadding="0">
<tr>
<td style="width: 130px;"><? if ($error AND !$f_vorname) echo '<span style="color: #882e40;">'; ?>Vorname:<? if ($error AND !$f_vorname) echo '</span>'; ?></td>
<td><input type="text" name="f_vorname" value="<? echo $f_vorname; ?>" class="input_standard"<? if ($error AND !$f_vorname) echo ' id="input_label_fehler"'; ?> /></td>
</tr>
<tr>
<td style="width: 130px;"><? if ($error AND !$f_nachname) echo '<span style="color: #882e40;">'; ?>Nachname:<? if ($error AND !$f_nachname) echo '</span>'; ?></td>
<td><input type="text" name="f_nachname" value="<? echo $f_nachname; ?>" class="input_standard"<? if ($error AND !$f_nachname) echo ' id="input_label_fehler"'; ?> /></td>
</tr>
<tr>
<td style="width: 130px;"><? if ($error AND !$f_telefon) echo '<span style="color: #882e40;">'; ?>Telefonnr.:<? if ($error AND !$f_telefon) echo '</span>'; ?></td>
<td><input type="text" name="f_telefon" value="<? echo $f_telefon; ?>" class="input_standard"<? if ($error AND !$f_telefon) echo ' id="input_label_fehler"'; ?> /></td>
</tr>
<tr>
<td style="width: 130px;"><? if ($error AND !(ereg("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $f_email))) echo '<span style="color: #882e40;">'; ?>E-Mail:<? if ($error AND !(ereg("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $f_email))) echo '</span>'; ?></td>
<td><input type="text" name="f_email" value="<? echo $f_email; ?>" class="input_standard"<? if ($error AND !(ereg("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $f_email))) echo ' id="input_label_fehler"'; ?> /></td>
</tr>
<tr>
<td style="width: 130px;"><? if ($error AND !$f_nachricht) echo '<span style="color: #882e40;">'; ?>Nachricht:<? if ($error AND !$f_nachricht) echo '</span>'; ?></td>
<td><textarea name="f_nachricht" class="textarea_standard"<? if ($error AND !$f_nachricht) echo ' id="textarea_label_fehler"'; ?>><? echo $f_nachricht; ?></textarea></td>
</tr>
<tr>
<td style="width: 130px; vertical-align: top;"><? if ($error AND !$f_securecode) echo '<span style="color: #882e40;">'; ?>Sicherheitscode:<? if ($error AND !$f_nachricht) echo '</span>'; ?></td>
<td>
<table cellspacing="0" cellpadding="0">
<tr>
<td><input type="text" name="f_securecode" class="input_standard"<? if ($error AND !$f_securecode) echo ' id="input_label_fehler"'; ?> /><br />
<small><strong>Hinweis:</strong> Dieser Sicherheitscode soll Spam verhindern. Bitte geben Sie den nebenstehenden Code in das obige Textfeld ein
und entschuldigen Sie diese Umstände.</small></td>
<td style="vertical-align: top;">
<table>
<tr>
<td><img src="/functions/captcha/securimage_show.php?sid=<?php echo md5(uniqid(time())); ?>" id="image" align="absmiddle" /></td>
<td style="vertical-align: top">
<a href="/functions/captcha/securimage_play.php" style="font-size: 13px"><img src="/functions/captcha/images/audio_icon.gif" style="Sicheitscode als Audio abspielen" border="0" /></a><br />
<a href="#" onclick="document.getElementById('image').src = '/functions/captcha/securimage_show.php?sid=' + Math.random(); return false"><img src="/functions/captcha/images/refresh.gif" style="Grafik erneuern" border="0" style="padding-top: 2px" /></a></td>
</tr></table>
</td>
</tr></table>
</td>
</tr>

</table></div></p>
<input type="hidden" name="post" value="briefing" />
<input name="abschicken" type="submit" value="Abschicken" />
</form>
<?
break;
  case "briefing":
  $timestamp= time();
  ### Notification MAIL
$msg_contact= 'Hi,

Eine neue Nachricht aus dem Kontakt-Formular.

Hier die übermittelten Daten:

Vorname: '.$f_vorname.'
Nachname: '.$f_nachname.'
Telefonnr.: '.$f_telefon.'
E-Mail: '.$f_email.'
Nachricht: '.$f_nachricht.'

Die Nachricht wurde gesendet am '.date("d.m.Y",$timestamp).', um '.date("H:i",$timestamp).' Uhr.';
  ### Post to GB
  global $mailcontactheader;
  SendMail("vera.wattenbach@organisation2000.de","Messe-Sivital.de Kontakt Formular","vera.wattenbach@organisation2000.de","Kontaktformular ($f_vorname $f_nachname)",$msg_contact);

  ?>
  <p><strong>Vielen Dank!</strong></p>
  <p>Ihr Nachricht wurde erfolgreich an uns geschickt.</p>
  <p>Wir werden Ihnen in Kürze antworten.</p>
  <p>- - - - -<br />Ihr Organisation 2000 Team</p>
  <?
  break;
}
?>
</div>
</div>

<div class="clear"></div>
</div>
<?
global $druck;
if (!$druck) {
?>
<div class="teaser_right">
<img src="/images/freie_heilpraktiker.png" border="0" alt="Freie Heilpraktiker e.V. - Berufs- und Fachverband -, Düsseldorf" />
<p>Die Messe Sivita(l) findet zum neunten Mal in Kooperation mit dem Freie
Heilpraktiker e.V. - Berufs- und Fachverband -, Düsseldorf statt.</p>
<p><div class="more"><a href="http://www.freieheilpraktiker.com/" target="_blank">mehr dazu</a></div></p>
<? } ?>

</div>
