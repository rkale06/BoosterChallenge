<?php
/**
 * Created by PhpStorm.
 * User: rohit
 * Date: 5/10/17
 * Time: 5:18 PM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Fundraiser extends CI_Controller {

    public function __construct()
    {
        parent:: __construct();
        $this->load->model('fundraiser_model','fm');
    }

    public function index() {
        $all_reviews['records'] = $this->fm->getReview();
        $this->load->view('layout/header');
        $this->load->view('fundraiser/home',$all_reviews);
        $this->load->view('layout/footer');

    }

    public function add() {
        $this->load->view('layout/header');
        $this->load->view('fundraiser/add');
        $this->load->view('layout/footer');
    }

    public function submit() {
        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');

        if ($this->form_validation->set_rules('fund_name','Fundraiser Name','is_unique[Fundraiser.fundraiser_name]'))

        if ($this->form_validation->run() == FALSE)
        {   $this->load->view('layout/header');
            $this->load->view('fundraiser/validate');
            $this->load->view('layout/footer');
        }
        else
        {
            $result = $this->fm->submit();
            redirect(base_url('fundraiser'));
        }



    }

}

?>