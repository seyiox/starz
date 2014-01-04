<?php
class ClientsController extends AppController {
	function create($timestamp){ //User function to create new clients
		if($this->request->is('post')):
			$this->Client->set($this->request->data);
			if($this->Client->save()):
				$this->redirect(array('action'=>'index'));
			endif;
		endif;
	}
	
	function edit($id){
		$this->Client->id = $id;
		if(!$this->Client->exists())
    	    throw new NotFoundException(__('Invalid Client'));
		$this->request->data = $this->Client->read();
	}
	
	function index() { //User function to view clients list
		$this->paginate = array(
			'conditions'=>array('user_id'=>$this->Auth->user('id')),
			'limit'=>'10',
			'order'=>'modified DESC'
		);
		$clients = $this->paginate();
		$this->set(compact('clients'));
	}
	
	function delete($id){
		if($this->request->is('get'))
        	throw new MethodNotAllowedException();
		
		$this->Client->id = $id;
		if(!$this->Client->exists())
    	    throw new NotFoundException(__('Invalid Client'));
		
		if($this->Client->delete($id))
			$this->redirect($this->referer());
	}
	
	function logoUpload(){
		$this->autoRender = false;
		if($this->request->is('get'))
        	throw new MethodNotAllowedException();
		
		$uploaddir = WWW_ROOT . 'img';
		$filename = 'avatar-'. $this->request->data['Client']['upload-xs']['name'];
		$uploadfile = $uploaddir . DS . $filename ; //TODO: Do a file exists check on this filepath before overriding
		
		//Add validation rules for the file upload
		$this->Client->validator()->add('upload-xs', array(
		    'imager' => array(
		        'rule' => array('extension',array('gif','jpg','jpeg','png')),
		        'message'=>array('File must be an image (GIF/JPG/PNG)')
			),
		    'filesizer' => array(
		        'rule' => array('filesize','<=', '1MB'),
		        'message' => 'Image must be less than/ equal to 1MB'
		    ),
		    'uploaderrorer'=>array(
		        'rule'    => 'uploadError',
		        'message' => 'Something went wrong with the upload.'
			)
		));
		$this->Client->set($this->request->data);
		$valid = $this->Client->validates();
		if($valid):
			$response = (move_uploaded_file($this->request->data['Client']['upload-xs']['tmp_name'], $uploadfile))? 
				array('success'=>true,'message'=>$filename):
				array('success'=>false,'message'=>'Problem uploading image! Check file is a valid image and less than 1MB.');
		else:
			$response = array('success'=>false,'message'=>'Problem uploading image! Check file is a valid image and less than 1MB.');
		endif;
		return json_encode($response);
	}
}