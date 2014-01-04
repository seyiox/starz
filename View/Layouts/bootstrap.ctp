<!DOCTYPE html>
<html>
  <head>
    <title>STARZ Online Assessment:: <?php echo $this->fetch('title');?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <?php echo $this->Html->css('bootstrap-yeti.min');?>
    <?php echo $this->Html->css('style');?>
    <?php 
		echo $this->fetch('meta');
		echo $this->fetch('css');
	?>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
		 <!-- Brand and toggle get grouped for better mobile display -->
		  <div class="navbar-header">
		    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		      <span class="sr-only">Toggle navigation</span>
		      <span class="icon-bar"></span>
		      <span class="icon-bar"></span>
		      <span class="icon-bar"></span>
		    </button>
		  </div>
		  
		  <!-- Collect the nav links, forms, and other content for toggling -->
		  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		  	<!-- Left aligned nav links -->
		    <ul class="nav navbar-nav">
		      <li><?php echo $this->Html->link('<strong>Dashboard</strong>',array('controller'=>'users','action'=>'dashboard'),
		      	array('escape'=>false));?></li>
		      <li class="dropdown"><?php echo $this->Html->link('Clients<b class="caret"></b>','#',
		      	array('class'=>'dropdown-toggle','data-toggle'=>'dropdown','escape'=>false));?>
		      	<ul class="dropdown-menu">
		      		<li><?php echo $this->Html->link('New Client',array('controller'=>'clients','action'=>'create',strtotime('now')));?></li>
		      		<li><?php echo $this->Html->link('View Clients',array('controller'=>'clients','action'=>'index'));?></li>
		      	</ul>
		      </li>
		      <li class="dropdown"><?php echo $this->Html->link('Surveys<b class="caret"></b>','#',
		      	array('class'=>'dropdown-toggle','data-toggle'=>'dropdown','escape'=>false));?>
		      	<ul class="dropdown-menu">
		      		<li><?php echo $this->Html->link('Set Survey Questions',array('controller'=>'survennaires','action'=>'create',strtotime('now')));?></li>
		      		<li><?php echo $this->Html->link('View Survey Questions',array('controller'=>'survennaires','action'=>'index'));?></li>
		      		<li class="divider"></li>
		      		<li><?php echo $this->Html->link('New Survey',array('controller'=>'surveys','action'=>'add',strtotime('now')));?></li>
		      		<li><?php echo $this->Html->link('View Surveys',array('controller'=>'surveys','action'=>'index'));?></li>
		      	</ul>
		      </li>
		      <li class="dropdown"><?php echo $this->Html->link('Assessments<b class="caret"></b>','#',
		      	array('class'=>'dropdown-toggle','data-toggle'=>'dropdown','escape'=>false));?>
		      	<ul class="dropdown-menu">
		      		<li><?php echo $this->Html->link('New Assessment',array('controller'=>'assessments','action'=>'add'));?></li>
		      		<li><?php echo $this->Html->link('View Assessments',array('controller'=>'assessments','action'=>'index'));?></li>
		      	</ul>
		      </li>
		    </ul>
		    
		    <!-- Right Aligned Nav links -->
		    <ul class="nav navbar-nav navbar-right hidden-xs">
		    	<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-cog"></span>',array('controller'=>'settings','action'=>'index'),
		    		array('class'=>'glyphicon-big ','escape'=>false));?></li>
		    	<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-user"></span>',array('controller'=>'users','action'=>'summary'),
		    		array('class'=>'glyphicon-big ','escape'=>false));?></li>
		    	<li class="dropdown"><?php echo $this->Html->link('<span class="glyphicon glyphicon-off"></span>',array('controller'=>'users','action'=>'logout'),
		    		array('escape'=>false,'class'=>'glyphicon-big'));?></li>
		    	<li><a>&nbsp;</a></li>
		    </ul>
		  </div>
	</nav>

	<!-- Main Container-->
	<div class="container container-fluid">
		<div class="row">
			<!-- SideBar Menu -->
		 	<div class="sidebar hidden-sm  hidden-xs"  data-spy="affix">
		 		<ul class="sidebar-items list-unstyled">
		 			<li class="buttons"><?php echo $this->Html->link('<span class="glyphicon glyphicon-folder-open"></span>',array('controller'=>'clients','action'=>'index'),
						array('escape'=>false));?></li>
		 			<li class="buttons"><?php echo $this->Html->link('<span class="glyphicon glyphicon-phone-alt"></span>',array('controller'=>'surveys','action'=>'index'),
						array('escape'=>false));?></li>
		 			<li class="buttons"><?php echo $this->Html->link('<span class="glyphicon glyphicon-list-alt"></span>',array('controller'=>'assessments','action'=>'index'),
						array('escape'=>false));?></li>
		 			<li class="buttons"><?php echo $this->Html->link('<span class="glyphicon glyphicon-stats"></span>',array('controller'=>'reports','action'=>'index'),
						array('escape'=>false));?></li>
		 			<li class="buttons"><?php echo $this->Html->link('<span class="glyphicon glyphicon-star"></span>',array('controller'=>'rating','action'=>'index'),
						array('escape'=>false));?></li>
		 		</ul>
		 	</div>
		 	<!-- Main Content Window -->
		 	<?php echo $this->Session->flash();?>
		 	<div class="content">
		 		<?php echo $this->fetch('content');?>
		 	</div>
		</div>
	</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <?php echo $this->Html->script('bootstrap.min');
		echo $this->fetch('script');
		echo $this->Html->script('script');
		echo $this->Js->writeBuffer();
	?>
  </body>
</html>