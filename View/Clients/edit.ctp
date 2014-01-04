<?php echo $this->Form->create('Client',array('role'=>'form','class'=>'form-horizontal','action'=>'create'));?>
<!-- Navigation Bar -->
<nav class="navbar navbar-inverse" role="navigation">
	<p class="navbar-text">Change Client Details &mdash; [ <em><?php echo $this->request->data['Client']['name'];?></em> ]</p>
	<div class='navbar-right nav-btn  hidden-xs'>
		<?php echo $this->Html->link('<span class="glyphicon glyphicon-remove"></span> Cancel',array(
			'action'=>'index'
		),array(
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
	<legend>General Information</legend>
  	<div class="form-group">
   	 <label for="clientName" class="col-sm-2 control-label">Client Name</label>
	    <div class="col-sm-10">
	    	<?php echo $this->Form->input('id',array(
				'type'=>'hidden',
				'value'=>$this->request->data['Client']['id']
			));
	    		 echo $this->Form->input('name',array(
				'type'=>'text',
				'label'=>false,
				'class'=>'form-control',
				'id'=>'clientName',
				'placeholder'=>'Client name goes here ...',
				'error'=>array(
					'attributes'=>array('class'=>'help-block has-error'))
			));?>
	    </div>
	</div>
  	<div class="form-group">
   	 <label for="clientDescription" class="col-sm-2 control-label">Description</label>
	    <div class="col-sm-10">
	    	<?php echo $this->Form->input('description',array(
				'type'=>'textarea',
				'label'=>false,
				'class'=>'form-control',
				'id'=>'clientDescription',
				'placeholder'=>'Description for client goes here ...'
			));?>
	    </div>
	</div>
  	<div class="form-group">
   	 <label for="clientIndustry" class="col-sm-2 control-label">Industry</label>
	    <div class="col-sm-10">
	    	<?php echo $this->Form->input('industry',array(
				'type'=>'select',
				'label'=>false,
				'class'=>'form-control',
				'id'=>'clientIndustry',
				'options'=>Configure::read('industry'),
				'empty'=>'-- Select Industry --'
			));?>
	    </div>
	</div>
  	<div class="form-group">
   	 <label for="clientEmployees" class="col-sm-2 control-label">Staff Size</label>
	    <div class="col-sm-10">
	    	<?php echo $this->Form->input('empsize',array(
				'type'=>'select',
				'label'=>false,
				'class'=>'form-control',
				'id'=>'clientEmployees',
				'options'=>Configure::read('empsize'),
				'empty'=>'-- Select Employee Size --'
			));?>
	    </div>
	</div>
  	<div class="form-group hidden-sm">
   	 <label for="clientAvatar" class="col-sm-2 control-label">Client Logo</label>
	    <div class="col-sm-10"> <a href="#" data-toggle="modal" data-target="#myModal">
	    	<?php echo $this->Html->image($this->request->data['Client']['logo'],array(
	    		'class'=>'img-thumbnail',
	    		'id'=>'logo_preview',
	    		'height'=>140,
	    		'width'=>140
			));?></a>
			<?php echo $this->Form->input('logo',array(
				'type'=>'hidden',
				'id'=>'logo_input',
				'value'=>$this->request->data['Client']['logo']
			));?>
	    </div>
	</div>
</div>

<!-- Form Content (Contact Information) -->
<div class="col-md-4">
	<div class="well">
		<legend>Contact Information</legend>
	  	<div class="form-group">
	   	 <label for="clientAddr" class="col-sm-3 control-label">Addr.1</label>
		    <div class="col-sm-9">
		    	<?php echo $this->Form->input('add1',array(
					'type'=>'text',
					'label'=>false,
					'class'=>'form-control',
					'id'=>'clientAddr',
					'placeholder'=>'Address line 1'
				));?>
		    </div>
		</div>
	  	<div class="form-group">
	   	 <label for="clientAddr2" class="col-sm-3 control-label">Addr.2</label>
		    <div class="col-sm-9">
		    	<?php echo $this->Form->input('add2',array(
					'type'=>'text',
					'label'=>false,
					'class'=>'form-control',
					'id'=>'clientAddr2',
					'placeholder'=>'Address line 2'
				));?>
		    </div>
		</div>
	  	<div class="form-group">
	   	 <label for="clientCity" class="col-sm-3 control-label">City</label>
		    <div class="col-sm-9">
		    	<?php echo $this->Form->input('city',array(
					'type'=>'text',
					'label'=>false,
					'class'=>'form-control',
					'id'=>'clientDescription',
					'placeholder'=>'Enter city name or postcode'
				));?>
		    </div>
		</div>
	  	<div class="form-group">
	   	 <label for="clientState" class="col-sm-3 control-label">State</label>
		    <div class="col-sm-9">
		    	<?php echo $this->Form->input('state',array(
					'type'=>'select',
					'label'=>false,
					'options'=>Configure::read('states'),
					'default'=>25,
					'class'=>'form-control',
					'id'=>'clientState',
				));?>
		    </div>
		</div>
	  	<div class="form-group">
	   	 <label for="clientCountry" class="col-sm-3 control-label">Country</label>
		    <div class="col-sm-9">
		    	<?php echo $this->Form->input('country',array(
					'type'=>'select',
					'label'=>false,
					'options'=>Configure::read('countries'),
					'default'=>'NG',
					'class'=>'form-control',
					'id'=>'clientCountry',
				));?>
		    </div>
		</div>
	  	<div class="form-group">
	   	 <label for="clientTel" class="col-sm-3 control-label">Telephone</label>
		    <div class="col-sm-9">
		    	<?php echo $this->Form->input('tel',array(
					'type'=>'tel',
					'label'=>false,
					'class'=>'form-control',
					'id'=>'clientTel',
					'placeholder'=>'e.g. +2348023456789'
				));?>
		    </div>
		</div>
	  	<div class="form-group">
	   	 <label for="clientEmail" class="col-sm-3 control-label">Email</label>
		    <div class="col-sm-9">
		    	<?php echo $this->Form->input('email',array(
					'type'=>'email',
					'label'=>false,
					'class'=>'form-control',
					'id'=>'clientEmail',
					'placeholder'=>'e.g. someone@example.com'
				));?>
		    </div>
		</div>
	  	<div class="form-group">
	   	 <label for="clientUrl" class="col-sm-3 control-label">Website</label>
		    <div class="col-sm-9">
		    	<?php echo $this->Form->input('website',array(
					'type'=>'url',
					'label'=>false,
					'class'=>'form-control',
					'id'=>'clientUrl',
					'placeholder'=>'e.g. www.example.com'
				));?>
		    </div>
		</div>
	</div>
</div>

<!-- Form End -->
<?php echo $this->Form->end();?>
<?php echo $this->element('logo_upload');
