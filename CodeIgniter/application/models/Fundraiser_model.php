<?php
/**
 * Created by PhpStorm.
 * User: rohit
 * Date: 5/10/17
 * Time: 6:07 PM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Fundraiser_model extends CI_Model {

    public function getReview() {
        //$query = $this->db->order_by('rating','desc')->where('Fundraiser');
        $this->db->select('*')->from('Fundraiser')->order_by('rating','desc');

        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        }
        else
            return false;
    }

    public function submit() {
        $fields = array(
          'fundraiser_name' => $this->input->post('fund_name'),
          'rating' => $this->input->post('fund_rating'),
          'review' => $this->input->post('fund_review'),
          'reviewer_name' => $this->input->post('rev_name'),
          'reviewer_email' => $this->input->post('rev_email'),
          'review_date' => $this->input->post('rev_date')
        );


        $this->db->insert('Fundraiser',$fields);
        if($this->db->affected_rows() > 0) {
            return true;
        }
        else {
            return false;
        }
    }
}

?>