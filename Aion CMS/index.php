<?php

// includes

include("config.php");

// force login to view.
session_start();
if(!$_SESSION['authenticated'] && $_GET['action'] != "register" && $_GET['action'] != "donated")
{
	include("login.php");
                  new login();
	die;
}
if(!$_SESSION['authenticated'] && $_GET['action'] != "donated" && $_GET['action'] != "login")
{
	include("register.php");
                  new register();
	die;
}

if(!$_SESSION['authenticated'] && $_GET['action'] != "register" && $_GET['action'] != "login")
{
	include("class/donate.php");
	die;
}

switch($_GET['action'])
{
default:
	include("usercp.php");
                  new usercp();
	break;

case "statistics":
	include("uc_statistics.php");
                   new statistics();
	break;

case "inventory":
	include("uc_inventory.php");
                   new inventory();
	break;

case "vote_redeem":
	include("uc_vote_redeem.php");
                   new vote_redeem();
	break;

case "donate":
	include("uc_donate.php");
	break;


case "pass_change":
	include("uc_pass_change.php");
                   new pass_change();
	break;

case "admincp":
	include("admincp.php");
                   new admincp();
	break;

case "ban":
	include("ac_ban.php");
                   new ban();
	break;

case "transfer_char":
	include("ac_transfer_char.php");
                   new transfer_char();
	break;

case "logs":
	include("ac_logs.php");
                   new logs();
	break;

case "vote_settings":
	include("ac_vote_settings.php");
                   new vote_settings();
	break;

case "spend":
	include("class/spend.php");
                   new Spend();
	break;

case "logout":
	include("logout.php");
	break;
}


?>
