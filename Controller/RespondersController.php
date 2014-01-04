<?php 
class RespondersController extends AppController {
	function create(){
		if($this->request->is('post')):
			$this->Responder->set($this->request->data);
			if($this->Responder->saveAll())
				$this->redirect(array('controller'=>'surveys','action'=>'index'));
		endif;
		
		//Attach the respective survey
		$survey_id = $this->request->query('survey_id');
		$this->Responder->Survey->id = $survey_id;
		$this->Responder->Survey->recursive = 2;
		
		if(!$this->Responder->Survey->exists())
    	    throw new NotFoundException(__('Invalid Survey'));
		
		$survey = $this->Responder->Survey->read();
		$respondID['id'] = strtoupper(substr($survey['Survey']['name'],0,4)).'-'. $this->Responder->generateRandomString(6);
		$respondID['survey_id'] = $this->request->query('survey_id');
		$radios = Hash::filter(array(
			'opt1'=>$survey['Survey']['opt1'],
			'opt2'=>$survey['Survey']['opt2'],
			'opt3'=>$survey['Survey']['opt3'],
			'opt4'=>$survey['Survey']['opt4'],
			'opt5'=>$survey['Survey']['opt5']
		));
		
		$this->set(compact('survey','respondID','radios'));
	}
	
	function index(){
		$survey_id = $this->request->query('survey_id');
		$this->Responder->Survey->id = $survey_id;
		if(!$this->Responder->Survey->exists())
    	    throw new NotFoundException(__('Invalid Survey'));
		
		$survey = $this->Responder->Survey->field('name');
		$responders = $this->Responder->find('all',array(
			'conditions'=>array('survey_id'=>$survey_id),
			'recursive'=>-1
		));
		$this->set(compact('responders','survey'));
	}
}
