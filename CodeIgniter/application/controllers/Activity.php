<?php
class Activity extends CI_Controller
{
         public function __construct()
         {
               parent::__construct();
               $this->load->model('activity_model');
               $this->load->helper('url_helper');
               $this->load->helper('url');
         }
         public function create()
         {
                $this->load->helper('form');
                $this->load->library('form_validation');

                $this->form_validation->set_rules('name', 'activity_name', 'required');
                $this->form_validation->set_rules('date', 'activity_date', 'required');
                $this->form_validation->set_rules('time', 'activity_time', 'required');
                $this->form_validation->set_rules('catagory', 'catagory', 'required');

                $data['title']="New Activity";

                if($this->form_validation->run()==FALSE)
                {
                     $this->load->view('templates/header',$data);
                     $this->load->view('activity/create');
                }
                else
                {
                     $this->activity_model->set_activity();
                }
         }
}

?>