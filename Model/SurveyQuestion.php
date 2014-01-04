<?php class SurveyQuestion extends AppModel{
	var $belongsTo = array('Survennaire'=>array(
		'counterCache'=>true
	));
	
	var $validate = array(
		'name'=>'notEmpty'
	);
};?>
