<?php 

$sqlErrorText = '';
$sqlErrorCode = 0;
$sqlStmt      = '';
$sqlFileToExecute = 'loginserver.sql';
$sqlFileToExecute1 = 'aion_cms.sql';

    if (isset($_POST['submitBtn']))

{
        $host = isset($_POST['hostname']) ? $_POST['hostname'] : '';
        $user = isset($_POST['username']) ? $_POST['username'] : '';
        $pass = isset($_POST['password']) ? $_POST['password'] : '';
        $lsdb = isset($_POST['lsdb']) ? $_POST['lsdb'] : '';
        $acdb = isset($_POST['acdb']) ? $_POST['acdb'] : '';

        
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

    $con2 = mysql_connect($host,$user,$pass);
        mysql_select_db($acdb);
        if ($con2 !== false)

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

        if ($sqlErrorCode == 0)

{	
		$msg = '<font color="green"><br><p>Aion CMS has successfully been installed!</p></font>';

        } else {	
                                 
		$msg = "<br><p>Error code: $sqlErrorCode </p>
              <p>Error text: $sqlErrorText </p>
             <p>Statement: $sqlStmt </p>";

        }
}
?>
<title><?php require_once('../slang.php'); echo $local[300]; ?></title>
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
<div style="font-size: 20px; background-color: #FFF; color:#000;"><strong><center><br />Warning: The install folder exists. After you successfully install Aion CMS, please delete install folder to activate the site.<br /><br /></center></strong></div>

	
<div id="ns-top-bar">
			
		
			
<ul>
				<li class="ns-on">
					<a href="install.php"><?php require_once('../slang.php'); echo $local[301]; ?></a>
				</li>
			</ul>
                        
 

			<br style="clear: both;">
		</div>
		
		<div id="ns-nav-bar">
			<?php require_once('../slang.php'); echo $local[302]; ?>
		</div>
		
		<div id="ns-content">
<table id="ns-main-table" cellpadding="0" cellspacing="0" width="50%" align="center">
					<tbody><tr>

                      <td id="ns-left-col">                
                     <div id="ns-settings-group-Main-summary" class="ns-settings-ctr" style="">                             
<div class="ns-setting-group-info">
		<img alt="information" src="../graphics/img/icon_information.gif"><h2><?php require_once('../slang.php'); echo $local[303]; ?></h2>
		<p><br><?php require_once('../slang.php'); echo $local[304]; ?></p>
                                     <?php echo $msg;?>
	</div>
<br>
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="dbdata">
        <table class="ns-setting-table" border="0" cellpadding="0" cellspacing="0" width="100%">
				</tbody><tbody class="ns-standard-setting" style="">


			<tr class="ns-field-row ns-setting-row-odd">
				<td class="ns-label-cell">
						<label><?php require_once('../slang.php'); echo $local[305]; ?></label><br>
						<span><?php require_once('../slang.php'); echo $local[306]; ?></span>
				</td>
<td class="ns-input-cell">


         <input class="text" name="hostname" type="text" size="45" value="localhost" /></td></tr>


          <tr class="ns-field-row ns-setting-row-even">
				<td class="ns-label-cell">
						<label><?php require_once('../slang.php'); echo $local[307]; ?></label><br>
						<span><?php require_once('../slang.php'); echo $local[308]; ?>
				</td>
				<td class="ns-input-cell">
						<input class="text" name="username" type="text" size="45" value="root" />
				</td>
			</tr> 

   
         <tr class="ns-field-row ns-setting-row-odd">
				<td class="ns-label-cell">
						<label><?php require_once('../slang.php'); echo $local[309]; ?></label><br>
						<span><?php require_once('../slang.php'); echo $local[310]; ?>
				</td>
				<td class="ns-input-cell">
						<input class="text" name="password" type="password" size="45" value="" />
				</td>
			</tr> 


          <tr class="ns-field-row ns-setting-row-even">
				<td class="ns-label-cell">
						<label><?php require_once('../slang.php'); echo $local[311]; ?></label><br>
						<span><?php require_once('../slang.php'); echo $local[312]; ?>
				</td>
				<td class="ns-input-cell">
						<input class="text" name="acdb" type="text" size="45" value="aion_cms" />
				</td>
			</tr> 

<tr class="ns-field-row ns-setting-row-odd">
				<td class="ns-label-cell">
						<label><?php require_once('../slang.php'); echo $local[313]; ?></label><br>
						<span><?php require_once('../slang.php'); echo $local[314]; ?>
				</td>
				<td class="ns-input-cell">
						<input class="text" name="lsdb" type="text" size="45" value="" />
				</td>
			</tr> 


          <tr><td align="center" colspan="2"><br/><input class="text" type="submit" name="submitBtn" value="<?php require_once('../slang.php'); echo $local[315]; ?>" /></td></tr>
        </table>  
      </form>


        </table>
     </div>

	
