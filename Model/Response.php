<?php class Response extends AppModel{
	var $belongsTo = array('Responder'=>array(
		'counterCache'=>true
	));
	
	var $validate = array('choice'=>'notEmpty');
};?>