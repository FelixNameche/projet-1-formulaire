<?php

$destinataire = 'nameche.felix@gmail.com';

$copie = 'oui'; 

$message_envoye = "Nous avons bien reçu votre message, merci.";
$message_non_envoye = "Oups. Une erreur est survenue pendant l'envois, merci de bien vouloir recommencer.";

$message_erreur_formulaire = "Merci de bien vouloir commencer par <a href=\"contact.html\"> envoyer le formulaire</a>.";
$message_formulaire_invalide = "Merci de bien vouloir vérifiez que tous les champs soient bien remplis et que l'email soit sans erreur.";

if (!isset($_POST['envoi']))
{
  echo '<p>'.$message_erreur_formulaire.'</p>'."\n";
}
else
{

  function IsEmail($email)
  {
    $value = preg_match('/^(?:[\w\!\#\$\%\&\'\*\+\-\/\=\?\^\`\{\|\}\~]+\.)*[\w\!\#\$\%\&\'\*\+\-\/\=\?\^\`\{\|\}\~]+@(?:(?:(?:[a-zA-Z0-9_](?:[a-zA-Z0-9_\-](?!\.)){0,61}[a-zA-Z0-9_-]?\.)+[a-zA-Z0-9_](?:[a-zA-Z0-9_\-](?!$)){0,61}[a-zA-Z0-9_]?)|(?:\[(?:(?:[01]?\d{1,2}|2[0-4]\d|25[0-5])\.){3}(?:[01]?\d{1,2}|2[0-4]\d|25[0-5])\]))$/', $email);
    return (($value === 0) || ($value === false)) ? false : true;
  }

  $nom     = (isset($_POST['nom']))     ? Rec($_POST['nom'])     : '';
  $prenom  = (isset($_POST['prenom']))  ? Rec($_POST['prenom'])  : '';
  $email   = (isset($_POST['email']))   ? Rec($_POST['email'])   : '';
  $pays    = (isset($_POST['pays']))    ? Rec($_POST['pays'])    : '';
  $genre   = (isset($_POST['genre']))   ? Rec($_POST['genre'])   : '';
  $message = (isset($_POST['message'])) ? Rec($_POST['message']) : '';
.
  $email = (IsEmail($email)) ? $email : ''; 
  if (($nom != '') && ($email != '') && ($objet != '') && ($message != '') && ($pays !=''))
  {

    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'From:'.$nom.' <'.$email.'>' . "\r\n" .
        'Reply-To:'.$email. "\r\n" .
        'Content-Type: text/plain; charset="utf-8"; DelSp="Yes"; format=flowed '."\r\n" .
        'Content-Disposition: inline'. "\r\n" .
        'Content-Transfer-Encoding: 7bit'." \r\n" .
        'X-Mailer:PHP/'.phpversion();

    if ($copie == 'oui')
    {
      $cible = $destinataire.';'.$email;
    }
    else
    {
      $cible = $destinataire;
    };
    
    $num_emails = 0;
    $tmp = explode(';', $cible);
    foreach($tmp as $email_destinataire)
    {
      if (mail($email_destinataire, $message, $headers))
        $num_emails++;
    }
    if ((($copie == 'oui') && ($num_emails == 2)) || (($copie == 'non') && ($num_emails == 1)))
    {
      echo '<p>'.$message_envoye.'</p>';
    }
    else
    {
      echo '<p>'.$message_non_envoye.'</p>';
    };
  }
  else
  {

    echo '<p>'.$message_formulaire_invalide.' <a href="contact.html">Une erreur est apparue. Retour au formulaire.</a></p>'."\n";
  };
};
?>