<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Cliente_model');
        $this->load->helper(array('form', 'url'));
    }

    public function index() {
        
        $busca = $this->input->get('busca');

        if ($busca) {
            $this->db->like('nome', $busca);
        }

        $dados['clientes'] = $this->db->get('clientes')->result();

        $this->load->view('clientes/index', $dados);
    }

    public function create() {

        $this->load->view('clientes/create');
    }

    public function store() {

        $data = array(
            'nome'     => $this->input->post('nome'),
            'email'    => $this->input->post('email'),
            'telefone' => $this->input->post('telefone')
        );

        if ($this->Cliente_model->inserir($data)) {
            redirect('clientes/index?success=1');
        } else {
            redirect('clientes/index?error=1');
        }
    }

    public function excluir($id){
        if ($this->Cliente_model->excluir($id)) {
            redirect('clientes?deleted=1');
        } else {
            redirect('clientes?error=1');
        }
    }


    public function editar($id) {
        $this->load->model('Cliente_model');
        $data['cliente'] = $this->Cliente_model->buscarPorId($id);
        
        if (!$data['cliente']) {
            show_404();
        }

        $this->load->view('clientes/form_editar', $data);
    }

    public function atualizar($id) {
        $this->load->model('Cliente_model');

        $dados = array(
            'nome'     => $this->input->post('nome'),
            'email'    => $this->input->post('email'),
            'telefone' => $this->input->post('telefone')
        );

        if ($this->Cliente_model->atualizar($id, $dados)) {
            redirect('clientes?updated=1');
        } else {
            redirect('clientes?error=1');
        }
    }

}
