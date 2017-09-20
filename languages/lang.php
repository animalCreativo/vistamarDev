
<?php
// Start a Session, You might start this somewhere else already.
session_start();

// What languages do we support
$available_langs = array('en','es');




if(isset($_GET['lang']) && $_GET['lang'] != ''){

	$a = $_GET['lang'];
    	//echo "hola";
    	//echo $a ;
    // check if the language is one we support
    if(in_array($_GET['lang'], $available_langs))
    { 

        $_SESSION['lang'] = $_GET['lang']; // Set session
    }
}



// Set our default language session ONLY if we've got nothing
if ($_SESSION['lang']=='') {
    $_SESSION['lang'] = 'en';

} 

// Include active language
include('languages/'.$_SESSION['lang'].'/lang.'.$_SESSION['lang'].'.php');

?>
