<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class JyUserGroup_model extends MY_Model {
	const BUILT_ID = 1;

	public static $_table = 'jy_user_group';

	public function __construct() {
		parent::__construct();
	}

}
