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
                   new donate();
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

case "spend1":
	include("class/spend.php");
                   new Spend1();
	break;

case "spend2":
	include("class/spend.php");
                   new Spend2();
	break;
case "spend3":
	include("class/spend.php");
                   new Spend3();
	break;
case "spend4":
	include("class/spend.php");
                   new Spend4();
	break;
case "spend5":
	include("class/spend.php");
                   new Spend5();
	break;
case "spend6":
	include("class/spend.php");
                   new Spend6();
	break;
case "spend7":
	include("class/spend.php");
                   new Spend7();
	break;
case "spend8":
	include("class/spend.php");
                   new Spend8();
	break;
case "spend9":
	include("class/spend.php");
                   new Spend9();
	break;

case "logout":
	include("logout.php");
	break;
}


?>
