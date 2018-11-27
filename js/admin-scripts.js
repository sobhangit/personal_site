jQuery(document).ready(function($) {
	var mediaUploader;

	$('#upload-button').on('click',function(e){

		e.preventDefault();
		if (mediaUploader) {
			mediaUploader.open();
			return;
		}
		mediaUploader = wp.media.frames.file_frame = wp.media({

			title:'تصویر مورد نظر خود را انتخاب کنید',
			button:{
				text:'انتخاب'
			},
			multiple:false

		});

		mediaUploader.on('select',function(){

			attachment = mediaUploader.state().get('selection').first().toJSON();
			$('#profile-pic').val(attachment.url);
			$('.profile-image img').attr('src', attachment.url);

		});

		mediaUploader.open();

	});

	$('#remove-button').on('click',function(){
		$('#profile-pic').val('');
		$('.admin-author-form').submit();
	});

	

});