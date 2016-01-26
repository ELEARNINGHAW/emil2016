<?php 
$host = $_SERVER['HTTP_HOST'];

if (strcmp ('www.elearning.haw-hamburg.de', $host ) == 0 )
{  
  $emil['DMI']['coursecat'] = 159;
  $emil['LS' ]['coursecat'] = 160;
  $emil['TI' ]['coursecat'] = 161;
  $emil['WS' ]['coursecat'] = 162;
}

if (strcmp ('www.emil2-test.ls.haw-hamburg.de', $host ) == 0 )
{  
  $emil['DMI']['coursecat'] = 134;
  $emil['LS' ]['coursecat'] = 135;
  $emil['TI' ]['coursecat'] = 136;
  $emil['WS' ]['coursecat'] = 137;
}

if (strcmp ('localhost', $host ) == 0 )
{  
  $emil['DMI']['coursecat'] = 24;
  $emil['LS' ]['coursecat'] = 25;
  $emil['TI' ]['coursecat'] = 26;
  $emil['WS' ]['coursecat'] = 27;
}

if (strcmp ('lernserver.el.haw-hamburg.de', $host ) == 0 )
{  
  $emil['DMI']['coursecat'] = 24;
  $emil['LS' ]['coursecat'] = 25;
  $emil['TI' ]['coursecat'] = 26;
  $emil['WS' ]['coursecat'] = 27;
}


$langlink        = '<a title="EMIL in english" href="'. $CFG->wwwroot .'/?lang=en"><img src="'. $OUTPUT->pix_url('/en', 'theme') .'"\></a>';
$helpbutton      = $OUTPUT->pix_url('Fak-Navi/Hilfe'   , 'theme');
$editbuttonON    = $OUTPUT->pix_url('Fak-Navi/Bearbeiten-An' , 'theme');
$editbuttonOFF   = $OUTPUT->pix_url('Fak-Navi/Bearbeiten-Aus', 'theme');
$editbuttonONTXT = "Bearbeiten Modus einschalten";
$editbuttonOFFTXT= "Bearbeiten Modus ausschalten";
$editbuttonTXT   = "Bearbeiten Modus ausschalten";
$searchButtonTXT = "Suchen";
$searchinfotxt   = " Suche: Kurs, Lernraum, Dozent... ";

$searchURL       = $CFG->wwwroot."/course/search.php"; 
 
if (isset($SESS->lang))
if ( $SESS->lang == 'en' ) 
{
  $langlink        = '<a title="EMIL in deutsch" href="'. $CFG->wwwroot .'/?lang=de"><img src="'. $OUTPUT->pix_url('/de', 'theme') .'"\></a>'; 
  $helpbutton      = $OUTPUT->pix_url('Fak-Navi/Help'    , 'theme', 'HILFE');
  $editbuttonON    = $OUTPUT->pix_url('Fak-Navi/Edit-ON' , 'theme');
  $editbuttonOFF   = $OUTPUT->pix_url('Fak-Navi/Edit-OFF', 'theme');
  $editbuttonONTXT = "Turn editing off";
  $editbuttonOFFTXT= "Turn editing on";
  $searchinfotxt   = " searching: course, lecturer... ";
}








?>
