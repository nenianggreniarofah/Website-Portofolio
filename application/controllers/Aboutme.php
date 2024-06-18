<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aboutme extends CI_Controller {

	public function index()
	{
		$this->load->view('aboutme.php');
	}
}