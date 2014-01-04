<?php 
class PillarsController extends AppController {
	
	function create($assessment_id = null){
		if($this->request->is('post')):
			$this->Pillar->save($this->request->data);
			$this->redirect('/');
		else:
			$assessment = $this->Pillar->Assessment->read(null,$assessment_id);
			$this->set(compact('assessment'));
		endif;
	}	
}
