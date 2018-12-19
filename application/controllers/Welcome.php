<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->library('pagination');
	}

	public function index()
	{
		$this->load->view('header');
		$this->load->view('index');
		$this->load->view('footer');
	}
	public function docexam($index = 1)
	{
		$data['blogs'] = $this->QueryModel->ackcustomer($index);
		$data['links'] = $this->getpagination('welcome/docexam/', $this->QueryModel->getcountquestion(), 3);
		$this->load->view('header');
		$this->load->view('docexam/docexam',$data);
		$this->load->view('footer');
	}
	function finishpage(){
		$data['sum'] = $this->QueryModel->finishtest();
		$this->load->view('header');
		$this->load->view("finishpage/finishpage",$data);
		$this->load->view('footer');
	}
	function getpagination($url, $all_row, $uri_segment)
	{
		$config['base_url'] = base_url() . $url;
		$config['total_rows'] = $all_row;
		$config['per_page'] = 1;
		$config["uri_segment"] = $uri_segment;
		$config['num_links'] = 2;
		$config['use_page_numbers'] = TRUE;
		$config['reuse_query_string'] = TRUE;

		$config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination">';
		$config['full_tag_close']   = '</ul></nav></div>';
		$config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
		$config['num_tag_close']    = '</span></li>';
		$config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
		$config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
		$config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['next_tag_close']  = '<span aria-hidden="true"></span></span></li>';
		// $config['next_tag_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
		$config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['prev_tag_close']  = '</span></li>';
		$config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
		$config['first_tag_close'] = '</span></li>';
		$config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['last_tag_close']  = '</span></li>';

		$this->pagination->initialize($config);
		return $this->pagination->create_links();
	}
}
