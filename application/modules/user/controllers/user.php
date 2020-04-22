<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{
		
		$content_data = array(
			'page_name' => 'USER LIST',
		);

		$data = array(
			'content_data' => $content_data,
		);

		$this->load->view('admin/template',$data);

	}

	public function profile()
	{
		$this->load->view('admin/template');
	}

}
