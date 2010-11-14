<?php

// includes

include("lang/eng.php");

include("config.php");

// force login to view.
session_start();
if(!$_SESSION['authenticated'] && $_GET['action'] != "home")
{
	include("login.php");
                  new login();
	die;
}
switch($_GET['action'])
{
default:
	include("home.php");
                  new home();
	break;
case "register":
	include("register.php");  
	break;

case "pass_change":
	include("usercp/pass_change.php");
                   new pass_change();
	break;

case "vote_redeem":
	include("usercp/vote_redeem.php");
                   new vote_redeem();
	break;

case "logout":
	include("logout.php");
	break;
}

?>
