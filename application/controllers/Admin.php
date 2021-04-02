<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('navbar');
		$this->load->view('admin');
		$this->load->view('footer');
	}

}