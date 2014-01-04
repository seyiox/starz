<?php $industry = Configure::read('industry');?>
<!-- Navigation Bar -->
<nav class="navbar navbar-inverse no-margin" role="navigation">
	<p class="navbar-text">View Clients</p>
	<div class='navbar-right nav-btn'>
		<?php echo $this->Form->create(null,array('type'=>'get','action'=>'create/'.strtotime('now')));?>
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
        <th>Client</th>
        <th>Email</th>
        <th>Telephone</th>
        <th>Industry</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
    <?php $i=1; foreach($clients as $client):;?>
      <tr>
        <td align="center"><?php echo $this->Html->image($client['Client']['logo'],array('width'=>35,'class'=>'img-thumbnail'));?></td>
        <td><?php echo $this->Html->link($client['Client']['name'],array('action'=>'edit',$client['Client']['id']));?></td>
        <td><?php echo $this->Html->link($client['Client']['email'],'mailto:'.$client['Client']['email']);?></td>
        <td><?php echo $client['Client']['tel'];?></td>
        <td><?php echo $industry[$client['Client']['industry']];?></td>
        <td>
			<div class="btn-group  pull-right">
			  <button type="button" class="btn btn-info btn-xs dropdown-toggle" data-toggle="dropdown">
			  	<span class="glyphicon glyphicon-cog"></span>
			    Options <span class="caret"></span>
			  </button>
			  <ul class="dropdown-menu" role="menu">
			  	<li><?php echo $this->Html->link('View Assessments',array('controller'=>'assessments','action'=>'index','?'=>array('client_id'=>$client['Client']['id'])));?></li>
			  	<li class="divider"></li>
			    <li><?php echo $this->Html->link('<span class="glyphicon glyphicon-pencil"></span> Change',array('action'=>'edit',$client['Client']['id']),array('escape'=>false));?></li>
			    <li><?php echo $this->Form->postLink('<span class="glyphicon glyphicon-minus-sign"></span> Remove',
			    	array('action'=>'delete',$client['Client']['id']),array('escape'=>false,'confirm'=>'You are about to delete this client. Are you sure?'));?></li>
			  </ul>
			</div>
		</td>
      </tr>
    <?php endforeach;?>
    </tbody>
  </table>
</div>
<!-- Pagination links -->
<ul class="pagination no-margin"><div class="pagination pagination-sm">
<?php
    echo $this->Paginator->prev('&laquo;', array('tag' => 'li'), null, array('tag' => 'li','escape'=>false,'class' => 'disabled','disabledTag' => 'a'));
    echo $this->Paginator->numbers(array('separator' => '','currentTag' => 'a', 'currentClass' => 'active','tag' => 'li','first' => 1));
    echo $this->Paginator->next(__('&raquo;'), array('tag' => 'li','currentClass' => 'disabled'), null, array('tag' => 'li','escape'=>false,'class' => 'disabled','disabledTag' => 'a'));
?>
</ul>