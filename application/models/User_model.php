<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class User_model extends CI_Model
{
    /*---------------------------- Validation for registation----------------*/
    public $add_rules = array(
        array(
            'field' => 'first-name',
            'label' => "First Name",
            'rules' => 'required',
        ),
        array(
            'field' => 'last-name',
            'label' => "Last Name",
            'rules' => 'required',
        ),
        array(
            'field' => 'keywords',
            'label' => "Keywords",
            'rules' => 'required',
        ),
    );

    function add_articles($add)
    {
        $this->db->insert('task', $add);
    }

    function get_articles()
    {
        /*---------------------------- Validation for search----------------*/
        if ($this->input->post('first-name2')) {
            $firstname = $this->input->post('first-name2');
            $this->db->like('firstname', $firstname);
        };
        if ($this->input->post('last-name2')) {
            $lastname = $this->input->post('last-name2');
            $this->db->like('lastname', $lastname);
        };
        if ($this->input->post('keywords2')) {
            $keywords = $this->input->post('keywords2');
            $this->db->like('keywords', $keywords);
        };
        if ($this->input->post('first-name2') and $this->input->post('last-name2')) {
            $firstname = $this->input->post('first-name2');
            $lastname = $this->input->post('last-name2');
            $this->db->where('firstname', $firstname);
            $this->db->like('lastname', $lastname);
        };
        if ($this->input->post('first-name2') and $this->input->post('keywords2')) {
            $firstname = $this->input->post('first-name2');
            $keywords = $this->input->post('keywords2');
            $this->db->where('firstname', $firstname);
            $this->db->like('keywords', $keywords);
        };
        if ($this->input->post('keywords2') and $this->input->post('last-name2')) {
            $keywords = $this->input->post('keywords2');
            $lastname = $this->input->post('last-name2');
            $this->db->like('keywords', $keywords);
            $this->db->where('lastname', $lastname);
        };
        $query = $this->db->get('task');
        return $query->result_array();


    }
    /*---------------------------- download----------------*/
    function get_articles2($id)
    {

        $this->db->where('id', $id);
        $query = $this->db->get('task');
        return $query->result_array();
    }
}