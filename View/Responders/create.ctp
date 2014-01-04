<?php echo $this->Form->create('Responder',array('role'=>'form','class'=>'form-horizontal'));
	$this->Form->inputDefaults(array(
		'error'=>array('attributes'=>array('class'=>'help-block has-error'))
	));?>
<!-- Navigation Bar -->
<nav class="navbar navbar-inverse" role="navigation">
	<p class="navbar-text">Create Survey Response &mdash; [ <em><?php echo $survey['Survey']['name'];?></em> ]</p>
	<div class='navbar-right nav-btn hidden-xs'>
		<?php echo $this->Html->link('<span class="glyphicon glyphicon-remove"></span> Cancel',array(
			'action'=>'index'),array(
			'escape'=>false,
			'style'=>'margin-top:3px',
			'class'=>'btn btn-sm btn-danger'
		));?>
<!--		<button type="submit" class="btn btn-sm btn-info">
			<span class="glyphicon glyphicon-save"></span> Save
		</button>
-->		<button type="submit" class="btn btn-sm btn-success">
			<span class="glyphicon glyphicon-plus"></span> Complete
		</button>
	</div>
</nav>
<div class="col-sm-8">
	<legend><?php echo $survey['Survey']['name'];?></legend>
	<div class="col-sm-12 ">
		<p class="small text-muted"><?php echo $survey['Survey']['introduction'];?></p>
<!--		<ul class="list-inline small question hidden-xs clearfix">
			<li class="col-sm-1"></li>
			<li class="col-sm-6"></li>
			<li class="col-sm-1 text-right">A</li>
			<li class="col-sm-1 text-right">B</li>
			<li class="col-sm-1 text-right">C</li>
			<li class="col-sm-1 text-right">D</li>
			<li class="col-sm-1 text-right">E</li>
		</ul>
-->		<?php 
		$i = 1; 
		foreach($survey['Survennaire']['SurveyQuestion'] as $question):
		?>
		<ul class="list-inline small question clearfix">
			<li class="col-sm-1 text-center"><?php echo ($i) . '. ';?></li>
			<li class="col-sm-6"><?php echo $question['name'];?></li>
			<?php $before = '<li class="col-sm-1 choices"><span class="glyphicon glyphicon-minus">&nbsp;</span>'; 
				$after = '<span class="glyphicon glyphicon-ok">&nbsp;</span></li>';?>
			<?php echo $this->Form->input('Response.'.$i++.'.choice',array(
				'type'=>'radio',
				'div'=>false,
				'legend'=>false,
				'options'=>$radios,
				'before'=>$before,
				'separator'=>$after.$before,
				'after'=>$after
			));?>
		</ul>
		<?php endforeach;?>
		<!--
		<ul class="list-inline btn-navigation clearfix">
			<li class="col-sm-1"><button type="button" class="btn btn-xs btn-info" disabled="disabled">&laquo; Back</button></li>
			<li class="col-sm-10"></li>
			<li class="col-sm-1"><button type="button" class="btn btn-xs btn-info">Next &raquo;</button></li>
		</ul>
		-->
	</div>
</div>
<div class="col-sm-4">
	<div class="well">
		<legend>Additional Data</legend>
	  	<div class="form-group">
	   	 <label for="respondentID" class="col-sm-3 control-label">Session ID</label>
		    <div class="col-sm-9">
		    	<p id='respondentID' class="form-control-static"><?php echo $respondID['id'];?></p>
		    	<?php echo $this->Form->input('session',array(
					'type'=>'hidden',
					'label'=>false,
					'value'=>$respondID['id']
				));?>
		    	<?php echo $this->Form->input('survey_id',array(
					'type'=>'hidden',
					'label'=>false,
					'value'=>$respondID['survey_id']
				));?>
		    </div>
		   </div>
	  	<div class="form-group">
	   	 <label for="respondentName" class="col-sm-3 control-label">Name</label>
		    <div class="col-sm-9">
		    	<?php echo $this->Form->input('name',array(
					'type'=>'text',
					'label'=>false,
					'class'=>'form-control',
					'id'=>'respondentName',
					'placeholder'=>'Full name goes here ...'
				));?>
		    </div>
		</div>
	  	<div class="form-group">
	   	 <label for="respondentEmail" class="col-sm-3 control-label">Email</label>
		    <div class="col-sm-9">
		    	<?php echo $this->Form->input('email',array(
					'type'=>'email',
					'label'=>false,
					'class'=>'form-control',
					'id'=>'respondentEmail',
					'placeholder'=>'Email address goes here ...'
				));?>
		    </div>
		</div>
	  	<div class="form-group">
	   	 <label for="respondentAge" class="col-sm-3 control-label">Age Group</label>
		    <div class="col-sm-9">
		    	<?php echo $this->Form->input('age',array(
					'type'=>'select',
					'label'=>false,
					'class'=>'form-control',
					'id'=>'respondentAge',
					'empty'=>'-- Select age group --'
				));?>
		    </div>
		</div>
	  	<div class="form-group">
	   	 <label for="respondentJob" class="col-sm-3 control-label">Occupation</label>
		    <div class="col-sm-9">
		    	<?php echo $this->Form->input('job',array(
					'type'=>'select',
					'label'=>false,
					'class'=>'form-control',
					'id'=>'respondentJob',
					'empty'=>'-- Select occupation --'
				));?>
		    </div>
		</div>
		<hr />
	  	<div class="form-group">
	   	 <label for="respondentComment" class="col-sm-3 control-label">Comment</label>
		    <div class="col-sm-9">
		    	<?php echo $this->Form->input('comment',array(
					'type'=>'textarea',
					'label'=>false,
					'class'=>'form-control',
					'id'=>'respondentComment',
					'placeholder'=>'General comment about this survey goes here ...'
				));?>
		    </div>
		</div>
	</div>
</div>