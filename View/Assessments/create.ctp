<h2>Create Assessment</h2>
<?php 
	echo $this->Form->create('Assessment');
	echo $this->Form->input('description',array(
		'label'=>'How would you describe this assessment?'
		));
	echo $this->Form->input('touchpoint_count',array(
		'label'=>'How many service touchpoints exists?'
		));
	echo $this->Form->input('pillar_count',array(
		'label'=>'Across how many service pillars will you assess?'
		));
	echo $this->Form->submit();
?>
