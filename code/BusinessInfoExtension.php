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
		'VatNumber' => 'Varchar(255)',
		'Bank' => 'Text',
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
			TextField::create('VatNumber', 'VAT Number'),
			TextareaField::create('Bank'),
		));

	}

	/**
	 * Return address so it's suitable for a one-line google maps string,
	 * stripping out all breaks, etc
	 */
	public function getAddressForGoogleMaps(){
		$address = $this->owner->Address;
		$str = str_replace(array(
			"\r\n",
			"\r",
			"\n",
			"'"
			), " ", $address);
		return $str;
	}

	/**
	 * Address on one line - comma separated
	 * @return string
	 */
	public function getAddressForOneLine() {
		$address = $this->owner->Address;
		$str = str_replace(array(
			"\r\n",
			"\r",
			"\n",
			"'"
		), ", ", $address);
		return rtrim($str, ', ');
	}



}
