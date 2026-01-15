<?php
namespace AidDistribution_;

require_once(realpath(dirname(__FILE__)) . '/../AidDistribution_/AidRepository.php');

use AidDistribution_\AidRepository;

/**
 * @access public
 * @author Shima
 * @package AidDistribution_
 */
class Aid {
	private $_aidId;
	private $_aidType;
	private $_quntity;
	/**
	 * @AttributeType AidDistribution \AidRepository
	 * /**
	 *  * @AssociationType AidDistribution \AidRepository
	 *  * /
	 */
	public $_manages;
}
?>