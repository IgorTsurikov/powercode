<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Saveproject extends CI_Controller {

    /**
     *
     *    Контроллер сохранения проекта на странице редактирования
     *
     */
    public function save()
    {
	$this->load->database();
	$str = $this->input->post('str');
	parse_str($str, $formData);

	$data = array('name' => $formData['projectname'], 'description' => $formData['projectdescription'], 'deadline' => $formData['datepicker']);

	$where = " id = '".$formData['id']."' ";

	$str = $this->db->update('projects', $data, $where);

    }
}
?>