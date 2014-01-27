<?php

class AnalyticsSiteConfigDecorator extends DataExtension {
	
	public static $db = array(
		'GoogleAnalyticsAccountID' => 'Varchar(20)'
	);

	public function updateCMSFields(FieldList $fields) {
		$fields->addFieldToTab('Root.Main', new TextField('GoogleAnalyticsAccountID', 'Google Analytics Account', '', 13));
	}
	
}