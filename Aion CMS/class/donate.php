<?php
set_time_limit(15);
define("sql_host","localhost");
define("sql_user","root");
define("sql_pass","aion");
define("Logindb","aengine_ls");
define("Gamedb","aengine_gs");
define("Cmsdb","aion_cms");
$conn = @mysql_connect(sql_host, sql_user, sql_pass) or die(mysql_error());

//Vote & Redeem System

define("RPPV1",8); //vote points for vote-link 1 etc
define("RPPV2",3);
define("RPPV3",3);
define("RPPV4",2);
define("RPPV5",2);
define("RPPV6",2);
define("RPPV7",3);
define("RPPV8",2);
define("RPPV9",1);

// Donate System
define(SITE_URL,"http://127.0.0.1:8096"); // COMPLETE url to your web site, NO TRAILING SLASH!
define(SYS_PATH,"/"); // Path to the directory this file is in, beginning with a slash.
define(CURRENCY_CODE,"USD"); // Currency code to be used by PayPal.
define(CURRENCY_CHAR,"$"); // Symbol representing your currency code.
define(PAYPAL_URL,"www.paypal.com"); // Only change this for sandbox testing.
define(PAYPAL_EMAIL,"ntemos@live.com"); // The account that donations will go to.

// Mail information.
define(MAIL_SUBJECT,"Thank You"); // Subject of the reward mail.
define(MAIL_BODY,"Thank you for supporting our server! Here is your reward!"); // Mail message.

function handlePayment()
{
	$Con = mysql_connect(sql_host,sql_user,sql_pass);
	mysql_select_db(Cmsdb,$Con);
	
	$Itemcount = (int)$_POST['num_cart_items'];
	$Money = (float)$_POST['mc_gross'];
	
	//Prevent txn_id recycling.
	$res = mysql_query("SELECT COUNT(*) FROM donate_log WHERE txn_id = '{$_POST['txn_id']}'",$Con);
	if(mysql_result($res,0) != 0)
	{
		mysql_query("INSERT INTO donate_log (date,email,txn_id,status,amount,info) VALUES (NOW(),'{$_POST['payer_email']}','{$_POST['txn_id']}','failed','{$_POST['mc_gross']}','This transaction id is a duplicate.')",$Con);
		die;
	}
	
	//Check payment status.
	if($_POST['payment_status'] != "Completed")
	{
		mysql_query("INSERT INTO donate_log (date,email,txn_id,status,amount,info) VALUES (NOW(),'{$_POST['payer_email']}','{$_POST['txn_id']}','failed','{$_POST['mc_gross']}','Payment status was not \"Completed\", but \"{$_POST['payment_status']}\".')",$Con);
		die;
	}
	
	//Get realm info
	$res = mysql_query("SELECT entry,name,sqlhost,sqluser,sqlpass,chardb FROM realms");
	$i = 1;
	while($row = mysql_fetch_array($res))
	{
		$Realms[$i] = $row;
		$i++;
	}
	
	//Get reward info
	$res = mysql_query("SELECT entry,name,realm,price,item1,quantity1,item2,quantity2,item3,quantity3,gold FROM donate_rewards");
	$i = 1;
	while($row = mysql_fetch_array($res))
	{
		$Rewards[$i] = $row;
		$i++;
	}
	
	//Get info of each item.
	for($i = 1;$i<=$Itemcount;$i++)
	{
		$quantity = (int)$_POST['quantity'.$i];
		for($j = 0;$j<$quantity;$j++)
		{
			$info = explode("-",$_POST['item_number'.$i]);
			$Items[$j+$i-1]["id"] = (int)$info[1]; // reward id
			$Items[$j+$i-1]["realm"] = (int)$info[0]; // realm id
			$Items[$j+$i-1]["character"] = (int)$info[2]; // character guid
		}
	}
	
	//Check availability of rewards on realms.
	foreach($Items as $key => $value)
	{
		if((int)$Rewards[$value["id"]]["realm"] != $value["realm"])
		{
			mysql_query("INSERT INTO donate_log (date,email,txn_id,status,amount,info) VALUES (NOW(),'{$_POST['payer_email']}','{$_POST['txn_id']}','failed','{$_POST['mc_gross']}','Requested reward id ".$value['id'].", which is not available on realm ".$value['realm'].".')",$Con);
			die;
		}
	}
	
	//Check total payment amount.
	$sum = 0;
	foreach($Items as $key => $value)
	{
		$sum += (float)$Rewards[$value["id"]]["price"];
	}
	if($sum > $Money)
	{
		$info = "";
		foreach($Items as $key => $value)
		{
			$info .= "Reward: ".$Rewards[$value['id']]['name']." Cost: ".$Rewards[$value['id']]['price']."<br>\n";
		}
		mysql_query("INSERT INTO donate_log (date,email,txn_id,status,amount,info) VALUES (NOW(),'{$_POST['payer_email']}','{$_POST['txn_id']}','failed','{$_POST['mc_gross']}','Cost of rewards ({$sum}) was not paid in full:<br>\n{$info}')",$Con);
		die;
	}
	
	//Begin rewarding items.
	foreach($Items as $key => $value)
	{
		$ccon = mysql_connect($Realms[(int)$value['realm']]['sqlhost'],$Realms[(int)$value['realm']]['sqluser'],$Realms[(int)$value['realm']]['sqlpass'],true);
		mysql_select_db($Realms[(int)$value['realm']]['chardb'],$ccon);
		$REWARDNAME = mysql_real_escape_string($Rewards[$value['id']]['name'],$ccon);
		if((int)$Rewards[$value['id']]['item1'] > 0)
		{
                                    
                                    mysql_query("INSERT INTO surveys VALUES(null,'{$value['character']}','".MAIL_SUBJECT."','".MAIL_BODY."','1','".$Rewards[(int)$value['id']]['item1']."','".$Rewards[(int)$value['id']]['quantity1']."')");
		
		}
		if((int)$Rewards[$value['id']]['item2'] > 0)
		{
			mysql_query("INSERT INTO mailbox_insert_queue VALUES ('{$value['character']}','{$value['character']}','".MAIL_SUBJECT."','".MAIL_BODY."','61','0','".$Rewards[(int)$value['id']]['item2']."','1')");
		}
		if((int)$Rewards[$value['id']]['item3'] > 0)
		{
			mysql_query("INSERT INTO mailbox_insert_queue VALUES ('{$value['character']}','{$value['character']}','".MAIL_SUBJECT."','".MAIL_BODY."','61','0','".$Rewards[(int)$value['id']]['item3']."','1')");
		}
		if((int)$Rewards[$value['id']]['gold'] > 0)
		{
			mysql_query("INSERT INTO mailbox_insert_queue VALUES ('{$value['character']}','{$value['character']}','".MAIL_SUBJECT."','".MAIL_BODY."','61','".$Rewards[$value['id']]['gold']."','0','0')");
		}
		mysql_close($ccon);
	}
	
	//log time
	$Info = "Successful transaction:<br>\n";
	foreach($Items as $key => $value)
	{
		$Info .= mysql_real_escape_string($Rewards[$value['id']]['name'],$Con)."<br>\n";
	}
	mysql_query("INSERT INTO donate_log (date,email,txn_id,status,amount,info) VALUES (NOW(),'{$_POST['payer_email']}','{$_POST['txn_id']}','completed','{$_POST['mc_gross']}','{$Info}')",$Con);
	mysql_close($Con);
}

function handleInvalidPayment()
{
	
	$Con = mysql_connect(sql_host,sql_user,sql_pass);
	mysql_select_db(Cmsdb,$Con);
	$Info = "";
	foreach($_POST as $key => $value)
	{
		$Info .= "{$key} = {$value} <br>\n";
	}
	mysql_query("INSERT INTO donate_log (date,status,info) VALUES (NOW(),'invalid','An invalid request was made. Postdata info:<br>\n{$Info}')",$Con);
	mysql_close($Con);
}

function verifyPayment()
{
	if(sizeof($_POST) == 0)
	{
		//dont bother, maybe an accidental page visit.
		?><h1>Restricted Area</h1>
		<p>You are not permitted to access this page.</p><?php
		return;
	}
	$Postback = "cmd=_notify-validate";
	foreach($_POST as $key => $value)
	{
		$key = urlencode(stripslashes($key));
		$value = urlencode(stripslashes($value));
		$Postback .= "&{$key}={$value}";
	}
	$Sock = fsockopen(PAYPAL_URL,80,$errno,$errstr,5);
	if(!$Sock)
	{
		//handleInvalidPayment();
	}
	$Head .= "POST /cgi-bin/webscr HTTP/1.0\r\n";
	$Head .= "Content-type: application/x-www-form-urlencoded\r\n";
	$Head .= "Content-length: ".strlen($Postback)."\r\n\r\n";
	fputs($Sock,$Head.$Postback,strlen($Head.$Postback));
	while(!feof($Sock))
	{
		$txt = fgets($Sock,1024);
		if(strcmp($txt,"VERIFIED") == 0)
		{
			handlePayment();
		}
		elseif(strcmp($txt,"INVALID") == 0)
		{
			handleInvalidPayment();
		}
	}
	fclose($Sock);
}

verifyPayment();

?>