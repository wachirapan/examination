<?php

/**
 * Created by PhpStorm.
 * User: wachirapan
 * Date: 12/19/2018
 * Time: 10:42 AM
 */
class UpdateData extends CI_Controller
{
    function updatequestion()
    {
        $questid = $this->input->post('questid');
        $question = $this->input->post('question');
        $questionA = $this->input->post('questionA');
        $questionB = $this->input->post('questionB');
        $questionC = $this->input->post('questionC');
        $scoreA = $this->input->post('scoreA');
        $scoreB = $this->input->post('scoreB');
        $scoreC = $this->input->post('scoreC');
        $pkA = $this->input->post('pkA');
        $pkB = $this->input->post('pkB');
        $pkC = $this->input->post('pkC');
        $this->UpdateModel->updatequestion($questid, $question, $questionA, $questionB, $questionC, $scoreA, $scoreB, $scoreC, $pkA, $pkB, $pkC);
    }
    function customtestfinish()
    {
        $this->db->where('cs_id',$this->session->userdata('customer_id'))->update('customer',['cs_status'=>"y"]);
        redirect(base_url('welcome/finishpage'));
        exit();
    }
}