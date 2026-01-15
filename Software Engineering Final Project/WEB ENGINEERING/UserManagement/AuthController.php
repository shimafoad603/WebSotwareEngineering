<?php
namespace UserManagement;

require_once(realpath(dirname(__FILE__)) . '/../UserManagement/User.php');

use UserManagement\User;

/**
 * @access public
 * @author Shima
 * @package UserManagement
 */
class AuthController {
	/**
	 * @AttributeType UserManagement\User
	 * /**
	 *  * @AssociationType UserManagement\User
	 *  * /
	 */
	private UserRepository $userRepository;

	/**
	 * @access public
	 * @param aUsername
	 * @param aPassword
	 */
	public function Login($aUsername, $aPassword) {
		public function Login($aUsername, $aPassword) {
			if ($aUsername === "admin" && $aPassword === "1234") {
				return true;
			}
			return false;
		}
	}

	/**
	 * @access public
	 */
	public function Logout() {
		// Not yet implemented
	}
}
?>