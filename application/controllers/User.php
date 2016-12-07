<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper(array('form', 'url'));
        $this->load->helper('download');
        $this->load->library('upload');

    }

    public function index()
    {
        /*-------------------  cheking button press ---------------------------*/
        if (isset($_POST['add'])) {

            $this->load->model('User_model');
            /*  validation   */
            $this->form_validation->set_rules($this->User_model->add_rules);
            $check = $this->form_validation->run();
            /*  cheking validation   */

            if ($check == FALSE) {
                /* ------------ cheking validation  false ----------*/
                $this->load->view('index2');

            } else
                /* ------------ cheking validation ok ----------*/
                {
                /*----------------    receiving post  firstname lastname  keywords  ---------------*/

                $add['firstname'] = $_POST['first-name'];
                $add['lastname'] = $_POST['last-name'];
                $add['keywords'] = $_POST['keywords'];

                /*------------------   config resume   ----------------------------------*/

                $config['upload_path'] = './uploads/';
                $config['allowed_types'] = 'docx|doc|pdf|txt';
                $config['max_size'] = '1000';
                $config['encrypt_name'] = true;
                $config['remove_spaces'] = true;
                $this->load->library('upload', $config);
                $this->upload->do_upload();
                $fileData = $this->upload->data();
                $add['fullpath'] = $fileData['full_path'];
                $add['origname'] = $fileData['orig_name'];

                /*----------- format    validation ------------------*/

                if (strlen($add['origname']) > 1) {
                    $add['filename'] = $fileData['file_name'];
                    /*  sending  firstname lastname  keywords  resume   */
                    $this->load->model('User_model');
                    $this->User_model->add_articles($add);
                    $this->load->view('index2');
                    echo "<div class='ui ok_div'>CONGRATULATION YOU HAVE SUCCESSFULLY REGISTERED</div>";
                } else {

                    /*----------- format   error validation ------------------*/

                    $this->load->view('index2');
                    echo '<div class="ui error_div">please insert valid format docx,doc,pdf,txt</div>';
                }
            }
        } /*----------------------------  if button don't press -----------------*/
        else {
            $this->load->view('index2');
        }
    }

    public function articles()
    {
        /*---------------------------- checking fields -----------------*/
        if ($_POST['first-name2'] == "" and $_POST['last-name2'] == "" and $_POST['keywords2'] == '') {
            $this->load->view('index2');
            echo "<div class=\"ui error_div\">At least one of the fields above must be used</div>";
        } else {
            /*---------------------------- if ok -----------------*/
            $this->load->model('User_model');
            $name['task'] = $this->User_model->get_articles();
            if (count($name, COUNT_RECURSIVE) > 1) {

                $this->load->view('index3', $name);
            } else {
                /*---------------------------- if false -----------------*/
                $this->load->view('index2');
                echo "<div class=\"ui error_div\">no result search found</div>";
            }
        }
    }
    /*---------------------------- downloads id-----------------*/
    function articles2($id = '')
    {
        $this->load->model('User_model');
        $data['task'] = $this->User_model->get_articles2($id);
        $this->load->view('index4', $data);
    }
}