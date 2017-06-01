<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class JySystem_model extends MY_Model {
	const HIDE_YES = 1;
	const HIDE_NO = 0;
	const BUILT_YES = 1;
	const BUILT_NO = 0;
	const CHANNEL_ARRAY = '{"1":"\u51fa\u53d1\u5730","2":"\u76ee\u7684\u5730","3":"\u51fa\u6e38\u5929\u6570","4":"\u51fa\u6e38\u65f6\u95f4","5":"\u4e3b\u9898\u7ebf\u8def"}';
	const TYPE_ARRAY = '{"1":"\u5468\u8fb9\u6e38","2":"\u56fd\u5185\u6e38","3":"\u51fa\u5883\u6e38","4":"\u672c\u5730\u6e38\u73a9","5":"\u666f\u70b9\u95e8\u7968","6":"\u4e3b\u9898\u6e38"}';

	public static $_table = 'jy_system';

	public function __construct() {
		parent::__construct();
	}

}
