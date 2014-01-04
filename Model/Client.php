<?php class Client extends AppModel{
	var $validate = array(
		'name'=>'notEmpty',
		'email'=>array('rule'=>'email','message'=>'Specify a valid email')
	);
};
