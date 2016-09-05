<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Addproject extends CI_Controller {

    /**
     *
     *    Контроллер формы добавления проекта
     *
     */
    public function newproject()
    {
	$this->load->database();
	$str = $this->input->post('str');
	parse_str($str, $formData);

	$data = array(
	    'name' => $formData['newprojectname'],
	    'description' => $formData['newprojectdescription'],
	    'deadline' => $formData['datepicker']
	);

	$this->db->insert('projects', $data);
    }
}
?>