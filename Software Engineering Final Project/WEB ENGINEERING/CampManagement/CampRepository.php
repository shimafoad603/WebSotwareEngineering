<?php
namespace CampManagement;

require_once(realpath(dirname(__FILE__)) . '/../CampManagement/Family.php');

use CampManagement\Family;

/**
 * @access public
 * @author Shima
 * @package CampManagement
 */
class CampRepository {
	/**
	 * @AttributeType CampManagement\Family
	 * /**
	 *  * @AssociationType CampManagement\Family
	 *  * /
	 */
	public $_stores;

	/**
	 * @access public
	 * @param aFamily
	 */
	public function savefamily($aFamily) {
		// Not yet implemented
	}

	/**
	 * @access public
	 */
	public function findAllFamilies() {
		// Not yet implemented
	}
}
?>