<!-- Navigation Bar -->
<nav class="navbar navbar-inverse no-margin" role="navigation">
	<p class="navbar-text">View Survey Questions</p>
	<div class='navbar-right nav-btn hidden-xs'>
		<?php echo $this->Form->create(null,array('type'=>'get','action'=>'create/'.strTotime('now')));?>
		<button type="submit" class="btn btn-sm btn-info">
			<span class="glyphicon glyphicon-plus"></span> New
		</button>
		<?php echo $this->Form->end();?>
	</div>

	<p class="navbar-text navbar-right" style="padding-right:30px"><em>
		<?php echo $this->Paginator->counter('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}');?>
	</em></p>
	<!-- Pagination, Filters & Search tools come here -->
</nav>

<!-- List Table -->
<div class="table-responsive">
  <table class="table table-striped table-hover">
    <thead>
      <tr>
        <th></th>
        <th>Questionnaire</th>
        <th>Questions</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
	<?php $i=1;
	foreach($survennaires as $survennaire):?>
      <tr>
      	<td class="text-center"><?php echo $i++;?></td>
        <td><?php echo $this->Html->link($survennaire['Survennaire']['name'],array('action'=>'view',$survennaire['Survennaire']['id']));?></td>
        <td><?php echo $this->Html->link($survennaire['Survennaire']['survey_question_count'].' Questions',array('action'=>'view',$survennaire['Survennaire']['id']));?></td>
        <td>
			<div class="btn-group  pull-right">
			  <button type="button" class="btn btn-info btn-xs dropdown-toggle" data-toggle="dropdown">
			    <span class="glyphicon glyphicon-cog"></span>
			    Options <span class="caret"></span>
			  </button>
			  <ul class="dropdown-menu" role="menu">
			    <li><?php echo $this->Html->link('<span class="glyphicon glyphicon-play-circle"></span> View',array('action'=>'view',$survennaire['Survennaire']['id']),array('escape'=>false));?></li>
			    <li><?php echo $this->Form->postLink('<span class="glyphicon glyphicon-minus-sign"></span> Remove',
			    	array('action'=>'delete',$survennaire['Survennaire']['id']),array('escape'=>false,'confirm'=>'You are about to delete this entry. Are you sure?'));?></li>
			  </ul>
			</div>
		</td>
      </tr>
      <?php endforeach;?>
    </tbody>
  </table>
</div>
<!-- Pagination links -->
<ul class="pagination no-margin">
  <li class="disabled"><a href="#">&laquo;</a></li>
  <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
  <li><a href="#">&raquo;</a></li>
</ul>