<?
# load SimpleTemplateWebsite
global $SimpleTemplateWebsite;
switch ($SimpleTemplateWebsite->urlArray[language]) {
	default:
	$languageMenu= $SimpleTemplateWebsite->urlArray[language];
?>
<footer>
<?
if ($printview != '1') { 
?>
<div class="copyright">&copy; Alexander Wattenbach | <a href="<? $SimpleTemplateWebsite->createLink('en/Mainmenu/Imprint'); ?>">Imprint</a> | <a href="<? $SimpleTemplateWebsite->createLink('en/Misc/Contact'); ?>">Contact</a> | <a href="<? $SimpleTemplateWebsite->createLink('en/Misc/Sitemap'); ?>">Sitemap</a> | <a href="<? $SimpleTemplateWebsite->createPrintLink(); ?>" target="_blank">Printview</a></div>
<? } 
else { 
?>
<hr noshade style="color: black;" size="1">
Printview - <? echo date("d.m.Y , H:i"); ?></div>
<?
}
?>
</footer>
<? 
	break;
}
?>