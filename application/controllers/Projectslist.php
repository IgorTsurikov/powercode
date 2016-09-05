<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Projectslist extends CI_Controller {

    /**
     *
     *    Контроллер аякс вывода списка проектов 
     *
     */
    public function projects()
    {
	$this->load->helper('url');
	$this->load->database();

	$sql = "SELECT one.id, one.name, one.description, one.deadline, one.status, COUNT(two.id) as countcomments
		    FROM projects one
		    LEFT JOIN comments two
		    ON one.id = two.project_id
		    group by one.id
		    ORDER BY one.status DESC, one.deadline";

	$data['query'] = $this->db->query($sql);

	$this->load->view('projects', $data);

    }
}
?>