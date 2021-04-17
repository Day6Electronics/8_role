<?php
require_once 'init.php';

getConf()->login_action = 'login';

switch ($action) {
	default :
		control('app\\controllers', 'CalcControl', 'generateView', ['user','admin']);
	case 'login': 
		control('app\\controllers', 'LoginControl', 'doLogin');
	case 'calcCompute' : 
		control(null, 'CalcControl', 'process', ['user','admin']);
	case 'logout' : 
		control(null, 'LoginControl', 'doLogout', ['user','admin']);
}
?>