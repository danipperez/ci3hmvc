<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{

		$content_data = array(
			'page_name' => 'HOME',
		);

		$data = array(
			'content_data' => $content_data,
		);

		$this->load->view('admin/template', $data);
	}


}
