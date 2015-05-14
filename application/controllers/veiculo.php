<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Veiculo extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index($indice=null)
	{
            $this->db->select('*');
            $dados['veiculos'] = $this->db->get('veiculo')->result();
		$this->load->view('includes/html_header');
                $this->load->view('includes/menu');
                if($indice==1){
                    $data['msg'] = "Veículo cadastrado com sucesso.";
                    $this->load->view('includes/msg_sucesso',$data);
                }else if($indice==2){
                    $data['msg'] = "Não foi possível cadastrar Veículo.";
                    $this->load->view('includes/msg_erro',$data);
                }else if($indice==3){
                    $data['msg'] = "Veículo cadastrado com sucesso.";
                    $this->load->view('includes/msg_sucesso',$data);
                }else if($indice==4){
                    $data['msg'] = "Não foi possível cadastrar Veículo.";
                    $this->load->view('includes/msg_erro',$data);
                }else if($indice==5){
                    $data['msg'] = "Veículo atualizado com sucesso.";
                    $this->load->view('includes/msg_sucesso',$data);
                }else if($indice==6){
                    $data['msg'] = "Não foi possível atualizar Veículo.";
                    $this->load->view('includes/msg_erro',$data);
                }
                $this->load->view('listar_veiculo',$dados);
                $this->load->view('includes/html_footer');
	}
        public function cadastro()
	{
		$this->load->view('includes/html_header');
                $this->load->view('includes/menu');
                $this->load->view('cadastro_veiculo');
                $this->load->view('includes/html_footer');
	}
        
        public function cadastrar()
	{
		$data['modelo'] = $this->input->post('modelo');
                $data['placa'] = $this->input->post('placa');
                $data['ano'] = $this->input->post('ano');
                $data['seguro'] = $this->input->post('seguro');
                $data['ipva'] = $this->input->post('ipva');
               
                
                if($this->db->insert('veiculo',$data)){
                     redirect('veiculo/1');
                }else{
                    redirect('veiculo/2');
                }
                
	}
        
         public function excluir($id = null) {
        
        $this->db->where('idVeiculo', $id);
        if ($this->db->delete('veiculo')) {
            redirect('veiculo/3');
        } else {
            redirect('veiculo/4');
        }
    }
       
    public function atualizar($id = null, $indice = null) {
        
        $this->db->where('idVeiculo', $id);
        $data['veiculo'] = $this->db->get('veiculo')->result();

        $this->load->view('includes/html_header');
        $this->load->view('includes/menu');
        $this->load->view('editar_veiculo', $data);
        $this->load->view('includes/html_footer');
    }
    
     public function salvar_atualizacao() {
        
        $id = $this->input->post('idVeiculo');

        $data['modelo'] = $this->input->post('modelo');
        $data['placa'] = $this->input->post('placa');
        $data['ano'] = $this->input->post('ano');
        $data['seguro'] = $this->input->post('seguro');
        $data['ipva'] = $this->input->post('ipva');

        $this->db->where('idVeiculo', $id);
        if ($this->db->update('veiculo', $data)) {
            redirect('veiculo/5');
        } else {
            redirect('veiculo/6');
        }
    }


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */