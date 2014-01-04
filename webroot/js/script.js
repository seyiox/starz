$(document).ready(function() {
	// General error handling
    $('.form-control').parent('.error').each(function() {
        $(this).addClass('has-error');
    });
    
    //Logo upload function for client logos
    $('#logo-upload-btn').click(function(){
    	$('#logoUpload').ajaxSubmit({
    		success: logoCallback,
    		error: function(){
    			$('p.upload_msg').text('Server connection error').removeClass('hidden');
    		}
    	});
    });
    
    //Event function for adding more buttons
    $('.btn-more').click(
    	function(){
    		$(this).parents('.form-group').next().removeClass('hidden');
    		$(this).addClass('hidden');
    	}
    );
    
    //All variables
    var logoCallback = function(response, success, operation){
    	resp = jQuery.parseJSON(response);

       	if(resp.success){
    		$('#logo_preview').attr('src','../../img/'+resp.message);
    		$('#logo_input').attr('value',resp.message);
    		$("#myModal").modal('hide');
    		$('p.upload_msg').addClass('hidden');;
    	}else{
    		$('p.upload_msg').text(resp.message).removeClass('hidden');
    	};
    };
});