<?php

/**
 * Created by PhpStorm.
 * User: wachirapan
 * Date: 12/19/2018
 * Time: 8:29 AM
 */
class UpdateModel extends CI_Model
{
    function updatequestion($questid, $question, $questionA, $questionB, $questionC, $scoreA, $scoreB, $scoreC, $pkA, $pkB, $pkC)
    {
        $questiondata = array(
            'quest_text'=>$question
        );
        $this->db->where('quest_id',$questid)->update('question',$questiondata);
        $answerdata = array(
            'ans_text'=>$questionA,
            'ans_score'=>$scoreA
        );
        $this->db->where('ans_id',$pkA)->update('answer',$answerdata);
        $answerdata1 = array(
            'ans_text'=>$questionB,
            'ans_score'=>$scoreB

        );
        $this->db->where('ans_id',$pkB)->update('answer',$answerdata1);
        $answerdata2 = array(
            'ans_text'=>$questionC,
            'ans_score'=>$scoreC
        );
        $this->db->where('ans_id',$pkC)->update('answer',$answerdata2);
    }
}