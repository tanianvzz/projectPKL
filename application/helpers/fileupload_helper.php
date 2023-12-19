<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if (!function_exists('fileuploadCI')) {
	function fileuploadCI($imagename,$folder)
	{
		$image=$_FILES[$imagename]['name'];
		$CI =& get_instance();
		$config=array(
			'upload_path' => './uploads/',
			'allowed_types' => 'jpg|jpeg|png',
			'max_size'=>'15000',
			
		);
		$CI->load->library('upload',$config);
		$CI->upload->initialize($config);
	}
}