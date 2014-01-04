<?php echo $this->Form->create('Survennaire',array('role'=>'form','class'=>'form-horizontal','type'=>'file'));
	$this->Form->inputDefaults(array(
		'error'=>array('attributes'=>array('class'=>'help-block has-error'))
	));?>
<!-- Navigation Bar -->
<nav class="navbar navbar-inverse" role="navigation">
	<p class="navbar-text">New Survey Questionnaire</p>
	<div class='navbar-right nav-btn hidden-xs'>
		<?php echo $this->Html->link('<span class="glyphicon glyphicon-remove"></span> Cancel',array(
			'action'=>'index'),array(
			'escape'=>false,
			'style'=>'margin-top:3px',
			'class'=>'btn btn-sm btn-danger'
		));?>
		<button type="submit" class="btn btn-sm btn-success">
			<span class="glyphicon glyphicon-plus"></span> Save
		</button>
	</div>
</nav>
<div class="col-md-8">
		<legend>Set Questions <em class="small text-muted pull-right">For more than 10 questions, use the file upload option</em></legend>
		<?php $i=0; while($i < 10): ?>
		<div class="form-group">
		   	 <div  class="col-sm-1 text-center">
		   	 	<label><?php echo ($i+1).'.';?></label>
		   	 </div>
		   	 <div class="col-sm-11">
		    	<?php echo $this->Form->input('SurveyQuestion.'.$i++.'.name',array(
					'type'=>'text',
					'label'=>false,
					'div'=>false,
					'class'=>'form-control ',
					'placeholder'=>'Your question goes here ...'
				));?>
		    </div>
		</div>
		<?php endwhile;?>
</div>
<div class="col-md-4">
	<div class="alert alert-info">
		<h4><span class="glyphicon glyphicon-upload"></span> Uploading &amp; Saving Questions</h4>
		<hr />
		<p>Questions can either be entered manually (if less than ten), or uploaded via the section below. </p>
		<p>To upload questions, <u>prepare a text file containing the questions, each question on new line.</u></p>
		<p class="text-danger">NOTE: Questions cannot be edited! So be sure the questions are to your satisfaction before saving, 
			else you would need to delete this and create a new question set.</p>
	</div>
	<div class="well">
		<legend>Survey Questionnaire</legend>
		<div class="form-group">
	   	 <label for="survennaireName" class="col-sm-3 control-label">Name</label>
		   	 <div class="col-sm-9">
		    	<?php echo $this->Form->input('name',array(
					'type'=>'text',
					'label'=>false,
					'class'=>'form-control ',
					'id'=>'survennaireName',
					'placeholder'=>'Title this question set ...'
				));?>
		    </div>
		</div>
		<div class="form-group">
	   	 <label for="survennaireName" class="col-sm-3 control-label">Upload</label>
			<div class="col-sm-9">
				<?php echo $this->Form->input('survennaireFile',array(
					'type'=>'file',
					'separator'=>'<br />',
					'label'=>false
				));?>
			</div>
		</div>
	</div>
</div>

<?php echo $this->Form->end();?>
