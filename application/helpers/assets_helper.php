<?php

defined('BASEPATH') or exit('No direct script access allowed');

function assetCSS(){
	// $CI        = &get_instance();
	//$CI->load->library('Asset');
	return get_instance()->asset->libAssetCSS();
}

function assetJS(){
	// $CI        = get_instance();
	// $CI->load->library('Asset');
	return get_instance()->asset->libAssetJS();
}

function render_head(){
	$CI        = &get_instance();
	$CI->load->view('assets/header');
}

function render_foot(){
	$CI        = &get_instance();
	$CI->load->view('assets/footer');
}

function render_side(){
	$CI        = &get_instance();
	$CI->load->view('assets/sidebar');
}