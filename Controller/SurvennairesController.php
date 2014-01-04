<?php class SurvennairesController extends AppController{
	function create($timestamp){
		if($this->request->is('post')):
			$this->request->data['Survennaire']['user_id'] = $this->Auth->user('id');
			
			/** Dealing with the survey questions **/
			if($questions = $this->Survennaire->uploadSurveyQuestion($this->request->data['Survennaire'])):
				$this->request->data['SurveyQuestion'] = $questions;
			else:
				$this->request->data['SurveyQuestion'] = Hash::filter($this->request->data['SurveyQuestion']);
			endif;
	
			$this->Survennaire->set($this->request->data);
			if($this->Survennaire->saveAll()):
				$this->redirect(array('action'=>'index'));
			endif;
		endif;
	}
	
	function index(){
		$this->paginate = array(
			'conditions'=>array('user_id'=>$this->Auth->user('id')),
			'limit'=>'10',
			'recursive'=>-1
		);
		$survennaires = $this->paginate();
		$this->set(compact('survennaires'));
	}
	
	function delete($id){
		if($this->request->is('get'))
        	throw new MethodNotAllowedException();
		
		$this->Survennaire->id = $id;
		if(!$this->Survennaire->exists())
    	    throw new NotFoundException(__('Invalid Survey Questionnaire'));
		
		if($this->Survennaire->delete($id))
			$this->redirect($this->referer());
	}
	
	function view($id){
		$this->Survennaire->id = $id;
		if(!$this->Survennaire->exists())
    	    throw new NotFoundException(__('Invalid Survey Questionnaire'));
		
		$survennaire = $this->Survennaire->read();
		$this->set(compact('survennaire'));
	}
};?>