<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Asset
{
	public function libAssetCSS(){
		$html='';
		$CI        = &get_instance();
		$CI->load->helper('directory');
		$css = directory_map(ASSETS.'/css');
		foreach($css as $item){
			$html .= '<link rel="stylesheet" href="'.ASSETS.'css/'.$item.'" />'.PHP_EOL ;
		}
		return $html ;
	}

	public function libAssetJS(){
		$html='';
		$CI        = &get_instance();
		$CI->load->helper('directory');
		$js = directory_map(ASSETS.'/js');
		foreach($js as $item){
			$html .= '<script src="'.ASSETS.'js/'.$item.'"></script>'.PHP_EOL ;
		}
		return $html ;
	}
}