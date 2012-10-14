<?
# load SimpleTemplateWebsite
global $SimpleTemplateWebsite;
?>
<?
switch($SimpleTemplateWebsite->urlArray[language]) {
	default:
	$languageMenu= $SimpleTemplateWebsite->urlArray[language];
?>
</body>
</html>
<?
	break; 
}
?>