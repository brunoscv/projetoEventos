<?php
class Faturamento extends MY_Controller {
	public $data;	
	function __construct(){
		parent::__construct();
		$this->_auth();
		
		$this->load->model("Faturamento_model");
		
		//adicione os campos da busca
		$camposFiltros["f.id"] = "Id";
		$camposFiltros["f.pacientes_id"] = "Pacientes";
		$camposFiltros["f.profissionais_id"] = "Profissionais";
		$camposFiltros["f.especialidades_id"] = "Especialidades";
		$camposFiltros["f.plano_procedimento_id"] = "Plano/Proced";
		$camposFiltros["f.consultas_id"] = "Consultas";
		$camposFiltros["f.item_consulta_id"] = "Item Consulta";
		$camposFiltros["f.valor"] = "Valor";
		$camposFiltros["f.tipo"] = "Tipo Faturamento";
		$camposFiltros["f.status"] = "Status";
		$camposFiltros["f.createdAt"] = "Criado";
		$camposFiltros["f.updatedAt"] = "Modificado";

		$this->data['campos']    = $camposFiltros;
	}
	
	function index(){
		$perPage = '10';
		$offset = ($this->input->get("per_page")) ? $this->input->get("per_page") : "0";

		if( !is_null($this->input->get('busca')) ){
			$campo = $this->input->get('filtro_field', true);
			$valor = $this->input->get('filtro_valor', true);

			if($campo && $valor){
				if( array_key_exists($campo, $this->data['campos']) ){
					$this->db->where("{$campo} LIKE","%".$valor."%");
				}
			}
		}
		$countFaturamento = $this->db
							->select("count(f.id) AS quantidade")
							->from("faturamento AS f")
							->get()->row();
		$quantidadeFaturamento = $countFaturamento->quantidade;
		
		if( !is_null($this->input->get('busca')) ){
			$campo = $this->input->get('filtro_field', true);
			$valor = $this->input->get('filtro_valor', true);

			if($campo && $valor){
				if( array_key_exists($campo, $this->data['campos']) ){
					$this->db->where("{$campo} LIKE","%".$valor."%");
				}
			}
		}
		
		$resultFaturamento = $this->db
									->select("*")
									->from("faturamento AS f")
									->limit($perPage,$offset)
									->get();
		
		$this->data['listaFaturamento'] = $resultFaturamento->result();
		
		$this->load->library('pagination');
		$config['base_url'] = site_url("faturamento/index")."?";
		$config['total_rows'] = $quantidadeFaturamento;
		$config['per_page'] = $perPage;
		
		$this->pagination->initialize($config);
		
		$this->data['paginacao'] = $this->pagination->create_links(); 
	}
    
    function criar(){
		$this->data['item'] = new stdClass();
		
		//Campos relacionados
		//caso seja necessario adicione os relacionamento aqui
		//fim Campos relacionados
		
		
		if($this->input->post('enviar')){
			
			if( $this->form_validation->run('Faturamento') === FALSE || !empty($this->data['msg_error']) ){
				$this->data['msg_error'] = (!empty($this->data['msg_error'])) ? $this->data['msg_error'] : validation_errors("<p>","</p>");
			} else {
				
				//Preenche objeto com as informações do formulário
								
				$	= array();
				$['id'] 		= $this->input->post('id', TRUE);
				$['pacientes_id'] 		= $this->input->post('pacientes_id', TRUE);
				$['profissionais_id'] 		= $this->input->post('profissionais_id', TRUE);
				$['especialidades_id'] 		= $this->input->post('especialidades_id', TRUE);
				$['plano_procedimento_id'] 		= $this->input->post('plano_procedimento_id', TRUE);
				$['consultas_id'] 		= $this->input->post('consultas_id', TRUE);
				$['item_consulta_id'] 		= $this->input->post('item_consulta_id', TRUE);
				$['valor'] 		= $this->input->post('valor', TRUE);
				$['tipo'] 		= $this->input->post('tipo', TRUE);
				$['status'] 		= $this->input->post('status', TRUE);
				$['createdAt'] 		= $this->input->post('createdAt', TRUE);
				$['updatedAt'] 		= $this->input->post('updatedAt', TRUE);
				$this->db->insert("faturamento", $);
	
				$this->session->set_flashdata("msg_success", "Registro adicionado com sucesso!");
				redirect('faturamento/index');
			}
		} 
    	
    }
    
	public function editar(){
		//carregue os MODELs necessários aqui
		$id = $this->uri->segment(3);

		$ = $this->db
						->from("faturamento AS m")
						->where("id", $id)->get()->row();

		if(!$){
			$this->session->set_flashdata("msg_error", "Registro não encontrado!");
			redirect('faturamento/index');
		} else {
			$this->data['item'] = $;
			if( $this->input->post('enviar') ){
				if( $this->form_validation->run('Faturamento') === FALSE ){
					$this->data['msg_error'] = (!empty($this->data['msg_error'])) ? $this->data['msg_error'] : validation_errors("<p>","</p>");
				} else {
					
					$	= array();
					$['id']	= $this->input->post('id', true);
					$['pacientes_id']	= $this->input->post('pacientes_id', true);
					$['profissionais_id']	= $this->input->post('profissionais_id', true);
					$['especialidades_id']	= $this->input->post('especialidades_id', true);
					$['plano_procedimento_id']	= $this->input->post('plano_procedimento_id', true);
					$['consultas_id']	= $this->input->post('consultas_id', true);
					$['item_consulta_id']	= $this->input->post('item_consulta_id', true);
					$['valor']	= $this->input->post('valor', true);
					$['tipo']	= $this->input->post('tipo', true);
					$['status']	= $this->input->post('status', true);
					$['createdAt']	= $this->input->post('createdAt', true);
					$['updatedAt']	= $this->input->post('updatedAt', true);

					$this->db->where("id",$id);
					$this->db->update("faturamento",$);
				
					$this->session->set_flashdata("msg_success", "Registro <b>#{$->id}</b> atualizado!");
					redirect('faturamento/index');
				}
			}
		}
	}
	
	public function delete($id){
		$id = $this->uri->segment(3);
		
		$ = $this->db
						->from("faturamento AS m")
						->where("id", $id)->get()->row();
		$this->data['item'] = $;
		
		if( !$ ){
			$this->session->set_flashdata("msg_error", "Registro não encontrado!");
			redirect('faturamento/index');
		} else {
			$this->data['item'] = $;
			
			if( $this->input->post("enviar") ){
				$this->db->where("id", $->id);
				$this->db->delete("faturamento");
				$this->session->set_flashdata("msg_success", "Registro adicionado com sucesso!");
				redirect('faturamentoindex');
			}
		}
	}
}

/* End of file Faturamentos.php */
/* Location: ./system/application/controllers/Faturamentos.php */