<?php 
class AssessmentsController extends AppController {
	
	function create(){
		if($this->request->is('post')):
			$this->Assessment->save($this->request->data);
		endif;
	}	
}
