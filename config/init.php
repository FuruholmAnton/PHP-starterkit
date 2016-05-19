<?php 

/* Initiate            
===============================================*/


// Starts session storage
if(!isset($_SESSION)){
    session_start();
}

// Removes cart from session after 10 min after customer has bought a product
if (isset($_SESSION['most_recent_activity']) && (time() - $_SESSION['most_recent_activity'] > 600)) {
    // 600 seconds = 10 minutes
    unset($_SESSION["successCart"]);
    unset($_SESSION['most_recent_activity']);
}
// 
if (isset($_SESSION['unique_id_timeout']) && (time() - $_SESSION['unique_id_timeout'] > 30)) {
    unset($_SESSION["unique_id"]);
    unset($_SESSION['unique_id_timeout']);
}

/** 
 * Initiates a global varible
 */

$ROOT = $_SERVER['DOCUMENT_ROOT'];
$global = new stdClass();


/** 
 * Saves the URL for pages folder
 */
$global->pageUrl = $_SERVER['DOCUMENT_ROOT']."/pages/";


require_once("functions.php");
require_once("settings.php");
require_once("router.php");



$PAGE = $ROUTER->getPath();

if( !isset($PAGE->layout) ) {
	$PAGE->layout = "default";
}


/**
 * NOTE: Includes the body where the $tpl is set
 */
include "./layouts/".$PAGE->layout.".php";

/*=====  End of Initiate  ======*/
