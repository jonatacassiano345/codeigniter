<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Funcionario extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -  
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in 
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    public function index($indice = null) {
        $this->db->select('*');
        $dados['funcionarios'] = $this->db->get('funcionario')->result();
        $this->load->view('includes/html_header');
        $this->load->view('includes/menu');
        if ($indice == 1) {
            $data['msg'] = "Funcionário cadastrado com sucesso.";
            $this->load->view('includes/msg_sucesso', $data);
        } else if ($indice == 2) {
            $data['msg'] = "Não foi possível cadastrar Funcionário.";
            $this->load->view('includes/msg_erro', $data);
        } else if ($indice == 3) {
            $data['msg'] = "Funcionário excluido com sucesso.";
            $this->load->view('includes/msg_sucesso', $data);
        } else if ($indice == 4) {
            $data['msg'] = "Não foi possível excluir Funcionário.";
            $this->load->view('includes/msg_erro', $data);
        } else if ($indice == 5) {
            $data['msg'] = "Funcionário atualizado com sucesso.";
            $this->load->view('includes/msg_sucesso', $data);
        } else if ($indice == 6) {
            $data['msg'] = "Não foi possível atualizar Funcionário.";
            $this->load->view('includes/msg_erro', $data);
        }
        $this->load->view('listar_funcionario', $dados);
        $this->load->view('includes/html_footer');
    }

    public function cadastro() {
        $this->load->view('includes/html_header');
        $this->load->view('includes/menu');
        $this->load->view('cadastro_funcionario');
        $this->load->view('includes/html_footer');
    }

    public function cadastrar() {
        $data['nome'] = $this->input->post('nome');
        $data['cpf'] = $this->input->post('cpf');
        $data['rg'] = $this->input->post('rg');
        $data['dataNascimento'] = $this->input->post('dataNascimento');
        $data['sexo'] = $this->input->post('sexo');
        $data['cep'] = $this->input->post('cep');
        $data['endereco'] = $this->input->post('endereco');
        $data['bairro'] = $this->input->post('bairro');
        $data['cidade'] = $this->input->post('cidade');
        $data['estado'] = $this->input->post('estado');
        $data['telResidencial'] = $this->input->post('telResidencial');
        $data['telCelular'] = $this->input->post('telCelular');
        $data['cargo'] = $this->input->post('cargo');
        $data['admissao'] = $this->input->post('admissao');

        if ($this->db->insert('funcionario', $data)) {
            redirect('funcionario/1');
        } else {
            redirect('funcionario/2');
        }
    }

    public function excluir($id = null) {

        $this->db->where('idFuncionario', $id);
        if ($this->db->delete('funcionario')) {
            redirect('funcionario/3');
        } else {
            redirect('funcionario/4');
        }
    }

    public function atualizar($id = null, $indice = null) {

        $this->db->where('idFuncionario', $id);
        $data['funcionario'] = $this->db->get('funcionario')->result();

        $this->load->view('includes/html_header');
        $this->load->view('includes/menu');
        $this->load->view('editar_funcionario', $data);
        $this->load->view('includes/html_footer');
    }

    public function salvar_atualizacao() {

        $id = $this->input->post('idFuncionario');


        $data['nome'] = $this->input->post('nome');
        $data['cpf'] = $this->input->post('cpf');
        $data['rg'] = $this->input->post('rg');
        $data['dataNascimento'] = $this->input->post('dataNascimento');
        $data['sexo'] = $this->input->post('sexo');
        $data['cep'] = $this->input->post('cep');
        $data['endereco'] = $this->input->post('endereco');
        $data['bairro'] = $this->input->post('bairro');
        $data['cidade'] = $this->input->post('cidade');
        $data['estado'] = $this->input->post('estado');
        $data['telResidencial'] = $this->input->post('telResidencial');
        $data['telCelular'] = $this->input->post('telCelular');
        $data['cargo'] = $this->input->post('cargo');
        $data['admissao'] = $this->input->post('admissao');

        $this->db->where('idFuncionario', $id);
        if ($this->db->update('funcionario', $data)) {
            redirect('funcionario/5');
        } else {
            redirect('funcionario/6');
        }
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */