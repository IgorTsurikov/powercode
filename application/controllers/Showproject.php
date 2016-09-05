<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Showproject extends CI_Controller {

    /**
     *
     *    Контроллер вывода проекта
     *
     */
    public function index()
    {

	$this->load->helper('url');
	$this->load->database();

	$id = $this->input->get('id');
//	$id = $this->uri->segment(2, 0);

	$sql = "SELECT * FROM projects WHERE id='$id'";

	$result = $this->db->query($sql);

	$data['query'] = $result->row();
    
	$sqlComments = "SELECT * FROM comments WHERE project_id='$id'";
	$data['comments'] = $this->db->query($sqlComments);

	$this->load->view('project', $data);

    }
}
?>