<?php class Responder extends AppModel{
	var $belongsTo = array('Survey'=>array(
		'counterCache'=>true
	));
	
	var $hasMany = array('Response'=>array(
		'dependent'=>true
	));
	
	var $validate = array(
		'name'=>'notEmpty',
		'email'=>array(
			'rule'=>'email',
			'message'=>'Enter a valid e-mail'
	));
};?>