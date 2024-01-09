<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if (!function_exists('fileuploadCI')) {
	function fileuploadCI($imagename,$folder)
	{
		$CI =& get_instance();
		$config=array(
			'upload_path' => './gambar/',
			'allowed_types' => 'jpg|jpeg|png',
			'max_size'=>'15000',
			'file_name' => 'img' . time(),
			
		);
		$CI->load->library('upload',$config);
	}
	function profilubah($imagename,$folder)
	{
		$CI =& get_instance();
		$config=array(
			'upload_path' => './files/img/profile/',
			'allowed_types' => 'jpg|jpeg|png',
			'max_size'=>'15000',	
			'file_name' => 'img' . time(),
			
		);
		$CI->load->library('upload',$config);
	}
}
