<?php

defined('BASEPATH') or exit('No direct script access allowed');

function page_load($path,$data = null){
	$data['path'] = $path ;
	return get_instance()->load->view('page',$data);
}
