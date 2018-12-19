<?php

/**
 * Created by PhpStorm.
 * User: wachirapan
 * Date: 12/19/2018
 * Time: 8:42 AM
 */
class Backend extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if(empty($this->session->userdata("userlogin"))){
            redirect(base_url('Login/loginpage'));
            exit();
        }
        $this->load->library('pagination');
    }

    function index($index = 1)
    {
        $data['blogs'] = $this->QueryModel->getquestion($index);
        $data['links'] = $this->getpagination('Backend/index/', $this->QueryModel->getcountquestion(), 3);
        $this->load->view('backend/header');
        $this->load->view('backend/index',$data);
        $this->load->view('backend/footer');
    }
    function getpagination($url, $all_row, $uri_segment)
    {
        $config['base_url'] = base_url() . $url;
        $config['total_rows'] = $all_row;
        $config['per_page'] = 10;
        $config["uri_segment"] = $uri_segment;
        $config['num_links'] = 2;
        $config['use_page_numbers'] = TRUE;
        $config['reuse_query_string'] = TRUE;

        $config['full_tag_open'] = '<nav aria-label="Page navigation example"><ul class="pagination justify-content-center pagination-lg">';
        $config['full_tag_close'] = '</ul></nav>';

        $config['first_link'] = '<<';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = '>>';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = '>';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '<';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item disabled"><a class="page-link" href="#" tabindex="-1">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';
        $this->pagination->initialize($config);

        return $this->pagination->create_links();
    }
}