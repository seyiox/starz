<h2>Create Pillars for <u><?php echo $assessment['Assessment']['description'];?></u></h2>
<?php
	echo $this->Form->create('Pillar'); $input = 1;
	while($input <= $assessment['Assessment']['pillar_count']):
		echo $this->Form->input('Pillar.'.$input.'.description',array(
		 'label' => $input
		));
		$input++;
	endwhile;
	echo $this->Form->submit();
?>

