<?php

/**
 * Created by PhpStorm.
 * User: wachirapan
 * Date: 12/19/2018
 * Time: 8:30 AM
 */
class QueryModel extends CI_Model
{
    function getquestion($index)
    {
        $length = 10;
        $start = ($index - 1) * $length;
        $this->db->limit($length, $start);
       return $this->db->get('question')->result();
    }
    function getcountquestion()
    {
        return $this->db->get('question')->num_rows();
    }
    function lookanwser($id)
    {
        return $this->db->get_where('answer',array('quest_id'=>$id))->result();
    }
    function editquestion($id)
    {
        return $this->db->select('*')->from('question')
            ->join('answer','question.quest_id = answer.quest_id')
            ->where('question.quest_id',$id)->get()->result();
    }
    function ackcustomer($index)
    {
        $length = 1;
        $start = ($index - 1) * $length;
        $this->db->limit($length, $start);
        return $this->db->select('*')->from('question')->get()->result();
    }
    function ansforcustomer($questid, $ansid)
    {
        return $this->db->select('*')->from('workingpress')
            ->join('answer','workingpress.ans_id = answer.ans_id')
            ->where('workingpress.quest_id',$questid)
            ->where('workingpress.cs_id',$this->session->userdata('customer_id'))
//            ->where('workingpress.ans_id',$ansid)
            ->get()->result();
    }
    function finishtest()
    {
        return $this->db->select('*')->from('workingpress')
            ->join('answer','workingpress.ans_id = answer.ans_id')
            ->where('workingpress.cs_id',$this->session->userdata('customer_id'))
            ->get()->result();
    }
}