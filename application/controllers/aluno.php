<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Aluno extends CI_Controller {

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
        $dados['alunos'] = $this->db->get('aluno')->result();
        $this->load->view('includes/html_header');
        $this->load->view('includes/menu');
        if ($indice == 1) {
            $data['msg'] = "Aluno cadastrado com sucesso.";
            $this->load->view('includes/msg_sucesso', $data);
        } else if ($indice == 2) {
            $data['msg'] = "Não foi possível cadastrar Aluno.";
            $this->load->view('includes/msg_erro', $data);
        } else if ($indice == 3) {
            $data['msg'] = "Aluno excluido com sucesso.";
            $this->load->view('includes/msg_sucesso', $data);
        } else if ($indice == 4) {
            $data['msg'] = "Não foi possível excluir Aluno.";
            $this->load->view('includes/msg_erro', $data);
        } else if ($indice == 5) {
            $data['msg'] = "Aluno atualizado com sucesso.";
            $this->load->view('includes/msg_sucesso', $data);
        } else if ($indice == 6) {
            $data['msg'] = "Não foi possível atualizar Aluno.";
            $this->load->view('includes/msg_erro', $data);
        }
        $this->load->view('listar_aluno', $dados);
        $this->load->view('includes/html_footer');
    }

    

    public function cadastrar() {
        $data['nome'] = $this->input->post('nome');
        $data['dataNascimento'] = $this->input->post('dataNascimento');
        $data['escola'] = $this->input->post('escola');
        $data['professor'] = $this->input->post('professor');
        $data['sala'] = $this->input->post('sala');
        $data['serie'] = $this->input->post('serie');
        $data['horarioEntrada'] = $this->input->post('horarioEntrada');
        $data['horarioSaida'] = $this->input->post('horarioSaida');
        $data['dataVencimento'] = $this->input->post('dataVencimento');
        $data['mensalidade'] = $this->input->post('mensalidade');
        $data['inicioContrato'] = $this->input->post('inicioContrato');
        $data['terminoContrato'] = $this->input->post('terminoContrato');
        


        if ($this->db->insert('aluno', $data)) {
            redirect('cliente/cadastro/1');
        } else {
            redirect('cliente/cadastro/2');
        }
    }

    public function excluir($id = null) {

        $this->db->where('idAluno', $id);
        if ($this->db->delete('aluno')) {
            redirect('aluno/3');
        } else {
            redirect('aluno/4');
        }
    }

    public function atualizar($id = null, $indice = null) {

        $this->db->where('idAluno', $id);
        $data['aluno'] = $this->db->get('aluno')->result();

        $this->load->view('includes/html_header');
        $this->load->view('includes/menu');
        $this->load->view('editar_aluno', $data);
        $this->load->view('includes/html_footer');
    }

    public function salvar_atualizacao() {

        $id = $this->input->post('idAluno');

       $data['nome'] = $this->input->post('nome');
        $data['dataNascimento'] = $this->input->post('dataNascimento');
        $data['escola'] = $this->input->post('escola');
        $data['professor'] = $this->input->post('professor');
        $data['sala'] = $this->input->post('sala');
        $data['serie'] = $this->input->post('serie');
        $data['horarioEntrada'] = $this->input->post('horarioEntrada');
        $data['horarioSaida'] = $this->input->post('horarioSaida');
        $data['dataVencimento'] = $this->input->post('dataVencimento');
        $data['mensalidade'] = $this->input->post('mensalidade');
        $data['inicioContrato'] = $this->input->post('inicioContrato');

        $this->db->where('idAluno', $id);
        if ($this->db->update('aluno', $data)) {
            redirect('aluno/5');
        } else {
            redirect('aluno/6');
        }
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */