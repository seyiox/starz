<!-- Navigation Bar -->
<nav class="navbar navbar-inverse no-margin" role="navigation">
	<p class="navbar-text">View Surveys</p>
	<div class='navbar-right nav-btn hidden-xs'>
		<?php echo $this->Form->create(null,array('type'=>'get','action'=>'add/'.strTotime('now')));?>
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
        <th>
		<div class="btn-group">
		  <button type="button" class="btn btn-xs dropdown-toggle" data-toggle="dropdown">
		    <span class="glyphicon glyphicon-filter"></span>
		  </button>
		  <ul class="dropdown-menu" role="menu">
		  	<li style="padding:5px;"><span class="glyphicon glyphicon-filter"></span> Filter by Status</li>
		    <li><?php echo $this->Html->link('Remove Filter',array('action'=>'index'));?></li>
		    <li class="divider"></li>
		    <li><?php echo $this->Html->link('On-going',array('action'=>'index','?'=>array('status'=>'ongoing')));?></li>
		    <li><?php echo $this->Html->link('Not Started',array('action'=>'index','?'=>array('status'=>'notstarted')));?></li>
		    <li><?php echo $this->Html->link('Completed',array('action'=>'index','?'=>array('status'=>'completed')));?></li>
		  </ul>
		</div>
		</th>
        <th>Survey </th>
        <th>Description</th>
        <th>Responses</th>
        <th>LastEdited</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
    <?php 
	    $ongoing = '<span class="label label-default label-fixed-width-75">ON GOING</span>';
	    $not_started = '<span class="label label-danger label-fixed-width-75">NOT STARTED</span>';
	    $completed = '<span class="label label-success label-fixed-width-75">COMPLETE</span>';
	    $i =1;
	    foreach ($surveys as $survey):
	    if(!$survey['Survey']['responder_count']):
	    	$label = $not_started;	
			$qunset = array('disabled','#');
			$qcomplete = array('enabled',array('controller'=>'responders','action'=>'create','?'=>array('survey_id'=>$survey['Survey']['id'])));
		else:
			if($survey['Survey']['sampsize'] > $survey['Survey']['responder_count']):
				$label = $ongoing;
				$qunset = array('enabled',array('controller'=>'surveys','action'=>'results','?'=>array('survey_id'=>$survey['Survey']['id'])));
				$qcomplete = array('enabled',array('controller'=>'responders','action'=>'create','?'=>array('survey_id'=>$survey['Survey']['id'])));
			else:
				$label = $completed;
				$qunset = array('enabled',array('controller'=>'surveys','action'=>'results','?'=>array('survey_id'=>$survey['Survey']['id'])));
				$qcomplete = array('disabled','#');
			endif;
		endif;
    ?>
      <tr>
      	<td class="text-center"><?php echo $i++;?></td>
        <td><?php echo $label. $this->Html->link($survey['Survey']['name'],array('action'=>'edit',$survey['Survey']['id']));?></td>
        <td><?php echo $survey['Survey']['description'];?></td>
        <td><?php echo $this->Html->link($survey['Survey']['responder_count'].' of '.$survey['Survey']['sampsize'],array('controller'=>'responders','action'=>'index','?'=>array('survey_id'=>$survey['Survey']['id'])));?></td>
        <td><?php echo date('d M,y',strtotime($survey['Survey']['modified']));?></td>
        <td>
			<div class="btn-group  pull-right">
			  <button type="button" class="btn btn-info btn-xs dropdown-toggle" data-toggle="dropdown">
			    <span class="glyphicon glyphicon-cog"></span>
			    Options <span class="caret"></span>
			  </button>
			  <ul class="dropdown-menu" role="menu">
			    <li class="<?php echo $qcomplete[0];?>"><?php echo $this->Html->link('Launch Survey',$qcomplete[1]);?></li>
			    <li><?php echo $this->Html->link('View Responses',array('controller'=>'responders','action'=>'index','?'=>array('survey_id'=>$survey['Survey']['id'])));?></li>
			    <li class="<?php echo $qunset[0];?>"><?php echo $this->Html->link('View Results',$qunset[1]);?></li></li>
			    <li class="divider"></li>
			    <li><?php echo $this->Html->link('<span class="glyphicon glyphicon-pencil"></span> Change',array('action'=>'edit',$survey['Survey']['id']),array('escape'=>false));?></li>
			    <li><?php echo $this->Form->postLink('<span class="glyphicon glyphicon-minus-sign"></span> Remove',
			    	array('action'=>'delete',$survey['Survey']['id']),array('escape'=>false,'confirm'=>'You are about to delete this client. Are you sure?'));?></li>
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