<?php require 'config.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta content="en-us" http-equiv="Content-Language" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title><?php echo $title ?></title>
<link href="style.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
</head>

<body>
<div id="container" style="text-align: center">
<br /><?php echo $headertext ?>




<div id="content"><br /><br />
	<span style="color: #FFFF00; font-size: x-large; font-weight: 700;">Welcome message for <?php echo $siteurl ?>!</span><br/>You Can insert basic content for <?php echo $siteurl ?> Here as well as the content.php file <br />This site template can be used for domain parking, your credentials or as a fgateway to other sites you may or may not own.<br /><br \
	
<br /><br /><?php include("content.php"); ?></div>


<div id="footer"><?php echo $footertext ?></div>

</div>

</body>

</html>
