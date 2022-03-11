<?php
$url_array  =   explode('/', $_SERVER['REQUEST_URI']);

$data['home_theme'] = $this->config->item('home_theme'); 
$data['site_url']           = site_url();

$data['userid']           = $this->session->userdata('userid');


$this->load->view('layouts/home/header',$data); 

$this->load->view($content);
$this->load->view('layouts/home/footer');
?>
