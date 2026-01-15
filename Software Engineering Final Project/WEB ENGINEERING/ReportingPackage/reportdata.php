<?php
namespace ReportingPackage;

require_once(realpath(dirname(__FILE__)) . '/../ReportingPackage/ReportRepository.php');

use ReportingPackage\ReportRepository;

/**
 * @access public
 * @author Shima
 * @package ReportingPackage
 */
class reportdata {
	private $_repotId;
	private $_repottType;
	/**
	 * @AttributeType ReportingPackage\ReportRepository
	 * /**
	 *  * @AssociationType ReportingPackage\ReportRepository
	 *  * /
	 */
	public $_stores;
}
?>