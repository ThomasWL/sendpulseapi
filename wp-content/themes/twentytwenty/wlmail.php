<?
if (isset($_POST['id'])) {$id = $_POST['id']; }
if (isset($_POST['emails'])) {$emails = $_POST['emails'];}
if (isset($_POST['confirmation'])) {$confirmation = $_POST['confirmation'];}
if (isset($_POST['sender_email'])) {$sender_email = $_POST['sender_email'];}

$wlfields = 'id='.$id.'&emails='.$emails.'&confirmation='.$confirmation.'&sender_email='.$sender_email;


  if( $curl = curl_init() ) {
    curl_setopt($curl, CURLOPT_URL, 'https://api.sendpulse.com/addressbooks/');
    curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $wlfields3);
    $out = curl_exec($curl);
    curl_close($curl);
  }
  
  echo 'ok';
 ?>
