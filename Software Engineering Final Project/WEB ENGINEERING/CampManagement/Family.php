<?php
namespace CampManagement;

require_once(realpath(dirname(__FILE__)) . '/../CampManagement/Controller.php');
require_once(realpath(dirname(__FILE__)) . '/../CampManagement/CampRepository.php');

use CampManagement\Controller;
use CampManagement\CampRepository;

/**
 * @access public
 * @author Shima
 * @package CampManagement
 */
class Family {
	private $_familyid;
	private $_headname;
	private $_membercount;
	private $_shelterId;
	/**
	 * @AttributeType CampManagement\Controller
	 * /**
	 *  * @AssociationType CampManagement\Controller
	 *  * /
	 */
	public $_manages;
	/**
	 * @AttributeType CampManagement\CampRepository
	 * /**
	 *  * @AssociationType CampManagement\CampRepository
	 *  * /
	 */
	public $_stores;
}
?>