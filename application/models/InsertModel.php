<?php

/**
 * Created by PhpStorm.
 * User: wachirapan
 * Date: 12/19/2018
 * Time: 8:29 AM
 */
class InsertModel extends CI_Model
{
    function insertquestion($question, $questionA, $questionB, $questionC, $scoreA, $scoreB, $scoreC)
    {
        $questiondata = array(
            'quest_text'=>$question
        );
        $this->db->insert('question',$questiondata);
        $questionid = $this->db->insert_id();
        $answerdata = array(
            'ans_text'=>$questionA,
            'ans_score'=>$scoreA,
            'quest_id'=>$questionid
        );
        $this->db->insert('answer',$answerdata);
        $answerdata1 = array(
            'ans_text'=>$questionB,
            'ans_score'=>$scoreB,
            'quest_id'=>$questionid
        );
        $this->db->insert('answer',$answerdata1);
        $answerdata2 = array(
            'ans_text'=>$questionC,
            'ans_score'=>$scoreC,
            'quest_id'=>$questionid
        );
        $this->db->insert('answer',$answerdata2);
    }
    function insertcustomer($username, $phone, $lastname)
    {
        $data = array(
            'cs_name'=>$username,
            'cs_lastname'=>$lastname,
            'cs_phone'=>$phone,
            'cs_status'=>'n'
        );
        $this->db->insert('customer',$data);
        $this->session->set_userdata(array('customer_id'=>$this->db->insert_id()));
    }
    function insertanscustomer($questid, $ansid)
    {
        $query  = $this->db->get_where('workingpress',array('cs_id'=>$this->session->userdata('customer_id'),
            'quest_id'=>$questid));
        if($query->num_rows() != 0){
            foreach($query->result() as $item){
                $data = array(

                    'ans_id'=>$ansid
                );
                $this->db->where('wp_id',$item->wp_id)->update('workingpress',$data);

            }
        }else{
            $data = array(
                'cs_id'=>$this->session->userdata('customer_id'),
                'quest_id'=>$questid,
                'ans_id'=>$ansid
            );
            $this->db->insert('workingpress',$data);
        }

    }
}