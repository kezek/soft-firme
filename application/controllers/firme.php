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
        if ($_POST) {
            //fa-ti treaba
        } else {
            redirect('/firme/adauga', 'refresh');
        }
    }

}
