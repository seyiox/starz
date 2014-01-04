<?php
class SurveysController extends AppController {
	function add($timestamp){
		if($this->request->is('post')):
			$this->Survey->set($this->request->data);
			if($this->Survey->save()):
				$this->redirect(array('action'=>'index'));
			endif;
		endif;
		$surveys = $this->Survey->find('list',array(
			'conditions'=>array('user_id'=>$this->Auth->user('id'))
		));
		$survennaires = $this->Survey->Survennaire->find('list',array(
		//	'conditions'=>array('user_id'=>$this->Auth->user('id'))
		));
		$this->set(compact('surveys','survennaires'));
	}
	
	function addTemplate(){//works like add but using previous survey as template
		if($this->request->is('get'))
			throw new MethodNotAllowedException();
		
		$this->Survey->recursive = -1;
		$survey = $this->Survey->read(null,$this->request->data['Survey']['survey_id']);
		$survey['Survey']['name'] = '['.strtotime('now').'] - Created from Template'; //prepend timestamp to name
		
		$this->Survey->create($survey,true);
		if($this->Survey->save())
			$this->redirect(array('action'=>'edit',$this->Survey->getInsertID()));
}
	
	function edit($id){
		$this->Survey->id = $id;
		if(!$this->Survey->exists())
    	    throw new NotFoundException(__('Invalid Survey'));
		$this->request->data = $this->Survey->read();
		
		$survennaires = $this->Survey->Survennaire->find('list',array(
			'conditions'=>array('user_id'=>$this->Auth->user('id'))
		));
		$this->set(compact('survennaires'));
	}
	
	function delete($id){
		if($this->request->is('get'))
        	throw new MethodNotAllowedException();
		
		$this->Survey->id = $id;
		if(!$this->Survey->exists())
    	    throw new NotFoundException(__('Invalid Survey'));
		
		if($this->Survey->delete($id))
			$this->redirect($this->referer());
	}
	
	function index(){//User function to view clients list
		$this->paginate = array(
			'conditions'=>array('user_id'=>$this->Auth->user('id')),
			'limit'=>'10',
			'recursive'=>-1,
			'order'=>'modified DESC'
		);
		$surveys = $this->paginate();
		$this->set(compact('surveys'));
	}
	
	function results(){
		
	}
}