<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class JyOutboundTour_model extends MY_Model {
	const HIDE_YES = 1;
	const HIDE_NO = 0;
	const BUILT_YES = 1;
	const BUILT_NO = 0;

	public static $_table = 'jy_outbound_tour';

	public function __construct() {
		parent::__construct();
	}

}
