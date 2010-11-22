<?php

//includes

//core class

class inventory

{ 



//functions

	function Content()
	{

                 ?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<title>..:: Aion CMS : Home ::..</title> 
<style type="text/css" media="all">@import url( "graphics/style.css" );</style>

</head><body>

<style>
#demo-notice	{ background: #4558A4 url(graphics/img/bg-gradient3.gif) repeat-x scroll left top; color: #FFF; 
					margin: 10px; padding: 10px; border: 1px solid red; text-align: left; font-size: 14px; 
					border: 1px solid #35447F;
					-moz-border-radius-bottomleft:10px; -moz-border-radius-bottomright:10px; 
						-moz-border-radius-topleft:0px; -moz-border-radius-topright:0px;
				}

#demo-links		{ float: right; }
#demo-links a,
#demo-links a:visited	{ color: #fff; font-weight: bold; }
#demo-links a:hover		{ color: #0f0; }

a.cms-link,
a.cms-link:visited	{ color: #fff; font-weight: bold; }
a.cms-link:hover		{ color: #0f0; }

a.preorder,
a.preorder:visited	{ color: #0F0; font-weight: bold; }
</style>
<div id="demo-notice">
Welcome to <a class="preorder" href="">Aion CMS</a>. Feel free to browse and explore all the features and modules currently available .
<br>
<br>The project is still under development .
<br>
<br>For further information or/and suggestions about Aion CMS visit <a class="cms-link" href="http://www.aion-engine.com/t540/">project's url</a>
<br>
<br>Project creator and leader <a class="preorder">ntemos</a>
</div>

<div id="ns-global-wrapper">


		<div id="ns-top-bar">
			<div id="ns_top_right_links">
				
				<a href="?action=logout">Log out (<?php echo $_SESSION['name'];?>)</a>
			</div>
		
			<ul>
				<li class="ns-on">
                    
					<a href="?action=usercp">
                    <img src="graphics/img/admin_main_settings.gif" border="0">
                    
                    <span>Home</span>
                    </a>
				</li>
				
               <?php     if($_SESSION["access_level"] > 2)
{
	echo ('<li class=""><a href="?action=admincp">
                    <img src="graphics/img/admin_modules.gif" border="0">
                    <span>Admin</span>
                    </a>');
	
}
		?>			
				</li>
				<li class="">
					<a href="chat.php">
                    <img src="graphics/img/admin_help.gif" border="0">                
                    <span>Chat</span>
                    </a>
				</li>
			</ul>
			<br style="clear: both;">
		</div>

		<form id="nuseo_admin_form" action="" method="post">
			<input id="action" name="action" value="save" type="hidden">
			<input name="tab" value="main" type="hidden">
		
			<div id="ns-nav-bar">
				Aion CMS - Inventory
			</div>

			<div id="ns-content">
				<table id="ns-main-table" cellpadding="0" cellspacing="0" width="85%">
					<tbody><tr>
						<td id="ns-left-col">


							<div class="ns-group-outer">
								
	<div class="ns-group-title" id="ns_group_title_Main">
		<a href="?action=usercp" onclick="">
			<img src="graphics/img/admin_setting_group.gif" border="0">Account
		</a>
	</div>
	


<div class="ns-group-link">
	
	<a href="?action=inventory" onclick="">
		<img src="graphics/img/setting_item_bullet.png" alt="" border="0">Inventory editor
	</a>
</div>



<div class="ns-group-link">
	
	<a href="?action=pass_change" onclick="">
		<img src="graphics/img/setting_item_bullet.png" alt="" border="0">Change your password
	</a>
</div>


<div class="ns-group-title" id="ns_group_title_Main">
		<a href="?action=usercp" onclick="">
			<img src="graphics/img/admin_setting_group.gif" border="0">Server
		</a>
	</div>
	
	
<div class="ns-group-link">
	
	<a href="?action=donate" onclick="">
		<img src="graphics/img/setting_item_bullet.png" alt="" border="0">Statistics
	</a>
</div>		




<div class="ns-group-link">
	
	<a href="?action=vote_redeem" onclick="">
		<img src="graphics/img/setting_item_bullet.png" alt="" border="0">Vote & Redeem
	</a>
</div>

<div class="ns-group-link">
	
	<a href="?action=donate" onclick="">
		<img src="graphics/img/setting_item_bullet.png" alt="" border="0">Donate
	</a>
</div>


							
					
						<td id="ns-left-col">
							<br><br>
								
							
								
<div id="ns-settings-group-Main-summary" class="ns-settings-ctr" style="" align="center" >

<a name="summary_debug_and_logs"></a>
                     <div class="ns-setting-group-info">
		<img alt="information" src="graphics/img/icon_information.gif"><h2>Inventory</h2>
		<p><br>Here you can view your inventory like you were in-game<br></p>
                                    <?php echo $msg; ?>
	</div>
<br>

<table class="ns-setting-table" border="0" cellpadding="0" cellspacing="0" width="100%">
				</tbody><tbody class="ns-standard-setting" style="">

</tbody><tbody class="ns-standard-setting" style="">

			<tr class="ns-field-row ns-setting-row-odd">
				<td class="ns-label-cell">
						<label>Character:</label><br>
						<span>Write here the name of your character in order to see his inventory.</span>
				</td>
				<td class="ns-input-cell">
						<form method="post" action="">
<input type="text" name="search">
<input type="submit" style="cursor:pointer" value=" Submit ">

				
				


</form>
				</td>
			</tr>        

<html>
<body>


<head>
<script type="text/javascript" src="http://www.aiondatabase.com/js/exsyndication.js"></script>

<link rel="stylesheet" href="/styles.css" type="text/css" />
</head>



<?php

//error_reporting(E_ALL);
//ini_set("display_errors", "1");

mysql_connect(sql_host, sql_user, sql_pass) or die("Error, can't connect to database");
mysql_select_db(Gamedb) or die ("Error, can't select database");

 $qata = mysql_query("Select * FROM players where name='$_POST[search]'");
if($success = mysql_num_rows($qata) > 0) {

while($result = mysql_fetch_array( $qata )){

$id = $result['id'];
$name = $result['name'];
$sex = $result['gender'];
$race = $result['race'];
$class = $result['player_class'];
$exp = $result['exp'];
}
}else{$warn = '<font size="5" coler="#CC0000"> Player '.$_POST['search'].' does not exist !</font>';
}


if ($exp >= '0' AND $exp <= '649') {$lvl = '1';}
if ($exp >= '650' AND $exp <= '2566') {$lvl = '2';}
if ($exp >= '2567' AND $exp <= '6796') {$lvl = '3';}
if ($exp >= '6797' AND $exp <= '15489') {$lvl = '4';}
if ($exp >= '15490' AND $exp <= '30072') {$lvl = '5';}
if ($exp >= '30073' AND $exp <= '52957') {$lvl = '6';}
if ($exp >= '52958' AND $exp <= '87893') {$lvl = '7';}
if ($exp >= '87894' AND $exp <= '140328') {$lvl = '8';}
if ($exp >= '140329' AND $exp <= '213453') {$lvl = '9';}
if ($exp >= '213454' AND $exp <= '307557') {$lvl = '10';}
if ($exp >= '307558' AND $exp <= '483552') {$lvl = '11';}
if ($exp >= '483553' AND $exp <= '608160') {$lvl = '12';}
if ($exp >= '608161' AND $exp <= '825335') {$lvl = '13';}
if ($exp >= '825336' AND $exp <= '1091984') {$lvl = '14';}
if ($exp >= '1091985' AND $exp <= '1418169') {$lvl = '15';}
if ($exp >= '1418170' AND $exp <= '1810466') {$lvl = '16';}
if ($exp >= '1810467' AND $exp <= '2332546') {$lvl = '17';}
if ($exp >= '2332547' AND $exp <= '3002258') {$lvl = '18';}
if ($exp >= '3002259' AND $exp <= '3820080') {$lvl = '19';}
if ($exp >= '3820081' AND $exp <= '4820227') {$lvl = '20';}
if ($exp >= '4820228' AND $exp <= '6115321') {$lvl = '21';}
if ($exp >= '6115322' AND $exp <= '7725198') {$lvl = '22';}
if ($exp >= '7725199' AND $exp <= '9727122') {$lvl = '23';}
if ($exp >= '9727123' AND $exp <= '12075780') {$lvl = '24';}
if ($exp >= '12075781' AND $exp <= '14762521') {$lvl = '25';}
if ($exp >= '14762522' AND $exp <= '17879937') {$lvl = '26';}
if ($exp >= '17879938' AND $exp <= '21482200') {$lvl = '27';}
if ($exp >= '21482201' AND $exp <= '25494736') {$lvl = '28';}
if ($exp >= '25494737' AND $exp <= '30171208') {$lvl = '29';}
if ($exp >= '30171209' AND $exp <= '35999531') {$lvl = '30';}
if ($exp >= '35999532' AND $exp <= '42807773') {$lvl = '31';}
if ($exp >= '42807774' AND $exp <= '50898897') {$lvl = '32';}
if ($exp >= '50898898' AND $exp <= '60588304') {$lvl = '33';}
if ($exp >= '60588305' AND $exp <= '73257433') {$lvl = '34';}
if ($exp >= '73257434' AND $exp <= '89381898') {$lvl = '35';}
if ($exp >= '89381899' AND $exp <= '109123920') {$lvl = '36';}
if ($exp >= '109123921' AND $exp <= '135145761') {$lvl = '37';}
if ($exp >= '135145762' AND $exp <= '165081924') {$lvl = '38';}
if ($exp >= '165081925' AND $exp <= '201229894') {$lvl = '39';}
if ($exp >= '201229895' AND $exp <= '243367814') {$lvl = '40';}
if ($exp >= '243367815' AND $exp <= '292723294') {$lvl = '41';}
if ($exp >= '292723295' AND $exp <= '350683174') {$lvl = '42';}
if ($exp >= '350683175' AND $exp <= '415055543') {$lvl = '43';}
if ($exp >= '415055544' AND $exp <= '485437945') {$lvl = '44';}
if ($exp >= '485437946' AND $exp <= '559304955') {$lvl = '45';}
if ($exp >= '559304956' AND $exp <= '643833128') {$lvl = '46';}
if ($exp >= '643833129' AND $exp <= '741341639') {$lvl = '47';}
if ($exp >= '741341640' AND $exp <= '853768080') {$lvl = '48';}
if ($exp >= '853768081' AND $exp <= '982653881') {$lvl = '49';}
if ($exp >= '982653882' AND $exp <= '1128723910') {$lvl = '50';}
if ($exp >= '1128723911' AND $exp <= '1290861640') {$lvl = '51';}
if ($exp >= '1290861641' AND $exp <= '1470834521') {$lvl = '52';}
if ($exp >= '1470834522' AND $exp <= '1670604418') {$lvl = '53';}
if ($exp >= '1670604419' AND $exp <= '1888349002') {$lvl = '54';}
if ($exp >= '1888349003' AND $exp <= '2130045490') {$lvl = '55';}
if ($exp >= '2130045491' AND $exp <= '2398328592') {$lvl = '56';}
if ($exp >= '2398328593' AND $exp <= '2696122833') {$lvl = '57';}
if ($exp >= '2696122834' AND $exp <= '3026674441') {$lvl = '58';}
if ($exp >= '3026674442' AND $exp <= '3393586724') {$lvl = '59';}
if ($exp >= '3393586725' AND $exp <= '3800859360') {$lvl = '60';}
if ($exp >= '3800859360') {$lvl = '61';}



if ($sex == 'MALE') {$sex = "Male";}
elseif ($sex == 'FEMALE') {$sex = "Female";}

if ($race == 'ASMODIANS') {$race = "Asmodian";}
elseif ($race == 'ELYOS') {$race = "Elyos";}

if ($class == 'CHANTER') {$class = "Chanter";}
if ($class == 'GLADIATOR') {$class = "Gladiator";}
if ($class == 'ASSASSIN') {$class = "Assassin";}
if ($class == 'RANGER') {$class = "Ranger";}
if ($class == 'SORCERER') {$class = "Sorcerer";}
if ($class == 'TEMPLAR') {$class = "Templar";}
if ($class == 'SPIRIT_MASTER') {$class = "Spirit Master";}
if ($class == 'CLERIC') {$class = "Clerik";}
if ($class == 'PRIEST') {$class = "Priest";}
if ($class == 'SCOUT') {$class = "Scout";}
if ($class == 'WARRIOR') {$class = "Warrior";}
if ($class == 'MAGE') {$class = "Mage";}



$accw=mysql_query("Select * FROM player_life_stats WHERE player_id='$id'");
 while($aw = mysql_fetch_array( $accw )){
$ahp = $aw['hp'];
$amp = $aw['mp'];
}

$abys=mysql_query("Select * FROM abyss_rank WHERE player_id='$id'");
 while($aby = mysql_fetch_array( $abys )){


if ($aby['ap']>"0"){
$apo = $aby['ap'];
}
if ($aby['all_kill']>"0"){
$akillo = $aby['all_kill'];
}

if ($aby["rank"] == '1') {$rank = "Rank 9 Soldier";}
elseif ($aby["rank"] == '2') {$rank = "Rank 8 Soldier";}
elseif ($aby["rank"] == '3') {$rank = "Rank 7 Soldier";}
elseif ($aby["rank"] == '4') {$rank = "Rank 6 Soldier";}
elseif ($aby["rank"] == '5') {$rank = "Rank 5 Soldier";}
elseif ($aby["rank"] == '6') {$rank = "Rank 4 Soldier";}
elseif ($aby["rank"] == '7') {$rank = "Rank 3 Soldier";}
elseif ($aby["rank"] == '8') {$rank = "Rank 2 Soldier";}
elseif ($aby["rank"] == '9') {$rank = "Rank 1 Soldier";}
elseif ($aby["rank"] == '10') {$rank = "1 Star Officer";}
elseif ($aby["rank"] == '11') {$rank = "2 Star Officer";}
elseif ($aby["rank"] == '12') {$rank = "3 Star Officer";}
elseif ($aby["rank"] == '13') {$rank = "4 Star Officer";}
elseif ($aby["rank"] == '14') {$rank = "5 Star Officer";}
elseif ($aby["rank"] == '15') {$rank = "General";}
elseif ($aby["rank"] == '16') {$rank = "Great General";}
elseif ($aby["rank"] == '17') {$rank = "Commander";}
elseif ($aby["rank"] == '18') {$rank = "Supreme Commander";}



}

$legion=mysql_query("Select * FROM legion_members WHERE player_id='$id'");
 while($legi = mysql_fetch_array( $legion )){

$legid = $legi['legion_id'];
}
$gilde=mysql_query("Select * FROM legions WHERE id='$legid'");
 while($gild = mysql_fetch_array( $gilde )){

$legname = $gild['name'];
$legid=$gild['id'];

}




$datan=mysql_query("Select * FROM inventory WHERE itemOwner='$id' AND itemId='141000001'");

$stigscher=$datan[0]['itemCount'];

?>





<style>
#box {
	background: no-repeat  top url("/equip/inventory.png");
	height:468px;
	margin-top:40px;
	width:442px;
	margin:0 auto 0;
	position:relative;

}
#bax {
	background:;
	height:17px;
	top:30px;
	width:210px;
	position:relative;
	left:3px;
}

#box div {
	z-index:10;
}


#bax #name {
	color:darkblue;
    	display:-moz-inline-box;
    	display:inline-block;
	font-family:;
	font-size:17px;
	font-style:;
	font-weight:bold;
	left: -120px;
	position:relative;
	top:7px;
}

#box #level {
	color:darkblue;
	display:inline-block;
	padding-right:133; 
	float: right;
	font-family:Verdana,Helvetica,Arial,sans-serif;
	font-size:17px;
	font-style:;
	font-weight:bold;
	left: 270px;
	position:absolute;
	top:37px;
}

#sex {
	color:darkblue;
	font-family:Verdana,Helvetica,Arial,sans-serif;
	font-size:18px;
	font-style:italic;
	font-weight:bold;
	left:10px;
	position:absolute;
	top:61px;
}

#box #klasse {
	color:darkblue;
	display:inline-block;
	padding-left:318; 
	float: left;
	font-family:Verdana,Helvetica,Arial,sans-serif;
	font-size:17px;
	font-style:;
	font-weight:bold;
	left: 325px;
	position:absolute;
	top:37px;
}

#rasse {
	color:darkblue;
	font-family:Verdana,Helvetica,Arial,sans-serif;
	font-size:18px;
	font-style:italic;
	font-weight:bold;
	left:10px;
	position:absolute;
	top:101px;
}


#exp {

	color:darkblue;
	font-family:Verdana,Helvetica,Arial,sans-serif;
	font-size:11px;
	font-weight:bold;
	left:64px;
	position:absolute;
	top:29px;
}

#legion {
	color:darkblue;
	font-family:Verdana,Helvetica,Arial,sans-serif;
	font-size:18px;
	font-style:italic;
	font-weight:bold;
	left:10px;
	position:absolute;
	top:121px;
}

#abyss {
	color:darkblue;
	font-family:Verdana,Helvetica,Arial,sans-serif;
	font-size:18px;
	font-style:italic;
	font-weight:bold;
	left:10px;
	position:absolute;
	top:141px;
}

#box #tp {
	color:darkblue;
	display:inline-block;
	padding-right:5; 
	float: right;
	font-family:Verdana,Helvetica,Arial,sans-serif;
	font-size:17px;
	font-style:;
	font-weight:bold;
	right: 0px;
	position:absolute;
	top:100px;
}

#box #mp {
	color:darkblue;
	display:inline-block;
	padding-right:5; 
	float: right;
	font-family:Verdana,Helvetica,Arial,sans-serif;
	font-size:17px;
	font-style:;
	font-weight:bold;
	right:12px;
	position:absolute;
	top:117px;
}

#box #rank {
	color:darkblue;
	display:inline-block;
	padding-right:10; 
	float: right;
	font-family:Verdana,Helvetica,Arial,sans-serif;
	font-size:17px;
	font-style:;
	font-weight:bold;
	right:12px;
	position:absolute;
	top:62px;
}

#rankwarn {
	color:darkblue;
	font-family:Verdana,Helvetica,Arial,sans-serif;
	font-size:18px;
	font-style:italic;
	font-weight:bold;
	left:10px;
	position:absolute;
	top:270px;
}


#warn {
	color:darkblue;
	font-family:Verdana,Helvetica,Arial,sans-serif;
	font-size:18px;
	font-style:italic;
	font-weight:bold;
	left:12px;
	position:absolute;
	top:103px;
}

#kill {
	color:darkblue;
	font-family:Verdana,Helvetica,Arial,sans-serif;
	font-size:18px;
	font-style:italic;
	font-weight:bold;
	left:10px;
	position:absolute;
	top:160px;
}

#mainhand {
	display:inline-block;
	position:absolute;
	top: 118px; left: 41px;
	
}

#offhand {
	display:inline-block;
	position:absolute;
	top: 118px; left: 165px;
	
}

#box #inmainhand {
	display:inline-block;
	position:absolute;
	left: -4px; z-index: 5; top: 97px;
	
}

#box #inoffhand {
	display:inline-block;
	position:absolute;
	top: 97px; left: 208px;
	z-index: 5;

}

#head {
	display:inline-block;
	position:absolute;
	top: 166px; left: 20px;
	
}

#ohrring {
	display:inline-block;
	position:absolute;
	left: 20px; top: 215px;
	
}

#brust {
	display:inline-block;
	position:absolute;
	left: -1px; top: 264px;

	
}

#hose {
	display:inline-block;
	position:absolute;
	left: -1px; top: 313px;
	
}

#ring {
	display:inline-block;
	position:absolute;
	left: 20px; top: 361px;
	
}

#schuhe {
	display:inline-block;
	position:absolute;
	left: -1px; top: 409px;
	
}

#hals {
	display:inline-block;
	position:absolute;
	left: 208px; top: 166px;
	
}

#ohrringr {
	display:inline-block;
	position:absolute;
	left: 208px; top: 215px;
	
}

#schulter {
	display:inline-block;
	position:absolute;
	left: 208px; top: 264px;
	
}

#hands {
	display:inline-block;
	position:absolute;
	left: 208px; top: 313px;
	
}

#ringr {
	display:inline-block;
	position:absolute;
	left: 208px; top: 361px;
	
}

#gurtel {
	display:inline-block;
	position:absolute;
	left: 208px; top: 409px;
	
}

.menu {
	font-weight: bold;
	display: block;
	height: 17px;
	background:url(images/button_all.jpg) 0px 0px;
}

.menu td {
	display: block;
	height: 17px;
	padding: 0;
	margin: 0;
}

.menu a {
	color: #E30000;
	display: block;
	padding-left: 40px;
	padding-top: 2px;
	height: 17px;
}

.menu a:hover {
	color: #FFFFFF;
	display: block;
   	padding-left: 40px;
	padding-top: 2px;
	background:url(images/button_all.jpg) 234px 0px;
	height: 17px;

}

#scherber {
	display:inline-block;
	position:absolute;
	left: 89px; top: 94px;
	
}

#scherbel {
	display:inline-block;
	position:absolute;
	left: 144px; top: 94px;
	
}

#flugel {
	display:inline-block;
	position:absolute;
	left: 113px; top: 138px;
}

#stigma1 {
	display:inline-block;
	position:absolute;
	top: 432px; left: 121px;
	
}
#stigma2 {
	display:inline-block;
	position:absolute;
	top: 432px; left: 202px;
	
}
#stigma3 {
	display:inline-block;
	position:absolute;
	top: 508px; left: 121px;
	
}
#stigma4 {
	display:inline-block;
	position:absolute;
	top: 508px; left: 202px;
	
}
#stigma5 {
	display:inline-block;
	position:absolute;
	top: 584px; left: 121px;
	
}
#stigma6 {
	display:inline-block;
	position:absolute;
	top: 584px; left: 202px;
	
}
#stigma7 {
	display:inline-block;
	position:absolute;
	top: 431px; left: 358px;
	
}
#stigma8 {
	display:inline-block;
	position:absolute;
	top: 431px; left: 438px;
	
}
#stigma9 {
	display:inline-block;
	position:absolute;
	top: 507px; left: 398px;
	
}
#stigma10 {
	display:inline-block;
	position:absolute;
	top: 583px; left: 358px;
	
}
#stigma11 {
	display:inline-block;
	position:absolute;
	top: 583px; left: 438px;
	
}
#stigsche {
	display:inline-block;
	position:absolute;
	top: 306px; left: 225px;
	
}
	
</style>

<?php
//error_reporting(E_ALL);
//ini_set("display_errors", "1");





$inventory=mysql_query("Select * FROM inventory WHERE itemOwner='$id' AND isEquiped='1' ORDER BY slot");
while($result = mysql_fetch_array( $inventory )){



if ($result['enchant']<"0"){
$invsenchant = "0";
}


if ($result['slot']=="1"){
$Hauptwaffe = $result['itemId'];
$Hauptz = $result['enchant'];
$erstlink = "<input type='text' name='char' style='visibility:hidden;cursor:pointer;width:15px;height:15px' class='style1' id='charecter' readonly='readonly' value=''>";
}
elseif ($Hauptz<"0"){
$Hauptz = "<br>Nicht Angelegt";
$erstlink = "";
}
if ($result['slot']=="2"){
$Zweitwaffe = $result['itemId'];
$Zweitz = $result['enchant'];
$zweitlink = "<input type='text' name='char' style='visibility:hidden;cursor:pointer;width:15px;height:15px' class='style1' id='charecter' readonly='readonly' value=''>";
}
elseif ($Zweitz<"0"){
$Zweitz = "<br>Nicht Angelegt";
$zweitlink = "";
}
if ($result['slot']=="4"){
$Helm = $result['itemId'];
}
if ($result['slot']=="8"){
$Brustbekleidung = $result['itemId'];
$Brustz = $result['enchant'];
$dreilink = "<input type='text' name='char' style='visibility:hidden;cursor:pointer;width:15px;height:15px' class='style1' id='charecter' readonly='readonly' value=''>";
}
elseif ($Brustz<"0"){
$Brustz = "<br>Nicht Angelegt";
$dreilink = "";
}
if ($result['slot']=="16"){
$Handschuhe = $result['itemId'];
$Handz = $result['enchant'];
$achtlink = "<input type='text' name='char' style='visibility:hidden;cursor:pointer;width:15px;height:15px' class='style1' id='charecter' readonly='readonly' value=''>";
}
elseif ($Handz<"0"){
$Handz = "<br>Nicht Angelegt";
$achtlink = "";
}
if ($result['slot']=="32"){
$Stiefel = $result['itemId'];
$Stiefz = $result['enchant'];
$vierlink = "<input type='text' name='char' style='visibility:hidden;cursor:pointer;width:15px;height:15px' class='style1' id='charecter' readonly='readonly' value=''>";
}
elseif ($Stiefz<"0"){
$Stiefz = "<br>Nicht Angelegt";
$vierlink = "";
}
if ($result['slot']=="64"){
$Linkero = $result['itemId'];
}
if ($result['slot']=="128"){
$Rechtero = $result['itemId'];
}
if ($result['slot']=="256"){
$Linkerr = $result['itemId'];
}
if ($result['slot']=="512"){
$Rechterr = $result['itemId'];
}
if ($result['slot']=="1024"){
$Halskette = $result['itemId'];
}
if ($result['slot']=="2048"){
$Schulterschutz = $result['itemId'];
$Schultz = $result['enchant'];
$funflink = "<input type='text' name='char' style='visibility:hidden;cursor:pointer;width:15px;height:15px' class='style1' id='charecter' readonly='readonly' value=''>";
}
elseif ($Schultz<"0"){
$Schultz = "<br>Nicht Angelegt";
$funflink = "";
}
if ($result['slot']=="4096"){
$Hose = $result['itemId'];
$Hosez = $result['enchant'];
$sechslink = "<input type='text' name='char' style='visibility:hidden;cursor:pointer;width:15px;height:15px' class='style1' id='charecter' readonly='readonly' value=''>";
}
elseif ($Hosez<"0"){
$Hosez = "<br>Nicht Angelegt";
$sechslink = "";
}
if ($result['slot']=="8192"){
$Machtscherbenr = $result['itemId'];
}
if ($result['slot']=="16384"){
$Machtscherbenl = $result['itemId'];
}
if ($result['slot']=="32768"){
$Flugel = $result['itemId'];
}
if ($result['slot']=="65536"){
$Gurtel = $result['itemId'];
}
if ($result['slot']=="131072"){
$Hauptwaffeo = $result['itemId'];
$Hauptwz = $result['enchant'];
$siebenlink = "<input type='text' name='char' style='visibility:hidden;cursor:pointer;width:15px;height:15px' class='style1' id='charecter' readonly='readonly' value=''>";
}
elseif ($Hauptwz<"0"){
$Hauptwz = "<br>Nicht Angelegt";
$siebenlink = "";
}
if ($result['slot']=="262144"){
$Zweitwaffeo = $result['itemId'];
$Zweitwz = $result['enchant'];
$neunlink = "<input type='text' name='char' style='visibility:hidden;cursor:pointer;width:15px;height:15px' class='style1' id='charecter' readonly='readonly' value=''>";
}
elseif ($Zweitwz<"0"){
$Zweitwz = "<br>Nicht Angelegt";
$neunlink = "";
}
if ($result['slot']=="524288"){
$Stigmastein = $result['itemId'];
}
if ($result['slot']=="1048576"){
$Stigmastein2 = $result['itemId'];
}
if ($result['slot']=="2097152"){
$Stigmastein3 = $result['itemId'];
}
if ($result['slot']=="4194304"){
$Stigmastein4 = $result['itemId'];
}
if ($result['slot']=="8388608"){
$Stigmastein5 = $result['itemId'];
}
if ($result['slot']=="16777216"){
$Stigmastein6 = $result['itemId'];
}
if ($result['slot']=="67108864"){
$Stigmastein7 = $result['itemId'];
}
if ($result['slot']=="134217728"){
$Stigmastein8 = $result['itemId'];
}
if ($result['slot']=="268435456"){
$Stigmastein9 = $result['itemId'];
}
if ($result['slot']=="536870912"){
$Stigmastein10 = $result['itemId'];
}
if ($result['slot']=="1073741824"){
$Stigmastein11 = $result['itemId'];
}

}

	


?>
<script language="javascript" type="text/javascript">
<!--
// This code is from Dynamic Web Coding www.dyn-web.com 
// Copyright 2002 by Sharon Paine Permission granted to use this code as long as this entire notice is included.
// Courtesy of SimplytheBest.net - http://simplythebest.net/scripts/

var dom = (document.getElementById) ? true : false;
var ns5 = ((navigator.userAgent.indexOf("Gecko")>-1) && dom) ? true: false;
var ie5 = ((navigator.userAgent.indexOf("MSIE")>-1) && dom) ? true : false;
var ns4 = (document.layers && !dom) ? true : false;
var ie4 = (document.all && !dom) ? true : false;
var nodyn = (!ns5 && !ns4 && !ie4 && !ie5) ? true : false;

var origWidth, origHeight;
if (ns4) {
	origWidth = window.innerWidth; origHeight = window.innerHeight;
	window.onresize = function() { if (window.innerWidth != origWidth || window.innerHeight != origHeight) history.go(0); }
}

if (nodyn) { event = "nope" }
var tipFollowMouse	= true;	
var tipWidth		= 160;
var offX		 	= 1;	// how far from mouse to show tip
var offY		 	= 1; 
var tipFontFamily 	= "Verdana,Helvetica,Arial,sans-serif";
var tipFontSize		= "8pt";
var tipFontColor		= "#FFFFFF";
var tipBgColor		= "#6A5840"; 
var origBgColor 		= tipBgColor; // in case no bgColor set in array
var tipBorderColor 	= "#6A5840";
var tipBorderWidth 	= 2;
var tipBorderStyle 	= "ridge";
var tipPadding	 	= 4;

var messages = new Array();
messages[0] = new Array('/equip/enchant.gif','<br><font size="" color="#EFDFA7">Enchanted + <?php echo $Hauptz; ?><br><br></font></span></span>',"#2F2818");
messages[1] = new Array('/equip/enchant.gif','<br><font size="" color="#EFDFA7">Enchanted + <?php echo $Zweitz; ?><br><br></font></span></span>',"#2F2818");
messages[2] = new Array('/equip/enchant.gif','<br><font size="" color="#EFDFA7">Enchanted + <?php echo $Brustz; ?><br><br></font></span></span>',"#2F2818");
messages[3] = new Array('/equip/enchant.gif','<br><font size="" color="#EFDFA7">Enchanted + <?php echo $Handz; ?><br><br></font></span></span>',"#2F2818");
messages[4] = new Array('/equip/enchant.gif','<br><font size="" color="#EFDFA7">Enchanted + <?php echo $Stiefz; ?><br><br></font></span></span>',"#2F2818");
messages[5] = new Array('/equip/enchant.gif','<br><font size="" color="#EFDFA7">Enchanted + <?php echo $Hauptwz; ?><br><br></font></span></span>',"#2F2818");
messages[6] = new Array('/equip/enchant.gif','<br><font size="" color="#EFDFA7">Enchanted + <?php echo $Zweitwz; ?><br><br></font></span></span>',"#2F2818");
messages[7] = new Array('/equip/enchant.gif','<br><font size="" color="#EFDFA7">Enchanted + <?php echo $Hosez; ?><br><br></font></span></span>',"#2F2818");
messages[8] = new Array('/equip/enchant.gif','<br><font size="" color="#EFDFA7">Enchanted + <?php echo $Schultz; ?><br><br></font></span></span>',"#2F2818");


if (document.images) {
	var theImgs = new Array();
	for (var i=0; i<messages.length; i++) {
  	theImgs[i] = new Image();
		theImgs[i].src = messages[i][0];
  }
}

var startStr = '<table width="' + tipWidth + '"><tr><td align="center" width="100%"><img src="';
var midStr = '" border="0"></td></tr><tr><td valign="top">';
var endStr = '</td></tr></table>';

var tooltip, tipcss;
function initTip() {
	if (nodyn) return;
	tooltip = (ns4)? document.tipDiv.document: (ie4)? document.all['tipDiv']: (ie5||ns5)? document.getElementById('tipDiv'): null;
	tipcss = (ns4)? document.tipDiv: tooltip.style;
	if (ie4||ie5||ns5) {	// ns4 would lose all this on rewrites
		tipcss.width = tipWidth+"px";
		tipcss.fontFamily = tipFontFamily;
		tipcss.fontSize = tipFontSize;
		tipcss.color = tipFontColor;
		tipcss.backgroundColor = tipBgColor;
		tipcss.borderColor = tipBorderColor;
		tipcss.borderWidth = tipBorderWidth+"px";
		tipcss.padding = tipPadding+"px";
		tipcss.borderStyle = tipBorderStyle;
	}
	if (tooltip&&tipFollowMouse) {
		if (ns4) document.captureEvents(Event.MOUSEMOVE);
		document.onmousemove = trackMouse;
	}
}

window.onload = initTip;

var t1,t2;	// for setTimeouts
var tipOn = false;	// check if over tooltip link
function doTooltip(evt,num) {

	if (!tooltip) return;
	if (t1) clearTimeout(t1);	if (t2) clearTimeout(t2);
	tipOn = true;
	// set colors if included in messages array
	if (messages[num][2])	var curBgColor = messages[num][2];
	else curBgColor = tipBgColor;
	if (messages[num][3])	var curFontColor = messages[num][3];
	else curFontColor = tipFontColor;
	if (ns4) {
		var tip = '<table bgcolor="' + tipBorderColor + '" width="' + tipWidth + '" cellspacing="0" cellpadding="' + tipBorderWidth + '" border="0"><tr><td><table bgcolor="' + curBgColor + '" width="100%" cellspacing="0" cellpadding="' + tipPadding + '" border="0"><tr><td>'+ startStr + messages[num][0] + midStr + '<span style="font-family:' + tipFontFamily + '; font-size:' + tipFontSize + '; color:' + curFontColor + ';">' + messages[num][1] + '</span>' + endStr + '</td></tr></table></td></tr></table>';
		tooltip.write(tip);
		tooltip.close();
	} else if (ie4||ie5||ns5) {
		var tip = startStr + messages[num][0] + midStr + '<span style="font-family:' + tipFontFamily + '; font-size:' + tipFontSize + '; color:' + curFontColor + ';">' + messages[num][1] + '</span>' + endStr;
		tipcss.backgroundColor = curBgColor;
	 	tooltip.innerHTML = tip;
	}
	if (!tipFollowMouse) positionTip(evt);
	else t1=setTimeout("tipcss.visibility='visible'",100);
}

var mouseX, mouseY;
function trackMouse(evt) {
	mouseX = (ns4||ns5)? evt.pageX: window.event.clientX + document.body.scrollLeft;
	mouseY = (ns4||ns5)? evt.pageY: window.event.clientY + document.body.scrollTop;
	if (tipOn) positionTip(evt);
}

function positionTip(evt) {
	if (!tipFollowMouse) {
		mouseX = (ns4||ns5)? evt.pageX: window.event.clientX + document.body.scrollLeft;
		mouseY = (ns4||ns5)? evt.pageY: window.event.clientY + document.body.scrollTop;
	}
	// tooltip width and height
	var tpWd = (ns4)? tooltip.width: (ie4||ie5)? tooltip.clientWidth: tooltip.offsetWidth;
	var tpHt = (ns4)? tooltip.height: (ie4||ie5)? tooltip.clientHeight: tooltip.offsetHeight;
	// document area in view (subtract scrollbar width for ns)
	var winWd = (ns4||ns5)? window.innerWidth-20+window.pageXOffset: document.body.clientWidth+document.body.scrollLeft;
	var winHt = (ns4||ns5)? window.innerHeight-20+window.pageYOffset: document.body.clientHeight+document.body.scrollTop;
	// check mouse position against tip and window dimensions
	// and position the tooltip 
	if ((mouseX+offX+tpWd)>winWd) 
		tipcss.left = (ns4)? mouseX-(tpWd+offX): mouseX-(tpWd+offX)+"px";
	else tipcss.left = (ns4)? mouseX+offX: mouseX+offX+"px";
	if ((mouseY+offY+tpHt)>winHt) 
		tipcss.top = (ns4)? winHt-(tpHt+offY): winHt-(tpHt+offY)+"px";
	else tipcss.top = (ns4)? mouseY+offY: mouseY+offY+"px";
	if (!tipFollowMouse) t1=setTimeout("tipcss.visibility='visible'",100);
}

function hideTip() {
	if (!tooltip) return;
	t2=setTimeout("tipcss.visibility='hidden'",100);
	tipOn = false;
}
//-->
</script>

<?php

print'<b><span style="font-family:Times New Roman"><span style="font-style:italic"><font size="2" color="#FFFFFF"><center> '.$warn.'</center></font></span></span></b>';


print'<div id="box">
<div id="bax"><center><div id="name"><span style="font-family:Arial"><font size="2" color="#8FFF00">'.$name.'</font></span></div></center></div>

<div id="level"><span style="font-family:Arial"><font size="2" color="#FFFFFF">lvl&nbsp;'.$lvl.'</font></span></div>

<div id="klasse"><span style="font-family:Arial"><font size="2" color="#FFFFFF"> '.$class.'</font></span></div>



<div id="tp"><span style="font-family:Arial"><font size="2" color="#FFFFFF"> '.$ahp.'</font></span></div>
<div id="mp"><span style="font-family:Arial"><font size="2" color="#FFFFFF"> '.$amp.'</font></span></div>
<center><div id="rank"><b><span style="font-family:Times New Roman"><span style="font-style:italic"><font size="3" color="#FFFFFF"> '.$rank.'</font></span></span></b></div></center>
<center><div id="rankwarn"><b><span style="font-family:Times New Roman"><span style="font-style:italic"><font size="3" color="#FFFFFF"> '.$rankwarn.'</font></span></span></b></div></center>





<div id="mainhand"><a title="" target="_blank" class="aion-item-icon-large" href="http://aiondatabase.com/item/'.$Hauptwaffe.'/"><a href="dhtml_scripts.html" onmouseover="doTooltip(event,0)" onmouseout="hideTip()">'.$erstlink.'</a></div>
<div id="offhand"><a href="dhtml_scripts.html" onmouseover="doTooltip(event,1)" onmouseout="hideTip()">'.$zweitlink.'</a><a title="" target="_blank" class="aion-item-icon-large" href="http://aiondatabase.com/item/'.$Zweitwaffe.'/"></a></div>
<div id="inmainhand"><a href="dhtml_scripts.html" onmouseover="doTooltip(event,5)" onmouseout="hideTip()">'.$siebenlink.'</a><a title="" target="_blank" class="aion-item-icon-large" href="http://aiondatabase.com/item/'.$Hauptwaffeo.'/"></a></div>
<div id="inoffhand"><a title="" target="_blank" class="aion-item-icon-large" href="http://aiondatabase.com/item/'.$Zweitwaffeo.'/"><a href="dhtml_scripts.html" onmouseover="doTooltip(event,6)" onmouseout="hideTip()">'.$neunlink.'</a></div>
<div id="head"><a target="_blank" class="aion-item-icon-large" href="http://aiondatabase.com/item/'.$Helm.'/"></a></div>
<div id="ohrring"><a target="_blank" class="aion-item-icon-large" href="http://aiondatabase.com/item/'.$Linkero.'/"></a></div>
<div id="brust"><a href="dhtml_scripts.html" onmouseover="doTooltip(event,2)" onmouseout="hideTip()">'.$dreilink.'</a><a title="" target="_blank" class="aion-item-icon-large"  href="http://aiondatabase.com/item/'.$Brustbekleidung.'/"></div>
<div id="hose"><a href="dhtml_scripts.html" onmouseover="doTooltip(event,7)" onmouseout="hideTip()">'.$sechslink.'</a><a title="" target="_blank" class="aion-item-icon-large" href="http://aiondatabase.com/item/'.$Hose.'/"></a></div>
<div id="ring"><a target="_blank" class="aion-item-icon-large" href="http://aiondatabase.com/item/'.$Linkerr.'/"></a></div>

<div id="schuhe"><a href="dhtml_scripts.html" onmouseover="doTooltip(event,4)" onmouseout="hideTip()">'.$vierlink.'</a><a title="" target="_blank" class="aion-item-icon-large" href="http://aiondatabase.com/item/'.$Stiefel.'/"></a></div>	

<div id="hals"><a title="" target="_blank" class="aion-item-icon-large" href="http://aiondatabase.com/item/'.$Halskette.'/"></a></div>
<div id="ohrringr"><a target="_blank" class="aion-item-icon-large" href="http://aiondatabase.com/item/'.$Rechtero.'/"></a></div>
<div id="schulter"><a title="" target="_blank" class="aion-item-icon-large" href="http://aiondatabase.com/item/'.$Schulterschutz.'/"></a><a href="dhtml_scripts.html" onmouseover="doTooltip(event,8)" onmouseout="hideTip()">'.$funflink.'</a></div>
<div id="hands"><a title="" target="_blank" class="aion-item-icon-large" href="http://aiondatabase.com/item/'.$Handschuhe.'/"></a><a href="dhtml_scripts.html" onmouseover="doTooltip(event,3)" onmouseout="hideTip()">'.$achtlink.'</a></div>
<div id="ringr"><a target="_blank" class="aion-item-icon-large" href="http://aiondatabase.com/item/'.$Rechterr.'/"></a></div>
<div id="gurtel"><a target="_blank" class="aion-item-icon-large" href="http://aiondatabase.com/item/'.$Gurtel.'/"></a></div>
<div id="scherber"><a target="_blank" class="aion-item-icon-medium" href="http://aiondatabase.com/item/'.$Machtscherbenr.'/"></a></div>
<div id="scherbel"><a target="_blank" class="aion-item-icon-medium" href="http://aiondatabase.com/item/'.$Machtscherbenl.'/"></a></div>
<div id="flugel"><a target="_blank" class="aion-item-icon-large" href="http://aiondatabase.com/item/'.$Flugel.'/"></a></div>
<div id="stigma1"><a title="" target="_blank" class="aion-item-icon-large" href="http://aiondatabase.com/item/'.$Stigmastein.'/"></a></div>
<div id="stigma2"><a title="" target="_blank" class="aion-item-icon-large" href="http://aiondatabase.com/item/'.$Stigmastein2.'/"></a></div>
<div id="stigma3"><a title="" target="_blank" class="aion-item-icon-large" href="http://aiondatabase.com/item/'.$Stigmastein3.'/"></a></div>
<div id="stigma4"><a title="" target="_blank" class="aion-item-icon-large" href="http://aiondatabase.com/item/'.$Stigmastein4.'/"></a></div>
<div id="stigma5"><a title="" target="_blank" class="aion-item-icon-large" href="http://aiondatabase.com/item/'.$Stigmastein5.'/"></a></div>
<div id="stigma6"><a title="" target="_blank" class="aion-item-icon-large" href="http://aiondatabase.com/item/'.$Stigmastein6.'/"></a></div>
<div id="stigma7"><a title="" target="_blank" class="aion-item-icon-large" href="http://aiondatabase.com/item/'.$Stigmastein7.'/"></a></div>
<div id="stigma8"><a title="" target="_blank" class="aion-item-icon-large" href="http://aiondatabase.com/item/'.$Stigmastein8.'/"></a></div>
<div id="stigma9"><a title="" target="_blank" class="aion-item-icon-large" href="http://aiondatabase.com/item/'.$Stigmastein9.'/"></a></div>
<div id="stigma10"><a title="" target="_blank" class="aion-item-icon-large" href="http://aiondatabase.com/item/'.$Stigmastein10.'/"></a></div>
<div id="stigma11"><a title="" target="_blank" class="aion-item-icon-large" href="http://aiondatabase.com/item/'.$Stigmastein11.'/"></a></div>




</div></table>';





?>
<div id="tipDiv" style="position:absolute; visibility:hidden; z-index:+100"></div>

</body>
</html>
<br><br><center>

	</tbody>

	</table
	
</body></html>	

                    <?php
	}

                    
 

                     function __construct() //builds the pade by sending its content to the core html 

	{
		$this->Content();
	}
}
?>