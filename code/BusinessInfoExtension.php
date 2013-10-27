<?php
/**
 * Business Info Extension
 * Adds Business info to a given {@see DataObject}
 * 
 * @package businessinfo
 * @author Anselm Christophersen <ac@anselm.dk>
 * 
 */
class BusinessInfoExtension extends DataExtension {

	public static $db = array (
		'BusinessName' => 'Varchar(255)',
		'BusinessTagline' => 'Varchar(255)',
		'Address' => 'Text',
		'Phone' => 'Varchar(255)',
		//'Fax' => 'Varchar(255)',
		'MainContact' => 'Varchar(255)', //Full name of main contact
		//'MainContactPhone' => 'Varchar(255)',
		'Email' => 'Varchar(255)',
//		'Website' => 'Varchar(255)',
//		'VatNumber' => 'Varchar(255)',
	);

	
	function updateCMSFields(FieldList $fields) {
		
		$fields->addFieldsToTab('Root.BusinessInfo', array(
			TextField::create('BusinessName'),
			TextField::create('BusinessTagline'),
			TextareaField::create('Address'),
			TextField::create('Phone'),
			//TextField::create('Fax'),
			TextField::create('MainContact', 'Primary Contact')
				->setRightTitle('Full name of your business\' primary contact (probably yourself)'),
//			TextField::create('MainContactPhone', 'Primary Contact Phone')
//				->setRightTitle('Direct phone (mobile) of the primary contact. Can be left out if this is the same as the business\' phone.'),
			TextField::create('Email'),
//			TextField::create('Website'),
//			TextField::create('VatNumber'),
		));
		
	}	
	
	
	
}