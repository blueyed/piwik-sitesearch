<?php

/**
 * Extended HTML Data Table
 *
 * Author:   Timo Besenreuther
 *           EZdesign.de
 * Created:  2010-07-21
 * Modified: 2010-07-22
 */

class Piwik_SiteSearch_ExtendedHtmlTable
		extends Piwik_ViewDataTable_HtmlTable {
	
	protected $extraRequestParams = array();
			
	public function setRequestParameter($param, $value) {
		$this->extraRequestParams[$param] = $value;
	}
			
	protected function getRequestString() {
		$string = parent::getRequestString();
		
		foreach ($this->extraRequestParams as $param => $value) {
			$string .= '&'.$param.'='.urlencode($value);
		}
		
		return $string;
	}
	
}

?>