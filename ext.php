<?php
// Ext Extension,
// Copyright (c) 2018-now Norbert Simon for
// Yellow-CMS Copyright (c) 2013-now Datenstrom, https://datenstrom.se
// This file may be used and distributed under the terms of the public license.


class YellowExt {
    const VERSION = "1.2.1";
    
    public $yellow;         //access to API
    
    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
    }
    
    // Handle page content parsing of custom block
    public function onParseContentShortcut($page, $name, $text, $type) {
		$output = null;
        if ($name=="ext") {
			list($href, $display, $dtitle, $destination) = $this->yellow->toolbox->getTextArguments($text);
			if (empty($href)) {
				$output = $this->yellow->language->getText("ext_noref");
			}
			else {		
				$output = "<a class=\"cext\" href=\"".$href."\" title=\"".($dtitle?:$href)." ".$this->yellow->language->getText("ext_add")."\"target=\"".($destination?:"_blank")."\">".($display?:$href)."</a>";
			}
			return $output;
		}   
	}
	 // Handle page extra data
    public function onParsePageExtra($page, $name) {
        return $this->onParseContentShortcut($page, $name, "", "block");
		
    }	
}	
?>
