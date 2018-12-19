<?php

/**
 * Created by PhpStorm.
 * User: wachirapan
 * Date: 12/19/2018
 * Time: 9:24 AM
 */
class GenAPI extends CI_Controller
{
    function lookanwser()
    {
        echo json_encode($this->QueryModel->lookanwser($this->input->get('questid')));
    }
    function editquestion()
    {
        echo json_encode($this->QueryModel->editquestion($this->input->get('questid')));
    }
    function ansforcustomer()
    {
        $questid = $this->input->get('questid');
        $ansid = $this->input->get('ansid');
        echo json_encode($this->QueryModel->ansforcustomer($questid, $ansid));
    }
}