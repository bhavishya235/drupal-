<?php
	function image_get_stat($target)
	{
		$imagick_type = new Imagick($target->destination);
		drupal_set_message('hi');
		//$file_to_grab_with_location = $target->destination;
		//$file_handle_for_viewing_image_file = fopen($file_to_grab_with_location, 'a+');
		//$imagick_type->readImageFile($file_handle_for_viewing_image_file);
	}
?>
