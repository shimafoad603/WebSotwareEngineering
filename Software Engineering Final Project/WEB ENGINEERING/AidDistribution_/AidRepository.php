<?php
namespace AidDistribution_;

require_once(realpath(dirname(__FILE__)) . '/../AidDistribution_/Controller.php');
require_once(realpath(dirname(__FILE__)) . '/../AidDistribution_/Aid.php');

use AidDistribution_\Controller;
use AidDistribution_\Aid;

/**
 * @access public
 * @author Shima
 * @package AidDistribution_
 */
class AidRepository {
	/**
	 * @AttributeType AidDistribution \Controller
	 * /**
	 *  * @AssociationType AidDistribution \Controller
	 *  * /
	 */
	public $_uses;
	/**
	 * @AttributeType AidDistribution \Aid
	 * /**
	 *  * @AssociationType AidDistribution \Aid
	 *  * /
	 */
	public $_manages;
}
?>