<?php

/**
 * Created by PhpStorm.
 * User: wachirapan
 * Date: 12/19/2018
 * Time: 11:03 AM
 */
class DeleteData extends CI_Controller
{
    function delquestion()
    {
        $this->db->where('quest_id',$this->input->post('questid'))->delete('question');
        $this->db->where('quest_id',$this->input->post('questid'))->delete('answer');
    }
}