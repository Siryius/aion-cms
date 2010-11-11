<?php $sqlErrorText = '';
$sqlErrorCode = 0;
$sqlStmt      = '';
$sqlFileToExecute = 'loginserver.sql';
$sqlFileToExecute1 = 'gameserver.sql';
$status = '';


?>



<?php echo('<div style="font-size: 20px; background-color: #FFF; color:#000;"><strong><center><br />Warning: The install folder exists. After you successfully install Aion CMS, please delete install folder to activate the site.<br /><br /></center></strong></div>'); ?>
<style type="text/css" media="all">@import url( "../graphics/style.css" );</style>

</head><body>

<style>
#demo-notice	{ background: #4558A4 url(../graphics/img/bg-gradient3.gif) repeat-x scroll left top; color: #FFF; 
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
			
		
			
<ul>
				<li class="ns-on">
					<a href="install.php">Install</a>
				</li>
			</ul>
                        
 

			<br style="clear: both;">
		</div>
		
		<div id="ns-nav-bar">
			Aion CMS - Install
		</div>
		
		<div id="ns-content">


                                      
                                                  
<div class="ns-setting-group-info">
		<img alt="information" src="../graphics/img/icon_information.gif"><h2>Installer</h2>
		<p><br>Install easily your AION CMS within a few clicks!<br></p>
	</div>

      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="dbdata">
        <table class="ns-setting-table" border="0" cellpadding="0" cellspacing="0" width="100%">
				</tbody><tbody class="ns-standard-setting" style="">


			<tr class="ns-field-row ns-setting-row-odd">
				<td class="ns-label-cell">
						<label>SQL's hostname:</label><br>
						<span>Put here you sql server's host name (for example: localhost)</span>
				</td>
<td class="ns-input-cell">


         <input class="text" name="hostname" type="text" size="45" value="localhost" /></td></tr>


          <tr class="ns-field-row ns-setting-row-even">
				<td class="ns-label-cell">
						<label>SQL's user:</label><br>
						<span>Write here the user of sql server (for example: root)
				</td>
				<td class="ns-input-cell">
						<input class="text" name="username" type="text" size="45" value="root" />
				</td>
			</tr> 

   
         <tr class="ns-field-row ns-setting-row-odd">
				<td class="ns-label-cell">
						<label>SQL's password:</label><br>
						<span>Write here the password of sql server 
				</td>
				<td class="ns-input-cell">
						<input class="text" name="password" type="password" size="45" value="" />
				</td>
			</tr> 


          <tr class="ns-field-row ns-setting-row-even">
				<td class="ns-label-cell">
						<label>Gameserver's DB:</label><br>
						<span>Put here the database of your AION gameserver (for example: aengine_gs)
				</td>
				<td class="ns-input-cell">
						<input class="text" name="gsdb" type="text" size="45" value="" />
				</td>
			</tr> 

<tr class="ns-field-row ns-setting-row-odd">
				<td class="ns-label-cell">
						<label>Loginserver's DB:</label><br>
						<span>Put here the database of your AION loginserver (for example: aengine_ls)
				</td>
				<td class="ns-input-cell">
						<input class="text" name="lsdb" type="text" size="45" value="" />
				</td>
			</tr> 


          <tr><td align="center" colspan="2"><br/><input class="text" type="submit" name="submitBtn" value="Install" /></td></tr>
        </table>  
      </form>

<?php    
    if (isset($_POST['submitBtn']))

{
        $host = isset($_POST['hostname']) ? $_POST['hostname'] : '';
        $user = isset($_POST['username']) ? $_POST['username'] : '';
        $pass = isset($_POST['password']) ? $_POST['password'] : '';
        $lsdb = isset($_POST['lsdb']) ? $_POST['lsdb'] : '';
        $gsdb = isset($_POST['gsdb']) ? $_POST['gsdb'] : '';

        
        $con = mysql_connect($host,$user,$pass);
        mysql_select_db($lsdb);
        if ($con !== false)

{
           // Load and explode the sql file
           $f = fopen($sqlFileToExecute,"r+");
           $sqlFile = fread($f,filesize($sqlFileToExecute));
           $sqlArray = explode(';',$sqlFile);
           
           //Process the sql file by statements
           foreach ($sqlArray as $stmt) 

{
              if (strlen($stmt)>3)

{
           	     $result = mysql_query($stmt);
           	     if (!$result)

{
           	        $sqlErrorCode = mysql_errno();
           	        $sqlErrorText = mysql_error();
           	        $sqlStmt      = $stmt;
                         break;
         
           	     }
           	  }
           }


        }

    $con = mysql_connect($host,$user,$pass);
        mysql_select_db($gsdb);
        if ($con !== false)

   {
           // Load and explode the sql file
           $f1 = fopen($sqlFileToExecute1,"r+");
           $sqlFile1 = fread($f1,filesize($sqlFileToExecute1));
           $sqlArray1 = explode(';',$sqlFile1);
           
           //Process the sql file by statements
           foreach ($sqlArray1 as $stmt1) 

       {
              if (strlen($stmt1)>3)

                         {
           	     $result1 = mysql_query($stmt1);
           	     if (!$result1)

                                   {
           	        $sqlErrorCode = mysql_errno();
           	        $sqlErrorText = mysql_error();
           	        $sqlStmt      = $stmt;
                         break;
         
           	     }
           	  }
           }


        }

?>

      <div id="icon2">&nbsp;</div>
      <div id="result">
        <table width="100%">
<?php
        if ($sqlErrorCode == 0)

{
           echo ('<div class="ns-setting-group-info">
		<img alt="information" src="../graphics/img/icon_information.gif"><h2>Success</h2>
		<p><br>Aion CMS has successfully installed.<br></p>
	</div>');

           
              
        } else {

           echo ('<div class="ns-setting-group-info">
		<img alt="information" src="../graphics/img/icon_information.gif"><h2>Error<h2>
		<p><br> 
<?php echo "<tr><td>An error occured during installation!</td></tr>";
           echo "<tr><td>Error code: $sqlErrorCode</td></tr>";
           echo "<tr><td>Error text: $sqlErrorText</td></tr>";
           echo "<tr><td>Statement:<br/> $sqlStmt</td></tr>"; ?>
                                  <br></p>
	</div>');
        }
?>
        </table>
     </div>
<?php            
    }
?>
	
