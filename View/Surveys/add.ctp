<?php echo $this->Form->create('Survey',array('role'=>'form','class'=>'form-horizontal'));
	$this->Form->inputDefaults(array(
		'error'=>array('attributes'=>array('class'=>'help-block has-error'))
	));?>
<!-- Navigation Bar -->
<nav class="navbar navbar-inverse" role="navigation">
	<p class="navbar-text">New Survey</p>
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
<!-- Form Content (General Information) -->
<div class="col-md-8">
	<legend>Survey Characteristics</legend>
  	<div class="form-group">
   	 <label for="surveyName" class="col-sm-2 control-label">Survey Title *</label>
	    <div class="col-sm-10">
	    	<?php echo $this->Form->input('name',array(
				'type'=>'text',
				'label'=>false,
				'class'=>'form-control',
				'id'=>'surveyName',
				'placeholder'=>'Survey title goes here ...'
			));?>
	    </div>
	</div>
  	<div class="form-group">
   	 <label for="surveyDescription" class="col-sm-2 control-label">Description</label>
	    <div class="col-sm-10">
	    	<?php echo $this->Form->input('description',array(
				'type'=>'text',
				'label'=>false,
				'class'=>'form-control',
				'id'=>'surveyDescription',
				'placeholder'=>'Internal description for survey goes here ...'
			));?>
	    </div>
	</div>
  	<div class="form-group">
   	 <label for="surveyQuestions" class="col-sm-2 control-label">Questions</label>
	    <div class="col-sm-10">
	    	<?php echo $this->Form->input('survennaires_id',array(
				'type'=>'select',
				'label'=>false,
				'options'=>$survennaires,
				'class'=>'form-control',
				'id'=>'surveyQuestions',
				'empty'=>'-- Select survey questions --'
			));?>
	    </div>
	</div>
  	<div class="form-group">
   	 <label for="surveyIntroduction" class="col-sm-2 control-label">Introduction</label>
	    <div class="col-sm-10">
	    	<?php echo $this->Form->input('introduction',array(
				'type'=>'textarea',
				'label'=>false,
				'class'=>'form-control',
				'id'=>'surveyIntroduction',
				'placeholder'=>'This area introduces your survey to respondents.'
			));?>
	    </div>
	</div>
  	<div class="form-group">
   	 <label for="surveyTarget" class="col-sm-2 control-label">Sample Size</label>
	    <div class="col-sm-10">
	    	<?php echo $this->Form->input('sampsize',array(
				'type'=>'number',
				'label'=>false,
				'class'=>'form-control',
				'id'=>'surveyTarget',
				'placeholder'=>'Target number of reponses goes here... Integers only.'
			));?>
	    </div>
	</div>
  	<div class="form-group">
   	 <label for="surveyRatingScale" class="col-sm-2 control-label">Rating Scale</label>
	    <div class="col-sm-6">
	    	<?php echo $this->Form->input('opt1',array(
				'type'=>'text',
				'label'=>false,
				'class'=>'form-control',
				'id'=>'surveyRatingScale',
				'placeholder'=>'Enter rating option here ...'
			));?>
	    </div>
	    <div class='col-sm-2'>
	    	<?php echo $this->Form->input('wht1',array(
	    		'type'=>'numeric',
	    		'label'=>false,
	    		'class'=>'form-control',
	    		'placeholder'=>'Weight'
			));?>
	    </div>
	</div>
  	<div class="form-group">
	    <div class="col-sm-offset-2 col-sm-6">
	    	<?php echo $this->Form->input('opt2',array(
				'type'=>'text',
				'label'=>false,
				'class'=>'form-control',
				'id'=>'surveyRatingScale',
				'placeholder'=>'Enter rating option here ...'
			));?>
	    </div>
	    <div class='col-sm-2'>
	    	<?php echo $this->Form->input('wht2',array(
	    		'type'=>'numeric',
	    		'label'=>false,
	    		'class'=>'form-control',
	    		'placeholder'=>'Weight'
			));?>
	    </div>
	    <div class='col-sm-2'>
	    	<button type='button' class="btn btn-xs btn-more btn-default">
	    		<span class="glyphicon glyphicon-plus-sign"></span> add
	    	</button>
	    </div>
	</div>
  	<div class="form-group hidden">
	    <div class="col-sm-offset-2 col-sm-6">
	    	<?php echo $this->Form->input('opt3',array(
				'type'=>'text',
				'label'=>false,
				'class'=>'form-control',
				'id'=>'surveyRatingScale',
				'placeholder'=>'Enter rating option here ...'
			));?>
	    </div>
	    <div class='col-sm-2'>
	    	<?php echo $this->Form->input('wht3',array(
	    		'type'=>'numeric',
	    		'label'=>false,
	    		'class'=>'form-control',
	    		'placeholder'=>'Weight'
			));?>
	    </div>
	    <div class='col-sm-2'>
	    	<button type='button' class="btn btn-xs btn-more btn-default">
	    		<span class="glyphicon glyphicon-plus-sign"></span> add
	    	</button>
	    </div>
	</div>
  	<div class="form-group hidden">
	    <div class="col-sm-offset-2 col-sm-6">
	    	<?php echo $this->Form->input('opt4',array(
				'type'=>'text',
				'label'=>false,
				'class'=>'form-control',
				'id'=>'surveyRatingScale',
				'placeholder'=>'Enter rating option here ...'
			));?>
	    </div>
	    <div class='col-sm-2'>
	    	<?php echo $this->Form->input('wht4',array(
	    		'type'=>'numeric',
	    		'label'=>false,
	    		'class'=>'form-control',
	    		'placeholder'=>'Weight'
			));?>
	    </div>
	    <div class='col-sm-2'>
	    	<button type='button' class="btn btn-xs btn-more btn-default">
	    		<span class="glyphicon glyphicon-plus-sign"></span> add
	    	</button>
	    </div>
	</div>
  	<div class="form-group hidden">
	    <div class="col-sm-offset-2 col-sm-6">
	    	<?php echo $this->Form->input('opt5',array(
				'type'=>'text',
				'label'=>false,
				'class'=>'form-control',
				'id'=>'surveyRatingScale',
				'placeholder'=>'Enter rating option here ...'
			));?>
	    </div>
	    <div class='col-sm-2'>
	    	<?php echo $this->Form->input('wht5',array(
	    		'type'=>'numeric',
	    		'label'=>false,
	    		'class'=>'form-control',
	    		'placeholder'=>'Weight'
			));?>
	    </div>
	</div>
</div>

<!-- Form Content (Contact Information) -->
<div class="col-md-4">
	<div class="alert alert-info">
		<h4><span class="glyphicon glyphicon-question-sign"></span> Quick Help on Rating Scale</h4>
		<hr />
		<p>Rating scale simply describes what options you would like your respondents to give.
			For example, some survey responses are "Yes/No", "Strongly Agree/Agree/Indifferent/Disagree/Strongly Disagree".<br/ >
			This option helps define what kind of reponses you require for your survey questions. There are a maximum of 5 options you can supply
		</p>
		<p>
			In addition, each option is assigned a weight to help determine the final score for the survey question. Be careful in using this option.
		</p>
	</div>
	<?php echo $this->Form->end();?>
	<?php echo $this->Form->create('Survey',array('action'=>'addTemplate'));?>
	<div class="well">
		<legend>Create from Template</legend>
	  	<div class="form-group">
	   	 <label for="surveyExisting" class="col-sm-3 control-label">Survey</label>
		    <div class="col-sm-9">
		    	<?php echo $this->Form->input('survey_id',array(
					'type'=>'select',
					'label'=>false,
					'class'=>'form-control',
					'id'=>'surveyExisting',
					'options'=>$surveys,
					'empty'=>'-- Select previous survey --'
				));?>
		    </div>
		</div>
		<div class="col-sm-9 col-sm-offset-3">
	    	<button type='submit' class="btn btn-info btn-xs">Use Survey</button>
		</div>
		<div class="clearfix"></div>
	</div>
</div>

<!-- Form End -->
<?php echo $this->Form->end();?>
