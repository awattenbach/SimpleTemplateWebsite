<?
# load SimpleTemplateWebsite
global $SimpleTemplateWebsite;
?>
<nav>
<?
switch($SimpleTemplateWebsite->urlArray[language]) {
	default:
	$languageMenu= $SimpleTemplateWebsite->urlArray[language];
?>
<div class="main_navi<? if ($SimpleTemplateWebsite->urlArray[layers][1] == 'Mainmenu') { echo '_active'; } ?>"><a href="<? $SimpleTemplateWebsite->createLink($languageMenu.'/Mainmenu/index'); ?>">Mainmenu</a></div>
<? if ($SimpleTemplateWebsite->urlArray[layers]['1'] == 'Mainmenu') { ?>
<div class="subnavi<? if ($SimpleTemplateWebsite->urlArray[pageinfos][filename] == 'Over_me') { echo '_active'; } ?>"><a href="<? $SimpleTemplateWebsite->createLink($languageMenu.'/'.$SimpleTemplateWebsite->urlArray[layers][1].'/Over_me'); ?>">Over me</a></div>
<div class="subnavi<? if ($SimpleTemplateWebsite->urlArray[pageinfos][filename] == 'Basic_info') { echo '_active'; } ?>"><a href="<? $SimpleTemplateWebsite->createLink($languageMenu.'/'.$SimpleTemplateWebsite->urlArray[layers][1].'/Basic_info'); ?>">Basic info</a></div>
<div class="subnavi<? if ($SimpleTemplateWebsite->urlArray[pageinfos][filename] == 'Links') { echo '_active'; } ?>"><a href="<? $SimpleTemplateWebsite->createLink($languageMenu.'/'.$SimpleTemplateWebsite->urlArray[layers][1].'/Links'); ?>">Links</a></div>
<div class="subnavi<? if ($SimpleTemplateWebsite->urlArray[pageinfos][filename] == 'Imprint') { echo '_active'; } ?>"><a href="<? $SimpleTemplateWebsite->createLink($languageMenu.'/'.$SimpleTemplateWebsite->urlArray[layers][1].'/Imprint'); ?>">Imprint</a></div>
<? } ?>
<div class="main_navi<? if ($SimpleTemplateWebsite->urlArray[layers][1] == 'Misc') { echo '_active'; } ?>"><a href="<? $SimpleTemplateWebsite->createLink($languageMenu.'/Misc/index'); ?>">Misc</a></div>
<? if ($SimpleTemplateWebsite->urlArray[layers]['1'] == 'Misc') { ?>
<div class="subnavi<? if ($SimpleTemplateWebsite->urlArray[pageinfos][filename] == 'Submenu_1') { echo '_active'; } ?>"><a href="<? $SimpleTemplateWebsite->createLink($languageMenu.'/'.$SimpleTemplateWebsite->urlArray[layers][1].'/Submenu_1'); ?>">Submenu Item 1</a></div>
<div class="subnavi<? if ($SimpleTemplateWebsite->urlArray[pageinfos][filename] == 'Submenu_2') { echo '_active'; } ?>"><a href="<? $SimpleTemplateWebsite->createLink($languageMenu.'/'.$SimpleTemplateWebsite->urlArray[layers][1].'/Submenu_2'); ?>">Submenu Item 2</a></div>
<div class="subnavi<? if ($SimpleTemplateWebsite->urlArray[pageinfos][filename] == 'Submenu_3') { echo '_active'; } ?>"><a href="<? $SimpleTemplateWebsite->createLink($languageMenu.'/'.$SimpleTemplateWebsite->urlArray[layers][1].'/Submenu_3'); ?>">Submenu Item 3</a></div>
<? 
	}
	break; 
}
?>
</nav>