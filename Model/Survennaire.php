<?php class Survennaire extends AppModel{
	var $hasMany = array('SurveyQuestion'=>array(
		'dependent'=>true
	));
	var $validate = array(
		'name'=>'notEmpty'
	);
	
	function uploadSurveyQuestion($survey = array()){
		if(!$survey['survennaireFile']['error']):
			$lines = file($survey['survennaireFile']['tmp_name'], FILE_IGNORE_NEW_LINES);
			foreach ($lines as $key => $line):
				$question[$key]['name'] = substr($line,0,100); 
			endforeach;
			return $question;
		endif;
		return false;
	}
};?>
