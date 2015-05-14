<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Escola extends CI_Controller {

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
        $dados['escolas'] = $this->db->get('escola')->result();
        $this->load->view('includes/html_header');
        $this->load->view('includes/menu');
        if ($indice == 1) {
            $data['msg'] = "Escola cadastrada com sucesso.";
            $this->load->view('includes/msg_sucesso', $data);
        } else if ($indice == 2) {
            $data['msg'] = "Não foi possível cadastrar Escola.";
            $this->load->view('includes/msg_erro', $data);
        } else if ($indice == 3) {
            $data['msg'] = "Escola excluida com sucesso.";
            $this->load->view('includes/msg_sucesso', $data);
        } else if ($indice == 4) {
            $data['msg'] = "Não foi possível excluido Escola.";
            $this->load->view('includes/msg_erro', $data);
        } else if ($indice == 5) {
            $data['msg'] = "Escola atualizada com sucesso.";
            $this->load->view('includes/msg_sucesso', $data);
        } else if ($indice == 6) {
            $data['msg'] = "Não foi possível atualizada Escola.";
            $this->load->view('includes/msg_erro', $data);
        }
        $this->load->view('listar_escola', $dados);
        $this->load->view('includes/html_footer');
    }

    public function cadastro() {
        $this->load->view('includes/html_header');
        $this->load->view('includes/menu');
        $this->load->view('cadastro_escola');
        $this->load->view('includes/html_footer');
    }

    public function cadastrar() {
        $data['nome'] = $this->input->post('nome');
        $data['nomeDiretor'] = $this->input->post('nomeDiretor');
        $data['endereco'] = $this->input->post('endereco');
        $data['bairro'] = $this->input->post('bairro');
        $data['telefone'] = $this->input->post('telefone');
        $data['email'] = $this->input->post('email');


        if ($this->db->insert('escola', $data)) {
            redirect('escola/1');
        } else {
            redirect('escola/2');
        }
    }

    public function excluir($id = null) {

        $this->db->where('idEscola', $id);
        if ($this->db->delete('escola')) {
            redirect('escola/3');
        } else {
            redirect('escola/4');
        }
    }

    public function atualizar($id = null, $indice = null) {

        $this->db->where('idEscola', $id);
        $data['escola'] = $this->db->get('escola')->result();

        $this->load->view('includes/html_header');
        $this->load->view('includes/menu');
        $this->load->view('editar_escola', $data);
        $this->load->view('includes/html_footer');
    }

    public function salvar_atualizacao() {

        $id = $this->input->post('idEscola');

        $data['nome'] = $this->input->post('nome');
        $data['nomeDiretor'] = $this->input->post('nomeDiretor');
        $data['endereco'] = $this->input->post('endereco');
        $data['bairro'] = $this->input->post('bairro');
        $data['telefone'] = $this->input->post('telefone');
        $data['email'] = $this->input->post('email');

        $this->db->where('idEscola', $id);
        if ($this->db->update('escola', $data)) {
            redirect('escola/5');
        } else {
            redirect('escola/6');
        }
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */