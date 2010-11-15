<?php

// includes

include("config.php");

// force login to view.
session_start();
if(!$_SESSION['authenticated'] && $_GET['action'] != "register")
{
	include("login.php");
                  new login();
	die;
}
if(!$_SESSION['authenticated'] && $_GET['action'] != "")
{
	include("register.php");
                  new register();
	die;
}
switch($_GET['action'])
{
default:
	include("usercp.php");
                  new usercp();
	break;

case "admincp":
	include("admincp.php");
                   new admincp();
	break;

case "pass_change":
	include("usercp/pass_change.php");
                   new pass_change();
	break;

case "asdf":
	include("spend/spend1.php");
                   new Spend();
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
