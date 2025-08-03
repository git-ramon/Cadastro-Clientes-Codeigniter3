<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente_model extends CI_Model {

    private $table = 'clientes';

    public function __construct() {
        parent::__construct();

        $this->load->database();
    }

    public function inserir($data) {
        return $this->db->insert($this->table, $data);
    }

    public function get_all() {
        $query = $this->db->get('clientes');
        return $query->result();
    }

    public function excluir($id) {
        return $this->db->delete($this->table, ['id' => $id]);
    }

    public function buscarPorId($id) {
        return $this->db->get_where('clientes', ['id' => $id])->row();
    }

    public function atualizar($id, $dados) {
        $this->db->where('id', $id);
        return $this->db->update('clientes', $dados);
    }


}
