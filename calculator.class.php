<?php
/**
 * 计算器
 */
class calculator {
	public function __construct() {
		
	}
	
	public function display() {
	    ecjia_admin::$controller->display(ecjia_plugin::get_plugin_template('calculator.lbi.php', 'calculator'));
	}
}

// end