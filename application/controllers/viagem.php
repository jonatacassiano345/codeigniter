<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Viagem extends CI_Controller {

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
	public function index()
	{
		$this->load->view('includes/html_header');
                $this->load->view('includes/menu');
                $this->load->view('listar_viagem');
                $this->load->view('includes/html_footer');
	}
        
         public function lista() {
        $dados['alunos'] = $this->db->get('aluno')->result();
        $this->load->view('includes/html_header');
        $this->load->view('includes/menu');
        $this->load->view('listar_lista',$dados);
        $this->load->view('includes/html_footer');
    }
        
       
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */