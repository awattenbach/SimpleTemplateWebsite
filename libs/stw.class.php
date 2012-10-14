<?php
# Simple Template Website
# Author A.Wattenbach
# MIT license
# This work is licensed under the [MIT license](http://en.wikipedia.org/wiki/MIT_License).

class SimpleTemplateWebsite {
	private $baseFallback;
	private $baseLanguage;
	
	public function __construct() {
		$this->input= $this->getInputFromUrl();
  	$this->urlArray= $this->parseUrl();
  	$this->getVars= $this->rebuildGetVars();
  	# Hardcoded configuration
  	$this->baseUrl= '/';
  	$this->baseSiteFolder= 'side';
  	$this->baseLanguage= 'en';
  	$this->baseFallback= $this->baseSiteFolder.'/Welcome.inc.php';
	}
	private function parseUrl() {
		$this->urlArray= array();
	  $urlCut= explode("/", $this->input);
	  $end= explode(".", array_pop($urlCut));
	  if ($urlCut[0]) $this->urlArray[language]= $urlCut[0];
	  else $this->urlArray[language]= $this->baseLanguage;
	  $this->urlArray[layers]= $urlCut;
	  $this->urlArray[pageinfos]= array();
	  if (!$end[1]) {
	    $this->urlArray[layers][]= $end[0];
	    $this->urlArray[pageinfos][filename]= '';
	    $this->urlArray[pageinfos][suffix]= '';
	  }
	  else {
	    $getVars= explode("-", $end[0]);
	    if ($getVars[1]) {
	      $this->urlArray[pageinfos][filename]= $getVars[0];
	      $this->urlArray[pageinfos][getvars]= $getVars[1];
	    }
	    else {
	      $this->urlArray[pageinfos][filename]= $end[0];
	    }
	    $this->urlArray[pageinfos][suffix]= $end[1];
	  }
	  return $this->urlArray;
	}
	public function createLink($src="", $get="", $folder="",$type="") {
	  $link= $this->baseUrl.$src;
	  if ($folder) $link.= '/';
	  if ($get) $link.= '-'.base64_encode(urlencode(gzcompress($get))).'';
	  $link.= '.html';
	  if ($type) return $link; else echo $link;
	}
	public function switchLanguageLink($srcLng="",$type="") {
		if (!isset($srcLng)) $srcLng= $this->baseLanguage;
	  $link= str_replace('/'.$this->urlArray['language'].'/','/'.$srcLng.'/',$this->baseUrl.$this->input);
	  if ($type) return $link; else echo $link;
	}	
	public function createPrintLink() {
	  $this->input= str_replace('.html','',$this->input);
	  $this->input_array= explode("-", $this->input);
	  $this->input= $this->input_array[0];
	  $link= $this->baseUrl.$this->urlArray[language].'/';
	  $link.= $this->input;
	  foreach($_POST as $key => $value) {
	    $get_vars.= '&'.$key.'='.$value.'';
		}
	  if (isset($this->urlArray[pageinfos][getvars])) $get_vars= gzuncompress(urldecode(base64_decode($this->urlArray[pageinfos][getvars])));
	  $get_vars.= '&printview=1';
	  $link.= '-'.base64_encode(urlencode(gzcompress($get_vars))).'';
	  $link.= '.html';
	  echo $link;
	}	
	public function showLayout($layout="") {
	  if ($layout) $path.= '/'.$layout;
	  else {
		  $path.= implode('/',$this->urlArray[layers]); 
	  }
	  if (file_exists($this->baseSiteFolder.'/'.$path.'/'.$this->urlArray[pageinfos][filename].'.inc.php')) {
	  	include($this->baseSiteFolder.'/'.$path.'/'.$this->urlArray[pageinfos][filename].'.inc.php');
	  }
	  else {
	  	include($this->baseFallback);
		}
	}
	private function checkLayoutsExists($layout) {
		
	}
	private function rebuildGetVars() {
		if (isset($this->urlArray[pageinfos][getvars])) {
			$getVars= gzuncompress(urldecode(base64_decode($this->urlArray[pageinfos][getvars])));
			$getVarArray= explode('&',$getVars);
			foreach($getVarArray as $key => $getVars) {
			   $getVarsRe= explode('=',$getVars);
				 if(isset($getVarsRe['0'])) {
				   $GLOBALS[$getVarsRe['0']]= $getVarsRe['1'];
				 }
			}
		}
	}
	private function getInputFromUrl() {
		global $_GET;
		if(isset($_GET['input']))
			return $_GET['input'];
		else
			return null;
	}
}
?>