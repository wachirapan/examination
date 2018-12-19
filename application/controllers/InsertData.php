<?php

/**
 * Created by PhpStorm.
 * User: wachirapan
 * Date: 12/19/2018
 * Time: 9:07 AM
 */
class InsertData extends CI_Controller
{
    function insertquestion()
    {
        $question = $this->input->post('question');
        $questionA = $this->input->post('questionA');
        $questionB = $this->input->post('questionB');
        $questionC = $this->input->post('questionC');
        $scoreA = $this->input->post('scoreA');
        $scoreB = $this->input->post('scoreB');
        $scoreC = $this->input->post('scoreC');
        $this->InsertModel->insertquestion($question, $questionA, $questionB, $questionC, $scoreA, $scoreB, $scoreC);
    }
    function insertcustomer()
    {
        $username = $this->input->post('username');
        $phone = $this->input->post('phone');
        $lastname = $this->input->post('lastname');
        $this->InsertModel->insertcustomer($username, $phone, $lastname);
        redirect(base_url('welcome/docexam'));
        exit();
    }
    function insertanscustomer()
    {
        $questid = $this->input->post('questid');
        $ansid = $this->input->post('ansid');
        $this->InsertModel->insertanscustomer($questid, $ansid);
    }
}