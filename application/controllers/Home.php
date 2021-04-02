<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('navbar');
		$this->load->view('home');
		$this->load->view('footer');
	}
	public function changelog()
	{
		$this->load->view('header');
		$this->load->view('navbar');
		$this->load->view('changelog');
		$this->load->view('footer');
	}
	public function about()
	{
		$this->load->view('header');
		$this->load->view('navbar');
		$this->load->view('about');
		$this->load->view('footer');
	}
	public function verusuario()
	{
		$this->load->view('header');
		$this->load->view('navbar');
		$this->load->view('usuario');
		$this->load->view('footer');
	}
	public function top()
	{
		$this->load->view('header');
		$this->load->view('navbar');
		$this->load->view('top');
		$this->load->view('footer');
	}
}
