<?php class Survey extends AppModel{
	var $belongsTo = array('Survennaire');
	var $validate = array(
		'name'=>'notEmpty',
		'sampsize'=>array('rule'=>'numeric','message'=>'Supply valid integer'),
		'survey_id'=>array('rule'=>'notEmpty','message'=>'Please select a question set'),
		'opt1'=>'notEmpty',
		'wht1'=>array('rule'=>'numeric','message'=>'Integer here'),
		'opt2'=>'notEmpty',
		'wht2'=>array('rule'=>'numeric','message'=>'Integer here')
	);
};?>
