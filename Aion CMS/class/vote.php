<?php

//vote functions
		function GetVoteForm1()
	{
		
		$Con = mysql_connect(sql_host,sql_user,sql_pass);
		mysql_select_db(Gamedb);
                                    mysql_query("DELETE FROM votes WHERE time < ".(time()-12*60*60));
		$res = mysql_query("SELECT id,name,image,url,reward_points FROM votemodules WHERE id='1'");
		while($Row = mysql_fetch_array($res))
                                     {
			$r = mysql_query("SELECT time FROM votes WHERE module='1' AND ip='{$_SERVER['REMOTE_ADDR']}'");
			if(!$R = mysql_fetch_array($r))
				$time = "You can vote now!" ;
			else
			{
				$Expiretime = (int)$R['time'] + (12*60*60);
				$Until = $Expiretime - time();
				$time = ceil($Until/60/60);
			}
			if($time == 1)
				$time = "".$time." hour remaining!";
			elseif($time > 1)
				$time =  "".$time." hours remaining!";
		?>

				<form action="?action=vote_redeem&vote=link1" target="<?php echo $Row['name']; ?>" method="post">

					<input name="module" type="hidden" value="<?php echo $Row['id']; ?>" />
					<input name="to" type="hidden" value="<?php echo $Row['url']; ?>" />
					
						
						<td width="20"></td>
						<td align="top"><FORM METHOD="LINK" ACTION="?action=vote_redeem&vote=link1"><INPUT ALT="Click to Vote" title="Click to Vote!" TYPE="image" src="<?php echo $Row['image'];?>" name="account" VALUE="<?php echo $_SESSION['account']; ?>"></FORM><br><b>Reward points: <b><?php echo $Row['reward_points']; ?><br><b><?php echo $time; ?></b><br></td>
					
				</form>
			<?php
		}
	mysql_close($Con);
                               
	}

function GetVoteForm2()
	{
		
		$Con = mysql_connect(sql_host,sql_user,sql_pass);
		mysql_select_db(Gamedb);
                                    mysql_query("DELETE FROM votes WHERE time < ".(time()-12*60*60));
		$res = mysql_query("SELECT id,name,image,url,reward_points FROM votemodules WHERE id='4'");
		while($Row = mysql_fetch_array($res))
                                     {
			$r = mysql_query("SELECT time FROM votes WHERE module='4' AND ip='{$_SERVER['REMOTE_ADDR']}'");
			if(!$R = mysql_fetch_array($r))
				$time = "You can vote now!" ;
			else
			{
				$Expiretime = (int)$R['time'] + (12*60*60);
				$Until = $Expiretime - time();
				$time = ceil($Until/60/60);
			}
			if($time == 1)
				$time = "".$time." hour remaining!";
			elseif($time > 1)
				$time =  "".$time." hours remaining!";
		?>

				<form action="?action=vote_redeem&vote=link2" target="<?php echo $Row['name']; ?>" method="post">

					<input name="module" type="hidden" value="<?php echo $Row['id']; ?>" />
					<input name="to" type="hidden" value="<?php echo $Row['url']; ?>" />
					
						<td width="20"></td>
						<td ><FORM METHOD="LINK" ACTION="?action=vote_redeem&vote=link2"><INPUT ALT="Click to Vote" title="Click to Vote!" TYPE="image" src="<?php echo $Row['image'];?>" name="account" VALUE="<?php echo $_SESSION['account']; ?>"></FORM><br><b>Reward points: <b><?php echo $Row['reward_points']; ?><br><b><?php echo $time; ?></b><br></td>
				</form>
			<?php
		}
	mysql_close($Con);
                               
	}

	function GetVoteForm3()
	{
		
		$Con = mysql_connect(sql_host,sql_user,sql_pass);
		mysql_select_db(Gamedb);
                                    mysql_query("DELETE FROM votes WHERE time < ".(time()-12*60*60));
		$res = mysql_query("SELECT id,name,image,url,reward_points FROM votemodules WHERE id='3'");
		while($Row = mysql_fetch_array($res))
                                     {
			$r = mysql_query("SELECT time FROM votes WHERE module='4' AND ip='{$_SERVER['REMOTE_ADDR']}'");
			if(!$R = mysql_fetch_array($r))
				$time = "You can vote now!" ;
			else
			{
				$Expiretime = (int)$R['time'] + (12*60*60);
				$Until = $Expiretime - time();
				$time = ceil($Until/60/60);
			}
			if($time == 1)
				$time = "".$time." hour remaining!";
			elseif($time > 1)
				$time =  "".$time." hours remaining!";
		?>

				<form action="?action=vote_redeem&vote=link3" target="<?php echo $Row['name']; ?>" method="post">

					<input name="module" type="hidden" value="<?php echo $Row['id']; ?>" />
					<input name="to" type="hidden" value="<?php echo $Row['url']; ?>" />
					
						<td width="20"></td>
						<td ><FORM METHOD="LINK" ACTION="?action=vote_redeem&vote=link3"><INPUT ALT="Click to Vote" title="Click to Vote!" TYPE="image" src="<?php echo $Row['image'];?>" name="account" VALUE="<?php echo $_SESSION['account']; ?>"></FORM><br><b>Reward points: <b><?php echo $Row['reward_points']; ?><br><b><?php echo $time; ?></b><br></td>
					
				</form>
			<?php
		}
	mysql_close($Con);
                               
	}

	function GetVoteForm4()
	{
		
		$Con = mysql_connect(sql_host,sql_user,sql_pass);
		mysql_select_db(Gamedb);
                                    mysql_query("DELETE FROM votes WHERE time < ".(time()-12*60*60));
		$res = mysql_query("SELECT id,name,image,url,reward_points FROM votemodules WHERE id='4'");
		while($Row = mysql_fetch_array($res))
                                     {
			$r = mysql_query("SELECT time FROM votes WHERE module='4' AND ip='{$_SERVER['REMOTE_ADDR']}'");
			if(!$R = mysql_fetch_array($r))
				$time = "You can vote now!" ;
			else
			{
				$Expiretime = (int)$R['time'] + (12*60*60);
				$Until = $Expiretime - time();
				$time = ceil($Until/60/60);
			}
			if($time == 1)
				$time = "".$time." hour remaining!";
			elseif($time > 1)
				$time =  "".$time." hours remaining!";
		?>

				<form action="?action=vote_redeem&vote=link4" target="<?php echo $Row['name']; ?>" method="post">

					<input name="module" type="hidden" value="<?php echo $Row['id']; ?>" />
					<input name="to" type="hidden" value="<?php echo $Row['url']; ?>" />
					
						<td width="20"></td>
						<td ><FORM METHOD="LINK" ACTION="?action=vote_redeem&vote=link4"><INPUT ALT="Click to Vote" title="Click to Vote!" TYPE="image" src="<?php echo $Row['image'];?>" name="account" VALUE="<?php echo $_SESSION['account']; ?>"></FORM><br><b>Reward points: <b><?php echo $Row['reward_points']; ?><br><b><?php echo $time; ?></b><br></td>
					
						
					
				</form>
			<?php
		}
	mysql_close($Con);
                               
	}

	function GetVoteForm5()
	{
		
		$Con = mysql_connect(sql_host,sql_user,sql_pass);
		mysql_select_db(Gamedb);
                                    mysql_query("DELETE FROM votes WHERE time < ".(time()-12*60*60));
		$res = mysql_query("SELECT id,name,image,url,reward_points FROM votemodules WHERE id='5'");
		while($Row = mysql_fetch_array($res))
                                     {
			$r = mysql_query("SELECT time FROM votes WHERE module='5' AND ip='{$_SERVER['REMOTE_ADDR']}'");
			if(!$R = mysql_fetch_array($r))
				$time = "You can vote now!" ;
			else
			{
				$Expiretime = (int)$R['time'] + (12*60*60);
				$Until = $Expiretime - time();
				$time = ceil($Until/60/60);
			}
			if($time == 1)
				$time = "".$time." hour remaining!";
			elseif($time > 1)
				$time =  "".$time." hours remaining!";
		?>

				<form action="?action=vote_redeem&vote=link5" target="<?php echo $Row['name']; ?>" method="post">

					<input name="module" type="hidden" value="<?php echo $Row['id']; ?>" />
					<input name="to" type="hidden" value="<?php echo $Row['url']; ?>" />
					
						<td width="20"></td>
						<td ><FORM METHOD="LINK" ACTION="?action=vote_redeem&vote=link5"><INPUT ALT="Click to Vote" title="Click to Vote!" TYPE="image" src="<?php echo $Row['image'];?>" name="account" VALUE="<?php echo $_SESSION['account']; ?>"></FORM><br><b>Reward points: <b><?php echo $Row['reward_points']; ?><br><b><?php echo $time; ?></b><br></td>
					
				</form>
			<?php
		}
	mysql_close($Con);
                               
	}

	function GetVoteForm6()
	{
		
		$Con = mysql_connect(sql_host,sql_user,sql_pass);
		mysql_select_db(Gamedb);
                                    mysql_query("DELETE FROM votes WHERE time < ".(time()-12*60*60));
		$res = mysql_query("SELECT id,name,image,url,reward_points FROM votemodules WHERE id='6'");
		while($Row = mysql_fetch_array($res))
                                     {
			$r = mysql_query("SELECT time FROM votes WHERE module='6' AND ip='{$_SERVER['REMOTE_ADDR']}'");
			if(!$R = mysql_fetch_array($r))
				$time = "You can vote now!" ;
			else
			{
				$Expiretime = (int)$R['time'] + (12*60*60);
				$Until = $Expiretime - time();
				$time = ceil($Until/60/60);
			}
			if($time == 1)
				$time = "".$time." hour remaining!";
			elseif($time > 1)
				$time =  "".$time." hours remaining!";
		?>

				<form action="?action=vote_redeem&vote=link6" target="<?php echo $Row['name']; ?>" method="post">

					<input name="module" type="hidden" value="<?php echo $Row['id']; ?>" />
					<input name="to" type="hidden" value="<?php echo $Row['url']; ?>" />
					
						<td width="20"></td>
						<td ><FORM METHOD="LINK" ACTION="?action=vote_redeem&vote=link6"><INPUT ALT="Click to Vote" title="Click to Vote!" TYPE="image" src="<?php echo $Row['image'];?>" name="account" VALUE="<?php echo $_SESSION['account']; ?>"></FORM><br><b>Reward points: <b><?php echo $Row['reward_points']; ?><br><b><?php echo $time; ?></b><br></td>
					
				</form>
			<?php
		}
	mysql_close($Con);
                               
	}

	function GetVoteForm7()
	{
		
		$Con = mysql_connect(sql_host,sql_user,sql_pass);
		mysql_select_db(Gamedb);
                                    mysql_query("DELETE FROM votes WHERE time < ".(time()-12*60*60));
		$res = mysql_query("SELECT id,name,image,url,reward_points FROM votemodules WHERE id='7'");
		while($Row = mysql_fetch_array($res))
                                     {
			$r = mysql_query("SELECT time FROM votes WHERE module='7' AND ip='{$_SERVER['REMOTE_ADDR']}'");
			if(!$R = mysql_fetch_array($r))
				$time = "You can vote now!" ;
			else
			{
				$Expiretime = (int)$R['time'] + (12*60*60);
				$Until = $Expiretime - time();
				$time = ceil($Until/60/60);
			}
			if($time == 1)
				$time = "".$time." hour remaining!";
			elseif($time > 1)
				$time =  "".$time." hours remaining!";
		?>

				<form action="?action=vote_redeem&vote=link7" target="<?php echo $Row['name']; ?>" method="post">

					<input name="module" type="hidden" value="<?php echo $Row['id']; ?>" />
					<input name="to" type="hidden" value="<?php echo $Row['url']; ?>" />
					
						
						<td width="20"></td>
						<td ><FORM METHOD="LINK" ACTION="?action=vote_redeem&vote=link7"><INPUT ALT="Click to Vote" title="Click to Vote!" TYPE="image" src="<?php echo $Row['image'];?>" name="account" VALUE="<?php echo $_SESSION['account']; ?>"></FORM><br><b>Reward points: <b><?php echo $Row['reward_points']; ?><br><b><?php echo $time; ?></b><br></td>
					
				</form><table>
			<?php
		}
	mysql_close($Con);
                               
	}

	function GetVoteForm8()
	{
		
		$Con = mysql_connect(sql_host,sql_user,sql_pass);
		mysql_select_db(Gamedb);
                                    mysql_query("DELETE FROM votes WHERE time < ".(time()-12*60*60));
		$res = mysql_query("SELECT id,name,image,url,reward_points FROM votemodules WHERE id='8'");
		while($Row = mysql_fetch_array($res))
                                     {
			$r = mysql_query("SELECT time FROM votes WHERE module='8' AND ip='{$_SERVER['REMOTE_ADDR']}'");
			if(!$R = mysql_fetch_array($r))
				$time = "You can vote now!" ;
			else
			{
				$Expiretime = (int)$R['time'] + (12*60*60);
				$Until = $Expiretime - time();
				$time = ceil($Until/60/60);
			}
			if($time == 1)
				$time = "".$time." hour remaining!";
			elseif($time > 1)
				$time =  "".$time." hours remaining!";
		?>

				<form action="?action=vote_redeem&vote=link8" target="<?php echo $Row['name']; ?>" method="post">

					<input name="module" type="hidden" value="<?php echo $Row['id']; ?>" />
					<input name="to" type="hidden" value="<?php echo $Row['url']; ?>" />
						<td width="20"></td>
						<td ><FORM METHOD="LINK" ACTION="?action=vote_redeem&vote=link8"><INPUT ALT="Click to Vote" title="Click to Vote!" TYPE="image" src="<?php echo $Row['image'];?>" name="account" VALUE="<?php echo $_SESSION['account']; ?>"></FORM><br><b>Reward points: <b><?php echo $Row['reward_points']; ?><br><b><?php echo $time; ?></b><br></td>
					
				</form><table>
			<?php
		}
	mysql_close($Con);
                               
	}

                                  

		function GetVoteForm9()
	{
		
		$Con = mysql_connect(sql_host,sql_user,sql_pass);
		mysql_select_db(Gamedb);
                                    mysql_query("DELETE FROM votes WHERE time < ".(time()-12*60*60));
		$res = mysql_query("SELECT id,name,image,url,reward_points FROM votemodules WHERE id='9'");
		while($Row = mysql_fetch_array($res))
                                     {
			$r = mysql_query("SELECT time FROM votes WHERE module='9' AND ip='{$_SERVER['REMOTE_ADDR']}'");
			if(!$R = mysql_fetch_array($r))
				$time = "You can vote now!" ;
			else
			{
				$Expiretime = (int)$R['time'] + (12*60*60);
				$Until = $Expiretime - time();
				$time = ceil($Until/60/60);
			}
			if($time == 1)
				$time = "".$time." hour remaining!";
			elseif($time > 1)
				$time =  "".$time." hours remaining!";
		?>

				<form action="?action=vote_redeem&vote=link9" target="<?php echo $Row['name']; ?>" method="post">

					<input name="module" type="hidden" value="<?php echo $Row['id']; ?>" />
					<input name="to" type="hidden" value="<?php echo $Row['url']; ?>" />
					
						<td width="20"></td>
						<td ><FORM METHOD="LINK" ACTION="?action=vote_redeem&vote=link9"><INPUT ALT="Click to Vote" title="Click to Vote!" TYPE="image" src="<?php echo $Row['image'];?>" name="account" VALUE="<?php echo $_SESSION['account']; ?>"></FORM><br><b>Reward points: <b><?php echo $Row['reward_points']; ?><br><b><?php echo $time; ?></b><br></td>
					
				</form><table>
			<?php
		}
	mysql_close($Con);
                               
	}

	if($_GET['vote'] == "link1")
		{
			TallyVote1();
			return;
		}
if($_GET['vote'] == "link2")
		{
			TallyVote2();
			return;
		}
if($_GET['vote'] == "link3")
		{
			TallyVote3();
			return;
		}
if($_GET['vote'] == "link4")
		{
			TallyVote4();
			return;
		}
if($_GET['vote'] == "link5")
		{
			TallyVote5();
			return;
		}
if($_GET['vote'] == "link6")
		{
			TallyVote6();
			return;
		}
if($_GET['vote'] == "link7")
		{
			TallyVote7();
			return;
		}
if($_GET['vote'] == "link8")
		{
			TallyVote8();
			return;
		}
if($_GET['vote'] == "link9")
		{
			TallyVote9();
			return;
		}

	function TallyVote1()
	{
		$Module = addslashes($_POST['module']);
		$Account = addslashes($_POST['account']);
		$To = addslashes($_POST['to']);
		$Ip = $_SERVER['REMOTE_ADDR'];
		
		
		$Con = mysql_connect(sql_host,sql_user,sql_pass);
		mysql_select_db(Gamedb);
		
		//redirect
		header("Location: {$To}\r\n");
		
		//check that the module exists
		if(mysql_result(mysql_query("SELECT COUNT(*) FROM votemodules WHERE id='{$Module}'"),0) != 1)
			return;
			
		//check if the user or account has been accredited for a vote within the last 12 hrs.
		if(mysql_result(mysql_query("SELECT COUNT(*) FROM votes WHERE module='{$Module}' AND (ip = '{$Ip}' OR account = '{$Account}')"),0) != 0)
			return;
		
		//set cookie
		setcookie("vote_time","1",time()+12*60*60,"/");
		
		//add vote to timeout
		mysql_query("INSERT INTO votes VALUES ('{$Ip}','{$Account}','{$Module}','".time()."')");
		
		mysql_close($Con);
		$Con = mysql_connect(sql_host,sql_user,sql_pass);
		mysql_select_db(Logindb);
		
		// +1 vote point
		if($_SESSION['account'] == $Account)
		{
			(int)$_SESSION['points']+= RPPV1;
		}
		mysql_query("UPDATE account_data SET reward_points = reward_points + ".RPPV1." WHERE name='{$Account}'");
		mysql_close($Con);
	}

function TallyVote2()
	{
		$Module = addslashes($_POST['module']);
		$Account = addslashes($_POST['account']);
		$To = addslashes($_POST['to']);
		$Ip = $_SERVER['REMOTE_ADDR'];
		
		
		$Con = mysql_connect(sql_host,sql_user,sql_pass);
		mysql_select_db(Gamedb);
		
		//redirect
		header("Location: {$To}\r\n");
		
		//check that the module exists
		if(mysql_result(mysql_query("SELECT COUNT(*) FROM votemodules WHERE id='{$Module}'"),0) != 1)
			return;
			
		//check if the user or account has been accredited for a vote within the last 12 hrs.
		if(mysql_result(mysql_query("SELECT COUNT(*) FROM votes WHERE module='{$Module}' AND (ip = '{$Ip}' OR account = '{$Account}')"),0) != 0)
			return;
		
		//set cookie
		setcookie("vote_time","1",time()+12*60*60,"/");
		
		//add vote to timeout
		mysql_query("INSERT INTO votes VALUES ('{$Ip}','{$Account}','{$Module}','".time()."')");
		
		mysql_close($Con);
		$Con = mysql_connect(sql_host,sql_user,sql_pass);
		mysql_select_db(Logindb);
		
		// +1 vote point
		if($_SESSION['account'] == $Account)
		{
			(int)$_SESSION['points']+= RPPV2;
		}
		mysql_query("UPDATE account_data SET reward_points = reward_points + ".RPPV2." WHERE name='{$Account}'");
		mysql_close($Con);
	}

function TallyVote3()
	{
		$Module = addslashes($_POST['module']);
		$Account = addslashes($_POST['account']);
		$To = addslashes($_POST['to']);
		$Ip = $_SERVER['REMOTE_ADDR'];
		
		
		$Con = mysql_connect(sql_host,sql_user,sql_pass);
		mysql_select_db(Gamedb);
		
		//redirect
		header("Location: {$To}\r\n");
		
		//check that the module exists
		if(mysql_result(mysql_query("SELECT COUNT(*) FROM votemodules WHERE id='{$Module}'"),0) != 1)
			return;
			
		//check if the user or account has been accredited for a vote within the last 12 hrs.
		if(mysql_result(mysql_query("SELECT COUNT(*) FROM votes WHERE module='{$Module}' AND (ip = '{$Ip}' OR account = '{$Account}')"),0) != 0)
			return;
		
		//set cookie
		setcookie("vote_time","1",time()+12*60*60,"/");
		
		//add vote to timeout
		mysql_query("INSERT INTO votes VALUES ('{$Ip}','{$Account}','{$Module}','".time()."')");
		
		mysql_close($Con);
		$Con = mysql_connect(sql_host,sql_user,sql_pass);
		mysql_select_db(Logindb);
		
		// +1 vote point
		if($_SESSION['account'] == $Account)
		{
			(int)$_SESSION['points']+= RPPV3;
		}
		mysql_query("UPDATE account_data SET reward_points = reward_points + ".RPPV3." WHERE name='{$Account}'");
		mysql_close($Con);
	}

function TallyVote4()
	{
		$Module = addslashes($_POST['module']);
		$Account = addslashes($_POST['account']);
		$To = addslashes($_POST['to']);
		$Ip = $_SERVER['REMOTE_ADDR'];
		
		
		$Con = mysql_connect(sql_host,sql_user,sql_pass);
		mysql_select_db(Gamedb);
		
		//redirect
		header("Location: {$To}\r\n");
		
		//check that the module exists
		if(mysql_result(mysql_query("SELECT COUNT(*) FROM votemodules WHERE id='{$Module}'"),0) != 1)
			return;
			
		//check if the user or account has been accredited for a vote within the last 12 hrs.
		if(mysql_result(mysql_query("SELECT COUNT(*) FROM votes WHERE module='{$Module}' AND (ip = '{$Ip}' OR account = '{$Account}')"),0) != 0)
			return;
		
		//set cookie
		setcookie("vote_time","1",time()+12*60*60,"/");
		
		//add vote to timeout
		mysql_query("INSERT INTO votes VALUES ('{$Ip}','{$Account}','{$Module}','".time()."')");
		
		mysql_close($Con);
		$Con = mysql_connect(sql_host,sql_user,sql_pass);
		mysql_select_db(Logindb);
		
		// +1 vote point
		if($_SESSION['account'] == $Account)
		{
			(int)$_SESSION['points']+= RPPV4;
		}
		mysql_query("UPDATE account_data SET reward_points = reward_points + ".RPPV4." WHERE name='{$Account}'");
		mysql_close($Con);
	}

function TallyVote5()
	{
		$Module = addslashes($_POST['module']);
		$Account = addslashes($_POST['account']);
		$To = addslashes($_POST['to']);
		$Ip = $_SERVER['REMOTE_ADDR'];
		
		
		$Con = mysql_connect(sql_host,sql_user,sql_pass);
		mysql_select_db(Gamedb);
		
		//redirect
		header("Location: {$To}\r\n");
		
		//check that the module exists
		if(mysql_result(mysql_query("SELECT COUNT(*) FROM votemodules WHERE id='{$Module}'"),0) != 1)
			return;
			
		//check if the user or account has been accredited for a vote within the last 12 hrs.
		if(mysql_result(mysql_query("SELECT COUNT(*) FROM votes WHERE module='{$Module}' AND (ip = '{$Ip}' OR account = '{$Account}')"),0) != 0)
			return;
		
		//set cookie
		setcookie("vote_time","1",time()+12*60*60,"/");
		
		//add vote to timeout
		mysql_query("INSERT INTO votes VALUES ('{$Ip}','{$Account}','{$Module}','".time()."')");
		
		mysql_close($Con);
		$Con = mysql_connect(sql_host,sql_user,sql_pass);
		mysql_select_db(Logindb);
		
		// +1 vote point
		if($_SESSION['account'] == $Account)
		{
			(int)$_SESSION['points']+= RPPV5;
		}
		mysql_query("UPDATE account_data SET reward_points = reward_points + ".RPPV5." WHERE name='{$Account}'");
		mysql_close($Con);
	}

function TallyVote6()
	{
		$Module = addslashes($_POST['module']);
		$Account = addslashes($_POST['account']);
		$To = addslashes($_POST['to']);
		$Ip = $_SERVER['REMOTE_ADDR'];
		
		$Con = mysql_connect(sql_host,sql_user,sql_pass);
		mysql_select_db(Gamedb);
		
		//redirect
		header("Location: {$To}\r\n");
		
		//check that the module exists
		if(mysql_result(mysql_query("SELECT COUNT(*) FROM votemodules WHERE id='{$Module}'"),0) != 1)
			return;
			
		//check if the user or account has been accredited for a vote within the last 12 hrs.
		if(mysql_result(mysql_query("SELECT COUNT(*) FROM votes WHERE module='{$Module}' AND (ip = '{$Ip}' OR account = '{$Account}')"),0) != 0)
			return;
		
		//set cookie
		setcookie("vote_time","1",time()+12*60*60,"/");
		
		//add vote to timeout
		mysql_query("INSERT INTO votes VALUES ('{$Ip}','{$Account}','{$Module}','".time()."')");
		
		mysql_close($Con);
		$Con = mysql_connect(sql_host,sql_user,sql_pass);
		mysql_select_db(Logindb);

		// +1 vote point
		if($_SESSION['account'] == $Account)
		{
			(int)$_SESSION['points']+= RPPV6;
		}
		mysql_query("UPDATE account_data SET reward_points = reward_points + ".RPPV6." WHERE name='{$Account}'");
		mysql_close($Con);
	}

function TallyVote7()
	{
		$Module = addslashes($_POST['module']);
		$Account = addslashes($_POST['account']);
		$To = addslashes($_POST['to']);
		$Ip = $_SERVER['REMOTE_ADDR'];
		
		
		$Con = mysql_connect(sql_host,sql_user,sql_pass);
		mysql_select_db(Gamedb);
		
		//redirect
		header("Location: {$To}\r\n");
		
		//check that the module exists
		if(mysql_result(mysql_query("SELECT COUNT(*) FROM votemodules WHERE id='{$Module}'"),0) != 1)
			return;
			
		//check if the user or account has been accredited for a vote within the last 12 hrs.
		if(mysql_result(mysql_query("SELECT COUNT(*) FROM votes WHERE module='{$Module}' AND (ip = '{$Ip}' OR account = '{$Account}')"),0) != 0)
			return;
		
		//set cookie
		setcookie("vote_time","1",time()+12*60*60,"/");
		
		//add vote to timeout
		mysql_query("INSERT INTO votes VALUES ('{$Ip}','{$Account}','{$Module}','".time()."')");
		
		mysql_close($Con);
		$Con = mysql_connect(sql_host,sql_user,sql_pass);
		mysql_select_db(Logindb);
		
		// +1 vote point
		if($_SESSION['account'] == $Account)
		{
			(int)$_SESSION['points']+= RPPV7;
		}
		mysql_query("UPDATE account_data SET reward_points = reward_points + ".RPPV7." WHERE name='{$Account}'");
		mysql_close($Con);
	}

function TallyVote8()
	{
		$Module = addslashes($_POST['module']);
		$Account = addslashes($_POST['account']);
		$To = addslashes($_POST['to']);
		$Ip = $_SERVER['REMOTE_ADDR'];
		
		
		$Con = mysql_connect(Gamedb_host,Gamedb_user,Gamedb_pass);
		mysql_select_db(Gamedb);
		
		//redirect
		header("Location: {$To}\r\n");
		
		//check that the module exists
		if(mysql_result(mysql_query("SELECT COUNT(*) FROM votemodules WHERE id='{$Module}'"),0) != 1)
			return;
			
		//check if the user or account has been accredited for a vote within the last 12 hrs.
		if(mysql_result(mysql_query("SELECT COUNT(*) FROM votes WHERE module='{$Module}' AND (ip = '{$Ip}' OR account = '{$Account}')"),0) != 0)
			return;
		
		//set cookie
		setcookie("vote_time","1",time()+12*60*60,"/");
		
		//add vote to timeout
		mysql_query("INSERT INTO votes VALUES ('{$Ip}','{$Account}','{$Module}','".time()."')");
		
		mysql_close($Con);
		$Con = mysql_connect(sql_host,sql_user,sql_pass);
		mysql_select_db(Logindb);

		// +1 vote point
		if($_SESSION['account'] == $Account)
		{
			(int)$_SESSION['points']+= RPPV8;
		}
		mysql_query("UPDATE account_data SET reward_points = reward_points + ".RPPV8." WHERE name='{$Account}'");
		mysql_close($Con);
	}

function TallyVote9()
	{
		$Module = addslashes($_POST['module']);
		$Account = addslashes($_POST['account']);
		$To = addslashes($_POST['to']);
		$Ip = $_SERVER['REMOTE_ADDR'];
		
		
		$Con = mysql_connect(sql_host,sql_user,sql_pass);
		mysql_select_db(Gamedb);

		//redirect
		header("Location: {$To}\r\n");
		
		//check that the module exists
		if(mysql_result(mysql_query("SELECT COUNT(*) FROM votemodules WHERE id='{$Module}'"),0) != 1)
			return;
			
		//check if the user or account has been accredited for a vote within the last 12 hrs.
		if(mysql_result(mysql_query("SELECT COUNT(*) FROM votes WHERE module='{$Module}' AND (ip = '{$Ip}' OR account = '{$Account}')"),0) != 0)
			return;
		
		//set cookie
		setcookie("vote_time","1",time()+12*60*60,"/");
		
		//add vote to timeout
		mysql_query("INSERT INTO votes VALUES ('{$Ip}','{$Account}','{$Module}','".time()."')");
		
		mysql_close($Con);
		$Con = mysql_connect(sql_host,sql_user,sql_pass);
		mysql_select_db(Logindb);
		
		// +1 vote point
		if($_SESSION['account'] == $Account)
		{
			(int)$_SESSION['points']+= RPPV9;
		}
		mysql_query("UPDATE account_data SET reward_points = reward_points + ".RPPV9." WHERE name='{$Account}'");
		mysql_close($Con);
	}
	
	


?>
