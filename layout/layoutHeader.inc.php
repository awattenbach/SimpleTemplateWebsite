<?
# load SimpleTemplateWebsite
global $SimpleTemplateWebsite;
switch ($SimpleTemplateWebsite->urlArray[language]) {
	default:
	$languageMenu= $SimpleTemplateWebsite->urlArray[language];
?>
<header>
<a href="#" class="logo_area"><img src="<? echo $SimpleTemplateWebsite->baseUrl; ?>img/aw_logo.png" style="border: 0;" alt="alexander wattenbach" /></a>
<div class="logo_txt"><span style="color: #4d0075;">a</span><span style="color: #cececd">lexander</span> <span style="color: #4d0075;">w</span><span style="color: #cececd">attenbach</span><br />
<span style="font-size: 14px;"><span style="color: #4d0075;">m</span>edia operator <span style="color: #4d0075;">d</span>eveloper <span style="color: #4d0075;">d</span>esigner</span></div>
</header>
<div class="clearfix"></div>
<? 
	break;
}
?>