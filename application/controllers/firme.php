<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Firme extends CI_Controller {

    public function adauga() {
        $this->load->helper('url');
        $this->load->view('firme/adauga');
    }

    public function adaugaPost() {
        $this->load->helper('url');
        $this->load->model('firma');
        //if POST exists
        if ($_POST) {
            try {
                $this->firma->add($_POST);
                $this->session->set_flashdata('message', 'Datele au fost adaugate cu succes.');
                redirect('/');
            } catch (Exception $e) {
                $this->session->set_flashdata('message', $e->getMessage());
                redirect('/firme/adauga');
            }
        } else {
            redirect('/firme/adauga', 'refresh');
        }
    }

}
