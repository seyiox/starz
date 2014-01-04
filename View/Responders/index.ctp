<!-- Navigation Bar -->
<nav class="navbar navbar-inverse no-margin" role="navigation">
	<p class="navbar-text">View Responses &mdash; [ <em><?php echo $survey;?></em> ]</p>
	<div class='navbar-right nav-btn'>
		<?php echo $this->Html->link('<span class="glyphicon glyphicon-chevron-left"></span> Back',array(
			'controller'=>'surveys','action'=>'index'),array(
			'escape'=>false,
			'style'=>'margin-top:4px; margin-right:15px;',
			'class'=>'btn btn-sm btn-info'
		));?>
	</div>
	<!-- Pagination, Filters & Search tools come here -->
</nav>

<!-- List Table -->
<div class="table-responsive">
  <table class="table table-striped table-hover">
    <thead>
      <tr>
        <th>Responder</th>
        <th>Name</th>
        <th>Email</th>
       <th>LastEdited</th>
 <!--        <th></th> -->
      </tr>
    </thead>
    <tbody>
    <?php foreach($responders as $responder):?>
      <tr>
<!--    <td><span class="label label-danger">INCOMPLETE</span></td> -->
        <td><?php echo $this->Html->link($responder['Responder']['session'],'#');?></td> <!-- link to resume survey -->
        <td><?php echo $this->Html->link($responder['Responder']['name'],'#');?></td> <!-- use tool tip to show respondents other details --> 
        <td><?php echo $this->Html->link($responder['Responder']['email'],'mailto:someone@emaillink.com');?></td>
        <td><?php echo date('d-M-Y',strtotime($responder['Responder']['modified']));?></td>
<!--        <td>
			<div class="btn-group">
			  <button type="button" class="btn btn-info btn-xs dropdown-toggle" data-toggle="dropdown">
			    Options <span class="caret"></span>
			  </button>
			  <ul class="dropdown-menu" role="menu">
			    <li class="disabled"><a href="#">Set Questions</a></li>
			    <li><a href="#">Launch Survey</a></li>
			    <li><a href="#">View Reponses</a></li>
			    <li><a href="#">Check Results</a></li>
			    <li class="divider"></li>
			    <li><a href="#">Change</a></li>
			    <li><a href="#">Delete</a></li>
			</div>
		</td>
-->      </tr>
      <?php endforeach;?>
    </tbody>
  </table>
</div>