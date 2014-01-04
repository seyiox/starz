<!-- Navigation Bar -->
<nav class="navbar navbar-inverse no-margin" role="navigation">
	<p class="navbar-text">View Survey Questions for <?php echo strtoupper($survennaire['Survennaire']['name']);?></p>
	<div class='navbar-right nav-btn hidden-xs'>
		<?php echo $this->Html->link('<span class="glyphicon glyphicon-chevron-left"></span> Back',array(
			'action'=>'index'),array(
			'escape'=>false,
			'style'=>'margin-top:4px; margin-right:15px;',
			'class'=>'btn btn-sm btn-info'
		));?>
	</div>
	<!-- Pagination, Filters & Search tools come here -->
</nav>

<p>&nbsp;</p>
<div class="col-md-8">
	<ul class="list-group">
		<?php $i=1; foreach($survennaire['SurveyQuestion'] as $question):?>
			<li class="list-group-item"><?php echo $i++ .'). '. $question['name'];?></li>
		<?php endforeach;?>
	</ul>
</div>