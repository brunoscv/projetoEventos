<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tickets extends MY_Controller {

	public $data;	
	function __construct(){
		parent::__construct();
	}

	public function index(){ 
		
		$this->data['events'] = $this->getEvents();


		//arShow($this->data['events']); exit;
		
	}

	public function buy(){ 
		
		$this->data['events'] = $this->getEvents();

		$this->load->view('modulos/tickets/buy', $this->data);


		//arShow($this->data['events']); exit;
		
	}

	public function getEvents($evento_id = null) {
		$evento_id = $this->uri->segment(3);

		//$url = "https://jsonplaceholder.typicode.com/posts/42";
		//header('Content-type: application/json');

		$file = array();
		$file = json_decode(file_get_contents(FCPATH . '/public/events.json'), true);
		
		$events = array();
		foreach ( $file as $event ){
			$events = $event;
			for ($i=0; $i < sizeof($events); $i++) { 
                if( $events[$i]["id"] == $evento_id) {
                    return $events[$i];
                }
            }
		}
	}

	public function getCategories($var = null){
		//$url = "https://jsonplaceholder.typicode.com/posts/42";
		//header('Content-type: application/json');

		$file = array();
		$file = json_decode(file_get_contents(FCPATH . '/public/categories.json'), true);
		
		$categories = array();
		foreach ( $file as $category ){
			$categories = $category;
		}
		return $categories;
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */