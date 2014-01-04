<!-- Modal Content -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <?php echo $this->Form->create('Client',array('action'=>'logoUpload','id'=>'logoUpload','type'=>'file'));?>
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Select Image to Upload
		<button type="button" id="logo-upload-btn" class="btn btn-sm btn-info pull-right" style="margin-right:20px">
			<span class="glyphicon glyphicon-upload"></span> Upload
		</button></h4>
      </div>
      <div class="modal-body">
				<?php echo $this->Form->input('upload-xs',array(
					'type'=>'file',
					'label'=>false
				));
        		echo $this->Form->end();?><br/>
        		<p class="upload_msg alert alert-danger hidden">&nbsp;</p>
        		<small class="text-muted">Optimal image dimension: 140px X 140px</small>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<?php $this->Html->script('jquery.form.min.js',array('inline'=>false));?>
