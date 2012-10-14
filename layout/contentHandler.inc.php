<?
# load SimpleTemplateWebsite
global $SimpleTemplateWebsite;
if ($printview != '1') { 
	include('layout/navigation.inc.php');
}
else {
	echo '<div style="width: 800px">';
}
echo '<div class="content">';
switch ($SimpleTemplateWebsite->urlArray[language]) {
	default:
	$languageMenu= $SimpleTemplateWebsite->urlArray[language];
  if ($printview == '1') { 
?>
Printview
<hr noshade style="color: black;" size="1">
<?	
}
if ($SimpleTemplateWebsite->urlArray[pageinfos][suffix] == 'html' OR !$SimpleTemplateWebsite->urlArray[pageinfos][suffix]) {
  $SimpleTemplateWebsite->showLayout();
}
?>
<? 
	break;
}
?>
</div>
<div class="clearfix"></div>

