<?php

function GetVoteForm1()
	{
		
		$Con = mysql_connect(Gamedb_host,Gamedb_user,Gamedb_pass);
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

				<form action="?act=vote&do=vote1" target="<?php echo $Row['name']; ?>" method="post">
<table style="margin-left:30px;" border="0" width="1200">
					<input name="module" type="hidden" value="<?php echo $Row['id']; ?>" />
					<input name="to" type="hidden" value="<?php echo $Row['url']; ?>" />
					<tr>
						<td width="10"></td>
						<td width="50" valign="top"><img src="<?php echo $Row['image']; ?>"  /></td>
						<td width="10"></td>
						<td width="300" valign="mid" align="left"><FORM METHOD="LINK" ACTION="?act=vote&do=vote1"><INPUT ALT="Click to Vote" title="Click to Vote!" TYPE="submit" name="account" VALUE="<?php echo $_SESSION['account']; ?>"></FORM></td>
					<tr>
						<td><td valign="bottom" ><b>Reward points: <b><?php echo $Row['reward_points']; ?></td><td></td>
                        <td><b><?php echo $time; ?></b>
					</tr>
					<tr>
						<td colspan="4">&nbsp;</td>
					</tr>
				</form><table>
			<?php
			
		}

                                   
		mysql_close($Con);
                               
	}

	function GetVoteForm2()
	{
		
		$Con = mysql_connect(Gamedb_host,Gamedb_user,Gamedb_pass);
		mysql_select_db(Gamedb);
        mysql_query("DELETE FROM votes WHERE time < ".(time()-12*60*60));
		$res = mysql_query("SELECT id,name,image,url,reward_points FROM votemodules WHERE id='2'");
		while($Row = mysql_fetch_array($res))
        {
			$r = mysql_query("SELECT time FROM votes WHERE module='2' AND ip='{$_SERVER['REMOTE_ADDR']}'");
			if(!$R = mysql_fetch_array($r))
				$time = "You can vote now!";
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

				<form action="?act=vote&do=vote2" target="<?php echo $Row['name']; ?>" method="post">
<table style="margin-left:30px;" border="0" width="1200"><hr>
					<input name="module" type="hidden" value="<?php echo $Row['id']; ?>" />
					<input name="to" type="hidden" value="<?php echo $Row['url']; ?>" />
					<tr>
						<td width="10"></td>
						<td width="50" valign="top"><img src="<?php echo $Row['image']; ?>"/></td>
						<td width="10"></td>
						<td width="300" valign="mid" align="left"><FORM METHOD="LINK" ACTION="?act=vote&do=vote2"><INPUT ALT="Click to Vote" title="Click to Vote!" TYPE="submit" name="account" VALUE="<?php echo $_SESSION['account']; ?>"></FORM></td>
					<tr>
						<td><td valign="bottom" ><b>Reward points: <b><?php echo $Row['reward_points']; ?></td><td></td>
                        <td><b><?php echo $time; ?></b>
					</tr>
					<tr>
						<td colspan="4">&nbsp;</td>
					</tr>
				</form><table>
			<?php
		}

                                   
		mysql_close($Con);
                               
	}
	function GetVoteForm3()
	{
		
		$Con = mysql_connect(Gamedb_host,Gamedb_user,Gamedb_pass);
		mysql_select_db(Gamedb);
		mysql_query("DELETE FROM votes WHERE time < ".(time()-12*60*60));
		$res = mysql_query("SELECT id,name,image,url,reward_points FROM votemodules WHERE id='3'");
		while($Row = mysql_fetch_array($res))
                                     {
			$r = mysql_query("SELECT time FROM votes WHERE module='3' AND ip='{$_SERVER['REMOTE_ADDR']}'");
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

				<form action="?act=vote&do=vote3" target="<?php echo $Row['name']; ?>" method="post">
<table style="margin-left:30px;" border="0" width="1200"><hr>
					<input name="module" type="hidden" value="<?php echo $Row['id']; ?>" />
					<input name="to" type="hidden" value="<?php echo $Row['url']; ?>" />
					<tr>
						<td width="10"></td>
						<td width="50" valign="top"><img src="<?php echo $Row['image']; ?>" /></td>
						<td width="10"></td>
						<td width="300" valign="mid" align="left"><FORM METHOD="LINK" ACTION="?act=vote&do=vote3"><INPUT ALT="Click to Vote" title="Click to Vote!" TYPE="submit" name="account" VALUE="<?php echo $_SESSION['account']; ?>"></FORM></td>
					<tr>
						<td><td valign="bottom" ><b>Reward points: <b><?php echo $Row['reward_points']; ?></td><td></td>
                        <td><b><?php echo $time; ?></b>
					</tr>
					<tr>
						<td colspan="4">&nbsp;</td>
					</tr>
				</form><table>
				</form>
			<?php
		}

                                   
		mysql_close($Con);
                               
	}

	function GetVoteForm4()
	{
		
		$Con = mysql_connect(Gamedb_host,Gamedb_user,Gamedb_pass);
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

				<form action="?act=vote&do=vote4" target="<?php echo $Row['name']; ?>" method="post">
<table style="margin-left:30px;" border="0" width="1200"><hr>
					<input name="module" type="hidden" value="<?php echo $Row['id']; ?>" />
					<input name="to" type="hidden" value="<?php echo $Row['url']; ?>" />
					<tr>
						<td width="10"></td>
						<td width="50" valign="top"><img src="<?php echo $Row['image']; ?>"/></td>
						<td width="10"></td>
						<td width="300" valign="mid" align="left"><FORM METHOD="LINK" ACTION="?act=vote&do=vote4"><INPUT ALT="Click to Vote" title="Click to Vote!" TYPE="submit" name="account" VALUE="<?php echo $_SESSION['account']; ?>"></FORM></td>
					<tr>
						<td><td valign="bottom" ><b>Reward points: <b><?php echo $Row['reward_points']; ?></td><td></td>
                        <td><b><?php echo $time; ?></b>
					</tr>
					<tr>
						<td colspan="4">&nbsp;</td>
					</tr>
				</form><table>
			<?php
		}

                                   
		mysql_close($Con);
                               
	}

	function GetVoteForm5()
	{
		
		$Con = mysql_connect(Gamedb_host,Gamedb_user,Gamedb_pass);
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

				<form action="?act=vote&do=vote5" target="<?php echo $Row['name']; ?>" method="post">
<table style="margin-left:30px;" border="0" width="1200"><hr>
					<input name="module" type="hidden" value="<?php echo $Row['id']; ?>" />
					<input name="to" type="hidden" value="<?php echo $Row['url']; ?>" />
					<tr>
						<td width="10"></td>
						<td width="50" valign="top"><img src="<?php echo $Row['image']; ?>"/></td>
						<td width="10"></td>
						<td width="300" valign="mid" align="left"><FORM METHOD="LINK" ACTION="?act=vote&do=vote5"><INPUT ALT="Click to Vote" title="Click to Vote!" TYPE="submit" name="account" VALUE="<?php echo $_SESSION['account']; ?>"></FORM></td>
					<tr>
						<td><td valign="bottom" ><b>Reward points: <b><?php echo $Row['reward_points']; ?></td><td></td>
                        <td><b><?php echo $time; ?></b>
					</tr>
					<tr>
						<td colspan="4">&nbsp;</td>
					</tr>
				</form><table>
			<?php
		}

                                   
		mysql_close($Con);
                               
	}

	function GetVoteForm6()
	{
		$Con = mysql_connect(Gamedb_host,Gamedb_user,Gamedb_pass);
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

				<form action="?act=vote&do=vote6" target="<?php echo $Row['name']; ?>" method="post">
<table style="margin-left:30px;" border="0" width="1200"><hr>
					<input name="module" type="hidden" value="<?php echo $Row['id']; ?>" />
					<input name="to" type="hidden" value="<?php echo $Row['url']; ?>" />
					<tr>
						<td width="10"></td>
						<td width="50" valign="top"><img src="<?php echo $Row['image']; ?>" " /></td>
						<td width="10"></td>
						<td width="300" valign="mid" align="left"><FORM METHOD="LINK" ACTION="?act=vote&do=vote6"><INPUT ALT="Click to Vote" title="Click to Vote!" TYPE="submit" name="account" VALUE="<?php echo $_SESSION['account']; ?>"></FORM></td>
					<tr>
						<td><td valign="bottom" ><b>Reward points: <b><?php echo $Row['reward_points']; ?></td><td></td>
                        <td><b><?php echo $time; ?></b>
					</tr>
					<tr>
						<td colspan="4">&nbsp;</td>
					</tr>
				</form><table>
			<?php
		}

                                   
		mysql_close($Con);
                               
	}

	function GetVoteForm7()
	{
		
		$Con = mysql_connect(Gamedb_host,Gamedb_user,Gamedb_pass);
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

				<form action="?act=vote&do=vote7" target="<?php echo $Row['name']; ?>" method="post">
<table style="margin-left:30px;" border="0" width="1200"><hr>
					<input name="module" type="hidden" value="<?php echo $Row['id']; ?>" />
					<input name="to" type="hidden" value="<?php echo $Row['url']; ?>" />
					<tr>
						<td width="10"></td>
						<td width="50" valign="top"><img src="<?php echo $Row['image']; ?>"/></td>
						<td width="10"></td>
						<td width="300" valign="mid" align="left"><FORM METHOD="LINK" ACTION="?act=vote&do=vote7"><INPUT ALT="Click to Vote" title="Click to Vote!" TYPE="submit" name="account" VALUE="<?php echo $_SESSION['account']; ?>"></FORM></td>
					<tr>
						<td><td valign="bottom" ><b>Reward points: <b><?php echo $Row['reward_points']; ?></td><td></td>
                        <td><b><?php echo $time; ?></b>
					</tr>
					<tr>
						<td colspan="4">&nbsp;</td>
					</tr>
				</form><table>
			<?php
		}

                                   
		mysql_close($Con);
                               
	}

	function GetVoteForm8()
	{
		
		$Con = mysql_connect(Gamedb_host,Gamedb_user,Gamedb_pass);
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

				<form action="?act=vote&do=vote8" target="<?php echo $Row['name']; ?>" method="post">
<table style="margin-left:30px;" border="0" width="1200"><hr>
					<input name="module" type="hidden" value="<?php echo $Row['id']; ?>" />
					<input name="to" type="hidden" value="<?php echo $Row['url']; ?>" />
					<tr>
						<td width="10"></td>
						<td width="50" valign="top"><img src="<?php echo $Row['image']; ?>"/></td>
						<td width="10"></td>
						<td width="300" valign="mid" align="left"><FORM METHOD="LINK" ACTION="?act=vote&do=vote8"><INPUT ALT="Click to Vote" title="Click to Vote!" TYPE="submit" name="account" VALUE="<?php echo $_SESSION['account']; ?>"></FORM></td>
					<tr>
						<td><td valign="bottom" ><b>Reward points: <b><?php echo $Row['reward_points']; ?></td><td></td>
                        <td><b><?php echo $time; ?></b>
					</tr>
					<tr>
						<td colspan="4">&nbsp;</td>
					</tr>
				</form><table>
			<?php
		}

                                   
		mysql_close($Con);
                               
	}

		function GetVoteForm9()
	{
		
		$Con = mysql_connect(Gamedb_host,Gamedb_user,Gamedb_pass);
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

				<form action="?act=vote&do=vote9" target="<?php echo $Row['name']; ?>" method="post">
<table style="margin-left:30px;" border="0" width="1200"><hr>
					<input name="module" type="hidden" value="<?php echo $Row['id']; ?>" />
					<input name="to" type="hidden" value="<?php echo $Row['url']; ?>" />
					<tr>
						<td width="10"></td>
						<td width="50" valign="top"><img src="<?php echo $Row['image']; ?>"  /></td>
						<td width="10"></td>
						<td width="300" valign="mid" align="left"><FORM METHOD="LINK" ACTION="?act=vote&do=vote9"><INPUT ALT="Click to Vote" title="Click to Vote!" TYPE="submit" name="account" VALUE="<?php echo $_SESSION['account']; ?>"></FORM></td>
					<tr>
						<td><td valign="bottom" ><b>Reward points: <b><?php echo $Row['reward_points']; ?></td><td></td>
                        <td><b><?php echo $time; ?></b>
					</tr>
					<tr>
						<td colspan="4">&nbsp;</td>
					</tr>
				</form><table>
			<?php
		}

                                   
		mysql_close($Con);
                               
	}

?>