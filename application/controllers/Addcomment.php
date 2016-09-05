<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Addcomment extends CI_Controller {

    /**
     *
     *    Контроллер добавления комментария
     *
     */
    public function index()
    {
	$this->load->helper('url');
	$this->load->database();

	$id = $this->input->post('id');
	$name = $this->input->post('name');
	$text = $this->input->post('text');
	$data = array(
	    'project_id' => $id,
	    'name'       => $name,
	    'text'       => $text,
	    'date'       => time()
	);
	$this->db->insert('comments', $data);

	header('Location: '.base_url().'showproject?id='.$id);
    }
}
?>