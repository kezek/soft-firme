<?php

class Firma extends CI_Model {

    const TABEL = 'firme';

    public $id;
    public $nume;
    public $numar_angajati;

    public function add($data) {
        $this->nume = $data['nume'];
        if (isset($data['numar_angajati'])) {
            $this->numar_angajati = $data['numar_angajati'];
        }

        if (!$this->db->insert(self::TABEL, $this)) {
            throw new Exception('Nume de firma deja existent');
        }
    }
}
