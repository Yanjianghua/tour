<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class JyOrder_model extends MY_Model {
	const HIDE_YES = 1;
	const HIDE_NO = 0;
	const BUILT_YES = 1;
	const BUILT_NO = 0;
	const ORDER_ARRAY = '{"JyAroundTour":"\u5468\u8fb9\u6e38","JyInboundTour":"\u56fd\u5185\u6e38","JyOutboundTour":"\u51fa\u5883\u6e38","JyLocalTour":"\u672c\u5730\u6e38\u73a9","JyTicketTour":"\u666f\u70b9\u95e8\u7968","JyThemeTour":"\u4e3b\u9898\u6e38"}';

	public static $_table = 'jy_order';

	public function __construct() {
		parent::__construct();
	}

}
