<?php
/*
=======================================
|                                     |
| Main functions and required scripts |
|                                     |
=======================================
*/
include "database.php";                   // Connecting to the server database
include "sessions.php";                   // Handling user sessions and permissions


/*
==========================================
|                                        |
| Setting up our static content location |
|                                        |
==========================================
*/
$header     = 'templates/header.php';       // Header content
$settings   = 'templates/settings.php';     // Theme settings content
$overlay    = 'templates/overlay.php';      // Top menu content
$menu       = 'templates/mainmenu.php';     // Main menu content


/*
==============================
|                            |
|  Getting user permissions  |
|                            |
==============================
*/
switch ($placeholder) {
  case 'root':                // User has root permissions?
    // code...

    break;
  case 'manager':             // User has manager permissions?
    // code...

    break;
  case 'staff':               // User has staff permissions?
    // code...

    break;
}


/*
====================================================================
|                                                                  |
| Generating content based on previous values and user permissions |
|                                                                  |
====================================================================
*/
include "$header";             // Header
//include "$settings";         // Theme settings
include "$overlay";            // Overlay
include "$menu";               // Main menu
?>
