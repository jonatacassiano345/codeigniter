<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Usuario extends CI_Controller {

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
    public function verificar_sessao() {
        if ($this->session->userdata('logado') == false) {
            redirect('dashboard/login');
        }
    }

    public function index($indice = null) {
       
        $this->db->select('*');
        $dados['usuarios'] = $this->db->get('usuario')->result();
        $this->load->view('includes/html_header');
        $this->load->view('includes/menu');
        if ($indice == 1) {
            $data['msg'] = "Usuário cadastrado com sucesso.";
            $this->load->view('includes/msg_sucesso', $data);
        } else if ($indice == 2) {
            $data['msg'] = "Não foi possível cadastrar usuário.";
            $this->load->view('includes/msg_erro', $data);
        } else if ($indice == 3) {
            $data['msg'] = "Usuário excluido com sucesso.";
            $this->load->view('includes/msg_sucesso', $data);
        } else if ($indice == 4) {
            $data['msg'] = "Não foi possível excluir usuário.";
            $this->load->view('includes/msg_erro', $data);
        } else if ($indice == 5) {
            $data['msg'] = "Usuário atualizado com sucesso.";
            $this->load->view('includes/msg_sucesso', $data);
        } else if ($indice == 6) {
            $data['msg'] = "Não foi possível atualizar usuário.";
            $this->load->view('includes/msg_erro', $data);
        }
        $this->load->view('listar_usuario', $dados);
        $this->load->view('includes/html_footer');
    }

    public function cadastro() {
        
        $this->load->view('includes/html_header');
        $this->load->view('includes/menu');
        $this->load->view('cadastro_usuario');
        $this->load->view('includes/html_footer');
    }

    public function cadastrar() {        
        $data['nome'] = $this->input->post('nome');
        $data['usuario'] = $this->input->post('usuario');
        $data['nivel'] = $this->input->post('nivel');
        $data['status'] = $this->input->post('status');
        $data['senha'] = $this->input->post('senha');

        if ($this->db->insert('usuario', $data)) {
            redirect('usuario/1');
        } else {
            redirect('usuario/2');
        }
    }

    public function excluir($id = null) {
        
        $this->db->where('idUsuario', $id);
        if ($this->db->delete('usuario')) {
            redirect('usuario/3');
        } else {
            redirect('usuario/4');
        }
    }

    public function atualizar($id = null, $indice = null) {
        
        $this->db->where('idUsuario', $id);
        $data['usuario'] = $this->db->get('usuario')->result();

        $this->load->view('includes/html_header');
        $this->load->view('includes/menu');

        if ($indice == 1) {
            $data['msg'] = "Senha atualizada com sucesso!";
            $this->load->view('includes/msg_sucesso', $data);
        } else if ($indice == 2) {
            $data['msg'] = "Não foi possível atualizar senha!";
            $this->load->view('includes/msg_erro', $data);
        }

        $this->load->view('editar_usuario', $data);
        $this->load->view('includes/html_footer');
    }

    public function salvar_atualizacao() {
        
        $id = $this->input->post('idUsuario');

        $data['nome'] = $this->input->post('nome');
        $data['usuario'] = $this->input->post('usuario');
        $data['nivel'] = $this->input->post('nivel');
        $data['status'] = $this->input->post('status');

        $this->db->where('idUsuario', $id);
        if ($this->db->update('usuario', $data)) {
            redirect('usuario/5');
        } else {
            redirect('usuario/6');
        }
    }

    public function salvar_senha() {
        
        $id = $this->input->post('idUsuario');

        $senha_antiga = $this->input->post('senha_antiga');
        $senha_nova = $this->input->post('senha_nova');

        $this->db->select('senha');
        $this->db->where('idUsuario', $id);
        $data['senha'] = $this->db->get('usuario')->result();
        $dados['senha'] = $senha_nova;

        if ($data['senha'][0]->senha == $senha_antiga) {

            $this->db->where('idUsuario', $id);
            $this->db->update('usuario', $dados);
            redirect('usuario/atualizar/' . $id . '/1');
        } else {
            redirect('usuario/atualizar/' . $id . '/2');
        }
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */