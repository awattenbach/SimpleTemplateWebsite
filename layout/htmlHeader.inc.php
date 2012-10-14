<?
# load SimpleTemplateWebsite
global $SimpleTemplateWebsite;
echo '<?xml version="1.0" encoding="utf-8"?>
';
?>
<!DOCTYPE HTML>
<!--[if IE 7 ]><html class="ie7 no-js" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="ie8 no-js" lang="en"><![endif]-->
<!--[if IE 9 ]><html class="ie9 no-js" lang="en"><![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
<?
switch($SimpleTemplateWebsite->urlArray[language]) {
	default:
	$languageMenu= $SimpleTemplateWebsite->urlArray[language];
?>
  <meta charset="utf-8">

  <title>SimpleTemplateWebsite</title>
<? 
include('layout/metadata.inc.php');
if ($printview != '1') { 
	include('layout/stylesheets.inc.php');
	include('layout/javascript.inc.php');
} else {
	include('layout/stylesheets.inc.php');
?>
<style type="text/css" rel="StyleSheet">
  body {
    font-family: Arial, Helvetica, sans-serif;
    font-size: 0.75em;
  }
 </style>
<? 
	}
	break; 
}
?>
</head>
<body>
<?
if ($printview != '1') { 
?>
<div class="debugBox">
<b>DEBUG:</b><br />
<pre>
<?
print_r($GLOBALS);
?>
</pre>
</div>
<?
}
?>